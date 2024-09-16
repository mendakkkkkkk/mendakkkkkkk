<?php 
include('connection.php');
$catImageAdress = 'img/categories/';
if(isset($_POST['Addcategory'])){
    $catname = $_POST['categoryName'];
    $catImage = $_FILES['categoryImage']['name'];
    $catTmpName = $_FILES['categoryImage']['tmp_name'];
    $extension = pathinfo($catImage,PATHINFO_EXTENSION);
    $des = 'img/categories/'.$catImage;
    if($extension == "jpg" || $extension == "png" || $extension == "jpg" || $extension == "webp"){
        if(move_uploaded_file($catTmpName,$des)){
            $query = $pdo -> prepare("insert into categories (catName,catImage) values(:pn,:pi)");
            $query->bindParam("pn",$catname);
            $query->bindParam("pi",$catImage);
            $query->execute();
            echo"<script>alert('category added')</script>";
        }
    }
}

//category update//
if(isset($_POST['updateCategory'])){
    $cid = $_POST['catId'];
    $catName = $_POST['categoryName'];
    if(!empty($_FILES['categoryImage']['name'])){
        $catImage = $_FILES['categoryImage']['name'];
    $CatTmpName = $_FILES['categoryImage']['tmp_name'];
    $extension = pathinfo($catImage,PATHINFO_EXTENSION);
    $des = 'img/category/'.$catImage;
    if($extension == "jpg" || $extension == "png" );
    }
}

else{
    $query = $pdo -> prepare("update category set catName = :pn where id = :pid");
    $query->bindParam("pid",$cid);
    $query->bindParam("pn",$catName);
    $query->execute();
    echo "<script>alert('category update');
    location.assign('viewcategory.php')
    </script>";
}
?>