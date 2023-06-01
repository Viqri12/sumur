<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.KepalaSidebar')
          <div class="layout-page">
            @include('layouts.navbar.KepalaNavbar')
            <div class="content-wrapper p-lg-4 p-2">
                <div class="card p-3 shadow-lg">
                    <div class="row flex-column-reverse     flex-lg-row g-3">
                        <div class="col-lg-6">
                            <form action="" method="POST">
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">No Sumur</label>
                                    <input type="text" class="form-control" placeholder="Nomor Sumur" name="no_sumur">
                                    @error('no_sumur')<span class="small text-danger">{{ $message  }}</span>@enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Nama Donatur</label>
                                    <input type="text" class="form-control" placeholder="Nama Donatur" name="nama_donatur">
                                    @error('nama_donatur')<span class="small text-danger">{{ $message  }}</span>@enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">Keterangan</label>
                                    <textarea name="keterangan" name="keterangan" class="form-control" id="" cols="30" rows="3" placeholder="Keterangan"></textarea>
                                    @error('keterangan')<span class="small text-danger">{{ $message  }}</span>@enderror
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/img/banner.jpeg') }}" style="object-fit: cover;object-psition:center center;" height="300" class="col-12 rounded-3" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
