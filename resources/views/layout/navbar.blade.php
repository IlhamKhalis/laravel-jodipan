<nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid px-0">
        <a
            class="navbar-brand font-weight-bolder ms-sm-3"
            href="{{ route('home.home') }}"
            rel="tooltip"
            title="Designed and Coded by Creative Tim"
            data-placement="bottom"
        >
            <img src="{{ asset('assets/img/logo-ct-dark.png') }}" alt="" style="width: 32px; height: auto;">
        </a>
        <button class="navbar-toggler mb-1" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item">
                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" href="{{ route('home.gallery') }}">
                        Album
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" href="{{ route('home.about') }}">
                        Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" href="{{ route('home.faq') }}">
                        Faq
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" href="#" id="dropdownMenuPages" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/img/id.png') }}" alt="Indonesian" class="me-2" style="width: 20px; height: auto;"> ID <img src="{{ asset('assets/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-auto ms-md-2">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                        <li>
                            <a href="{{ route('home.home') }}" class="dropdown-item d-flex align-items-center">
                                <img src="{{ asset('assets/img/id.png') }}" alt="Indonesian" class="me-2" style="width: 20px; height: auto;"> <span>ID</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home.homeEn') }}" class="dropdown-item d-flex align-items-center">
                                <img src="{{ asset('assets/img/en.png') }}" alt="English" class="me-2" style="width: 20px; height: auto;"> <span>EN</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
