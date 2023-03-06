<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GADProfiles;
use App\GADPlanAndBudgetLines;
use App\BUDGETS;
use App\GADPlanAndBudget;
use App\PerformanceIndicators;
use App\ResponsibleOffice;
use App\TotalActualCost_Expenditure;
use App\TotalAgencyApprovedBudget;
use PDF;
class MainController extends Controller
{
    public function myGADprofile(){
        $prof=GADProfiles::where('GADProfID','=',1)->get();
        return view('mygadprofile',compact('prof'));
    }
    public function myGADprofileSAVE(Request $request ){
        GADProfiles::where('GADProfID',$request->GADProfID)->update(
            [
                'NameOfOrg'=>$request->NameOfOrg,
                'OfficeAddress'=>$request->OfficeAddress,
                'telephone'=>$request->telephone,
                'Fax'=>$request->fax,
                'mobile'=>$request->mobile,
                'website'=>$request->website,
                'headOfOrg'=>$request->headOfOrg,
                'chairperson'=>$request->chairperson,
              
            ]
        );
       return redirect('myGADprofile');
    }
    public function generatePDF()
    {
        $data = ['title' => 'Welcome to ItSolutionStuff.com'];
        $pdf = PDF::loadView('pdf', $data);
        $pdf->set_paper('letter', 'landscape');
        return $pdf->download('itsolutionstuff.pdf');
    }
    public function  generatePDFPreview($id){
        return view('pdf');
    }

    public function ActionSave(REQUEST $request){
        $headID=0;  
        if(!isset($request->GADHeader)){
          $header= new  GADPlanAndBudget();
          $header->FiscalYear=$request->FiscalYear;
          $header->Organization=$request->Organization;
          $header->Category=$request->Category;
          $header->OrganizationCategory=$request->OrganizationCategory;
          $header->Heirarchy=$request->Heirarchy;
          $header->TotalBudget_GAA=$request->TotalBudget_GAA;
          $header->TotalGADBudget=$request->TotalGADBudget;
          $header->PrimarySources=$request->PrimarySources;
          $header->Othersources=$request->Othersources;
          $header->PercentGADAllocation=$request->PercentGADAllocation;
          $header->save();
          $headID=$header->id;
          }
          else{
            $headID=$request->GADHeader;
          }
          if(isset($request->HeadAction)){
            if($request->HeadAction=='update'){
                GADPlanAndBudget::where('GADPABID',$headID)->update(
                    [
                        'FiscalYear'=>$request->FiscalYear,
                        'Organization'=>$request->Organization,
                        'Category'=>$request->Category,
                        'OrganizationCategory'=>$request->OrganizationCategory,
                        'Heirarchy'=>$request->Heirarchy,
                        'TotalBudget_GAA'=>$request->TotalBudget_GAA,
                        'TotalGADBudget'=>$request->TotalGADBudget,
                        'PrimarySources'=>$request->PrimarySources,
                        'Othersources'=>$request->Othersources,
                        'PercentGADAllocation'=>$request->PercentGADAllocation,
                       
                    ]
                    );
            }
          }
          
          if($request->NewLine=='create'){

          $lines= new  GADPlanAndBudgetLines();
          
          $lines->GADPABID=  $headID;
          $lines->GenderIssue=$request->GenderIssue;
          $lines->GenderMandate=$request->GenderMandate;
          $lines->CauseOfGenderIssue=$request->CauseOfGenderIssue;
          $lines->GADResultStatement_Objective=$request->GADResultStatement_Objective;
          $lines->RelevantOrg_MFO_PAP_PPA=$request->RelevantOrg_MFO_PAP_PPA;
          $lines->MFO_PAP_STATEMENT=$request->MFO_PAP_STATEMENT;
          $lines->GADActivity=$request->GADActivity;
          $lines->Focused=$request->action_type;
        //   $lines->PerformanceTarget_Indicators=$request->PerformanceTarget_Indicators;
        //   $lines->ActualResult=$request->ActualResult;
          $lines->TotalAgencyApprovedBudget=$request->TotalAgencyApprovedBudget;
          $lines->ActualCost_Expenditure=$request->ActualCost_Expenditure;
        //   $lines->GADBudget=$request->GADBudget;
        //   $lines->GADBudgetItem=$request->GADBudgetItem;
        //   $lines->SourceOfBudget=$request->SourceOfBudget;
        //   $lines->ResponsibleUnit_Office=$request->ResponsibleUnit_Office;
          $lines->VarianceRemarks=$request->VarianceRemarks;
          $lines->attachment=$request->attachment;
          $lines->save();
        
        //   if(isset($request->PerformanceTarget_Indicators)){
          foreach($request->PerformanceTarget_Indicators as $key=>$r){
            $perf=new PerformanceIndicators();
            $perf->GADPABLineID=$lines->id;
            $perf->PerformanceIndicator=$request->PerformanceTarget_Indicators[$key];
            $perf->Target=$request->Target[$key];
            $perf->save();
          }
        // }
        //   if(isset($request->SourceOfBudget)){
          foreach($request->SourceOfBudget as $key=>$r){
          $budget=new BUDGETS();
          $budget->GADPABLineID=$lines->id;
          $budget->SourceOfBudget=$request->SourceOfBudget[$key];
          $budget->BudgetItem=$request->GADBudgetItem[$key];
          $budget->budget=$request->GADBudget[$key];
          $budget->save();
          }
        // }

//   dd($request);
        // if(isset($request->ResponsibleUnit_Office)){
          foreach($request->ResponsibleUnit_Office as $key=>$r){
            $office= new ResponsibleOffice();
            $office->GADPABLineID=$lines->id;
            $office->Office=$request->ResponsibleUnit_Office[$key];
            $office->save();
          }
        // }

          }

        $head=GADPlanAndBudget::where('GADPABID',$headID)->first();
        $clientline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Client')->get();
        $orgline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Organization')->get();
        $attriline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Attributed')->get();
        return view('action',compact('headID','head','clientline','orgline','attriline'));
    }

