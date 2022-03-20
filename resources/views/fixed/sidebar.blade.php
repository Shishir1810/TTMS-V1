<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('master')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-globe-asia"></i>
                </div>
                <div class="sidebar-brand-text mx-1">Tourism World</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('master')}}">
                <i class="fas fa-address-book"></i>
                    <span>Booking Details</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-home"></i>
                    <span>Home Page</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h5 class="collapse-header">Login Screens:</h5>
                        
                    </div>
                </div>
            </li> -->

            <a class="text-white"  href="register.html">Register</a>
            <a class="text-white"  href="login.html">Login</a>
            <a class="text-white"  href="forgot-password.html">Forgot Password</a>
            <a class="text-white"  href="{{route('place')}}">Place</a>
            <a class="text-white"  href=" {{route('transport')}} ">Transport</a>
            <a class="text-white"  href="{{route('hotel')}}">Hotel</a>
            <a class="text-white" href="{{route('tourguide')}}">Tour Guide</a>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            

           

        </ul>