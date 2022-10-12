<?php 
    include 'connect.php';
    $id = $_GET['updateid'];
    $sql = "Select * from `crud1` where ID = $id"; 
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $Name = $row['Name'];
    $Email = $row['Email'];
    $Mobile = $row['Mobile'];
    $Password = $row['Password'];

    if(isset($_POST['Submit'])){
        $name= $_POST['Name'];
        $email=$_POST['Email'];
        $mobile= $_POST['Mobile'];
        $password= $_POST['Password'];
    
    $sql = "update `crud1` set ID = $id,Name='$name',Email='$email',Mobile='$mobile',Password='$password' where ID=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Data updated sucessfully";
        header("location: Display.php");
    }else{
        die(mysqli_error($con));
    }
}
 ?>

<!-- including Bootstrap -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- <h5 style="text-align: center">CRUD DEMO</h5> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <div class="container my-5">
        <form method = "post">
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name = "Name" placeholder="Enter Your Name" value ="<?php echo $Name?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email</label>
            <input type="text" class="form-control" id="exampleInputPassword1"name = "Email"placeholder="Enter Your Email" value ="<?php echo $Email?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name = "Mobile" placeholder="Enter Your Mobile No." value ="<?php echo $Mobile?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name = "Password" placeholder="Enter Your Password" value ="<?php echo $Password?>">
        </div>
       <a href="Display.php"><button type="submit" class="btn btn-primary" name="Submit">Update</button></a>
        </form>
    </div>
</body>
</html>

