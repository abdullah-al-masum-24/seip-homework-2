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
                <form action="action.php" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header"><?php echo $saveResult; ?></div>
                        <div class="card-body">
<!--                            <div class="row mb-3">-->
<!--                                <label for="" class="col-md-3">Author</label>-->
<!--                                <div class="col-md-9">-->
<!--                                    <input type="text" class="form-control" name="author"/>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="title"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Blog Category</label>
                                <div class="col-md-9">
                                    <select name="category" id="" class="form-select text-capitalize">
                                        <option selected>Select Any Category</option>
                                        <option value="culture">Culture</option>
                                        <option value="sport">Sport</option>
                                        <option value="lifestyle">Life style</option>
                                        <option value="food">Food</option>
                                        <option value="politics">Politics</option>
                                        <option value="business">Business</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
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
                                    <input type="submit" class="btn btn-success w-100 px-5" value="New Blog" name="blog_btn"/>
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