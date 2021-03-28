
<section class="section pb-0">
  <div class="container">
    <h2 class="section-title">Browse Your Topics</h2>
    <div class="row">
      <!-- Blog -->
   
      <div class="col-sm-3 col-md-4 col-sm-6 mb-4">
        <div class="card match-height">
          <div class="card-body card-gambar">
            <img class="rounded mb-2" width="100" heigth="60" src="..\backend/storage/img/<?php echo $row['gambar']; ?>" alt="illustration">
            <h3 class="card-title h4"><?php echo $row['judul']; ?></h3>
            <p class="card-text"><?= substr($row['artikel'], 0, 100) . " ..." ?></p>
            <a href="page/single-page.php?id=<?= $row["id"]; ?>" class="btn btn-sm btn-primary mt-3 align-items-end">Read More...</a>
          </div>
        </div>
      </div>
   
      <!-- /Blog -->
    </div>
  </div>
</section>