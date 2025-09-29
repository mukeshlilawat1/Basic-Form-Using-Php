<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $Address = $_POST["Address"];
    $password = $_POST["password"];

    // submit these to a database
    $servername = "localhost";
    $username = "root";
    $password_db = "1215";
    $database = "context";

    mysqli_report(MYSQLI_REPORT_OFF);

    $conn = mysqli_connect($servername, $username, $password_db, $database);

    if (!$conn) {
        die("Sorry We failed to connect: " . mysqli_connect_error());
    } else {
        // echo "Connection was succesfully<br>";

        // Submit entry 
        $sql = "INSERT INTO `contact` (`name`, `email`, `concern`, `Date`, `Address`, `password`) 
                VALUES ('$name', '$email', '$description', CURRENT_TIMESTAMP, '$Address', '$password');";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Success</strong> Your Form has been submitted successfully.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Error</strong>We Are facing some technical issue and Your Form has been Not submitted successfully.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
        }
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Contact Us</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Suport</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h1>Please Fill The Form.</h1>
        <form action="/php_tutorial/28_Form.php" method="post">
            <div class="mb-3">
                <labelName for="name" class="form-label">Enter Your Name</labelName>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Enter Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Description</label>
                <textarea type="text" name="description" class="form-control" cols="30" rows="10" id="description" aria-describedby="emailHelp"></textarea>
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Enter Address</label>
                <input type="text" name="Address" class="form-control" id="Address" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>