@include('layouts.header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('layouts.navbar')
  @include('layouts.sidebar')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add GAD Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add GAD profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        {{-- <th><div class="btn btn-primary" onclick="return edit()"><i class="fas fa-pencil-alt"></i> Edit information</div></th> --}}
                    </tr>
                </thead>
                <tbody>
                  <form  method="POST" id="editform" action="{{url('/AddGADprofile')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    
                  
                    <tr>
                        <td>Name of Organization</td>
                        <td>
                          <input type="hidden" name="GADProfID"  />
                          <input type="text" class="form-control edit"   name="NameOfOrg" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>OFFICE ADDRESS</td>
                        <td><input type="text" class="form-control edit"  name="OfficeAddress" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TELEPHONE NUMBER</td>
                        <td><input type="text" class="form-control edit"  name="telephone" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>FAX NUMBER</td>
                        <td><input type="text" class="form-control edit" name="fax" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MOBILE NUMBER</td>
                        <td><input type="text" class="form-control edit"  name="mobile" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>WEBSITE(S)</td>
                        <td><input type="text" class="form-control edit"  name="website" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>HEAD OF ORGANIZATION</td>
                        <td><input type="text" class="form-control edit"  name="headOfOrg" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>GAD FOCAL POINT CHAIRPERSON</td>
                        <td><input type="text" class="form-control edit"  name="chairperson" /></td>
                        <td></td>
                    </tr>
               
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td><div class="btn btn-primary savebtn" style="display:block" onclick="return save()"><i class="fas fa-save"></i> Save </div> 
                      <a class="btn btn-danger savebtn" href='{{url('allgadprofile')}}' style="display:block" ><i class="fas fa-"></i> Cancel</a>    
                    </td>
                  </tr>
                </tfoot>
              </form>
            </table>
        </div>     

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')

  <script>
     function edit(){
      $('.edit').attr('',false);
      $('.savebtn').attr('style','')
      
     }
     function save(){
  $('#editform').submit();
      
     }
  </script>

  