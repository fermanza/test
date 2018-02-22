<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <script type="text/javascript" src="/js/app.js"></script>
        <title>Coalition Test</title>

    </head>
    <body>
        <div class="container">
            <form action="/products" method="POST">
                {{ csrf_field() }}
{{--             // Product name, Quantity in stock, Price per item. --}}
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="quantity" class="control-label">Quantity</label>
                    <input type="text" id="quantity" name="quantity" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price_per_item" class="control-label">Price per Item</label>
                    <input type="text" id="price_per_item" name="price_per_item" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" value="Submit" class="form-control">
                </div>
            </form>

        </div>
    </body>
</html>
