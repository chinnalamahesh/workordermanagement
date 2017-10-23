<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Home</title>

        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <button>Company</button>
                    <a href="{{ url('add-products')}}">Products</a>
                    <a href="{{ url('work-order')}}">Work Order</a>
                    <a href="{{ url('work-order-status')}}">Work Order Status</a>
                </div>
            </div>
        </div>

        <!-- <div class="container">       
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Product Id</th>
        <th>Name</th>
        <th>Weight</th>
        <th>Length</th>
        <th>Price</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
        @foreach($product as $products)
      <tr>
        <td>{{ $products->product_id }}</td>
        <td>{{ $products->name }}</td>
        <td>{{ $products->weight }}</td>
        <td>{{ $products->length }}</td>
        <td>{{ $products->price }}</td>
        <td>{{ $products->description }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> -->
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Product
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
   @foreach($product as $products)
    <li><a href="#">{{ $products->name }}</a></li>
   @endforeach
  </ul>
</div>
    </body>
</html>
