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
            <h1 class="m-0 text-dark">All GAD Profiles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All GAD profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <a href="{{url('Addadprofile')}}" class="btn btn-primary">Add New <i class="fa fa-plus"></i></a>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name of Organization</th>
                        <th>Office Address</th>
                        <th>Fax</th>
                        <th>Telephone</th>
                        <th>Mobile</th>
                        <th>Website</th>
                        <th>Head of Organization</th>
                        <th>Chairperson</th>
                        <th>Action</th>
                        
                        {{-- <th><div class="btn btn-primary" onclick="return edit()"><i class="fas fa-pencil-alt"></i> Edit information</div></th> --}}
                    </tr>
                </thead>
                <tbody>
                  @foreach($gad as $r)
                  <tr>
                    <td>{{$r->NameOfOrg}}</td>
                    <td>{{$r->OfficeAddress}}</td>
                    <td>{{$r->fax}}</td>
                    <td>{{$r->telephone}}</td>
                    <td>{{$r->mobile}}</td>
                    <td>{{$r->website}}</td>
                    <td>{{$r->headOfOrg}}</td>
                    <td>{{$r->chairperson}}</td>
                    <td><a href="{{url('editGADprofile/'.$r->GADProfID)}}"class="btn btn-success">EDIT</a></td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <th>Name of Organization</th>
                        <th>Office Address</th>
                        <th>Fax</th>
                        <th>Telephone</th>
                        <th>Mobile</th>
                        <th>Website</th>
                        <th>Head of Organization</th>
                        <th>Chairperson</th>
                        <th>Action</th>
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

  