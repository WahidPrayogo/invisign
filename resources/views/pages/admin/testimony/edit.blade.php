@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
            
        @endif
            
        <div class="card shadow">
            <div class="card-body">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-center m-4 p-3">
                    <h1 class="h3 mb-0 text-gray-800"> Edit Status Testimony</h1>      
                </div>
                <hr>
                <form action="{{ route('testimony.update', $item->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" required class="form-control" >
                            <option value="{{ $item->status }}">
                                Jangan Ubah ({{ $item->status }})
                            </option>
                            <option value="HIDDEN">HIDE</option>
                            <option value="SHOW">SHOW</option>
                        </select>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary w-25">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    
@endsection