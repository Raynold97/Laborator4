<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <title>Create Product | Product Store</title>
    <!-- styling etc. -->
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <form method="POST" action="{{config('app.url')}}/products">

                <h1> Introduceti detalii pentru produs</hl><br>

                    
                        <label for="name">Nume:</label>
                        <input type="text" id="name" name="name"><br>


                        <label for="description">Descriere:</label>
                        <input type="text" id="description" name="description"><br>


                        <label for="count">Cantitate:</label>
                        <input type="number" id="count" name="count"><br>


                        <label for="price">Pret:</label>
                        <input type="number" id="price" name="price"><br>
                   
                    <button type="submit" class="btn btn-primary">Adauga</button>
            </form>
        </div>
    </div>
</body>

</html>
