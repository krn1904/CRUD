<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>    
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <div class="cotainer mx-3">
    <a href = "user.php"><button class="btn btn-primary my-4" name ="Add User">Add User</button></a>
    </div>
    <div class="container">
            <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                // echo "hey there!!
                // how are you";
                // print "hey this is print
                // and new line";
                include 'connect.php';
                $sql = "select * from `crud1`";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['ID'];
                    $Name = $row['Name'];
                    $Email = $row['Email'];
                    $Mobile = $row['Mobile'];
                    $Password = $row['Password'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$Name.'</td>
                    <td>'.$Email.'</td>
                    <td>'.$Mobile.'</td>
                    <td>'.$Password.'</td>
                    <td><a href = "update.php?updateid='.$id.'"><button class = "btn btn-primary">Update</button></a>
                    <a href = "delete.php?deleteid='.$id.'"><button class = "btn btn-danger ">Delete</button></a>    
                    </td>
                    </tr>';
                }
                ?>
            </tr>
           
        </table>
    </div>
</body>
</html>