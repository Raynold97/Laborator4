@section('inputForm')
<div class="input-form">
    <form method="post" action="{{ config('app.url')}}/products">
    @csrf
        <h2 class="text-center">Adaugă produs</h2>
        <div class="form-input">
            <label for="exampleInputNume">Nume</label>
            <input type="text" class="form-control" name="name" aria-describedby="numeHelp "
                placeholder="Introduceți numele" required>
        </div>
        <div class="form-input">
            <label for="exampleInputPrenume">Descriere</label>
            <input type="text" class="form-control" name="description" aria-describedby="descriereHelp"
                placeholder="Introduceți descrierea" required>
        </div>
        <div class="form-input">
            <label for="exampleInputPret">Preț</label>
            <input type="number" class="form-control" name="price" aria-describedby="pretHelp"
                placeholder="Introduceți prețul" required>
        </div>
        <div class="form-input">
            <label for="exampleInputCantitate">Cantitate</label>
            <input type="number" class="form-control" name="count" aria-describedby="cantitateHelp"
                placeholder="Introduceți cantitatea" required>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Adaugă</button>
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
