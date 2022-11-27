<?php
    include 'connectdatabase.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
        
     $sql=" insert into bhavitha_form(name,email,mobile,password) 
     values('$name','$email','$mobile','$password')";

     $result=mysqli_query($conn,$sql);
    if($result){
        header('location:form.php');
    }
    else{
        die(mysqli_error($conn));
    }

    }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <style>
        body {
            font-family: Poppins, sans-serif;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid bg-warning">
        <div class="row justify-content-between">
            <div class="col-9">EAMCET/ ICET / PGCET CODE: CMRG</div>
            <div class="col-3">
                <a href="#" style="text-decoration: none; color: black; font-size: 14px;" class="fw-bold"><i class="bu bi-person-circle"></i> Student login</a>
                <a href="#" style="text-decoration: none; color: black; font-size: 14px;" class="fw-bold"><i class="bu bi-people-fill"></i> Staff login</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-3 justify-content-between">
            <div class="col align-self-start">
                <img src="cmr-header-image.jpeg" class="img-fluid" alt="CMR Institutions Logo" width="800">
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-success">Courses</button>
                <button type="button" class="btn btn-outline-primary">ARIIA</button>
                <button type="button" class="btn btn-outline-warning">NIRF</button>
            </div>
        </div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-6 fw-bold" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">ADMINISTRATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">ACADEMICS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">INFARSTRUCTURE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">PLACEMENTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">DEPARTMENTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">RESEARCH</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">AMENITIES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">EXAM SECTION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-6 fw-bold" href="#">CONTACT</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <h3 class="fw-bold">Details Form</h1>
                <form action="form.php" method="post">
                  <div class="form-floating m-3 w-50">
                    <input name="name"type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Name</label>
                  </div>
                  <div class="form-floating m-3 w-50">
                    <input name="email" type="email" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">email</label>
                  </div>
                  <div class="form-floating m-3 w-50">
                    <input name="mobile" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">mobile</label>
                  </div>
                  <div class="form-floating m-3 w-50">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">password</label>
                  </div>
                  <button name="submit" class="btn btn-outline-success m-3">submit</button>
                </form>
            </div>
            <div class="col-8">
                <h3 class="fw-bold">Students Who Submitted Form</h1>
                <?php
   include 'connectdatabase.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <table class="table m-5">
  <thead>
    <tr>
      <th scope="col">s.no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from bhavitha_form";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            echo '
            <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">update</a></button>
            <button class="btn btn-dark"><a class="text-light" href="delete.php?deleteid='.$id.'">delete</a></button></td>
            </tr>
            
            ';

        }
    }
    ?>
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
               
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>


<!--<!doctype html>
<html lang="en"> 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <form method="POST">
    <div class="form-floating m-3 w-50">
        <input name="name"type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Name</label>
      </div>
      <div class="form-floating m-3 w-50">
        <input name="email" type="email" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">email</label>
      </div>
      <div class="form-floating m-3 w-50">
        <input name="mobile" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">mobile</label>
      </div>
      <div class="form-floating m-3 w-50">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">password</label>
      </div>
      <button name="submit" class="btn btn-outline-success m-3">submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>-->

