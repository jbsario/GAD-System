<div class="modal " id="modal-xl" height="">
    <div class="modal-dialog modal-xl" >
      <div class="modal-content">
        <div class="modal-header">
          <h4 id='Head_action_type' class="modal-title">Client focused</h4>
          <input type="hidden" id="action_type" name="action_type" id='action_type'>
          <input type="hidden" id="NewLine" name="NewLine" id='action_NewLine'>
          {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
        </div>
        <div class="modal-body">
            <div class="col-sm-12">
            <div class="form-group">
                <label>INDICATE THE GENDER ISSUE/GAD Mandate  BEING ADDRESSED BY THE ACTIVITY</label>
                <textarea class="form-control" id="GenderIssue"  name="GenderIssue" rows="3" placeholder="Please select Gender Issue..."></textarea>
              </div>
            </div>
            
            {{-- <div class="col-sm-12">
                <div class="form-group">
                    <label>INDICATE THE GAD MANDATE BEING ADDRESSED BY THE ACTIVITY</label>
                    <textarea class="form-control" name="GenderMandate" rows="3" placeholder="Please select GAD MANDATE..."></textarea>
                  </div>
                </div> --}}

                <div class="col-sm-12">
                  <div class="form-group">
                      <label>INDICATE THE CAUSE OF GENDER ISSUE</label>
                      <textarea class="form-control" id="CauseOfGenderIssue" name="CauseOfGenderIssue" rows="3" placeholder="INPUT THE CAUSE OF GENDER ISSUE.."></textarea>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                        <label>GAD RESULT STATEMENTS / OBJECTIVES </label>
                        <textarea class="form-control" id="GADResultStatement_Objective" name="GADResultStatement_Objective" rows="3" placeholder="INPUT STATEMENT OR OBJECTIVES.."></textarea>
                      </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                          <label>Relevant Organization
                            MFO/PAP or PPA  </label>
                          <div class="form-group">
                            <label>TYPE</label>
                            <select class="form-control" id="RelevantOrg_MFO_PAP_PPA" name="RelevantOrg_MFO_PAP_PPA">
                              <option>MFO</option>
                              <option>PAP</option>
                              <option>PPA</option>
                             
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="form-group">
                            <label>MFO / PAP STATEMENT</label>
                            <textarea class="form-control" id="MFO_PAP_STATEMENT"  name="MFO_PAP_STATEMENT" rows="3" placeholder="INPUT STATEMENT OR OBJECTIVES.."></textarea>
                          </div>
                        </div>
                    </div>
  

                    <div class="row">
                      <div class="col-md-12">
                        <div class="card card-outline card-info">
                          <div class="card-header">
                            <h3 class="card-title">
                            GAD ACTIVITY
                              <small>-</small>
                            </h3>
                            <!-- tools box -->
                            <div class="card-tools">
                              {{-- <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                      title="Collapse">
                                <i class="fas fa-minus"></i></button> --}}
                              {{-- <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                      title="Remove">
                                <i class="fas fa-times"></i></button> --}}
                            </div>
                            <!-- /. tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body pad">
                            <div class="mb-3">
                              {{-- class="textarea"  --}}
                              <textarea  id="GADActivity"   name="GADActivity" placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                            {{-- <p class="text-sm mb-0"> --}}
                              {{-- Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
                              information.</a> --}}
                            {{-- </p> --}}
                          </div>
                        </div>
                      </div>
                      <!-- /.col-->
                    </div>
                    <!-- ./row -->

                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                          <label>PERFORMANCE INDICATOR(S)</label>
                          <table class="table ">
                            <thead>
                              <th>Performance indicator</th>
                              <th>Target</th>
                              <th>Action</th>
                            </thead>
                            <tbody id="perfIndicatorBody">
                              
                              <tr id="PerformanceTarget_Indicators1">
                                <td>
                                  <div class="form-group">
                                    {{-- <label>Textarea</label> --}}
                                    <textarea class="form-control PerformanceTarget_Indicators" rows="3"  id="PerformanceTarget_Indicators" name="PerformanceTarget_Indicators[]" placeholder=" ENTER PERFORMANCE INDICATOR..."></textarea>
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group">
                                    {{-- <label>Textarea</label> --}}
                                    <textarea class="form-control Target" rows="3"  id="Target"  name="Target[]" placeholder="ENTER TARGET..."></textarea>
                                  </div>  
                                  
                                </td>
                                <td>
                                  <div onclick="return deletePerfIndicatorBody(this)" class="btn btn-danger"><i class="fa fa-trash"></i></div>
                                </td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <td></td>
                                <td></td>
                                <td><div onclick="return  AddPerfIndicatorBody(this)"  class="btn btn-primary"><i class="fa fa-plus">Add Another</i></div></td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                      </div>
                      {{-- end row --}}


                      <div class="row"> 
                        <div class="col-sm-12">
                          <div class="form-group">
                              <label>BUDGET</label>
                              <table class="table ">
                                <thead>
                                  <th>Budget Source</th>
                                  <th>Budget Item (optional)</th>
                                  <th>Budget</th>
                                  <th>Action</th>
                                </thead>
                                <tbody id="budgetbody">
                                
                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        {{-- <label>Textarea</label> --}}
                                        <select  id="SourceOfBudget[]"  name="SourceOfBudget[]" class="form-control">
                                          <option>GAA</option>
                                         
                                        </select>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                        {{-- <label>Textarea</label> --}}
                                        <input type="text"  id="GADBudgetItem" name="GADBudgetItem[]" class="form-control" placeholder="Enter budget Item.." >
                                      </div>  
                                      
                                    </td>
                                    <td>
                                      <input type="text" id="GADBudget[]" name="GADBudget[]" class="form-control" placeholder="Enter budget " >
                                    </td>
                                    <td>
                                      <div  onclick="return  deleteBudgetbody(this)" class="btn btn-danger"><i class="fa fa-trash"></i></div>
                                    </td>
                                  </tr>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><div onclick="return  addBudgetbody(this)" class="btn btn-primary"><i class="fa fa-plus">Add Another</i></div></td>
                                  </tr>
                                </tfoot>
                              </table>
                            </div>
                          </div>
                          </div>
                          {{-- end row --}}

                          <div class="row">
                              <div class="col-sm-12">
                                <table class="table">
                                  <thead>
                                    <tr>
                                    <th>
                                      RESPONSIBLE OFFICE(S)
                                    </th>
                                    </tr>
                                    
                                  </thead>
                                  <tbody id="officebody">
                                    <tr>
                                      <td>
                                        <div class="form-group">
                                          {{-- <label></label> --}}
                                          <input type="text"  id="ResponsibleUnit_Office[] name="ResponsibleUnit_Office[]" class="form-control" placeholder="Enter Responsible Office.." >
                                        </div>
                                        
                                      </td>
                                      <td>
                                        <div  onclick="return  deleteOfficebody(this)" class="btn btn-danger"><i class="fa fa-trash"></i></div>
                                      </td>
                                    </tr>
                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <td></td>
                                      <td><div  onclick="return  addOfficebody(this)"  class="btn btn-primary"><i class="fa fa-plus">Add Another</i></div></td>
                                    </tr>
                                  </tfoot>
                                </table>
                                
                                </div>
                            </div>
                            {{-- end row --}}


                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label for="exampleInputFile">Attachment</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="exampleInputFile">
                                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text" id="">Upload</span>
                                    </div>
                                  </div>
                                </div>
                                
                                </div>
                            </div>
                            {{-- end row --}}

        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  <script>
    function Head_action_type(action){
          $('#action_type').val(action);
          $('#Head_action_type').html(action+ ' Focused');
          $('#action_NewLine').val('create');
          
    }
    function deleterow(id,lineID){
      $(id).empty();
      $.get("deleteGADLine/"+lineID, function(data, status){
      
      });
    }
    function deleteAll(HeadID){
      $.get("deleteAllGADLine/"+HeadID, function(data, status){
      });
      window.location.reload();
    }
    function removeCreate(){
      $('#action_NewLine').val("");
    }

    function deletePerfIndicatorBody(element,perfid=null){
      if(perfid!=null){
      $.get("/GetLines/Performance/line/"+perfid, function(data, status){
      });
    }
      $(element).parent().parent().empty();
    }

    function AddPerfIndicatorBody(element){

          var trfield="";
              trfield+="<tr>";   
              trfield+="<td>";
              trfield+='<div class="form-group">';
              trfield+='<textarea class="form-control" rows="3" name="PerformanceTarget_Indicators[]" placeholder=" ENTER PERFORMANCE INDICATOR..."></textarea>';
              trfield+='</div>';              
              trfield+="</td>";              
              trfield+="<td>";
              trfield+='<div class="form-group">';
              trfield+='<textarea class="form-control" rows="3" name="Target[]" placeholder="ENTER TARGET..."></textarea>';
              trfield+='</div>';
              trfield+="</td>";
              trfield+="<td>";
              trfield+='<div onclick="return deletePerfIndicatorBody(this)" class="btn btn-danger"><i class="fa fa-trash"></i></div>';
              trfield+="</td>";
              trfield+="</tr>";
            $(element).parent().parent().parent().parent().find('#perfIndicatorBody').append(trfield);
      
    }

    function deleteBudgetbody(element,BudgetID){
      if(BudgetID!=null){
      $.get("/GetLines/BUDGET/line/"+BudgetID, function(data, status){
      });
      
    }
    $(element).parent().parent().empty();
  }
    function addBudgetbody(element){
      var trfield="";
            trfield+="<tr>";
              trfield+="<td>";
                trfield+='  <div class="form-group">';
                trfield+='<select name="SourceOfBudget[]" class="form-control">  <option>GAA</option>  </select>';
                trfield+='  </div>';
              trfield+="</td>";                   
              trfield+="<td>";
                trfield+=' <div class="form-group">';
                trfield+=' <input type="text" name="GADBudgetItem[]" class="form-control" placeholder="Enter budget Item.." >';
                trfield+=' </div> ';
              trfield+="</td>";
              trfield+="<td>";
                trfield+='  <input type="text" name="GADBudget[]" class="form-control" placeholder="Enter budget " >';
              trfield+="</td>";
              trfield+="<td>";
                trfield+=' <div  onclick="return  deleteBudgetbody(this)" class="btn btn-danger"><i class="fa fa-trash"></i></div>';
              trfield+="</td>";
            trfield+="</tr>";
            $(element).parent().parent().parent().parent().find('#budgetbody').append(trfield);

    }

    function deleteOfficebody(element,OfficeID=null){
      if(OfficeID!=null){
      $.get("/GetLines/Office/line/"+OfficeID, function(data, status){
      });
    }

      $(element).parent().parent().empty();
    }
    function addOfficebody(element){
      var trfield="";
            trfield+="<tr>";
                  
 
              trfield+="<td>";
                trfield+='  <div class="form-group"> <input type="text" name="ResponsibleUnit_Office[]" class="form-control" placeholder="Enter Responsible Office.." > </div>';
              trfield+="</td>";
              

              trfield+="<td>";
                trfield+=' <div  onclick="return  deleteOfficebody(this)" class="btn btn-danger"><i class="fa fa-trash"></i></div>';
              trfield+="</td>";

            trfield+="</tr>";
            $(element).parent().parent().parent().parent().find('#officebody').append(trfield);

    }

    function EditHead_action_type(Category,lineid){
      
      $.get( "/GetLines/"+lineid, function( data ) {
        console.log(data);

        $('#ActualCost_Expenditure').val(data.ActualCost_Expenditure);
        $('#ActualResult').val(data.ActualResult);
        $('#CauseOfGenderIssue').val(data.CauseOfGenderIssue);
        $('#Focused').val(data.Focused);
        $('#GADActivity').val(data.GADActivity);
        $('#GADBudget').val(data.GADBudget);
        $('#GADBudgetItem').val(data.GADBudgetItem);
        $('#GADPABID').val(data.GADPABID);
        $('#GADPABLineID').val(data.GADPABLineID);
        $('#GADResultStatement_Objective').val(data.GADResultStatement_Objective);
        $('#GenderIssue').val(data.GenderIssue);
        $('#GenderMandate').val(data.GenderMandate);
        $('#MFO_PAP_STATEMENT').val(data.MFO_PAP_STATEMENT);
        $('#PerformanceTarget_Indicators').val(data.PerformanceTarget_Indicators);
        $('#RelevantOrg_MFO_PAP_PPA').val(data.RelevantOrg_MFO_PAP_PPA);
        $('#ResponsibleUnit_Office').val(data.ResponsibleUnit_Office);
        $('#SourceOfBudget').val(data.SourceOfBudget);
        $('#TotalAgencyApprovedBudget').val(data.TotalAgencyApprovedBudget);
        $('#VarianceRemarks').val(data.VarianceRemarks);
        $('#attachment').val(data.attachment);
      

        $('#modal-xl').modal('show');
        //  $('#modal-xl').modal('hide');
    });

  // performace indicator  
     $.get( "/GetLines/Performance/"+lineid, function( data ) {

      console.log(data);
          console.log(Object.keys(data).length);
if(Object.keys(data).length>0){

        var perfid=data.PERFID;
        var PerformanceIndicator=data.PerformanceIndicator;
        var Target= data.Target;
// console.log(data);

          
          var trfield="";
              trfield+="<tr>";   
              trfield+="<td>";
              trfield+='<div class="form-group">';
              trfield+='<input type="hidden" name="PERFID" value="'+perfid+'">';
              trfield+='<textarea class="form-control" rows="3" name="PerformanceTarget_Indicators[]" placeholder=" ENTER PERFORMANCE INDICATOR...">'+PerformanceIndicator+'</textarea>';
              trfield+='</div>';              
              trfield+="</td>";              
              trfield+="<td>";
              trfield+='<div class="form-group">';
              trfield+='<textarea class="form-control" rows="3" name="Target[]" placeholder="ENTER TARGET...">'+Target+'</textarea>';
              trfield+='</div>';
              trfield+="</td>";
              trfield+="<td>";
              trfield+='<div onclick="return deletePerfIndicatorBody(this,'+perfid+')" class="btn btn-danger"><i class="fa fa-trash"></i></div>';
              trfield+="</td>";
              trfield+="</tr>";


          $('#perfIndicatorBody').empty();
          $('#perfIndicatorBody').append(trfield);

        }
         });


         // BUDGET
         $.get( "/GetLines/BUDGET/"+lineid, function( data ) {
          
if(Object.keys(data).length>0){

var BudgetID=data.BudgetID;
var BudgetItem=data.BudgetItem;
var SourceOfBudget= data.SourceOfBudget;
var budget= data.budget;


  
var trfield="";
            trfield+="<tr>";
              trfield+="<td>";
                trfield+='  <div class="form-group">';
                trfield+='<select name="SourceOfBudget[]" class="form-control">  <option>GAA</option>  </select>';
                trfield+='  </div>';
              trfield+="</td>";                   
              trfield+="<td>";
                trfield+=' <div class="form-group">';
                  trfield+='<input type="hidden" name="BudgetID" value="'+BudgetID+'">';
                trfield+=' <input type="text" name="GADBudgetItem[]" value="'+BudgetItem+'" class="form-control" placeholder="Enter budget Item.." >';
                trfield+=' </div> ';
              trfield+="</td>";
              trfield+="<td>";
                trfield+='  <input type="text" name="GADBudget[]"  value="'+budget+'"class="form-control" placeholder="Enter budget " >';
              trfield+="</td>";
              trfield+="<td>";
                trfield+=' <div  onclick="return  deleteBudgetbody(this,'+BudgetID+')" class="btn btn-danger"><i class="fa fa-trash"></i></div>';
              trfield+="</td>";
            trfield+="</tr>";


  $('#budgetbody').empty();
  $('#budgetbody').append(trfield);

}
 });



    // Office
    $.get( "/GetLines/Office/"+lineid, function( data ) {
            // console.log(data);
            
          if(Object.keys(data).length>0){
          
          var OfficeID=data.OfficeID;
          var Office=data.Office;
          // var SourceOfBudget= data.SourceOfBudget;
          // var budget= data.budget;
          
          
          var trfield="";
            trfield+="<tr>";
              trfield+="<td>";
                trfield+='  <div class="form-group"> <input type="text" value="'+Office+'" name="ResponsibleUnit_Office[]" class="form-control" placeholder="Enter Responsible Office.." > </div>';
              trfield+="</td>";
              trfield+="<td>";
                trfield+='<input type="hidden" name="OfficeID" value="'+OfficeID+'">';
                trfield+=' <div  onclick="return  deleteOfficebody(this,'+OfficeID+')" class="btn btn-danger"><i class="fa fa-trash"></i></div>';
              trfield+="</td>";
            trfield+="</tr>";
         
          
          
            $('#officebody').empty();
            $('#officebody').append(trfield);
          
          }
           });

      
       
    }

    
    </script>