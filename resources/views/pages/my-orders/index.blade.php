@extends('layouts.app')

@section('title')
    Invisign - Order Sukses
@endsection

@section('content')

<section class="section-myorder">
    <div class="container p-0 p-md-5 ">
        
        <div class="card md-shadow body ">
            <div class="body-bg">
                <!-- Content -->
                <div class="card-body main">
                    <h2 class="pt-md-3 text-center">Daftar Pesanan Anda</h2>
                    <div class="col-12 p-0 p-md-3">
                        <table class="table table-bordered " width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Product</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $no => $item)
                                    <tr class="align-items-center">
                                        <td class="text-center ">{{ $items->firstItem() + $no }}</td>
                                        <td><b>{{ $item->product_detail->title }}</b>
                                            <br><i>{{date('d-M-Y', strtotime( $item->created_at ))}}</i>    
                                        </td>
                                        <td>@currency($item->transaction_total)</td>
                                        <td class="text-center">{{ $item->transaction_status }}
                                            <br><a href="{{ route('myorder.show', $item->id)}}" class="btn btn-info m-1"><i class="fa fa-eye"></i></a>&nbsp;
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
                <div class="page mb-md-4 text-center">
                    {{ $items->links() }}
                </div>
            </div>
        </div>

    </div>
</section>

@endsection