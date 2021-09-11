<!-- Navbar -->
<div class="container py-md-5 ">
    
    <nav class="navbar navbar-expand navbar-light bottom ">
        <div class="brand">
            <div class="align-items-center">
                <div class="col-md-6 ">
                    <a class="navbar-brand " href="{{ route('home')}}">
                        <img src="{{ url('frontend/images/Icon_LW_C_H.png')}}" alt="Logo Invisign" >
                    </a>
                </div>
                <div class="">
                    <div class="row">
                        <div 
                            class="navbar-toggler"
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#navb"
                        >
                        <i class="fa fa-bars"></i>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" collapse navbar-collapse justify-content-center" id="navb">
            <ul class="navbar-nav ms-md-auto align-items-center text-center">
                <li class="nav-item mx-2 ">
                    <a class="nav-link" href="{{ route('home')}}"><i class="fa fa-home d-md-none"></i><br class="d-md-none">Home</a>
                </li>
                <li class="nav-item mx-2 d-md-none">
                    <a class="nav-link" href="{{ route('home')}}/#Ourprod""><i class="fa fa-book"></i><br>Product</a>
                </li>
                <li class="nav-item dropdown mx-2 d-none d-md-block">
                    <a class="nav-link " href="#" id="navbarDrop"
                        data-bs-toggle="dropdown">
                        <i class="fa fa-book d-md-none"></i><br class="d-md-none">Produk
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right  ">
                        <a class="dropdown-item" href="{{ route('dinvitation')}}">Design Invitation</a>
                        <a class="dropdown-item" href="{{ route('dproduct')}}">Design Produk</a>
                    </ul>
                </li>
                <li class="nav-item mx-2 ">
                    <a class="nav-link" href="{{ route('home')}}/#Package"><i class="fa fa-tag d-md-none"></i><br class="d-md-none">Promo</a>
                </li>
                              
                          
                @guest
                    <!-- Mobile Button -->
                    <form class="form-inline d-sm-block d-md-none">
                        <button class="btn btn-login my-0 my-sm-0" type="button" 
                        onclick="event.preventDefault(); location.href='{{ url('login')}}';"><i class="fa fa-sign-in d-md-none"></i><br class="d-md-none">Login</button>
                    </form>
                    
                    <!-- Desktop Button -->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="btn btn-login  my-2 my-sm-0 px-4" type="button" 
                        onclick="event.preventDefault(); location.href='{{ url('login')}}';">Login / Register &nbsp;<i class="fa fa-user"></i></button>
                    </form>  
                @endguest
                
                
                @auth
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ route('myorder.index')}}"><i class="fa fa-inbox d-md-none"></i><br class="d-md-none">Orders</a>
                </li>
                <li class="nav-item mx-2 d-md-none">
                    <a class="nav-link" href="{{ url('setting')}}"><i class="fa fa-user"></i><br>Saya</a>
                </li>
                

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow d-none d-md-block ">
                    <a class="nav-link " href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline ">{{ Auth::user()->name }} &nbsp;</i></span>
                        <img class="d-none d-md-inline img-profile rounded-circle " height="40" src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ url('setting')}}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        @if(Auth::check() && Auth::user()->roles == "ADMIN")
                            <a class="dropdown-item" href="{{ url('admin')}}">
                                <i class="fas fa-tasks fa-sm fa-fw mr-2 text-gray-400"></i>
                                Dashboard Admin
                            </a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <!-- Mobile Button -->
                        <form class="form-inline d-sm-block d-md-none" action="{{ url('logout')}}" method="POST">
                            @csrf
                            <button class="btn btn-logout my-2 my-sm-0" type="submit"><i class="fa fa-sign-out"></i>&nbsp;Keluar</button>
                        </form>
                        
                        <!-- Desktop Button -->
                        <form class="form-inline my-2 my-lg-0 d-none d-md-block" id="logout" action="{{ url('logout')}}" method="POST">
                            @csrf
                            <button class="btn btn-logout btn-navbar-right my-2 my-sm-0 px-3 w-100" type="submit"><i class="fa fa-sign-out"></i>&nbsp;Keluar</button>
                        </form>  
                    </div>
                </li>
                @endauth
                
            </ul>
        </div>
    </nav>
</div>