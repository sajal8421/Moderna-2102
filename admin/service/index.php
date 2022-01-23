<?php
require_once '../inc/header.php';

require '../db.php';

$query = "SELECT * FROM services";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $datas = mysqli_fetch_all($result, 1);
}

?>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Services <a href="insert.php" class="btn btn-primary">Add Service</a></h2>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Img</th>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>

                            
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../inc/footer.php';
?>