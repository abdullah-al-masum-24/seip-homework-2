<?php include "header.php"; ?>

<?php

if (!isset($_SESSION['id'])) {

    header("location:action.php?page=login");
}

?>

    <section class="py-5" data-aos="fade">
        <div class="container">
            <div class="row">



                    <div class="col-md-3 col-sm-4 h-card mb-4">
                        <div class="card h-100">
                            <img src="<?php echo $getBlogDetail['image']; ?>" alt="" class="card-img-top h-50 p-5">
                            <div class="card-body card-bg p-3 rounded-bottom">
                                <h5 class="card-title text-light"><?php echo $getBlogDetail['title']; ?></h5>
                                <p class="card-text"><small class="text-muted"><?php echo $getBlogDetail['author']; ?></small></p>
                                <p class="card-text text-light"><?php echo $getBlogDetail['description']; ?></p>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </section>



<?php include "footer.php"; ?>