    public function ActionSaveAR(Request $request){
      // dd($request);
      $headID=0;  
      if(!isset($request->GADHeader)){
        $header= new  GADPlanAndBudget();
        $header->FiscalYear=$request->FiscalYear;
        $header->Organization=$request->Organization;
        $header->Category=$request->Category;
        $header->Reference=$request->Reference;
        $header->DateEndorsed=$request->DateEndorsed;
        $header->OrganizationCategory=$request->OrganizationCategory;
        $header->Heirarchy=$request->Heirarchy;
        $header->ActualGADExpenditure=$request->ActualGADExpenditure;
        $header->OriginalBudget=$request->OriginalBudget;
        $header->UtilizationofBudget=$request->UtilizationofBudget;
        $header->PercentofGADExpenditure=$request->PercentofGADExpenditure;
        $header->TotalBudget_GAA=$request->TotalBudget_GAA;
        $header->TotalGADBudget=$request->TotalGADBudget;
        $header->PrimarySources=$request->PrimarySources;
        $header->Othersources=$request->Othersources;
        $header->PercentGADAllocation=$request->PercentGADAllocation;
        $header->save();
        $headID=$header->id;
        }
        else{
          $headID=$request->GADHeader;
        }
        if(isset($request->HeadAction)){
          if($request->HeadAction=='update'){
              GADPlanAndBudget::where('GADPABID',$headID)->update(
                  [
                      'FiscalYear'=>$request->FiscalYear,
                      'Organization'=>$request->Organization,
                      'Category'=>$request->Category,
                      'OrganizationCategory'=>$request->OrganizationCategory,
                      'Heirarchy'=>$request->Heirarchy,
                      'TotalBudget_GAA'=>$request->TotalBudget_GAA,
                      'TotalGADBudget'=>$request->TotalGADBudget,
                      'PrimarySources'=>$request->PrimarySources,
                      'Othersources'=>$request->Othersources,
                      'PercentGADAllocation'=>$request->PercentGADAllocation,
                      'Reference'=>$request->Reference,
                      'DateEndorsed'=>$request->DateEndorsed,
                      'ActualGADExpenditure'=>$request->ActualGADExpenditure,
                      'OriginalBudget'=>$request->OriginalBudget,
                      'UtilizationofBudget'=>$request->UtilizationofBudget,
                    
                      
                     
                  ]
                  );
          }
        }
        
        if($request->NewLine=='create'){

        $lines= new  GADPlanAndBudgetLines();
        
        $lines->GADPABID=  $headID;
        $lines->GenderIssue=$request->GenderIssue;
        $lines->GenderMandate=$request->GenderMandate;
        $lines->CauseOfGenderIssue=$request->CauseOfGenderIssue;
        $lines->GADResultStatement_Objective=$request->GADResultStatement_Objective;
        $lines->RelevantOrg_MFO_PAP_PPA=$request->RelevantOrg_MFO_PAP_PPA;
        $lines->MFO_PAP_STATEMENT=$request->MFO_PAP_STATEMENT;
        $lines->GADActivity=$request->GADActivity;
        $lines->Focused=$request->action_type;
      //   $lines->PerformanceTarget_Indicators=$request->PerformanceTarget_Indicators;
      //   $lines->ActualResult=$request->ActualResult;
        $lines->TotalAgencyApprovedBudget=$request->TotalAgencyApprovedBudget;
        $lines->ActualCost_Expenditure=$request->ActualCost_Expenditure;
      //   $lines->GADBudget=$request->GADBudget;
      //   $lines->GADBudgetItem=$request->GADBudgetItem;
      //   $lines->SourceOfBudget=$request->SourceOfBudget;
      //   $lines->ResponsibleUnit_Office=$request->ResponsibleUnit_Office;
        $lines->VarianceRemarks=$request->VarianceRemarks;
        $lines->attachment=$request->attachment;
        $lines->save();
      
      //   if(isset($request->PerformanceTarget_Indicators)){
        foreach($request->PerformanceTarget_Indicators as $key=>$r){
          $perf=new PerformanceIndicators();
          $perf->GADPABLineID=$lines->id;
          $perf->PerformanceIndicator=$request->PerformanceTarget_Indicators[$key];
          $perf->Target=$request->Target[$key];
          $perf->save();
        }
      // }
      //   if(isset($request->SourceOfBudget)){
        foreach($request->SourceOfExpenditureBudget as $key=>$r){
        $budget=new TotalActualCost_Expenditure();
        $budget->GADPABLineID=$lines->id;
        $budget->SourceOfBudget=$request->SourceOfExpenditureBudget[$key];
        $budget->BudgetItem=$request->GADExpenditureBudgetItem[$key];
        $budget->budget=$request->GADExpenditureBudget[$key];
        $budget->save();
        }
      // }

      foreach($request->SourceOfApprovedBudget as $key=>$r){
        $budget=new TotalAgencyApprovedBudget();
        $budget->GADPABLineID=$lines->id;
        $budget->SourceOfBudget=$request->SourceOfApprovedBudget[$key];
        $budget->BudgetItem=$request->GADApprovedBudgetItem[$key];
        $budget->budget=$request->GADApprovedBudget[$key];
        $budget->save();
        }

//   dd($request);
      // if(isset($request->ResponsibleUnit_Office)){
        foreach($request->ResponsibleUnit_Office as $key=>$r){
          $office= new ResponsibleOffice();
          $office->GADPABLineID=$lines->id;
          $office->Office=$request->ResponsibleUnit_Office[$key];
          $office->save();
        }
      // }

        }

      $head=GADPlanAndBudget::where('GADPABID',$headID)->first();
      $clientline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Client')->get();
      $orgline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Organization')->get();
      $attriline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Attributed')->get();
      return view('actionAR',compact('headID','head','clientline','orgline','attriline'));
    }


