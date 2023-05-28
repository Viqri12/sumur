<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.KepalaSidebar')
          <div class="layout-page">
            @include('layouts.navbar.KepalaNavbar')
            <div class="content-wrapper p-lg-4 p-2">

                <div class="card shadow-lg p-lg-3 p-1">
                    <div class="d-lg-flex align-items-center p-2 justify-content-between">
                        <div class="form-group col-lg-3 ">
                            <div class="input-group">
                                <input type="text" class="form-control border-end-0" placeholder="Cari..">
                                <span class="input-group-text border-start-0">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                        </div>
                        {{-- <div>
                            <a href="" class="btn btn-primary">
                                <i class="fas fa-plus"></i><span class="ms-2">Data</span>
                            </a>
                        </div> --}}
                    </div>
                    <div class="my-3 p-2">
                        <h6 class="mb-0">List Mandor</h6>
                        <div class="row g-3  mt-1">
                            @for($i =0; $i < 9;$i++)
                                <div class="col-lg-4">
                                    <div class="border rounded-3 p-3">
                                        <div class="d-flex align-items-center">
                                            <div class="border p-1 rounded-circle">
                                                <img src="{{ asset('assets/img/avatars/mandor.png')}}" style="object-fit: cover;object-position:center center;" alt="" class="w-px-40  h-auto rounded-circle">
                                            </div>
                                            <div class="ms-2 mb-0">
                                                <div class="fw-bold">Ade Abdurahman</div>
                                                <p class="mb-0 small">Lorem ipsum dolor sit amet consectetur </p>
                                                <div style="font-size: 11px">Aktif <span class="fw-semibold">5 menit yang lalu</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="demo-inline-spacing">
                            <!-- Basic Pagination -->
                            <nav aria-label="Page navigation">
                              <ul class="pagination">
                                <li class="page-item first">
                                  <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                                </li>
                                <li class="page-item prev">
                                  <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="javascript:void(0);">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="javascript:void(0);">2</a>
                                </li>
                                <li class="page-item active">
                                  <a class="page-link" href="javascript:void(0);">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="javascript:void(0);">4</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="javascript:void(0);">5</a>
                                </li>
                                <li class="page-item next">
                                  <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
                                </li>
                                <li class="page-item last">
                                  <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                                </li>
                              </ul>
                            </nav>
                            <!--/ Basic Pagination -->
                          </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    <script>

    </script>
</x-app-layout>
