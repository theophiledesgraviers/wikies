<?php include '../incs/header.php' ?>
<?php include '../incs/sidebar.php' ?>
<?php include '../bdd/connexion.php' ?>

        <div class="row">

          <?php foreach (getNotes() as $note) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?= $note['title'] ; ?></a>
                  </h4>
                  <h5><?php echo $note['description']; ?></h5>
                  <p class="card-text"><?php echo htmlspecialchars($note['content']); ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          <?php endforeach; ?>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include '../incs/footer.php' ?>