    public function prepareAdjustedGBP(){
     $head= GADPlanAndBudget::where('Category','=','GAD')->get();
      return view('prepareAdjustedGBP',compact('head'));
    }


    public function prepareAdjustedGBPEdit($headID){
    
      $head=GADPlanAndBudget::where('GADPABID',$headID)->first();
      $clientline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Client')->get();
      $orgline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Organization')->get();
      $attriline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Attributed')->get();

      return view('prepareAdjustedGBPEdit',compact('headID','head','clientline','orgline','attriline'));
    }

    public function prepareAdjustedGBPEditRow($headID){

      $head=GADPlanAndBudget::where('GADPABID',$headID)->first();
      $clientline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Client')->get();
      $orgline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Organization')->get();
      $attriline=GADPlanAndBudgetLines::where('GADPABID',$headID)->where('Focused','Attributed')->get();
      
      return view('prepareAdjustedGBPEditRow',compact('headID','head','clientline','orgline','attriline'));
    }

    public function TrackGBPAR(){
      $head= GADPlanAndBudget::get();
       return view('TrackGBPAR',compact('head'));
     }

    


    public function ActionCurrent($hid){
        $head=GADPlanAndBudget::where('GADPABID',$hid)->get();
        $line=GADPlanAndBudgetLines::where('GADPABID',$hid)->get();
        return view('action',compact('head','line'));
    }
    public function deleteGADLine($hid){
        // GADPlanAndBudgetLines::where('GADPABID',$hid)->delete();
        $company = GADPlanAndBudgetLines::where('GADPABLineID',$hid);
        $company->delete();
    }
    public function deleteAllGADLine($hid){
        // GADPlanAndBudgetLines::where('GADPABID',$hid)->delete();
        $company = GADPlanAndBudgetLines::where('GADPABID',$hid);
        $company->delete();
    }

