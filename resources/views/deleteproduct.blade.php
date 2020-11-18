@extends('layouts.app')
@section('content')
        <div class="flex-center positian-ref full-height">
            <div class="content">
                <h1>Sterge produs</h1>
                <table class="table table-striped">
                    <thead>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Count</td>
                        <td>Price</td>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td class="inner-table">{{ $product->description }}</td>
                            <td class="inner-table">{{ $product->count }}</td>
                            <td class="inner-table">{{ $product->price }}</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
@endsection
