<!doctype html>
    <html lang="{{ app()->getLocale() }}">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>View Products | Product Store</title>
        <i-- Styles etc. -->
    </head>

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
    </body>

    </html>
