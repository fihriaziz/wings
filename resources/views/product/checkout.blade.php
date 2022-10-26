@extends('layouts.app')
@section('title', 'Checkout Page')
@section('content')
    <div class="container">
        <div class="row">
            <div>
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100">
                    50%
                </div>
                <form method="post" action="{{ route('Poscheckout') }}">
                    @csrf
                    <div class="col-md-6">
                        @foreach ($product as $item)
                            <div class="d-flex">
                                <div class="py-4">
                                    <img class="img">
                                </div>
                                <div class="py-4 px-3">
                                    <span>
                                        {{ $item->product_name }}
                                    </span>
                                    <span class="d-block"><input type="number" name="jumlah" class="pcs"> PCS</span>
                                    <span>SubTotal : {{ $item->price }}</span>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            Total : {{ $sum }}
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="text-white btn btn-info ">Checkout</button>
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

        .pcs {
            width: 35px;
            height: 30px;

        }
    </style>
@endpush
