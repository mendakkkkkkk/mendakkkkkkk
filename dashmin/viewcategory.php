<?php
include("components/header.php")
?>

 <!-- Blank Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 py-3">
                        <h3>All Categories</h3>
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Category Image</th>
                                        <th scope="col" colspan="2">Action</th>
                                    </tr>
                                </thead>
                        
                            <tbody>

                                <?php 
                                $query = $pdo ->query("select * from categories");
                                $catrows = $query ->fetchAll(PDO::FETCH_ASSOC);
                                foreach($catrows as $catvalues){
                                ?>

                                <tr>
                                    <th scope="row"><?php echo $catvalues['id']?></th>
                                    <td><?php echo $catvalues['catName']?></td>
                                    <td><img src="<?php echo $catImageAdress.$catvalues['catImage']?>"width="80px"></td>
                                    <td><a href="" class="btn btn-outline-success">Edit</a></td>
                                    <td><a href="" class="btn btn-outline-dnager">Delete</a></td>
                                </tr>

                                <?php

                                }

                                ?>
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
             <?php
             include("components/footer.php")
             ?>