<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Database Raw Project
                    </div>
                <div class="card-body">
                    <h4 class="text-center text-success my-3"> <?php echo isset($message) ? $message: '' ;?></h4>
                    <form action="action.php" method="POST" enctype="multipart/form-data">

                        <div class="row mb-3">
                            <label for="" class="col-md-3"> Name </label>
                            <div class="col-md-9">
                                <input type="text" required class="form-control" name="name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3"> email </label>
                            <div class="col-md-9">
                                <input type="email" required class="form-control" name="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3"> Mobile </label>
                            <div class="col-md-9">
                                <input type="number" required class="form-control" name="mobile">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3"> Image </label>
                            <div class="col-md-9">
                                <input type="file" required accept="image/*" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-3">  </label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="submit_btn" value="Submit">
                            </div>
                        </div>

                    </form>

                </div>

                </div>
            </div>
        </div>
    </div>
</section>



<?php include "footer.php"; ?>