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
                        <div class="col-8 mx-auto">
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
                                <div class=" mb-6 flex flex-col">
                                  <label for="nama_vendor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kepala</label>
                                  <select class="w-80" name="user_id" id="">
                                      <option value="" disabled selected>Pilih Kepala</option>
                                     @foreach($data as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                     @endforeach
                                  </select>
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