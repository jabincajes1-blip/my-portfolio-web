<?php include 'data.php'; ?>

<section class="portfolio" id="portfolio">
  <div class="title">
    <h2>Latest <span>Project</span></h2>
  </div>

  <div class="container portfolio-container">
    <div class="portfolio-buttons">
      <button class="btn portfolio-tab active" onclick="tabOpen('all')">All</button>
    </div>

    <div class="tab-content active-content" id="all">
      <?php foreach ($portfolioImages as $image) : ?>
        <div class="image">
          <img src="<?= $image ?>" alt="">
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
