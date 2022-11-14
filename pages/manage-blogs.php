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
                    <div class="card">
                        <div class="card-header">Mange Table</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Description</th>
                                        <th>image</th>
                                        <th class="text-center text-primary">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($getAllBlog as $blog) { ?>

                                        <tr>
                                            <td><?php echo $blog['title'];?></td>
                                            <td><?php echo $blog['author'];?></td>
                                            <td><?php echo $blog['description'];?></td>
                                            <td height="50" width="50"><img src="<?php echo $blog['image'];?>" alt="" class="h-100 w-100"/></td>
                                            <td>
                                                <a href="action.php?page=edit&&id=<?php echo $blog['id'];?>" class="btn btn-sm text-success">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="action.php?page=delete&&id=<?php echo $blog['id'];?>" class="btn btn-sm text-danger" onclick="return confirm('Are you sure to delete this blog ?')">
                                                    <i class="fa fa-trash "></i>
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