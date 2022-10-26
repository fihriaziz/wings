@extends('layouts.app')
@section('title', 'Product List')
@section('content')
    <div class="container">
        @if ($message = Session::has('message'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="row">
            <h2 class="text-center mb-4">Product List</h2>
            <div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100">
                        25%
                    </div>
                </div>
                @foreach ($product as $item)
                    <div class="d-flex py-4">
                        <div class="col-md-3">
                            <div class="mt-3">
                                <img class="img" width="180px">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="" class="mt-5">{{ $item->product_name }}</label>
                        </div>
                        <div class="col-md-3">
                            <label for="" class="mt-5">Rp. {{ $item->price }}</label>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('detail', $item->id) }}" class="mt-5 btn btn-info btn-sm text-white">Buy
                            </a>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    <a href="{{ route('checkout') }}" class="text-white btn btn-info">Checkout</a>
                </div>
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
