<div class="modal fade" id="modal-xl" height="">
    <div class="modal-dialog modal-xl" >
      <div class="modal-content">
        <div class="modal-header">
          <h4 id='Head_action_type' class="modal-title">Client focused</h4>
          <input type="hidden" name="action_type" id='action_type'>
          <input type="hidden" name="NewLine" id='action_NewLine'>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-sm-12">
            <div class="form-group">
                <label>INDICATE THE GENDER ISSUE/GAD Mandate ISSUE BEING ADDRESSED BY THE ACTIVITY</label>
                <textarea class="form-control" name="GenderIssue" rows="3" placeholder="Please select Gender Issue..."></textarea>
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
                      <textarea class="form-control" name="CauseOfGenderIssue" rows="3" placeholder="INPUT THE CAUSE OF GENDER ISSUE.."></textarea>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                        <label>GAD RESULT STATEMENTS / OBJECTIVES </label>
                        <textarea class="form-control" name="GADResultStatement_Objective" rows="3" placeholder="INPUT STATEMENT OR OBJECTIVES.."></textarea>
                      </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                          <label>Relevant Organization
                            MFO/PAP or PPA  </label>
                          <div class="form-group">
                            <label>TYPE</label>
                            <select class="form-control" name="RelevantOrg_MFO_PAP_PPA">
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
                            <textarea class="form-control" name="MFO_PAP_STATEMENT" rows="3" placeholder="INPUT STATEMENT OR OBJECTIVES.."></textarea>
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
                              <textarea  name="GADActivity" placeholder="Place some text here"
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
                              <tr>
                                <td>
                                  <div class="form-group">
                                  {{-- <label>Text</label> --}}
                                  <input type="text" class="form-control" placeholder="No. of staff trained in Gender Analysis. (sample only)" disabled>
                                </div> 
                              </td>
                                <td>
                                  <div class="form-group">
                                    {{-- <label>Text</label> --}}
                                    <input type="text" class="form-control" placeholder="300 staff trained in Gender Analysis. (sample only)" disabled>
                                  </div> 
                                   </td>
                                   <td>
                                    {{-- <div class="btn btn-danger"><i class="fa fa-trash"></i></div> --}}
                                  </td>
                              </tr>
                              <tr id="PerformanceTarget_Indicators1">
                                <td>
                                  <div class="form-group">
                                    {{-- <label>Textarea</label> --}}
                                    <textarea class="form-control" rows="3" name="PerformanceTarget_Indicators[]" placeholder=" ENTER PERFORMANCE INDICATOR..."></textarea>
                                  </div>
                                </td>
                                <td>
                                  <div class="form-group">
                                    {{-- <label>Textarea</label> --}}
                                    <textarea class="form-control" rows="3" name="Target[]" placeholder="ENTER TARGET..."></textarea>
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
                        <div class="col-md-12">
                          <div class="card card-outline card-info">
                            <div class="card-header">
                              <h3 class="card-title">
                                Actual Result (Outputs/Outcomes)
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
                                <textarea  name="ActualResult" placeholder="Place some text here"
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
                              <label>Total Agency
                                Approved
                                Budget</label>
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
                                        <select name="SourceOfApprovedBudget[]" class="form-control">
                                          <option>GAA</option>
                                         
                                        </select>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="form-group">
                                        {{-- <label>Textarea</label> --}}
                                        <input type="text" name="GADApprovedBudgetItem[]" class="form-control" placeholder="Enter budget Item.." >
                                      </div>  
                                      
                                    </td>
                                    <td>
                                      <input type="text" name="GADApprovedBudget[]" class="form-control" placeholder="Enter budget " >
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
                              <div class="form-group">
                                  <label>Actual Cost
                                    /Expenditure</label>
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
                                            <select name="SourceOfExpenditureBudget[]" class="form-control">
                                              <option>GAA</option>
                                             
                                            </select>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-group">
                                            {{-- <label>Textarea</label> --}}
                                            <input type="text" name="GADExpenditureBudgetItem[]" class="form-control" placeholder="Enter budget Item.." >
                                          </div>  
                                          
                                        </td>
                                        <td>
                                          <input type="text" name="GADExpenditureBudget[]" class="form-control" placeholder="Enter budget " >
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
                                          <input type="text" name="ResponsibleUnit_Office[]" class="form-control" placeholder="Enter Responsible Office.." >
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
                              <div class="col-md-12">
                                <div class="card card-outline card-info">
                                  <div class="card-header">
                                    <h3 class="card-title">
                                     Variance / Remarks
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
                                      <textarea  name="VarianceRemarks" placeholder="Place some text here"
                                                style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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

    function deletePerfIndicatorBody(element){
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

    function deleteBudgetbody(element){
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

    function deleteOfficebody(element){
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

    
    </script>