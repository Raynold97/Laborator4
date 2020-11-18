@section('inputForm')
<div class="input-form">
    <form action="/">
        <h2 class="text-center">Adaugă produs</h2>
        <div class="form-group">
            <label for="exampleInputNume">Nume</label>
            <input type="name" class="form-control" id="exampleInputNume" aria-describedby="numeHelp "
                placeholder="Introduceți numele" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPrenume">Descriere</label>
            <input type="name" class="form-control" id="exampleInputDescriere" aria-describedby="descriereHelp"
                placeholder="Introduceți descrierea" required>
        </div>
        <div class="form-group">
            <label for="exampleInputCantitate">Cantitate</label>
            <input type="number" class="form-control" id="exampleInputCantitate" aria-describedby="cantitateHelp"
                placeholder="Introduceți cantitatea" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPret">Preț</label>
            <input type="number" class="form-control" id="exampleInputPret" aria-describedby="pretHelp"
                placeholder="Introduceți prețul" required>
        </div>
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
