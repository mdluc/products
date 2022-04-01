<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="styles.css">
  <title>Add Products</title>
</head>
<body>
  <h1>Add a product</h1>
  <form method="post" id="completeForm">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="name" placeholder="enter product name" required/>
    </div>
    <div class="form-group">
      <label>Price:</label>
      <input type="number" name="price" placeholder="enter product price" required/>
    </div>
    <div class="form-group">
      <label>Description:</label>
      <input type="text" name="description" placeholder="enter product description" required/>
    </div>
    <div class="form-group">
      <button type="submit" name="submit">Submit</button>
    </div>
  </form>

</body>
</html>