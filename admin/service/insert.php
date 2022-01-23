<?php
require_once '../inc/header.php';

?>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Add Service <a href="index.php" class="btn btn-primary">All Services</a></h2>
                    </div>

                    <div class="card-body">
                        <form action="service_post.php" method="POST">
                            <div class="form-group">
                                <input type="text" placeholder="Title" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="description" placeholder="Description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Icon Class Name" name="icon_class" class="form-control">
                            </div>
                            <div class="form-group">
                                <select name="icon_box_class" class="form-control">
                                    <option value="icon-box-pink">pink</option>
                                    <option value="icon-box-cyan">cyan</option>
                                    <option value="icon-box-green">green</option>
                                    <option value="icon-box-blue">blue</option>
                                </select>
                                <p></p>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Submit" class="form-control">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../inc/footer.php';
?>