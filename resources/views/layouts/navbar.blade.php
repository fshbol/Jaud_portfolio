<div class="bg-black text-white h-100 d-flex flex-column justify-content-start p-3">
    <h4 class="text-center mb-4">
        My Portfolio
    </h4>

    <div class="text-center mb-3">
        <img src="{{ asset('assets/eriwinkwhite.gif') }}" alt="Eri Wink White" class="img-fluid" style="max-width:150px;">
    </div>

    <ul class="nav flex-column text-center flex-grow-1 d-none d-lg-flex">
        <li class="nav-item mb-2">
            <a href="{{ url('/') }}" class="nav-link text-white">Home</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ url('/skills') }}" class="nav-link text-white">Skills</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ url('/experience') }}" class="nav-link text-white">Experience</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ url('/project') }}" class="nav-link text-white">Projects</a>
        </li>
        <li class="nav-item mb-2">
            <a href="{{ url('/contact') }}" class="nav-link text-white">Contact</a>
        </li>
    </ul>

    <ul class="nav justify-content-center d-flex d-lg-none mt-3">
        <li class="nav-item mx-2">
            <a href="{{ url('/') }}" class="nav-link text-white">Home</a>
        </li>
        <li class="nav-item mx-2">
            <a href="{{ url('/skills') }}" class="nav-link text-white">Skills</a>
        </li>
        <li class="nav-item mx-2">
            <a href="{{ url('/experience') }}" class="nav-link text-white">Experience</a>
        </li>
        <li class="nav-item mx-2">
            <a href="{{ url('/project') }}" class="nav-link text-white">Projects</a>
        </li>
        <li class="nav-item mx-2">
            <a href="{{ url('/contact') }}" class="nav-link text-white">Contact</a>
        </li>
    </ul>
</div>