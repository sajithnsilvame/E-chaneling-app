<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <base href="/public">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>admin</title>
    <!-- Favicon icon -->
    
    <!-- Custom CSS -->
    <link href="admin/assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="admin/dist/css/style.min.css" rel="stylesheet" />
    
    
  </head>

  <style>
    .dr_add_form_btn{
        margin-left: 60%;
    }
    .close_btn{
        margin-left: 56em;
        border: none;
        
    }
  </style>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full" > 
      
      
    
      <!-- ============================================================== -->
      <!-- Start Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
            @include('admin.top_header')
      
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
          @include('admin.side-bar')
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->

      <!-- ============================================================== -->
      <!-- Start Page wrapper  -->
      <!-- ============================================================== -->

        <div class="page-wrapper">
            
            <div class="container-fluid">
             <div class="form-group">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session()->get('message')}}
                        <button type="button" class="close close_btn" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  @endif
                           <form class="form-horizontal" action="{{url('update-doctor', $doc_info->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                              <div class="card-body">
                              <h4 class="card-title">Enter the Details</h4>

                              <div class="form-group row">
                                 <label class="col-sm-3 text-end control-label col-form-label">Name</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="{{$doc_info->name}}" placeholder="Name Here" required/>
                                 </div>
                              </div>

                              <div class="form-group row">
                                 <label class="col-sm-3 text-end control-label col-form-label">Contact</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="mobile_number" value="{{$doc_info->contact}}" placeholder="Mobile Number" required/>
                                 </div>
                              </div>

                              <div class="form-group row">
                                 <label class="col-sm-3 text-end control-label col-form-label">Specialization</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="specialization" value="{{$doc_info->specialization}}" placeholder="Specialization" required/>
                                 </div>
                              </div>

                              <div class="form-group row">
                                 <label class="col-sm-3 text-end control-label col-form-label">Description</label>
                                 <div class="col-sm-9">
                                    <input type="text" class="form-control" name="description" value="{{$doc_info->description}}" placeholder="Description" required/>
                                 </div>
                              </div>

                              {{-- profile image --}}
                              <div class="form-group row">
                                 <label class="col-sm-3 text-end control-label col-form-label">Current Profile</label>
                                 <div class="col-sm-9">
                                    
                                    <img style="margin-left:10%;" height="100" width="100" src="/profile_pic/{{$doc_info->image}}">
                                 </div>
                              </div>

                              

                              <div class="form-group row">
                                 <label class="col-sm-3 text-end control-label col-form-label">Profile Picture</label>
                                 <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" required/>
                                 </div>
                              </div>
                              
                              </div>
                              <button type="submit" class="btn btn-primary dr_add_form_btn">Confirm & Save</button>
                        </form>
                </div>    
            </div>
                
        </div>
            
    </div>
            
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->



    <!-- ============================================================== -->
    <!-- Bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <!-- ============================================================== -->
    <script src="admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="admin/dist/js/custom.min.js"></script>


    <!--This page JavaScript -->
    <!-- <script src="admin/dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->

    <script src="admin/assets/libs/flot/excanvas.js"></script>
    <script src="admin/assets/libs/flot/jquery.flot.js"></script>
    <script src="admin/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="admin/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="admin/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="admin/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="admin/dist/js/pages/chart/chart-page-init.js"></script>
  </body>
</html>
