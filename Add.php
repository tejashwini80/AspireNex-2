<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Add.css">
</head>

<body>
  <?php
  // Create connection
  $conn = mysqli_connect(
    "localhost",
    "user",
    "your_password",
    "table"
  );


  $que = $_GET('que');
  $o1 = $_GET('o1');
  $o2 = $_GET('o2');
  $o3 = $_GET('o3');
  $o4 = $_GET('o4');

  $sql = "INSERT INTO table VALUES 
    ('que', 'o1', 'o2','o3','o4')";
  ?>


  <div class="Container">
    <h2 class="title">Create Your Own Quiz</h2>
    <form class="formBox">
      <h3 class="desc">Enter your questions</h3>
      <input type="text" class="input1" name="que">
      <h3 class="desc">Enter your options</h3>
      <input type="text" class="input" name="o1">
      <input type="text" class="input" name="o2">
      <input type="text" class="input" name="o3">
      <input type="text" class="input" name="o4">
    </form>
  </div>
</body>

</html>