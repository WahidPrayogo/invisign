@extends('layouts.app')

@section('title')
    Invisign - Order Sukses
@endsection

@section('content')

<section class="section-myorder">
    <div class="container py-5">
        
        <div class="card shadow ">
            
            <!-- Content -->
            <div class="card-body">
                <h2 class="px-5 pt-5">Daftar Pesanan Anda</h2>
                <div class="table-responsive p-5">
                    <table class="table table-bordered " width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Product</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Tgl Beli</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $no => $item)
                                <tr>
                                    <td class="text-center ">{{ $items->firstItem() + $no }}</td>
                                    <td>{{ $item->product_detail->title }}</td>
                                    <td>@currency($item->transaction_total)</td>
                                    <td class="text-center">{{ $item->transaction_status }}</td>
                                    <td class="text-center">{{ $item->created_at }}</td>
                                    <td class="">
                                        
                                        <a href="{{ route('myorder.show', $item->id)}}" class="btn btn-info m-1"><i class="fa fa-eye"></i></a>&nbsp;
                                        @if ($item->transaction_status == 'IN_CART')
                                        <form action="{{ route('myorder.update', $item->id)}}" method="POST" 
                                            class="d-inline" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <button class="btn btn-primary m-1" name='transaction_status' value="CANCEL" onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                            
                                        @elseif ($item->transaction_status == 'SUCCESS' && $item->testimony->testimony == '')
                                        <form action="{{ route('testi-process', $item->id) }}" method="POST">
                                            @csrf
                                            <button class="btn btn-success m-1" type="submit">
                                                <i class="fa fa-star-o"></i>&nbsp;Beri Penilaian
                                            </button>
                                        </form>
                                        @endif
                                        @if ($item->bukti_transfer == '' && $item->transaction_status != 'CANCEL')
                                            <a href="{{ route('myorder.edit', $item->id)}}" class="btn btn-warning m-1"><i class="fa fa-folder-open"></i>Upload Bukti Transfer</a>&nbsp;
                                        @endif
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
            
            <!-- Pagination -->
            <div class="d-sm-flex justify-content-center mb-4">
                {{ $items->links() }}
            </div>
        </div>

    </div>
</section>

@endsection