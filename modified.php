<?php
    $Username = "";
    $Email = "";
    $errors = array();

    // connect to the database

    $db = mysqli_connect('hostname', 'user25061999', 'Batata70Grande!', 'webfolio');
    echo "database connected";

    // if the register button is clicked

    $name = $_POST['name'];
    $email = $_POST['email'];
    $discussao = $_POST['discussao'];
    $anexo = $_POST['anexo'];
    echo "data is taken";

    // if there are no errors, save user to database

    $sql = "INSERT INTO Users(Username, Email, password) VALUES('$name', 
 '$email', '$discussao', '$anexo')";
    mysqli_query($db, $sql);
    echo "data inserted successfully";
    ?>