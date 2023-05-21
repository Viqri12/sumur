<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{ route('kepala.dashboard_kepala')}}" class="app-brand-link">
        <span class="app-brand-logo d-flex align-items-center demo">
          <img src="{{ asset('assets/img/logo.png')}}" width="30" alt="">
          <span class="fw-bold app-brand-text ms-2">Tebar Senyum</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 ps">
      <!-- Dashboard -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Dashboard</span>
      </li>
      <li class="menu-item ">
        <a href="{{ route('kepala.dashboard_kepala')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pages</span>
      </li>
      <div class="align-items-center ms-3">
        {{-- <li class="menu-item ">
          <a href="{{ route('kepala.donatur') }}" class="menu-link">
            <i class="fa-solid fa-user-secret me-3"></i>
            <div data-i18n="Analytics">Donatur</div>
          </a>
        </li> --}}
        <li class="menu-item ">
          <a href="{{ route('kepala.mandor') }}" class="menu-link">
            <i class="fa-solid fa-helmet-safety me-3"></i>
            <div data-i18n="Analytics">Mandor</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="{{ route('kepala.tugas') }}" class="menu-link">
            <i class="fa-solid fa-book me-3"></i>
            <div data-i18n="Analytics">Tugas</div>
          </a>
        </li>
        <li class="menu-item ">
            <a href="{{ route('kepala.tugas') }}" class="menu-link">
              <i class="fa-solid fa-book me-3"></i>
              <div data-i18n="Analytics">Tugas di tolak</div>
            </a>
          </li>
        <li class="menu-item ">
            <a href="{{ route('kepala.tugas') }}" class="menu-link">
              <i class="fa-solid fa-book me-3"></i>
              <div data-i18n="Analytics">Tagihan</div>
            </a>
          </li>
        <li class="menu-item ">
          <a href="{{ route('kepala.role_akses') }}" class="menu-link">
            <i class="fa-solid fa-list-check me-3"></i>
            <div data-i18n="Analytics">Riwayat Tugas</div>
          </a>
        </li>
      </div>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
  </aside>
