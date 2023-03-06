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
            <h1 class="m-0 text-dark">Track GPB and ARs</h1>
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
         
            <div class="card-body">
              
        
          
            <!-- /.card-body -->

            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Document Number</th>
                <th>Organization</th>
                <th>Reference</th>
                <th>Document Type</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                  @foreach($head as $key=>$r)
                <tr>
                  <td>{{'GPB #0000'.$r->GADPABID}}</td>
                  <td>{{$r->Organization}}</td>
                  <td>{{$r->Reference}}</td>
                  <td>{{($r->Category=="GAD")?"GAD":"GAD AR"}}</td>
                  <td>
                    <div  class="btn btn-info"><i class="fa fa-eye"></i></div>
                    <div  class="btn btn-info">Add remark <i class="fa fa-pencil"></i></div>
                    {{-- <div  class="btn btn-warning"><i class="fa fa-edit"></i></div> --}}
                  </td>
                </tr>
                @endforeach
               
                    
              
          
              
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
          <a href="#" class="btn btn-secondary">Cancel</a>
          <div class="btn btn-success float-right"> Submit  GAD </div>
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
