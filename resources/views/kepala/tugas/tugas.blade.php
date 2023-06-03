<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.KepalaSidebar')
          <div class="layout-page">
            @include('layouts.navbar.KepalaNavbar')
            <div class="content-wrapper p-lg-4 p-2">
                <div class="card p-lg-3 p-1">
                    <div class="d-lg-flex justify-content-between align-items-center p-2 p-lg-0">
                        <a href="{{ route('kepala.kirim_tugas') }}" class="btn btn-primary mb-3 mb-lg-0">
                            <i class="fas fa-paper-plane"></i>
                            <span class="ms-2">Kirim Tugas</span>
                        </a>

                        <form action="" method="GET">
                            <div class="form-gorup d-flex align-items-center">
                                <input type="search" class="form-control" placeholder="Cari tugas...">
                                <button type="submit" class="btn btn-primary ms-2">Cari</button>
                            </div>

                        </form>
                    </div>
                    <div class="my-3">
                        <h5>Tugas Berjalan</h5>
                        <div>
                            <div class="accordion mt-3" id="accordionExample">
                                @foreach($tugas as $item)
                                <div class="card accordion-item {{$loop->iteration}}">
                                  <h2 class="accordion-header" id="headingOne{{$loop->iteration}}">
                                    <div type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne{{$loop->iteration}}" aria-expanded="{{ $loop->iteration == 1 ? 'true' : 'false' }}" aria-controls="accordionOne{{$loop->iteration}}">
                                        <div class="d-lg-flex align-items-center col-12">
                                            <div class="border p-1 rounded-circle" style="width:60px;height:60px">
                                                <img src="{{ asset('assets/img/avatars/mandor.png')}}"  style="object-fit: cover;object-position:center center;width:100%;height:100%;" alt="" class="h-auto rounded-circle">
                                            </div>
                                            <div class="ms-lg-3 mas-2 col-lg-4">
                                                <div class="mb-0"><span style="font-size: 10px" class="text-muted">No sumur</span> <h5 class="mb-0">{{ $item->tugas->no_sumur }}</h5></div>
                                                <div class="small mt-1 text-muted">{{ $item->alamat ?? '-'}}</div>
                                                <div class="progress my-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;padding:5px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                </div>
                                                <small>{{ date('d F Y',strtotime($item->created_at))}}</small>
                                            </div>
                                            <div class="ms-auto me-lg-3">
                                                @if($item->tugas->status == 0)
                                                <span class="badge bg-secondary">Menunggu</span>
                                                @endif
                                                @if($item->tugas->status == 1)
                                                <span class="badge bg-warning">Berjalan</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                  </h2>

                                  <div id="accordionOne{{$loop->iteration}}" class="accordion-collapse {{ $loop->iteration == 1 ? 'collapse show' : 'collapse' }}" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body row border m-2 rounded-3 p-2 pr-2">
                                        <div class="col-lg-6">
                                            <section class="py-2 p-2">
                                                <ul class="timeline  mb-2">
                                                    <li class="timeline-item  mb-3">
                                                        <h5 class="fw-bold mb-2">Awalan</h5>
                                                        <p class=" text-muted mb-0">Proses pengukuran dan persiapan bahan bahan </p>
                                                        @if($item->awalan)
                                                            <div class="row col-12 g-3 mb-0 mt-2">
                                                                @foreach ($item->awalan as $awalan)
                                                                    <div class="col-lg-4  col-6 text-center ">
                                                                        <img src="{{ asset('assets/img/elements/1.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                                    </div>
                                                                    <div class="col-lg-4 col-6 text-center ">
                                                                        <img src="{{ asset('assets/img/elements/2.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                                    </div>
                                                                    <div class="col-lg-4 col-6 text-center ">
                                                                        <img src="{{ asset('assets/img/elements/3.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @else
                                                            <div class="mt-2">
                                                                <h6 class="fw-bold">Belum ada laporan</h6>
                                                            </div>
                                                        @endif
                                                        <p class="text-muted mt-2 small">1 hari yang lalu</p>
                                                    </li>

                                                    <li class="timeline-item mb-3">
                                                        <h5 class="fw-bold mb-2">Kedalaman</h5>
                                                        <p class=" text-muted mb-0">Proses penggalian tanah</p>
                                                        <div class="row g-3 mb-0 mt-2">
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/4.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/5.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/4.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                        </div>
                                                        <p class="text-muted mt-2 small">1 hari yang lalu</p>
                                                    </li>

                                                    <li class="timeline-item mb-3">
                                                        <h5 class="fw-bold mb-2">Penembokan</h5>
                                                        <p class=" text-muted mb-0">Proses penembokan </p>
                                                        <div class="row g-3 mb-0 mt-2">
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/7.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/2.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/3.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                        </div>
                                                        <p class="text-muted mt-2 small">1 hari yang lalu</p>
                                                    </li>

                                                    <li class="timeline-item mb-3">
                                                        <h5 class="fw-bold mb-2">Pengacian</h5>
                                                        <p class=" text-muted mb-0">Proses pengacian pada dinding sumur.</p>
                                                        <div class="row g-3 mb-0 mt-2">
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/1.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/2.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/3.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                        </div>
                                                        <p class="text-muted mt-2 small">1 hari yang lalu</p>
                                                    </li>
                                                </ul>
                                            </section>
                                        </div>
                                        <div class="col-lg-6">
                                            <section class="py-2 p-2 ">
                                                <ul class="timeline  mb-2">
                                                    <li class="timeline-item  mb-3">
                                                        <h5 class="fw-bold mb-2">Proses Kemarik</h5>
                                                        <p class=" text-muted mb-0">Proses penggalian tanah</p>
                                                        <div class="row col-12 g-3 mb-0 mt-2">
                                                            <div class="col-lg-4  col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/1.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/2.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/3.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                        </div>
                                                        <p class="text-muted mt-2 small">1 hari yang lalu</p>
                                                    </li>

                                                    <li class="timeline-item mb-3">
                                                        <h5 class="fw-bold mb-2">Pengecatan</h5>
                                                        <p class=" text-muted mb-0">Proses penggalian tanah</p>
                                                        <div class="row g-3 mb-0 mt-2">
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/1.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/2.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/3.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                        </div>
                                                        <p class="text-muted mt-2 small">1 hari yang lalu</p>
                                                    </li>

                                                    <li class="timeline-item mb-3">
                                                        <h5 class="fw-bold mb-2">Instalasi Mesin</h5>
                                                        <p class=" text-muted mb-0">Proses penggalian tanah</p>
                                                        <div class="row g-3 mb-0 mt-2">
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/1.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/2.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/3.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                        </div>
                                                        <p class="text-muted mt-2 small">1 hari yang lalu</p>
                                                    </li>

                                                    <li class="timeline-item mb-3">
                                                        <h5 class="fw-bold mb-2">Simulasi</h5>
                                                        <p class=" text-muted mb-0">Proses penggalian tanah</p>
                                                        <div class="row g-3 mb-0 mt-2">
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/1.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/2.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                            <div class="col-lg-4 col-6 text-center ">
                                                                <img src="{{ asset('assets/img/elements/3.jpg') }}" class="rounded-2 col-12" style="object-fit: cover;object-position:center center;" height="80" alt="">
                                                            </div>
                                                        </div>
                                                        <p class="text-muted mt-2 small">1 hari yang lalu</p>
                                                    </li>
                                                </ul>
                                            </section>
                                        </div>
                                        <!-- Section: Timeline -->
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                              </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</x-app-layout>
