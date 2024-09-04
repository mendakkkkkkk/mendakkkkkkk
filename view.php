<?php 
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-info text-center mt-5">Read Data From Database</h1>
    <div class="container">
        <div class="table table-primary">
            
        



<table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">maths</th>
                <th scope="col">english</th>
                <th scope="col">urdu</th>
                <th scope="col">physics</th>
                <th scope="col">chemistry</th>
                <th scope="col">islamiat</th>
                <th scope="col">total</th>
                <th scope="col">obtained</th>
                <th scope="col">percentage</th>
                <th scope="col">grade</th>
                <th scope="col">remarks</th>
                <th colspan=2>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            $query = $pdo->query("select * from form2");
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($row as $value){
            ?>

        <tr class="">
            <td scope="row"><?php echo $value['name']; ?></td>
            <td scope="row"><?php echo $value['maths']; ?></td>
            <td scope="row"><?php echo $value['english']; ?></td>
            <td scope="row"><?php echo $value['urdu']; ?></td>
            <td scope="row"><?php echo $value['physics']; ?></td>
            <td scope="row"><?php echo $value['chemistry']; ?></td>
            <td scope="row"><?php echo $value['islamiat']; ?></td>
            <td scope="row"><?php echo $value['total']; ?></td>
            <td scope="row"><?php echo $value['obtain']; ?></td>
            <td scope="row"><?php echo $value['percentage']; ?></td>
            <td scope="row"><?php echo $value['grade']; ?></td>
            <td scope="row"><?php echo $value['remarks']; ?></td>
            <td> <a href="update.php?id=<?php echo $value['id'] ?>" class="btn btn-success">Edit</a></td>
            <td> <a href="" class="btn btn -danger">Delete</a></td>
            

            
        </tr>
        <?php
            }
        ?>
    
        </tbody>
        </table>
        </div>
    </div>
    </body>
</html>
