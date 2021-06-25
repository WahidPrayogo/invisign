
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
        <div class="sidebar-brand-icon ">
        <img src="{{url('frontend\images\Icon_W.png')}}" alt=""class="w-50">
        </div>
        <div class="sidebar-brand-text mx-3">Invisign Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Produk Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Produk</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('product-detail.index')}}">Design Invitation</a>
            <a class="collapse-item" href="cards.html">Design Produk</a>
        </div>
        </div>
    </li>

    <!-- Nav Item - Product Detail Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('product-detail.index')}}" >
        <i class="fas fa-fw fa-wrench"></i>
        <span>Product Details</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('product-type.index')}}" >
        <i class="fas fa-fw fa-wrench"></i>
        <span>Product Type</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('product-discount.index')}}" >
        <i class="fas fa-fw fa-wrench"></i>
        <span>Product Disc</span>
        </a>
    </li>

    <!-- Nav Item - Gallery Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gallery.index')}}" >
        <i class="fa fa-image"></i>
        <span>Gallery</span>
        </a>
    </li>

    <!-- Nav Item - Transaction Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('transaction.index')}}" >
        <i class="fa fa-credit-card"></i>
        <span>Transaksi</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('testimony.index')}}" >
        <i class="fa fa-credit-card"></i>
        <span>Testimony</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Go to Web Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('home')}}" >
            <i class="fa fa-globe"></i>
        <span>Go to Web</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  
</ul>
<!-- End of Sidebar -->