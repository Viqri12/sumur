<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.AdminSidebar')
          <div class="layout-page">
            @include('layouts.navbar.AdminNavbar')
            <div class="content-wrapper">
                <div class="container">
                    <h1 class="text-center mt-4">Tambah Data Kepala</h1>
                    <div class="row">
                        <div class="">
                            <form action="{{ route('admin.tambah_data_store')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">nama</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama">
                                </div>
                                <div class="mb-3">
                                  <label for="nama" class="form-label">Email address</label>
                                  <input type="email" name="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="Masukan email">
                                </div>
                                <div class="mb-3">
                                  <label for="password" class="form-label">Password</label>
                                  <input type="password" name="password" class="form-control" id="password" placeholder="Masukan Password">
                                </div>
                               
                                  <button type="submit" class="btn btn-primary mb-5">Submit</button>
                              </form>
                            
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
    </div>
</x-app-layout>