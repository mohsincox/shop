@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Customer List</h2>
        <table class="table table-strip">
            <thead>
                <tr>
                    <th>কাস্টমারের নাম</th>
                    <th>পণ্যের নাম</th>
                    <th>পরিমান</th>
                    <th>মোবাইল নম্বর</th>
                    <th>ঠিকানা </th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->product_name }}</td>
                        <td>{{ $customer->quantity }}</td>
                        <td>{{ $customer->mobile }}</td>
                        <td>{{ $customer->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $customers->render() !!}
    </div>
@endsection