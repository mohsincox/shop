@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Customer List</h2>
        <table class="table table-strip">
            <thead>
                <tr>
                    <th>ক্রমিক নং</th>
                    <th>কাস্টমারের নাম</th>
                    <th>পণ্যের নাম</th>
                    <th>পরিমান</th>
                    <th>মোবাইল নম্বর</th>
                    <th>মূল্য পরিশোধের তথ্য</th>
                    <th>অর্ডারের তারিখ</th>
                    <th>ডেলিভারির  তারিখ</th>
                    <th>ঠিকানা </th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                ?>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $customer->customer_name }}</td>
                        <td>{{ $customer->product_name }}</td>
                        <td>{{ $customer->quantity }}</td>
                        <td>{{ $customer->mobile }}</td>
                        <td>{{ $customer->pay_info }}</td>
                        <td>{{ $customer->order_date }}</td>
                        <td>{{ $customer->delivery_date }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $customers->render() !!}
    </div>
@endsection