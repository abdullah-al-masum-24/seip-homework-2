<?php include "header.php";?>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="action.php" method="post">
                        <div class="card">
                            <div class="card-header text-danger text-capitalize"><?php echo $saveResult; ?></div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success w-100 px-5" value="Login" name="login_btn"/>
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