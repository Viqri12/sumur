<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.KepalaSidebar')
          <div class="layout-page">
            @include('layouts.navbar.KepalaNavbar')
            <div class="content-wrapper">


                <ul>
                    <li>Alamat</li>
                    <li>Nama donatur</li>
                    <li>nomor sumur</li>
                    <li>cetak banner</li>
                </ul>

            </div>
          </div>
        </div>
    </div>
</x-app-layout>
