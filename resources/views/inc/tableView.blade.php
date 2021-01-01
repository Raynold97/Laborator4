@section('tableView')
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>Tabel cu produse disponibile:</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <td>Nume</td>
                <td>Descriere</td>
                <td>Cantitate</td>
                <td>Preț</td>
                <td>Actiune</td>
            </thead>
            <tbody>
                @foreach ($allProducts as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td class="inner-table">{{ $product->description }}</td>
                    <td class="inner-table">{{ $product->count }}</td>
                    <td class="inner-table">{{ $product->price }}</td>
                    <td class="inner-table">
                        <form action="{{action('ProductController@destroy',$product->id)}}" method="POST">
                            <a class="btn btn-primary" href="{{action('ProductController@edit',$product->id)}}">Editeaza</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Sterge</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@show