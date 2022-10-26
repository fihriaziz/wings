@extends('layouts.app')
@section('title', 'Laporan Penjualan')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Transaction</th>
                            <th>User</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Item</th>
                        </tr>
                    </thead>
                    @foreach ($transactions as $transaction)
                        <tbody>
                            <tr>
                                <td>{{ $transaction->document_code . '-' . $transaction->document_number }}</td>
                                <td>{{ Auth::user()->username }}</td>
                                <td>Rp. {{ $transaction->sub_total }}</td>
                                <td>{{ $transaction->created_at }}</td>
                                <td>
                                    <ul>
                                        <li>{{ $transaction->product_code }}</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
