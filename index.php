<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Input Phone No</h2>
  <form action="send.php" method="post">
    <div class="form-group">
      <label for="phone">Phone No</label>
      <input type="text" class="form-control" placeholder="Enter Phone No" name="phone">
    </div>

    <div class="form-group">
      <label for="msg">Type Msg</label>
      <input type="text" class="form-control" placeholder="Enter Msg" name="msg">
    </div>

    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>


