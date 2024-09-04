<?php include('connection.php'); ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <form action="" method="post">

        <div class="mb-3">
                <label for="" class="form-label">name</label>
                <input 
                type="name"
                name="name"
                id=""
                class="form-control"
                placeholder="enter your name"
                area-describedby="helpId"
                />
            </div>









            <div class="mb-3">
                <label for="" class="form-label">maths</label>
                <input 
                type="number"
                name="maths"
                id=""
                class="form-control"
                placeholder="enter your marks"
                area-describedby="helpId"
                />
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">english</label>
                <input 
                type="number"
                name="english"
                id=""
                class="form-control"
                placeholder="enter your marks"
                area-describedby="helpId"
                />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">urdu</label>
                <input 
                type="number"
                name="urdu"
                id=""
                class="form-control"
                placeholder="enter your marks"
                area-describedby="helpId"
                />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">physics</label>
                <input 
                type="number"
                name="physics"
                id=""
                class="form-control"
                placeholder="enter your marks"
                area-describedby="helpId"
                />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">chemistry</label>
                <input 
                type="number"
                name="chemistry"
                id=""
                class="form-control"
                placeholder="enter your marks"
                area-describedby="helpId"
                />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">islamiat</label>
                <input 
                type="number"
                name="islamiat"
                id=""
                class="form-control"
                placeholder="enter your marks"
                area-describedby="helpId"
                />
            </div>
            <button 
            type="submit"
            class="btn btn-success"
            name='result'
            >
        SUBMIT
        </button>


        </form>

        <?php 
        if(isset($_POST['result'])){
            $name= $_POST['name'];
            $maths= $_POST['maths'];
            $english= $_POST['english'];
            $urdu= $_POST['urdu'];
            $physics= $_POST['physics'];
            $chemistry= $_POST['chemistry'];
            $islamiat= $_POST['islamiat'];
            $totalMarks = 600;
            $obtain= $maths + $english + $urdu + $physics + $chemistry + $islamiat;
            $percentage = $obtain/$totalMarks * 100;
            $grade= "";
            $remarks="";
            if($percentage>=80 && $percentage<=100){
                $grade="A1";
                $remarks="excellent";
            }

            else if($percentage>=60 && $percentage<80){
                $grade="A";
                $remarks="very good";
            }

            else if($percentage>=50 && $percentage<60){
                $grade="B";
                $remarks="good";
            }

            else if($percentage>=01 && $percentage<50){
                $grade="Fail";
                $remarks="better luck next time";
            }
          
            $query =$pdo->prepare("insert into form2 (name,maths,english,urdu,physics,chemistry,islamiat,obtain,percentage,grade,remarks) values(:pn,:pm,:pe,:pu,:pp,:pc,:pi,:po,:pper,:pg,:pr)");
            $query->bindParam("pn",$name);
            $query->bindParam("pm",$maths);
            $query->bindParam("pe",$english);
            $query->bindParam("pu",$urdu);
            $query->bindParam("pp",$physics);
            $query->bindParam("pc",$chemistry);
            $query->bindParam("pi",$islamiat);
            $query->bindParam("po",$obtain);
            $query->bindParam("pper",$percentage);
            $query->bindParam("pg",$grade);
            $query->bindParam("pr",$remarks);
            $query->execute();
            echo "<script>alert('data insert into table')</script>";
            ?>

           
            <?php

        }
        ?>
        
        
        
    </div>

</body>
</html>