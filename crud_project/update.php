<?php
    include 'connectdatabase.php';
    $id=$_GET['updateid'];
    $sql="select * from bhavitha_form where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
    $password=$row['password'];

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];
        
     $sql=" update bhavitha_form set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <form method="POST">
    <div class="form-floating m-3 w-50">
        <input name="name"type="text" value="<?php echo $name ?>" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Name</label>
      </div>
      <div class="form-floating m-3 w-50">
        <input name="email" type="email" value="<?php echo $email ?>" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">email</label>
      </div>
      <div class="form-floating m-3 w-50">
        <input name="mobile" type="text" value="<?php echo $mobile ?>" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">mobile</label>
      </div>
      <div class="form-floating m-3 w-50">
        <input name="password" type="password" value="<?php echo $password ?>" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">password</label>
      </div>
      <button name="submit" class="btn btn-outline-primary m-3">update</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
