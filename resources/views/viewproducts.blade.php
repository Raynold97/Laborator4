@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Tabel cu produse disponibile:</h1>
                <table class="table table-striped table-bordered">
                    <thead>
                        <td>Nume</td>
                        <td>Descriere</td>
                        <td>Cantitate</td>
                        <td>Preț</td>
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
