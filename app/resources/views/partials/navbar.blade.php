<nav class="navbar navbar-expand-lg top-navbar">

    

    <div class="container-fluid">

        <button class="btn btn-light me-3" id="toggleSidebar">

            <i class="bi bi-list"></i>

        </button>

        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">

            <img src="{{ storeLogo() }}" alt="Logo" height="45">

            <span class="ms-2 fw-bold">
                {{ setting('store_name', '') }}
            </span>

        </a>

    

        <div class="ms-auto d-flex align-items-center">

            <span class="me-4" id="liveClock"></span>

            @auth
            <span class="me-4">

                <i class="bi bi-person-circle"></i>

                {{ auth()->user()->name }}

            </span>

            <form action="{{ route('logout') }}" method="POST">

                @csrf

                <button class="btn btn-danger btn-sm">

                    <i class="bi bi-box-arrow-right"></i>

                    خروج

                </button>

            </form>
            
            @endauth

            

        </div>

    </div>

</nav>