@include('layouts.header')

<body onbeforeunload="removeCreate()" class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('layouts.navbar')
  @include('layouts.sidebar')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <form method="POST" action="{{url('ActionSaveAR')}}">
      <input type="hidden" name="Category" value="GADAR" />
      <input type="hidden" name="_token" value="{{csrf_token()}}" />
      @isset($headID)
      <input type="hidden" name="GADHeader" value="{{$headID}}" />
      @endisset
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Prepare Accomplishment Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Prepare GPB</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Header</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            @isset($head)
            <input type="hidden" id="" name="HeadAction"  value="update" class="form-control">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6"> 
                      <div class="form-group">
                      <label for="inputName">Reference</label>
                      <input type="text" id="Reference" name="Reference" value="{{$head->Reference}}" class="form-control">
                      </div>
                </div>
                <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputName">Date Endorsed</label>
                        <input type="text" id="DateEndorsed" name="DateEndorsed" value="{{$head->DateEndorsed}}" class="form-control">
                        </div>  
                </div>  
              </div>
              <div class="row">
                <div class="col-md-6"> 
                  <div class="form-group">
                    <label for="inputName">Organization</label>
                    <input type="text" id="Organization" name="Organization" value="{{$head->Organization}}" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputName">Organization Category</label>
                    <input type="text" id="OrganizationCategory" name="OrganizationCategory"  value="{{$head->OrganizationCategory}}" class="form-control">
                  </div>
                </div>  
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="inputName">Heirarchy</label>
                    <input type="text" id="Heirarchy" name="Heirarchy"  value="{{$head->Heirarchy}}" class="form-control">
                  </div>
                  
                </div>
              </div>
              
              <div class="form-group">
                <label for="inputName">YEAR</label>
                <select type="text" id="YEAR" name="FiscalYear"    value="{{$head->FiscalYear}}" class="form-control">`
                  <option  value='2023' selected>2023</option>
                  <option >2022</option>
                  <option >2021</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">TOTAL GAA OR BUDGET OF ORGANIZATION</label>
                <input type="text" id="GAA" name="TotalBudget_GAA" value="{{$head->TotalBudget_GAA}}" class="form-control">
              </div>
              <div class="row">
                <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputName">Actual GAD Expenditure : </label>
                        <input type="text" id="GAA" name="ActualGADExpenditure" value="{{$head->ActualGADExpenditure}}" class="form-control">
                      </div>
                </div> 
                <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName">Original Budget : </label>
                          <input type="text" id="GAA" name="OriginalBudget" value="{{$head->OriginalBudget}}"  class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="inputName">% Utilization of Budget : </label>
                          <input type="text" id="GAA" name="UtilizationofBudget" value="{{$head->UtilizationofBudget}}"  class="form-control">
                        </div>
                </div>    
              </div>
              <div class="form-group">
                <label for="inputName">% of GAD Expenditure:</label>
                <input type="text" id="GAA" name="PercentofGADExpenditure"  value="{{$head->PercentofGADExpenditure}}"  class="form-control">
              </div>
             
              
            </div>
            @else
            <input type="hidden" id="" name="HeadAction"  value="create"  class="form-control">
            <div class="card-body">

              <div class="row">
                <div class="col-md-6"> 
                      <div class="form-group">
                      <label for="inputName">Reference</label>
                      <input type="text" id="Reference" name="Reference"  class="form-control">
                      </div>
                </div>
                <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputName">Date Endorsed</label>
                        <input type="text" id="DateEndorsed" name="DateEndorsed"  class="form-control">
                        </div>  
                </div>  
              </div>
              <div class="row">
                <div class="col-md-6"> 
                  <div class="form-group">
                    <label for="inputName">Organization</label>
                    <input type="text" id="Organization" name="Organization"  class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputName">Organization Category</label>
                    <input type="text" id="OrganizationCategory" name="OrganizationCategory"  class="form-control">
                  </div>
                </div>  
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="inputName">Organization Heirarchy</label>
                    <input type="text" id="Heirarchy" name="Heirarchy"  class="form-control">
                  </div>
                  
                </div>
              </div>
              
              <div class="form-group">
                <label for="inputName">YEAR</label>
                <select type="text" id="YEAR" name="FiscalYear"     class="form-control">`
                  <option  value='2023' selected>2023</option>
                  <option >2022</option>
                  <option >2021</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">TOTAL GAA OR BUDGET OF ORGANIZATION</label>
                <input type="text" id="GAA" name="TotalBudget_GAA"  class="form-control">
              </div>
              <div class="row">
                <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputName">Actual GAD Expenditure : </label>
                        <input type="text" id="GAA" name="ActualGADExpenditure" class="form-control">
                      </div>
                </div> 
                <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName">Original Budget : </label>
                          <input type="text" id="GAA" name="OriginalBudget"  class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="inputName">% Utilization of Budget : </label>
                          <input type="text" id="GAA" name="UtilizationofBudget" class="form-control">
                        </div>
                </div>    
              </div>
              <div class="form-group">
                <label for="inputName">% of GAD Expenditure:</label>
                <input type="text" id="GAA" name="PercentofGADExpenditure"  class="form-control">
              </div>
             
              
            </div>
            @endisset
            <!-- /.card-body -->


            <div class="row">
              <div class="col-12 col-sm-12">
                <div class="card card-primary card-tabs">
                  <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Client Focused</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false" >Organization Focused</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false" >Attributed Program</a>
                      </li>
                      
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                      <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                        <div class="card ">
                                          <div class="card-header">
                                            {{-- <h3 class="card-title">Client Focused</h3>  --}}
                                            @isset($headID)
                                          
                                            <div  onclick="return deleteAll({{$headID}})" class="btn btn-danger float-right"><i class="fa fa-trash"></i>Delete  All</div>
                                            @endisset
                                        
                                            
                                            <div  onclick="Head_action_type('Client')"  class="btn btn-success float-right" data-toggle="modal" data-target="#modal-xl"><i class="fa fa-plus"></i> Add Activity</div>
                                          </div>
                                          
                                          <!-- /.card-header -->
                                          <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                              <thead>
                                              <tr>
                                                <th>Gender Issue / GAD  Mandate</th>
                                                <th>GAD Activity</th>
                                                <th>Performance Indicator</th>
                                                <th>Budget</th>
                                                <th>Action</th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                                @isset($clientline)
                                            
                                                @foreach ($clientline as $key=>$r)
                                                
                                                <tr id="client{{$key}}">
                                                <td>{{$r->GenderIssue}}</td>
                                                <td>{{$r->GADActivity}}</td>
                                                <td>
                                                  @foreach($r->PerformanceTarget_Indicatorss()->get() as $PerformanceIndicatorrow)
                                                  {{$PerformanceIndicatorrow->PerformanceIndicator}}<br/>
                                                  @endforeach
                                                </td>
                                                <td>
                                                  
                                                    @foreach($r->GADBudget()->get() as $budgetrow)
                                                    {{$budgetrow->budget}}<br/>
                                                    @endforeach

                                                </td>
                                                <td><div onclick="return deleterow('#client{{$key}}',{{$r->GADPABLineID}})"  class="btn btn-danger float-right"><i class="fa fa-trash"></i></div></td>
                                                </tr>
                                                @endforeach
                                                @endisset
                                                    
                                              
                                          
                                              
                                              </tbody>
                                              <tfoot> 
                                              <tr>
                                                <th>Gender Issue / GAD  Mandate</th>
                                                <th>GAD Activity</th>
                                                <th>Performance Indicator</th>
                                                <th>Budget</th>
                                                <th>Action</th>
                                              </tr>
                                              </tfoot>
                                            </table>
                                          </div>
                                          <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->

                      </div>
                      <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                    <div class="card ">
                                      <div class="card-header">
                                        {{-- <h3 class="card-title">Client Focused</h3>  --}}
                                        <div  class="btn btn-danger float-right"><i class="fa fa-trash"></i>Delete  All</div>
                                        <div  onclick="Head_action_type('Organization')"  class="btn btn-success float-right" data-toggle="modal" data-target="#modal-xl"><i class="fa fa-plus"></i> Add Activity</div>
                                      </div>
                                      
                                      <!-- /.card-header -->
                                      <div class="card-body">
                                        <table id="example12" class="table table-bordered table-striped">
                                          <thead>
                                          <tr>
                                            <th>Gender Issue / GAD  Mandate</th>
                                            <th>GAD Activity</th>
                                            <th>Performance Indicator</th>
                                            <th>Budget</th>
                                            <th>Action</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                            @isset($orgline)
                                            
                                            @foreach ($orgline as $key=>$r)
                                            
                                            <tr id="org{{$key}}">
                                            <td>{{$r->GenderIssue}}</td>
                                            <td>{{$r->GADActivity}}</td>
                                            <td>
                                              @foreach($r->PerformanceTarget_Indicatorss()->get() as $PerformanceIndicatorrow)
                                              {{$PerformanceIndicatorrow->PerformanceIndicator}}<br/>
                                              @endforeach
                                            </td>
                                            <td>
                                              
                                                @foreach($r->GADBudget()->get() as $budgetrow)
                                                {{$budgetrow->budget}}<br/>
                                                @endforeach

                                            </td>
                                            <td><div  onclick="return deleterow('#org{{$key}}',{{$r->GADPABLineID}})" class="btn btn-danger float-right"><i class="fa fa-trash"></i></div></td>
                                            </tr>
                                            @endforeach
                                            @endisset
                                            
                                          </tbody>
                                          <tfoot>
                                          <tr>
                                            <th>Gender Issue / GAD  Mandate</th>
                                            <th>GAD Activity</th>
                                            <th>Performance Indicator</th>
                                            <th>Budget</th>
                                            <th>Action</th>
                                          </tr>
                                          </tfoot>
                                        </table>
                                      </div>
                                      <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                      </div>
                      <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                  <div class="card ">
                                    <div class="card-header">
                                      {{-- <h3 class="card-title">Client Focused</h3>  --}}
                                      <div  class="btn btn-danger float-right"><i class="fa fa-trash"></i>Delete  All</div>
                                      <div   onclick="Head_action_type('Attributed')" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-xl"><i class="fa fa-plus"></i> Add Activity</div>
                                    </div>
                                    
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                      <table id="example13" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                          <th>Gender Issue / GAD  Mandate</th>
                                          <th>GAD Activity</th>
                                          <th>Performance Indicator</th>
                                          <th>Budget</th>
                                          <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          @isset($attriline)
                                            
                                          @foreach ($attriline as $key=>$r)
                                          
                                          <tr id="attri{{$key}}">
                                          <td>{{$r->GenderIssue}}</td>
                                          <td>{{$r->GADActivity}}</td>
                                          <td>
                                            @foreach($r->PerformanceTarget_Indicatorss()->get() as $PerformanceIndicatorrow)
                                            {{$PerformanceIndicatorrow->PerformanceIndicator}}<br/>
                                            @endforeach
                                          </td>
                                          <td>
                                            
                                              @foreach($r->GADBudget()->get() as $budgetrow)
                                              {{$budgetrow->budget}}<br/>
                                              @endforeach

                                          </td>
                                          <td><div  onclick="return deleterow('#attri{{$key}}',{{$r->GADPABLineID}})" class="btn btn-danger float-right"><i class="fa fa-trash"></i></div></td>
                                          </tr>
                                          @endforeach
                                          @endisset
                                          
                                        
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                          <th>Gender Issue / GAD  Mandate</th>
                                          <th>GAD Activity</th>
                                          <th>Performance Indicator</th>
                                          <th>Budget</th>
                                          <th>Action</th>
                                        </tr>
                                        </tfoot>
                                      </table>
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                                  <!-- /.card -->

                      </div>
                      
                    </div>
                  </div>
                  <!-- /.card -->
                </div>
              </div>
              
            </div>



            
            
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
          {{-- <div class=" float-right"> </div><div class="btn btn-success float-right"> Submit  GAD </div> --}}
          @if(isset($headID))
          {{-- <a href="{{url('Action')}}" class="btn btn-secondary btn-warning">Save as Draft</a> --}}
          <a href="{{url('ActionARsubmit/'.$headID)}}" class="btn btn-success float-right"> Submit  GAD </a>
          
          {{-- <a href="{{url('Actionsubmit/'.$headID)}}" class="btn btn-success float-right"> Submit  GAD </div> --}}
          @endif
          {{-- <div class="btn btn-warning float-right"> Save as Draft </div> --}}
        </div>
      </div>
    </section>  
    <!-- /.content -->
    


    @include('modalAR')

  </form>
  </div>
  <!-- /.content-wrapper --
    >
  @include('layouts.footer')
