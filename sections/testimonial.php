<?php include 'data.php'; ?>

<section class="testimonial" id="testimonial">
  <div class="title">
    <h2>Testi<span>monial</span></h2>
  </div>
  <div class="main-container">
    <div class="container testimonial-container scrollbar">
      <?php foreach ($testimonials as $t) : ?>
        <div class="card">
          <img src="<?= $t[0] ?>" alt="">
          <div class="info">
            <h3><?= $t[1] ?></h3>
            <p><?= $t[2] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
