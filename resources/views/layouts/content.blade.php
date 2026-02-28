@include('layouts.header')

<div class="container-fluid min-vh-100 d-flex p-0">
    <div class="row flex-grow-1 w-100 m-0">

        <!-- Sidebar -->
        <div class="col-md-3 p-0 sidebar-container">
            @include('layouts.navbar')
        </div>

        <!-- Main Content -->
        <div class="col-md-9 p-4 main-content">
            @yield('content')
        </div>

    </div>
</div>

@include('layouts.footer')