<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.MandorSidebar')
          <div class="layout-page">
            @include('layouts.navbar.MandorNavbar')
            <div class="content-wrapper p-lg-4 p-2">
              <div class="card p-lg-3 p-2 mt-2">
                <div x-data class="my-3">
                    <h5>Tugas Berjalan</h5>
                    <div>
                        <div class="accordion mt-3" id="accordionExample">
                            @foreach($tugas as $item)
                                <div class="card  mb-3">
                                    <h2 class="accordion-header" id="headingOn">
                                        <div type="" class="p-3" data-bs-toggle="collapse" data-bs-target="#accordionOn" aria-controls="accordionOn">
                                            <div class="d-lg-flex align-items-center col-12">
                                                <div class="border p-1 rounded-circle" style="width:80px;height:80px">
                                                    <img src="{{ asset('assets/img/avatars/mandor.png')}}"  style="object-fit: cover;object-position:center center;width:100%;height:100%;" alt="" class="h-auto rounded-circle">
                                                </div>
                                                <div class="ms-lg-3 ms-2">
                                                    <div class="mb-0"><span style="font-size: 10px" class="text-muted">No sumur</span> <h5 class="mb-0">{{ $item->tugas->no_sumur }}</h5></div>
                                                    <div class="small mt-1 text-muted" style="font-size: 15px">{{ $item->tugas->alamat ?? 'Belum ada alamat ' }}</div>
                                                    <p style="font-size: 12px">{{ $item->created_at->diffForHumans() }}</p>
                                                </div>
                                                <div class="ms-auto me-lg-3">
                                                    @if($item->status == 1)
                                                        <a href="{{ route('mandor.upload_bukti')}}" class="btn btn-primary btn-sm">
                                                            Detail
                                                            <i class="fas fa-arrow-right ms-2"></i>
                                                        </a>
                                                    @endif
                                                    @if($item->status == 0)
                                                        <div>
                                                            <button x-on:click="$dispatch('update-id','{{ $item->id }}')" data-bs-toggle="modal" data-bs-target="#tolakTugas" class="btn btn-sm btn-danger"> Tolak </a>
                                                            <button x-on:click="$dispatch('update-id','{{ $item->id }}')" data-bs-toggle="modal" data-bs-target="#modalTerima" class="btn btn-sm btn-primary ms-2">Terima</button>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </h2>
                                </div>
                            @endforeach
                          </div>
                    </div>
                </div>

                <div x-data="{
                    alamat : '',
                    validate : '',
                    tugas_id : 0,
                    alasan : '',
                    updateId(id){
                        console.log(id)
                    },
                    submitAlamat(){
                        if(this.alamat){
                            let myForm = document.getElementById('formAlamat')
                            this.validate = ''
                            myForm.submit()
                        }else{
                            this.validate = 'Alamat wajib di isi'
                        }
                    }
                }" x-on:update-id.window="tugas_id = $event.detail">
                    <div  class="modal fade" id="modalTerima" tabindex="-1" aria-labelledby="modalTerima" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Terima Tugas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('mandor.terima_tugas') }}" method="POST" @submit.prevent="submitAlamat()" id="formAlamat">
                                <div class="modal-body">
                                    @csrf
                                    <div class="form-gorup mb-2">
                                        <label for="">Link Map</label>
                                        <input type="text" class="form-control" placeholder="https://goo.gl/maps/" name="link_map">
                                    </div>
                                    <div class="form-gorup">
                                        <label for="" class="form-label">Alamat</label>
                                        <input type="hidden" name="id_tugas" x-model="tugas_id">
                                        <textarea name="alamat" x-model="alamat" class="form-control" id="" placeholder="Masukan alamt penggalian" rows="3"></textarea>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="small text-danger" x-text="validate">
                                            </div>
                                            <div x-text="`Max 120 / ${alamat.length}`"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Terima</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>

                    <div class="modal fade" id="tolakTugas" tabindex="-1" aria-labelledby="tolakTugas" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tolak Tugas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                <div class="modal-body text-center p-2">
                                  <h4 class="fw-bold mb-1">Anda yakin?</h4>
                                  <p>Untuk menolak tugas ini.</p>
                                  <form action="">
                                      <div class="form-gorup">
                                          <input type="hidden">
                                          <label for="" class="form-label">Masukan alasan</label>
                                          <textarea name="alasan" class="form-control" id="" rows="3" placeholder="Masukan alasan anda"></textarea>
                                      </div>
                                      <div class="mb-2">
                                          <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                                          <button type="submit" class="btn btn-sm btn-primary">Yakin</button>
                                      </div>
                                  </form>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
                    <!-- Modal -->
            </div>
          </div>
        </div>
    </div>
</x-app-layout>
