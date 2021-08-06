<!-- UKM Categories -->
<section id="ukm-category">
  <div class="container categories">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="categories-card text-center" data-aos="fade-up" data-aos-duration="1000">
          <div class="categories-illustration">
            <img src="<?= base_url('assets/img/'); ?>illustration/sport.svg" alt="">
          </div>
          <h2 class="categories-name">Olahraga</h2>
          <a href="#Olahraga" class="pink-button" id="sportTrigger">Lihat Semua</a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="categories-card text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
          <div class="categories-illustration">
            <img src="<?= base_url('assets/img/'); ?>illustration/other.svg" alt="">
          </div>
          <h2 class="categories-name">Bidang Khusus</h2>
          <a href="#BidangKhusus" class="pink-button" id="otherTrigger">Lihat Semua</a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="categories-card text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          <div class="categories-illustration">
            <img src="<?= base_url('assets/img/'); ?>illustration/art.svg" alt="">
          </div>
          <h2 class="categories-name">Seni</h2>
          <a href="#Seni" class="pink-button" id="artTrigger">Lihat Semua</a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="categories-card text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750">
          <div class="categories-illustration">
            <img src="<?= base_url('assets/img/'); ?>illustration/defense.svg" class="mt-auto" alt="">
          </div>
          <h2 class="categories-name">Bela Diri</h2>
          <a href="#BelaDiri" class="pink-button" id="defenseTrigger">Lihat Semua</a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-categories">
    <img src="<?= base_url('assets/img/'); ?>svg/masks.svg" alt="">
    <img src="<?= base_url('assets/img/'); ?>svg/cock.svg" alt="">
    <img src="<?= base_url('assets/img/'); ?>svg/notes.svg" alt="">
    <img src="<?= base_url('assets/img/'); ?>svg/chess.svg" alt="">
    <img src="<?= base_url('assets/img/'); ?>svg/volleyball.svg" alt="">
  </div>
</section>
<!-- End of UKM Categories -->

<section id="ukm-list" style="display: none;">

  <!-- UKM Olahraga -->
  <div id="Olahraga" class="container ukm-content" style="display: none;">
    <h3 class="ukm-category-name">
      <i class="fas fa-fw fa-lg fa-arrow-circle-up scrollToTop"></i>
      Olahraga
    </h3>
    <div class="row justify-content-center">
      <?php foreach ($olahraga as $data) : ?>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="<?= base_url('main/detail_ukm/' . $data['slug']); ?>" class="ukm-item mx-auto">
            <div class="ukm-item-logo">
              <img src="<?= base_url('assets/img/'); ?>logo/ukm_logo/Olahraga/<?= $data['logo']; ?>" alt="">
            </div>
            <p><?= $data['ukm_name']; ?></p>
          </a>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <!-- End of UKM Olahraga -->

  <!-- UKM Bidang Khusus -->
  <div id="BidangKhusus" class="container ukm-content" style="display: none;">
    <h3 class="ukm-category-name">
      <i class="fas fa-fw fa-lg fa-arrow-circle-up scrollToTop"></i>
      Bidang Khusus
    </h3>
    <div class="row justify-content-center">

      <?php foreach ($bidangkhusus as $data) : ?>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="<?= base_url('main/detail_ukm/' . $data['slug']); ?>" class="ukm-item mx-auto">
            <div class="ukm-item-logo">
              <img src="<?= base_url('assets/img/'); ?>logo/ukm_logo/BidangKhusus/<?= $data['logo']; ?>" alt="">
            </div>
            <p><?= $data['ukm_name']; ?></p>
          </a>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <!-- End of UKM Bidang Khusus -->

  <!-- UKM Seni -->
  <div id="Seni" class="container ukm-content" style="display: none;">
    <h3 class="ukm-category-name">
      <i class="fas fa-fw fa-lg fa-arrow-circle-up scrollToTop"></i>
      Seni
    </h3>
    <div class="row justify-content-center">

      <?php foreach ($seni as $data) : ?>
        <div class="col-lg-3 col-md-4 col-6">
          <a href="<?= base_url('main/detail_ukm/' . $data['slug']); ?>" class="ukm-item mx-auto">
            <div class="ukm-item-logo">
              <img src="<?= base_url('assets/img/'); ?>logo/ukm_logo/Seni/<?= $data['logo']; ?>" alt="">
            </div>
            <p><?= $data['ukm_name']; ?></p>
          </a>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <!-- End of UKM Seni -->

  <!-- UKM Bela Diri -->
  <div id="BelaDiri" class="container ukm-content" style="display: none;">
    <h3 class="ukm-category-name">
      <i class="fas fa-fw fa-lg fa-arrow-circle-up scrollToTop"></i>
      Bela Diri
    </h3>
    <div class="row justify-content-center">

      <?php foreach ($beladiri as $data) : ?>
        <div class="col-md-4 col-6">
          <a href="<?= base_url('main/detail_ukm/' . $data['slug']); ?>" class="ukm-item mx-auto">
            <div class="ukm-item-logo">
              <img src="<?= base_url('assets/img/'); ?>logo/ukm_logo/BelaDiri/<?= $data['logo']; ?>" alt="">
            </div>
            <p><?= $data['ukm_name']; ?></p>
          </a>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <!-- End of UKM Bela Diri -->

  <div class="bg-ukm-list">
    <img src="<?= base_url('assets/img/'); ?>svg/two-cocks.svg" alt="">
    <img src="<?= base_url('assets/img/'); ?>svg/volleyball-purple.svg" alt="">
  </div>
</section>