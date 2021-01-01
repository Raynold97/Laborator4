@section('inputForm')
<div class="input-form">
    {!!Form::open(['action'=>['ProductController@update',$product->id],'method'=>'POST'])!!}
    <form method="post" action="{{ action('ProductController@update',$product->id)}}">
    @csrf
        <h2 class="text-center">Editeaza produs</h2>
        <div class="form-input">
            <label for="name">Nume</label>
            <input type="text" class="form-control" name="name" aria-describedby="numeHelp"
                placeholder="Introduceți numele" value="{{$product->name}}" required>
        </div>
        <div class="form-input">
            <label for="description">Descriere</label>
            <input type="text" class="form-control" name="description" aria-describedby="descriereHelp"
                placeholder="Introduceți descrierea" value="{{$product->description}}" required>
        </div>
        <div class="form-input">
            <label for="price">Preț</label>
            <input type="price" class="form-control" name="price" aria-describedby="pretHelp"
                placeholder="Introduceți prețul" value="{{$product->price}}" required>
        </div>
        <div class="form-input">
            <label for="count">Cantitate</label>
            <input type="number" class="form-control" name="count" aria-describedby="cantitateHelp"
                placeholder="Introduceți cantitatea" value="{{$product->count}}" required>
        </div>
        <br>
        <div class="form-group">
            {{Form::hidden('_method','PUT')}}
            <button type="submit" class="btn btn-primary btn-block">Actualizeaza</button>
        </div>
    </form>
</div>
<style>
    .input-form {
        width: 340px;
        margin: 50px auto;
    }

    .input-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .input-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }

</style>
@show
