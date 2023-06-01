<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.AdminSidebar')
          <div class="layout-page">
            @include('layouts.navbar.AdminNavbar')
            <div class="content-wrapper">
                <div class="container"> 
                    <h4 class="mt-4">Edit Data Mandor</h4>
                    <div class="row">
                        <div class="col-10 bg-white">
                            <form class="mt-4" action="{{ route('admin.update_mandor')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$id}}">
                                <div class="col-8">
                                  <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{ $data->user->name }}" id="name" placeholder="Masukan Nama">
                                    @error('name')
                                    <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                   </div>
                                  <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" class="form-control" value="{{ $data->user->name }}" id="name" placeholder="Masukan Nama">
                                    @error('name')
                                    <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                   </div>
                                  <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $data->user->email }}" id="email" placeholder="Masukan email">
                                    @error('email')
                                    <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                   </div>
                                  <div class="mb-3">
                                    <label for="no_hp" class="form-label">No Hp</label>
                                    <input type="number" name="no_hp" class="form-control" value="{{ $data->no_hp }}" id="no_hp" placeholder="Nomor Hp">
                                    @error('no_hp')
                                    <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                   </div>
                                   <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="" cols="5" rows="6" placeholder="Alamat">{{ $data->alamat }}</textarea>
                                    @error('alamat')
                                    <p class="small text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                  <a href="{{ route('admin.kepala')}}" class="btn btn-light border mb-5">Batal</a>
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