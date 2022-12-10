<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head')
<body id="page-top">
    <div id="wrapper">
        @include('layouts.partials.menus')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <form class="form-inline"> <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> <i class="fa fa-bars"></i> </button> </form>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"> <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append"> <button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i> </button> </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none"> <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-search fa-fw"></i> </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group"> <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append"> <button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i> </button> </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow"> <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span> <img class="img-profile rounded-circle" src="{{ asset('img/undraw_profile.svg') }}"> </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> <a class="dropdown-item" href="#"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile </a> <a class="dropdown-item" href="#"> <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings </a> <a class="dropdown-item" href="#"> <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log </a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('layouts.partials.footer')
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
    @include('layouts.partials.script')
</body>

</html>