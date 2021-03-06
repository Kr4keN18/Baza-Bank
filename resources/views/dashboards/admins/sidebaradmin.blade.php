<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <div class="navbar-brand m-0" target="_blank">
        <!-- <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> -->
        <span class="ms-1 font-weight-bold text-white">Bank Presto</span>
    </div>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/dashboard')) ? 'active active bg-gradient-primary' : '' }}" href="dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Strona glowna</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/pracownicyadmin')) ? 'active active bg-gradient-primary' : '' }}" href="pracownicyadmin">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Pracownicy</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/kantoradmin')) ? 'active active bg-gradient-primary' : '' }}" href="kantoradmin">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Kantor</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Dane Osobowe</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ (request()->is('admin/profile')) ? 'active active bg-gradient-primary' : '' }}" href="profile">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profil u??ytkownika</span>
          </a>
        </li>
        
      </ul>
    </div>
   <!-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <div class="btn bg-gradient-primary mt-4 w-100" type="button">Przycisk</a>
      </div>
    </div> -->
  </aside>