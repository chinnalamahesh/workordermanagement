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

<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" method="post" action="">
          {{ csrf_field() }}
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Add A Product</h3>
            <div class="form-group">
            <label for="email">product ID:</label>
            <input type="text" class="form-control" name="product_id" placeholder="Product Id" value="{{$product->product_id}}">
          </div>
          <div class="form-group">
          	<label for="email">order Date:</label>
            <input type="date" class="form-control"  name="order_date" id="datetimepicker" >
          </div>
          <div class="form-group">
          	<label for="email">Start Date:</label>
            <input type="date" class="form-control"  name="start_date" >
          </div>
          <div class="form-group">
          	<label for="email">End Date:</label>
            <input type="date" class="form-control"  name="end_date" >
          </div>
          <div class="form-group">
          	<label for="email">Workorder Description</label>
          <textarea class="form-control" name="workorder_description" type="textarea"  placeholder="Product Description" maxlength="140" rows="7"></textarea>
          </div>
          <div class="form-group">
          	<label for="email">Product Name</label>
            <input type="text" class="form-control"  name="name" value="{{$product->name}}">
          </div>
          <div class="form-group">
          	<label for="email">Price</label>
            <input type="text" class="form-control"  name="price" id="box1" value="{{$product->price}}" oninput="calculate()" >
          </div>
          <div class="form-group">
          	<label for="email">Enter Quantity</label>
            <input type="text" class="form-control"  name="quantity" id="box2"  placeholder="Enter the Quantity" oninput="calculate()" >
          </div>
          <div class="form-group">
          	<label for="email">Total price</label>
            <input type="text" class="form-control"  name="total_price" id="result"oninput="calculate()" >
          </div>
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Add Workshop</button>
        </form>
    </div>
</div>
</div>
<script type="text/javascript">

function calculate() 
{
    var myBox1 = document.getElementById('box1').value; 
    var myBox2 = document.getElementById('box2').value;
    var result = document.getElementById('result'); 
    var myResult = myBox1 * myBox2;
    result.value = myResult;
}
</script>

<script type="text/javascript">
  $(function () {
    $('#datetimepicker').datetimepicker({
      inline: true,
      sideBySide: true,
format: 'YYYY-MM-DD HH:mm' //2016-03-05 15:11:11
});
    $('#datetimepicker1').datetimepicker({
      inline: true,
      sideBySide: true,
      format: 'YYYY-MM-DD HH:mm'
    });
  });
</script>
</body>

</html>

