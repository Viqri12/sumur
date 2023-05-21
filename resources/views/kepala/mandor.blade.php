<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.KepalaSidebar')
          <div class="layout-page">
            @include('layouts.navbar.KepalaNavbar')
            <div class="content-wrapper p-4">

                <div class="card shadow-lg p-3">
                    <div class="form-group col-lg-3">
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0" placeholder="Cari..">
                            <span class="input-group-text border-start-0">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="my-3 p-2">
                        <h6>List Mandor</h6>

                        <div class="row">
                            <template x-for="item in 10" :key="item">
                                <div class="col-lg-4 border rounded-3">
                                    <div class="d-flex align-items-center p-2">
                                        <div>
                                            <img src="../assets/img/avatars/1.png" alt="" class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</x-app-layout>
