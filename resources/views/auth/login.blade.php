@extends('layouts.app')
@section('title', 'Halaman Login')
@section('content')
    <div class="container">
        <div class="row mt-4 justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="text-center">Login</h2>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="username" id="username" placeholder="Username"
                                    class="form-control">
                            </div>
                            <div class="mt-5">
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="form-control">
                            </div>
                            <div class="mt-4 d-flex justify-content-center">
                                <button type="submit" class="btn btn-info text-white rounded-pill px-5">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
