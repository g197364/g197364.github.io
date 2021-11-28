<?php
       $name = $_POST['name'];
       $email = $_POST['email'];
       $comment = $_POST['comment'];
       $image = $_POST['image'];

       // Database connection
       $conn = new mysqli('localhost','root','','web');
       if($conn->connect_error){
              echo "$conn->connect_error";
              die("Connection Failed : ". $conn->connect_error);
       } else {
              $stmt = $conn->prepare("insert into form2(name, email, comment, image) values(?, ?, ?, ?)");
              $stmt->bind_param("sssb", $name, $email, $comment, $image);
              $execval = $stmt->execute();
              echo $execval;
              echo "Registration successfully...";
              $stmt->close();
              $conn->close();
       }
?>