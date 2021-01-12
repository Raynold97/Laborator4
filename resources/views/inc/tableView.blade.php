@section('tableView')
{{-- <div class="flex-center position-ref full-height"> --}}
    <div class="content">
        <h1 style="align-items: center">Produse</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <td style="background: grey">Nume</td>
                <td style="background: grey">Descriere</td>
                <td style="background: grey">Cantitate</td>
                <td style="background: grey">Preț</td>
                <td style="background: grey">Actiune</td>
            </thead>
            <tbody>
                @foreach ($allProducts as $product)
                <tr>
                    <td >{{ $product->name }}</td>
                    <td class="inner-table">{{ $product->description }}</td>
                    <td class="inner-table">{{ $product->count }}</td>
                    <td class="inner-table">{{ $product->price }}</td>
                    <td class="inner-table">
                        <form action="{{action('ProductController@destroy',$product->id)}}" method="POST">
                            <a class="btn" style="background: green" href="{{action('ProductController@edit',$product->id)}}">Editeaza</a>
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
{{-- </div> --}}
@show