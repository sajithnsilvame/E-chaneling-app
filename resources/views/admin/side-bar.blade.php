<aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              
              <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu">DOCTORS </span>
                    </a>  
                    
                    
                        <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{url('add-doctor')}}" class="sidebar-link"
                            ><i class="mdi mdi-account-plus"></i
                            ><span class="hide-menu"> Add Doctors </span></a
                            >
                        </li>
                        <li class="sidebar-item">
                            <a href="{{url('view-all-doctors')}}" class="sidebar-link"
                            ><i class="mdi mdi-account-multiple"></i
                            ><span class="hide-menu"> All Doctors </span></a
                            >
                        </li>
                        
                        </ul>
              </li>

              <li class="sidebar-item">
                <a href="{{url('appointments')}}" class="sidebar-link"
                ><i class="mdi mdi-bookmark-check"></i
                ><span class="hide-menu"> APPOINTMENTS </span></a
                >
             </li>

             <li class="sidebar-item">
                <a href="{{url('drugs')}}" class="sidebar-link"
                ><i class="mdi mdi-medical-bag"></i
                ><span class="hide-menu"> DRUGS </span></a
                >
             </li>

    
              
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>