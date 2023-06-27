<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.KepalaSidebar')
          <div class="layout-page">
            @include('layouts.navbar.KepalaNavbar')
            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Pengaturan /</span> Akun</h4>
                    <div class="row">
                      <div class="col-md-12">

                        <div class="card mb-4">
                          <h5 class="card-header">Profile Details</h5>
                          <!-- Account -->
                          <div class="card-body">
                            <form id="formAccountSettings" enctype="multipart/form-data" method="POST" action="{{ route('kepala.update_foto')}}">
                              @csrf
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                              <img src="{{ auth()->user()->image ? asset('storage/post-images/'.auth()->user()->image) : asset('assets/img/avatars/mandor.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                              <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                  <span class="d-none d-sm-block">Upload photo</span>
                                  <i class="bx bx-upload d-block d-sm-none"></i>
                                  <input type="file" id="upload" name="image" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                                </label>
                                <p class="text-muted mb-0">Upload foto dengan format PNG, JPG, JPEG</p>
                              </div>
                            </div>
                          </div>
                          <hr class="my-0">
                          <div class="card-body">
                              <div class="row">
                                <div class="mb-3 col-md-6">
                                  <label for="name" class="form-label">Nama</label>
                                  <input class="form-control" type="text" id="name" value="{{ auth()->user()->name }}" name="name" autofocus="" placeholder="Masukan Nama">
                                  @error('name')
                                  <p class="small text-danger">{{$message}}</p>
                                  @enderror
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label class="form-label" for="no_hp">Nomor Hp</label>
                                  <div class="input-group input-group-merge">
                                    <span class="input-group-text">IDN (+62)</span>
                                    <input type="number" id="no_hp" name="no_hp" value="{{ auth()->user()->no_hp }}" class="form-control" placeholder="876 543 210">
                                    @error('no_hp')
                                    <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                  </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label for="alamat" class="form-label">Alamat</label>
                                  <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $kepala->alamat }}" placeholder="Masukan Alamat">
                                  @error('alamat') 
                                  <p class="small text-danger">{{$message}}</p>
                                  @enderror 
                                </div>
                              </div>
                              <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                              </div>
                            </form>
                          </div>
                          <!-- /Account -->
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
    </div>
</x-app-layout>
