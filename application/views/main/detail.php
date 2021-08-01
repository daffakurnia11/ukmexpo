<article id="ukm-content">
  <div class="container">
    <h2 class="ukm-name">
      <a href="<?= base_url('ukm'); ?>">
        <i class="fas fa-fw fa-lg fa-arrow-circle-left scrollToTop"></i>
      </a>
      <?= $detail['ukm_name']; ?>
    </h2>
    <div class="row detail">
      <div class="col-lg-3 col-md-4 mb-4">
        <div class="detail-logo">
          <img src="<?= base_url('assets/img/'); ?>logo/ukm_logo/<?= $detail['type'] . '/' . $detail['logo']; ?>" alt="">
        </div>
        <div class="text-center">
          <a href="" class="purple-button">Daftar Sekarang!</a>
        </div>
      </div>
      <div class="col-lg-9 col-md-8">
        <h1 class="detail-name"><?= $detail['ukm_name']; ?></h1>
        <div class="detail-body">
          <h2 class="detail-title white-label">FAQ</h2>

          <?php $i = 1; ?>
          <?php foreach ($faqs as $faq) : ?>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading<?= $i; ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $i; ?>" aria-expanded="true" aria-controls="collapse<?= $i; ?>">
                  <?= $faq['question']; ?>
                </button>
              </h2>
              <div id="collapse<?= $i; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $i; ?>">
                <div class="accordion-body">
                  <?= $faq['answer']; ?>
                </div>
              </div>
            </div>
            <?php $i++; ?>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
</article>