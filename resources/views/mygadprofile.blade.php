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
            <h1 class="m-0 text-dark">My GAD Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">My GAD profile</li>
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
                        <th><div class="btn btn-primary" onclick="return edit()"><i class="fas fa-pencil-alt"></i> Edit information</div></th>
                    </tr>
                </thead>
                <tbody>
                  <form  method="POST" id="editform" action="{{url('/myGADprofile')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    
                  @foreach($prof as $r)
                    <tr>
                        <td>Name of Organization</td>
                        <td>
                          <input type="hidden" name="GADProfID" value="{{$r->GADProfID}}" />
                          <input type="text" class="form-control edit" value="{{$r->NameOfOrg}}"  name="NameOfOrg" readonly/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>OFFICE ADDRESS</td>
                        <td><input type="text" class="form-control edit" value="{{$r->OfficeAddress}}" name="OfficeAddress" readonly/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TELEPHONE NUMBER</td>
                        <td><input type="text" class="form-control edit" value="{{$r->telephone}}" name="telephone" readonly/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>FAX NUMBER</td>
                        <td><input type="text" class="form-control edit" value="{{$r->fax}}" name="fax" readonly/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MOBILE NUMBER</td>
                        <td><input type="text" class="form-control edit" value="{{$r->mobile}}" name="mobile" readonly/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>WEBSITE(S)</td>
                        <td><input type="text" class="form-control edit" value="{{$r->website}}" name="website" readonly/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>HEAD OF ORGANIZATION</td>
                        <td><input type="text" class="form-control edit" value="{{$r->headOfOrg}}" name="headOfOrg" readonly/></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>GAD FOCAL POINT CHAIRPERSON</td>
                        <td><input type="text" class="form-control edit" value="{{$r->chairperson}}" name="chairperson" readonly/></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <td></td>
                    <td><div class="btn btn-primary savebtn" style="display:none" onclick="return save()"><i class="fas fa-save"></i> save changes</div> 
                      <a class="btn btn-danger savebtn" href='{{url('myGADprofile')}}' style="display:none" ><i class="fas fa-"></i> Cancel</a>    
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
      $('.edit').attr('readonly',false);
      $('.savebtn').attr('style','')
      
     }
     function save(){
  $('#editform').submit();
      
     }
  </script>

  