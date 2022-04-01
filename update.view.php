<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Update data product</title>
</head>
<body>
  <h1>Update information</h1>
  <form method="post">
    <div class="form-group">
      <label>Name:</label>
      <input type="text" name="name" value="<?=$name?>" required/>
    </div>
    <div class="form-group">
      <label>Price:</label>
      <input type="number" name="price" value="<?=$price?>" required/>
    </div>
    <div class="form-group">
      <label>Description:</label>
      <input type="text" name="description" value="<?=$description?>" required/>
    </div>
    <div class="form-group">
      <button type="submit" name="submit">Submit</button>
    </div>
  </form>
</body>
</html>