<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
           
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Adoptapaw</span>
        </a>

        <a href="#" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item ">
            <a href="{{ url('backend')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        @can('admin') 
        <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Layouts">User</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('user-backend')}}" class="menu-link">
                        <div data-i18n="Without menu">Show User</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('/user-backend/create')}}" class="menu-link">
                        <div data-i18n="Without menu">Add User</div>
                    </a>
                </li>
            </ul>
        </li>
        @endcan

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Adopt</span>
        </li>

        
        <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-buildings"></i>
                <div data-i18n="Account Settings">Parent</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('parent-backend')}}" class="menu-link">
                        <div data-i18n="Account">Show Parent</div>
                    </a>
                </li>
            </ul>
            {{-- <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('/parent-backend/create')}}" class="menu-link">
                        <div data-i18n="Account">Add Parent</div>
                    </a>
                </li>
            </ul> --}}
        </li>
       

        <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxl-gitlab"></i>
                <div data-i18n="Authentications">Pet</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('pet-backend')}}" class="menu-link">
                        <div data-i18n="Basic">Show Pet</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('/pet-backend/create')}}" class="menu-link">
                        <div data-i18n="Basic">Add Pet</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-highlight"></i>
                <div data-i18n="Authentications">Pet Type</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('pet_type-backend')}}" class="menu-link">
                        <div data-i18n="Basic">Show Pet Type</div>
                    </a>
                </li>
            </ul>
            @can('admin')
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('/pet_type-backend/create')}}" class="menu-link" >
                        <div data-i18n="Basic">Add Pet Type</div>
                    </a>
                </li>
            </ul>
            @endcan
        </li>
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Owned Pet</div>
            </a>
        </li> --}}

         
        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Form</span></li>
        <!-- Forms -->
        <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Adoption App</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('adoption_app-backend')}}" class="menu-link">
                        <div data-i18n="Basic Inputs">Show Form</div>
                    </a>
                </li>
            </ul>
            @can('admin')
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('/adoption_app-backend/create')}}" class="menu-link">
                        <div data-i18n="Basic Inputs">Add New Form</div>
                    </a>
                </li>
            </ul>

          <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Berita</span></li>
        <!-- Forms -->
        <li class="menu-item">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Form Elements">Berita</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('berita-backend')}}" class="menu-link">
                        <div data-i18n="Basic Inputs">Show Berita</div>
                    </a>
                </li>
            </ul>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('/berita-backend/create')}}" class="menu-link">
                        <div data-i18n="Basic Inputs">Add Berita</div>
                    </a>
                </li>
            </ul>
            @endcan
    </ul>
</aside>
