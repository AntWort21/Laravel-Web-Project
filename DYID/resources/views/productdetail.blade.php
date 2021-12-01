<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/productdetail.css') }}">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div class="content">
            <div class="product-box">
                <div class="image-box">
                    <img src="{{ asset('storage/item.jpg') }}" alt="" class='product-image'>
                </div> 
                <div class="desc-box">

                    <img src="../storage/productImage/{{ $selectedProduct->image }}" alt="" class='card-img-top'>

                    <br><br>

                    <h2>{{ $selectedProduct->name }}</h2>
                    <h3>Category: {{ $selectedProduct->category_id }}</h3>

                    <hr>

                    <h3>Price:</h3>
                    <p>IDR {{ $selectedProduct->price }}</p>

                    <hr>

                    <h3>Description</h3>
                    <p>{{ $selectedProduct->description }}</p>

                    <hr>

                    @guest
                        <button class="orange-button">Login to buy</button>
                    @else
                        <label for="Qty">Qty: </label>
                        <input class="quantity" type="text" value="1">
                        <button class="orange-button">Add to Cart</button>
                    @endguest

                    <hr>

                </div>
            </div>
        </div>
    @endsection

</body>
</html>