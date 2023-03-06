@include('layouts.header')

<body onbeforeunload="removeCreate()" class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('layouts.navbar')
  @include('layouts.sidebar')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <form method="POST" action="{{url('ActionSave')}}">
      <input type="hidden" name="Category" value="GAD" />
      <input type="hidden" name="_token" value="{{csrf_token()}}" />
      @isset($headID)
      <input type="hidden" name="GADHeader" value="{{$headID}}" />
      @endisset
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Prepare Adjusted GBP Lines</h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Prepare Adjusted GBP Lines</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
         
           
            <!-- /.card-body -->


            <div class="row">
              <div class="col-12 col-sm-12">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 id='Head_action_type' class="modal-title">Client focused</h4>
                    <input type="hidden" name="action_type" id='action_type'>
                    <input type="hidden" name="NewLine" id='action_NewLine'>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button> --}}
                  </div>
                  <div class="modal-body">
                      <div class="col-sm-12">
                      <div class="form-group">
                          <label>INDICATE THE GENDER ISSUE/GAD Mandate  BEING ADDRESSED BY THE ACTIVITY</label>
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
                                                  <select name="SourceOfBudget[]" class="form-control">
                                                    <option>GAA</option>
                                                   
                                                  </select>
                                                </div>
                                              </td>
                                              <td>
                                                <div class="form-group">
                                                  {{-- <label>Textarea</label> --}}
                                                  <input type="text" name="GADBudgetItem[]" class="form-control" placeholder="Enter budget Item.." >
                                                </div>  
                                                
                                              </td>
                                              <td>
                                                <input type="text" name="GADBudget[]" class="form-control" placeholder="Enter budget " >
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


              </div>
              
            </div>
            {{-- end row --}}



            
            
          </div>
          <!-- /.card -->
        </div>
        {{-- <div class="col-md-7">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Client Focus</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div> --}}
      </div>
      <div class="row">
        <div class="col-12">
          {{-- <a href="#" class="btn btn-secondary">Cancel</a> --}}
          {{-- <div class="btn btn-success float-right"> Submit  GAD </div> --}}
        </div>
      </div>
    </section>
    <!-- /.content -->



    @include('modal')

  </form>
  </div>
  <!-- /.content-wrapper --
    >
  @include('layouts.footer')
