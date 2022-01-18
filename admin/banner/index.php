<?php 
  require_once '../inc/header.php';

?>

<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2>All Banners <a href="insert.php" class="btn btn-primary">Add Banner</a></h2>
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