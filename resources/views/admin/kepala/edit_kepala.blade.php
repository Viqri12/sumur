<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.AdminSidebar')
          <div class="layout-page">
            @include('layouts.navbar.AdminNavbar')
            <div class="content-wrapper">
                <div class="container">
                    <h4 class="mt-4">Edit Data Kepala</h4>
                    <div class="row">
                        <div class="col-10 bg-white">
                            <form class="mt-4" action="{{ route('admin.kepala_update')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$id}}">
                                <div class="col-8">         
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