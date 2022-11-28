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
                <div class="card bg-light ">
                    <div class="card-header">manage category</div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-light">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th class="text-primary">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($getAllCategory as $category) { ?>
                                    <tr>
                                        <td><?php echo $category['id']; ?></td>
                                        <td><?php echo $category['name']; ?></td>
                                        <td><?php echo $category['title']; ?></td>
                                        <td>
                                            <img src="<?php echo $category['image']; ?>" alt="" height="100" width="100"/>
                                        </td>
                                        <td>
                                            <a href="action.php?page=edit-category&&id=<?php echo $category['id']; ?>" class="btn">
                                                <i class="fa fa-edit text-success"></i>
                                            </a>
                                            <a href="action.php?page=delete-category&&id=<?php echo $category['id']; ?>" class="btn">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include "footer.php";?>