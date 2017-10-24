<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Workshop</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <a href="#">Company</a>
                    <a href="{{ url('add-products')}}">Products</a>
                    <a href="{{ url('work-order')}}">Work Order</a>
                    <a href="{{ url('add-workshop')}}">Add workshop</a>
                    <a href="{{ url('work-order-status')}}">Order Status</a>
                </div>
            </div>
        </div>
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="post" action="">
          {{ csrf_field() }}
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Add A Product</h3>
            <div class="form-group">
            <label for="email">Workshop number:</label>
            <input type="text" class="form-control" name="work_shop_number" placeholder="work shop number">
          </div>
          <div class="form-group">
          	<label for="email">Work Orders Pending</label>
            <input type="text" class="form-control"  name="workorders_pending" >
          </div>
          <div class="form-group">
          	<label for="email">work order completed</label>
            <input type="text" class="form-control"  name="workorder_completed">
          </div>
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Add Workshop</button>
        </form>
    </div>
</div>
</div>

</body>

</html>

