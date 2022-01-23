<?php 
  require_once '../inc/header.php';

require '../db.php';

$query = "SELECT * FROM banners";

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

              <?php 
                foreach($datas as $data){
              ?>
                <tr>
                  <td><?= $data['id']?></td>
                  <td><?= $data['photo']?></td>
                  <td><?= $data['title']?></td>
                  <td><?= substr($data['description'],0,50,) . "..."?></td>
                </tr>
              <?php 
                }
              ?>
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