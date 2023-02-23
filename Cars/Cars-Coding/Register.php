<?php
include('./src/users.php');
include('./components/header.php');


$message = null;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $name = $_POST['name'];
    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $contact = $_POST['contact'];
    


    $user = new users($connect);
    $response= $user->create($name, $user_name, $email, $pass, $contact);

    if ($response) {

    $message = "User Registed";

    }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

input {
  caret-color: red;
}

/* body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background: #ecf0f3;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
} */

.container {
  position: relative;
  width: 350px;
  height: 700px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.brand-logo {
  height: 100px;
  width: 100px;
  
  margin: auto;
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;
}

.brand-title {
  margin-top: 10px;
  font-weight: 900;
  font-size: 1.8rem;
  color: #1DA1F2;
  letter-spacing: 1px;
}

.inputs {
  text-align: left;
  margin-top: 30px;
}

label, input, button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

input::placeholder {
  color: gray;
}

input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

button {
  color: white;
  margin-top: 20px;
  background: #1DA1F2;
  height: 40px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.5s;
}

button:hover {
  box-shadow: none;
}

/* a {
  position: absolute;
  font-size: 8px;
  bottom: 4px;
  right: 4px;
  text-decoration: none;
  color: black;
  background: yellow;
  border-radius: 10px;
  padding: 2px;
}

h1 {
  position: absolute;
  top: 0;
  left: 0;
} */
    </style>
</head>
<body>
    <div class="container">
        
        <div class="brand-title" style="text-align:center">Create New account</div>
        
        <div class="inputs">
            <form action="" method="post">
            Name<input type="text" name="name" placeholder="Enter Name">
            UserName<input type="text" name="username" placeholder="Enter UserName">
            Email<input type="text" name="email" placeholder="Enter email">
            Password<input type="password" name="password" placeholder="Enter Password">
            Contact<input type="tel" name="contact" placeholder="Enter Contact">
            <button type="submit">Register</button><br>
            <p>Already account exists ?  <a href="login.php">Login</a> </p>


            <?php

            if ($message !== null){

            ?>

            <div class="alert alert-success">
              <?php

              echo $message;

            ?>


            </div>
            <?php

            }
            ?>
        </form>
        </div>
        <!-- <a href="https://twitter.com/prathkum">MADE BY PRATHAM</a> -->
      </div>
    
</body>
</html>

<?php 
include('./components/footer.php');
?>