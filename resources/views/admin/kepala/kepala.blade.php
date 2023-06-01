<x-app-layout>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar.AdminSidebar')
          <div class="layout-page">
            @include('layouts.navbar.AdminNavbar')
            <div class="content-wrapper">
              <div class="container">
                <div class="row p-4">
                    <div class="col-md-12 bg-white shadow table-responsive rounded-5">
                        <a class="btn btn-primary mb-4 my-3" href="{{ route('admin.tambah_data') }}">Tambah Data</a>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th> 
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->user->name  }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td class="d-flex justify-content-between align-items-center col-5 ">
                                        <a class="m-1" href="{{ route('admin.edit_kepala',$item->id)}}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('admin.destroy',$item->user->id) }}" method="POST">
                                            @csrf
                                            <button class="m-1 border-0 bg-transparent text-danger" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                            </svg>
                                        </button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            </div>
            </div>
          </div>
        </div>
    </div>
</x-app-layout>