    public function GetLines($id){
      $line=GADPlanAndBudgetLines::where('GADPABLineID',$id)->first();
      return response()->json($line, 200);
    }
    

    public function GetLinesPerformance($id){
      $line=PerformanceIndicators::where('GADPABLineID',$id)->first();
      return response()->json($line, 200);
    }
    public function GetLinesPerformanceline($id){
      $line=PerformanceIndicators::where('PERFID',$id)->delete();
      // return response()->json($line, 200);
    }

    public function GetLinesBudget($id){
      $line=BUDGETS::where('GADPABLineID',$id)->first();
      return response()->json($line, 200);
    }
    public function GetLinesBudgetline($id){
      $line=BUDGETS::where('BudgetID',$id)->delete();
      // return response()->json($line, 200);
    }

    public function GetLinesOffice($id){
      $line=ResponsibleOffice::where('OfficeID',$id)->first();
      return response()->json($line, 200);
    }

    public function GetLinesOfficeline($id){
      $line=ResponsibleOffice::where('OfficeID',$id)->delete();
      // return response()->json($line, 200);
    }
    public function Actionsubmit($id){
      $line=GADPlanAndBudget::where('GADPABID',$id)->update(
        [
          'draft'=>0
        ]
      );
      return  redirect('/Action');
    }

    public function ActionARsubmit($id){
      $line=GADPlanAndBudget::where('GADPABID',$id)->update(
        [
          'draft'=>0
        ]
      );
      return  redirect('/ActionAR');
    }
    
public function allgadprofile(){
  $gad=GADProfiles::get();
  return view('allgadprofile',compact('gad'));
}    

public function Addadprofile(){
  // $gad=GADProfiles::get();
  return view('Addadprofile');
}
public function SaveAddadprofile(REQUEST $request){
  $gad=new  GADProfiles();
  $gad->NameOfOrg=$request->NameOfOrg;
  $gad->OfficeAddress=$request->OfficeAddress;
  $gad->fax=$request->fax;
  $gad->telephone=$request->telephone;
  $gad->mobile=$request->mobile;
  $gad->website=$request->website;
  $gad->headOfOrg=$request->headOfOrg;
  $gad->chairperson=$request->chairperson;
  $gad->save();

return  redirect('allgadprofile');
}


function editGADprofile($id){
  $prof=GADProfiles::where('GADProfID','=',$id)->get();
  return view('editgadprofile',compact('prof'));
}
public function editGADprofilesave(Request $request ){
  GADProfiles::where('GADProfID',$request->GADProfID)->update(
      [
          'NameOfOrg'=>$request->NameOfOrg,
          'OfficeAddress'=>$request->OfficeAddress,
          'telephone'=>$request->telephone,
          'Fax'=>$request->fax,
          'mobile'=>$request->mobile,
          'website'=>$request->website,
          'headOfOrg'=>$request->headOfOrg,
          'chairperson'=>$request->chairperson,
        
      ]
  );
 return redirect('allgadprofile');
}

    
    
    

    
}
