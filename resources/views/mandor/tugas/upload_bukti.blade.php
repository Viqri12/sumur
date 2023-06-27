<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.MandorSidebar')
          <div class="layout-page">
            @include('layouts.navbar.MandorNavbar')
            <div class="content-wrapper p-lg-4 mx-auto col-12">
                <div class="card p-3">
                    <div class="d-lg-flex align-items-center col-12 mb-3">
                        <div class="border p-1 rounded-circle" style="width:80px;height:80px">
                            <img src="{{ asset('assets/img/avatars/mandor.png')}}"  style="object-fit: cover;object-position:center center;width:100%;height:100%;" alt="" class="h-auto rounded-circle">
                        </div>
                        <div class="ms-lg-3 mas-2">
                            <div class="mb-0"><span style="font-size: 10px" class="text-muted">No sumur</span> <h5 class="mb-0">11231293696</h5></div>
                            <div class="small mt-1 text-muted">Kp Nyalindung Rt04 rw04 Cicurug - Sukabumi</div>
                        </div>
                    </div>
                    <div class="accordion-collapse" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body  border m-2 rounded-3 p-lg-4">
                            <section x-data="updloadData({
                                id : '{{ $id    }}'
                            })" class="py-2 p-2">
                                <ul class="timeline row mb-2">
                                    <template x-for="(item,i) in dataFile" :key="i">
                                        <li class="timeline-item col-lg-6 mb-4">
                                            <h5 class="fw-bold mb-2" x-text="item.title"></h5>
                                            <p class=" text-muted mb-0" x-text="item.sub_title"> </p>
                                            <form :action="item.submitForm" @submit.prevent="SubmitImage(i,`formUpload${i}`)" method="POST" :id="`formUpload${i}`" enctype="multipart/form-data" class="row mt-3">
                                                @csrf
                                                <template x-for="(image,k) in item.file" :key="k">
                                                    <div class="col-lg-4 col-6 ">
                                                        <label class="cursor-pointer text-center col-12 rounded-2" style="" :style="image.preview == '/assets/img/avatars/mandor.png' ? 'border:dashed;height: 85px' : 'height: 85px'" :for="`keyimahe${i}ss${k}`">
                                                            <div class="text-center py-4" style="font-size: 12px" x-cloak x-show="image.preview == '/assets/img/avatars/mandor.png'">+ Tambah file</div>
                                                            <template x-if="image.preview != '/assets/img/avatars/mandor.png' && image.image.type.includes('image')">
                                                                <img :src="image.preview" style="object-fit: cover;object-position:center center;width:100%;height:100%;" alt="" class="rounded-2">
                                                            </template>
                                                            <template x-if="image.preview != '/assets/img/avatars/mandor.png' && image.image.type.includes('video')">
                                                                <video class="rounded-2" x-cloak x-show="image.preview != '/assets/img/avatars/mandor.png' && image.image.type.includes('video')" style="object-fit: cover;object-position:center center;width:100%;height:100%;" :src="image.preview"></video>
                                                            </template>
                                                        </label>
                                                        <p x-text="image.validate" class="small text-danger mb-0"></p>
                                                        <div class="mt-2 small text-truncate">
                                                            <span x-text="image.image ? convertFileSize(image.size) : ''"></span>  - <span class="small" x-text="image.image?.name"></span></div>
                                                        <input type="file" accept=".jpg, .jpeg, .png, .mp4, .mkv, .3gp, .MPG, .AVI" x-on:change="image.image = $event.target.files[0], openImage($event, {
                                                            key1 : i,
                                                            key2 : k
                                                        })" class="d-none" name="image[]" :id="`keyimahe${i}ss${k}`">
                                                    </div>
                                                </template>
                                                <div class="mt-1" x-cloak x-show="!item.submited">
                                                    <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                                                </div>
                                            </form>
                                        </li>
                                    </template>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/upload.js')}}"></script>
</x-app-layout>
