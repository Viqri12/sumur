<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.AdminSidebar')
          <div class="layout-page">
            @include('layouts.navbar.AdminNavbar')
            <div class="content-wrapper">
                <div class="container">
                    <h4 class=" mt-4">Tambah Data Kepala</h4>
                    <div class="row">
                        <div class="col-lg-6 bg-white">
                            <form class="mt-4" action="{{ route('admin.tambah_data_store')}}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama">
                                        @error('name')<p class="small text-danger">{{$message}}</p>@enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Masukan email">
                                        @error('email')<p class="small text-danger">{{$message}}</p>@enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">No Ho</label>
                                        <input type="number" name="no_hp" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Nomor HP">
                                        @error('no_hp')<p class="small text-danger">{{$message}}</p>@enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="" cols="5" rows="6" placeholder="Alamat"></textarea>
                                        @error('alamat')<p class="small text-danger">{{$message}}</p>@enderror
                                    </div>
                                    <a href="{{ route('admin.kepala')}}" class="btn btn-light border mb-5">Batal</a>
                                   <button type="submit" class="btn ms-2 btn-primary mb-5">Simpan</button>
                                </div>
                              </form>

                        </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
    </div>
</x-app-layout>
