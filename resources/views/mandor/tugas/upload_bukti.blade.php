<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.MandorSidebar')
          <div class="layout-page">
            @include('layouts.navbar.MandorNavbar')
            <div class="content-wrapper p-lg-4 p-2">

            </div>
          </div>
        </div>
    </div>
</x-app-layout>