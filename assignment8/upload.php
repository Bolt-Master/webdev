<?php
if(isset($_POST['submit'])){
  $target = "uploads/".basename($_FILES['image']['name']);
  $conn = mysqli_connect("localhost", "root",'',"shop");
  if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
  }

  $name = $_POST['name'];
  $price = $_POST['price'];
  $image = $_FILES['image']['name'];

  $sql = "INSERT INTO clothes(name, price, img) 
          VALUES('$name', '$price', '$image')";
  if(mysqli_query($conn, $sql)){
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
      echo "Successfully ";
      ob_start();
      header("Location: admin.php");
      ob_flush();
    } else{
      echo "error happened";
    }
  } else{
    echo "error";
  }
}

?>
