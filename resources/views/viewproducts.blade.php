@extends('layouts.app')
@section('content')
    <body>
        <div class="flex-center positian-ref full-height table table-striped">
            <div class="content">
                <h1>Here's a list of available products</h1>
                <table class="table table-striped">
                    <thead>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Count</td>
                        <td>Price</td>
                    </thead>
                    <tbody>
                        @foreach ($allProducts as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td class="inner-table">{{ $product->description }}</td>
                            <td class="inner-table">{{ $product->count }}</td>
                            <td class="inner-table">{{ $product->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection
