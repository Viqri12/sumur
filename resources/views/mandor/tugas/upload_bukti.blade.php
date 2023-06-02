<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.MandorSidebar')
          <div class="layout-page">
            @include('layouts.navbar.MandorNavbar')
            <div class="content-wrapper p-lg-4 p-2 bg-white mx-auto col-10 mt-4">
              <div class="d-lg-flex align-items-center col-12">
                <div class="border p-1 rounded-circle" style="width:80px;height:80px">
                  <img src="{{ asset('assets/img/avatars/mandor.png')}}"  style="object-fit: cover;object-position:center center;width:100%;height:100%;" alt="" class="h-auto rounded-circle">
              </div>
              <div class="ms-lg-3 mas-2">
                  <div class="mb-0"><span style="font-size: 10px" class="text-muted">No sumur</span> <h5 class="mb-0">11231293696</h5></div>
                  <div class="small mt-1 text-muted">Kp Nyalindung Rt04 rw04 Cicurug - Sukabumi</div>
              </div>
              </div>
              <div id="accordionOne" class="accordion-collapse" data-bs-parent="#accordionExample" style="">
                <div class="accordion-body row border m-2 rounded-3 p-2 pr-2">
                    <div class="col-lg-6">
                        <section class="py-2 p-2">
                            <ul class="timeline  mb-2">
                                <li class="timeline-item  mb-3">
                                    <h5 class="fw-bold mb-2">Awalan</h5>
                                    <p class=" text-muted mb-0">Proses pengukuran dan persiapan bahan bahan </p>
                                    <div class="row col-12 g-3 mb-0 mt-2">
                                        <div class="col-lg-4  col-6 text-center ">
                                          <form method="POST" enctype="multipart/form-data" action="">
                                              @csrf
                                              <label class="btn btn-white" style="border:dashed; height:80px" for="image">+ Tambah foto</label>
                                              <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                          </form>
                                          @error('image')
                                              {{$message}}
                                          @enderror
                                        </div>
                                        <div class="col-lg-4 col-6 text-center ">
                                          <form method="POST" enctype="multipart/form-data" action="">
                                            @csrf
                                            <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                            <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                        </form>
                                        @error('image')
                                            {{$message}}
                                        @enderror
                                        </div>
                                        <div class="col-lg-4 col-6 text-center ">
                                          <form method="POST" enctype="multipart/form-data" action="">
                                            @csrf
                                            <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                            <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                        </form>
                                        @error('image')
                                            {{$message}}
                                        @enderror
                                        </div>
                                      </div>
                                      <div class="ms-auto me-lg-3 mt-4">
                                        <a href="">
                                        <span class="badge bg-primary">Simpan</span>
                                        </a>
                                    </div>
                                </li>

                                <li class="timeline-item mb-3">
                                    <h5 class="fw-bold mb-2">Kedalaman</h5>
                                    <p class=" text-muted mb-0">Proses penggalian tanah</p>
                                    <div class="row col-12 g-3 mb-0 mt-2">
                                      <div class="col-lg-4  col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                            @csrf
                                            <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                            <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                        </form>
                                        @error('image')
                                            {{$message}}
                                        @enderror

                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror
                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror

                                      </div>
                                    </div>
                                    <div class="ms-auto me-lg-3 mt-4">
                                      <a href="">
                                      <span class="badge bg-primary">Simpan</span>
                                      </a>
                                  </div>
                                </li>

                                <li class="timeline-item mb-3">
                                    <h5 class="fw-bold mb-2">Penembokan</h5>
                                    <p class=" text-muted mb-0">Proses penembokan </p>
                                    <div class="row col-12 g-3 mb-0 mt-2">
                                      <div class="col-lg-4  col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                            @csrf
                                            <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                            <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                        </form>
                                        @error('image')
                                            {{$message}}
                                        @enderror

                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror
                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror

                                      </div>
                                    </div>
                                    <div class="ms-auto me-lg-3 mt-4">
                                      <a href="">
                                      <span class="badge bg-primary">Simpan</span>
                                      </a>
                                  </div>
                                </li>

                                <li class="timeline-item mb-3">
                                    <h5 class="fw-bold mb-2">Pengacian</h5>
                                    <p class=" text-muted mb-0">Proses pengacian pada dinding sumur.</p>
                                    <div class="row col-12 g-3 mb-0 mt-2">
                                      <div class="col-lg-4  col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                            @csrf
                                            <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                            <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                        </form>
                                        @error('image')
                                            {{$message}}
                                        @enderror

                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror
                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror

                                      </div>
                                    </div>
                                    <div class="ms-auto me-lg-3 mt-4">
                                      <a href="">
                                      <span class="badge bg-primary">Simpan</span>
                                      </a>
                                  </div>
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
                                        <form method="POST" enctype="multipart/form-data" action="">
                                            @csrf
                                            <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                            <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                        </form>
                                        @error('image')
                                            {{$message}}
                                        @enderror

                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror
                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror

                                      </div>
                                    </div>
                                    <div class="ms-auto me-lg-3 mt-4">
                                      <a href="">
                                      <span class="badge bg-primary">Simpan</span>
                                      </a>
                                  </div>
                                </li>

                                <li class="timeline-item mb-3">
                                    <h5 class="fw-bold mb-2">Pengecatan</h5>
                                    <p class=" text-muted mb-0">Proses penggalian tanah</p>
                                    <div class="row col-12 g-3 mb-0 mt-2">
                                      <div class="col-lg-4  col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                            @csrf
                                            <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                            <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                        </form>
                                        @error('image')
                                            {{$message}}
                                        @enderror

                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror
                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror

                                      </div>
                                    </div>
                                    <div class="ms-auto me-lg-3 mt-4">
                                      <a href="">
                                      <span class="badge bg-primary">Simpan</span>
                                      </a>
                                  </div>
                                </li>

                                <li class="timeline-item mb-3">
                                    <h5 class="fw-bold mb-2">Instalasi Mesin</h5>
                                    <p class=" text-muted mb-0">Proses penggalian tanah</p>
                                    <div class="row col-12 g-3 mb-0 mt-2">
                                      <div class="col-lg-4  col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                            @csrf
                                            <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                            <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                        </form>
                                        @error('image')
                                            {{$message}}
                                        @enderror

                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror
                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror

                                      </div>
                                    </div>
                                    <div class="ms-auto me-lg-3 mt-4">
                                      <a href="">
                                      <span class="badge bg-primary">Simpan</span>
                                      </a>
                                  </div>
                                </li>

                                <li class="timeline-item mb-3">
                                    <h5 class="fw-bold mb-2">Simulasi</h5>
                                    <p class=" text-muted mb-0">Proses penggalian tanah</p>
                                    <div class="row col-12 g-3 mb-0 mt-2">
                                      <div class="col-lg-4  col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                            @csrf
                                            <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                            <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                        </form>
                                        @error('image')
                                            {{$message}}
                                        @enderror

                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ; height:80px;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror
                                      </div>
                                      <div class="col-lg-4 col-6 text-center ">
                                        <form method="POST" enctype="multipart/form-data" action="">
                                          @csrf
                                          <label class="btn btn-white" style="border:dashed ;" for="image">+ Tambah foto</label>
                                          <input onchange="this.form.submit()" type="file" class="d-none" name="image" id="image">
                                      </form>
                                      @error('image')
                                          {{$message}}
                                      @enderror

                                      </div>
                                    </div>
                                    <div class="ms-auto me-lg-3 mt-4">
                                      <a href="">
                                      <span class="badge bg-primary">Simpan</span>
                                      </a>
                                  </div>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <!-- Section: Timeline -->
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</x-app-layout>