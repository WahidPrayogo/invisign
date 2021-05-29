<!-- Navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand ms-3" href="#">
        <img src="frontend/images/Icon Invisign_Icon Horizontal Colored.png" alt="Logo Invisign">
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
        <ul class="navbar-nav ms-auto mr-3">
        <li class="nav-item mx-md-2">
            <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item dropdown mx-md-2">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDrop"
                data-bs-toggle="dropdown">
            Produk
            </a>

            <ul class="dropdown-menu">
                <li>
                <a class="dropdown-item" href="#">Design Invitation &raquo;</a>
                <ul class="dropdown-menu dropdown-submenu">
                    <li>
                    <a class="dropdown-item" href="#" >Static Invitation</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#" >Video Invitation</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#" >Website Invitation</a>
                    </li>
                </ul>
                </li>
                <li>
                <a class="dropdown-item" href="#">Design Produk</a>
                </li>
                </ul>

        </li>
        <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Promo</a>
        </li>
        <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Cek pesanan</a>
        </li>
        </ul>  
        <!-- Mobile Button -->
        <form class="form-inline d-sm-block d-md-none">
        <button class="btn btn-login my-2 my-sm-0">Daftar / Masuk</button>
        </form>
        
        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">Daftar / Masuk</button>
        </form>  
    </div>
    </nav>
</div>