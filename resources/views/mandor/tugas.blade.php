<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.MandorSidebar')
          <div class="layout-page">
            @include('layouts.navbar.MandorNavbar')
            <div class="content-wrapper p-lg-4 p-2">
              <div class="card p-lg-3 p-1 mt-2">
                <div class="my-3">
                    <h5>Tugas Berjalan</h5>
                    <div>
                        <div class="accordion mt-3" id="accordionExample">
                            @for($i=0; $i < 2;$i++)
                            <div class="card accordion-item {{$i+1}}">
                              <h2 class="accordion-header" id="headingOne{{$i+1}}">
                                <div type="" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne{{$i+1}}" aria-expanded="{{ $i+1 == 1 ? 'true' : 'false' }}" aria-controls="accordionOne{{$i+1}}">
                                    <div class="d-lg-flex align-items-center col-12">
                                        <div class="border p-1 rounded-circle" style="width:80px;height:80px">
                                            <img src="{{ asset('assets/img/avatars/mandor.png')}}"  style="object-fit: cover;object-position:center center;width:100%;height:100%;" alt="" class="h-auto rounded-circle">
                                        </div>
                                        <div class="ms-lg-3 mas-2">
                                            <div class="mb-0"><span style="font-size: 10px" class="text-muted">No sumur</span> <h5 class="mb-0">11231293696</h5></div>
                                            <div class="small mt-1 text-muted">Kp Nyalindung Rt04 rw04 Cicurug - Sukabumi</div>
                                        </div>
                                        <div class="ms-auto me-lg-3">
                                            <a href="{{ route('mandor.upload_bukti')}}">
                                            <span class="badge bg-secondary">Detail</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                              </h2>
                            </div>
                            @endfor
                          </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
    </div>
</x-app-layout>