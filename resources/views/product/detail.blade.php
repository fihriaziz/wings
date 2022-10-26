@extends('layouts.app')
@section('title', 'Product Detail')
@section('content')
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center">Product Detail</h3>
                <form action="{{ route('proses') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-body">
                                    <img class="img">
                                </div>
                            </div>
                            <div class="col-md-6 py-3">
                                {{ $product->product_name }}
                                <div>
                                    Rp. {{ $product->price }}
                                </div>
                                <div>
                                    Dimension : {{ $product->dimension }}
                                </div>
                                <div>
                                    Price Unit : {{ $product->unit }}
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn text-white btn-info px-3 mb-3">Buy</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <style>
        .img {
            background-color: skyblue;
            width: 150px;
            height: 110px;
            border-radius: 4px;
        }
    </style>
@endpush
