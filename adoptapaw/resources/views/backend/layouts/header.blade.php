<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="#">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-success align-middle" type="submit">Logout</button>
              </form>
        </ul>
    </div>
</nav>
