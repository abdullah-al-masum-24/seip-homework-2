<?php include "header.php";?>
<?php

if (!isset($_SESSION['id'])) {

    header("location:action.php?page=login");
}

?>


<section class="py-5" data-aos="fade">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Add new category</div>
                    <div class="card-body">
                        <form action="action.php" method="post" enctype="multipart/form-data">

                            <div class="row mb-3">
                                <label for="" class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Description</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="description"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success w-100" name="cat_btn" value="Add Category"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include "footer.php";?>