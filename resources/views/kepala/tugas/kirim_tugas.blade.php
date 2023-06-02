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
                            <form action="{{ route('kepala.send_tugas')}}" method="POST">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="" class="form-label">No Sumur</label>
                                    <input type="number" class="form-control" placeholder="Nomor Sumur" name="no_sumur">
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

                                </div>
                                <div x-data="{
                                    mandor : '',
                                    mandor_id : '',
                                    dataMandor : {{ json_encode($mandor) }},
                                    get FilterMandor(){
                                        return this.dataMandor.filter(val => {
                                            return val.user.name.toLowerCase().includes(this.mandor.toLowerCase())
                                        })
                                    }
                                }" class="form-group mb-3" x-init="$watch('mandor',value => {
                                    if(FilterMandor.length == 0){
                                        setTimeout(() => {
                                            mandor = ''
                                        }, 200);
                                    }
                                }

                                )">
                                    <label for="" class="form-label">Pilih mandor</label> <br>
                                    <div class="btn-group col-12 ">
                                        <input type="hidden" x-model="mandor_id" name="mandor_id">
                                        <input type="text" autocomplete="off" placeholder="pilih mandor" x-model="mandor" class="form-control dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="true" name="mandor">
                                            <div class="dropdown-menu"  aria-labelledby="dropdownMenuClickableOutside"  data-popper-placement="bottom-start">
                                                <template x-for="(item, i) in FilterMandor" :key="i">
                                                    <div x-on:click="mandor_id = item.id , mandor = item.user.name" class="dropdown-item cursor-pointer" >
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <img :src="item.user.image ? `/assets/img/avatars/${item.user.image}` : '{{ asset('assets/img/avatars/mandor.png')}}'" width="30" height="30" class="rounded-circle" alt="">
                                                            </div>
                                                            <div class="ms-2 " style="width: 170px">
                                                                <h6 class="mb-0 text-truncate" :title="item.user.name" x-text="item.user.name"></h6>
                                                                <div  :title="item.user.email" class="text-truncate" x-text="item.user.email"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>
                                    </div>
                                    @error('mandor')<span class="small text-danger">{{ $message  }}</span>@enderror
                                </div>
                                <div>
                                    <a href="{{ route('kepala.tugas')}}" class="btn btn-danger">Batal</a>
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
