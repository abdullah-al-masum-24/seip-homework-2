<?php include "header.php";?>
<?php

if (!isset($_SESSION['id'])) {

    header("location:action.php?page=login");
}

?>

<section class="py-5">

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="action.php" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header"><?php echo $saveResult; ?></div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Author</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="author" value="<?php echo $getSingleBlog['author']; ?>"/>
                                    <input type="text" hidden class="form-control" name="id" value="<?php echo $getSingleBlog['id']; ?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title" value="<?php echo $getSingleBlog['title'];?>" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"><?php echo $getSingleBlog['title'];?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image"/>
                                    <img src="<?php echo $getSingleBlog['title']; ?>" alt="" class="img-thumbnail"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success w-100 px-5" value="New Blog" name="edit_btn"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>


<?php include "footer.php";?>