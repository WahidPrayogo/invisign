@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid daftar-user">

       
        <!-- Page Content -->
        <div class="card shadow">
            <div class="card-body">
                
                <!-- Page Heading -->
                <div class="d-sm-flex justify-content-center text-center my-3 my-md-0 m-md-4 p-md-3">
                    <h1 class="h3 mb-0 text-gray-800">User List</h1>
                </div>
                <hr>
                <!-- Topbar Search -->
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        
                    </div>
                    <div class="col-md-6 d-flex flex-row-reverse">
                        
                    </div>
                </div>

                <!-- Table Content -->
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered " width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th class="mobile">Nama</th>
                                        <th>Username</th>
                                        <th class="mobile">Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $no => $item)
                                    <tr>
                                        <td class="text-center">{{ $items->firstItem() + $no }}</td>
                                        <td class="mobile">{{ $item->name }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td class="mobile">{{ $item->email}}</td>
                                        <td>{{ $item->roles}}</td>
                                        <td class="text-center">
                                            <a href="{{ route('user-list.edit', $item->id)}}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            Data Kosong
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="d-sm-flex justify-content-center mb-4 pagination text-center">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
        
    </div>
    <!-- /.container-fluid -->
    
@endsection