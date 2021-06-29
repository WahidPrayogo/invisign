<!-- Navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand ms-3" href="{{ route('home')}}">
            <img src="{{ url('frontend/images/Icon_LW_C_H.png')}}" alt="Logo Invisign" class="align-items-center w-50">
        </a>
        <button 
            class="navbar-toggler navbar-toggler-right me-3" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navb"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        
        
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ms-auto mr-4 align-items-center">
                <li class="nav-item mx-md-2 ">
                    <a class="nav-link" href="{{ route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown mx-md-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDrop"
                        data-bs-toggle="dropdown">
                    Produk
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right  ">
                        
                        <a class="dropdown-item" href="{{ route('dinvitation')}}">Design Invitation</a>
                        <a class="dropdown-item" href="{{ route('dproduct')}}">Design Produk</a>
                    </ul>
                </li>
                <li class="nav-item mx-md-2">
                    <a class="nav-link" href="{{ route('home')}}/#Package">Promo</a>
                </li>
                
              
            
            @guest
            <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0" type="button" 
                    onclick="event.preventDefault(); location.href='{{ url('login')}}';">Login / Register &nbsp;<i class="fa fa-user"></i></button>
                </form>
                
                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login  my-2 my-sm-0 px-4" type="button" 
                    onclick="event.preventDefault(); location.href='{{ url('login')}}';">Login / Register &nbsp;<i class="fa fa-user"></i></button>
                </form>  
            @endguest
            
             
            @auth
            <li class="nav-item mx-md-2">
                <a class="nav-link" href="{{ route('myorder.index')}}">Cek pesanan</a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }} &nbsp;</i></span>
                            <img class="img-profile rounded-circle " height="40" src="https://ui-avatars.com/api/?name={{ Auth::user()->username }}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
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