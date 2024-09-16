<?php include('components/header.php');
if (isset($_GET['cId'])){
    $id = $_GET['cId'];
    $query = $pdo -> prepare("select * from category where id = :pid");
    $query ->bindParam("pid,$id");
    $query ->execute();
    $category = $query->fetch(PDO::FETCH_ASSOC);
}
?>

 <!-- Blank Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-12 px-3 py-5">
                        <h3>Add Category</h3>
                        <form method="post" enctype="multipart/form-data"> 
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="categoryName">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category Image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="categoryImage">
                                </div>
                                <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <button type="submit" class="btn btn-primary" name="Addcategory">Add Category</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Horizontal Form</h6>
                            <form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->



<?php include('components/footer.php') ?>