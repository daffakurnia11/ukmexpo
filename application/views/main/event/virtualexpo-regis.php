<!-- Virtual Expo Header -->
<section id="event-header">
  <div class="container">
    <h1 class="event-title">Virtual Expo</h1>
    <p class="text-center mt-4">Redirecting to virtual exhibition ...</p>
    <form action="" method="post">
      <div class="virtualexpo-regis">
        <div class="row">
          <div class="col-sm-6">
            <h2 id="mahasiswaButton" class="virtualexpo-category active">Mahasiswa</h2>
          </div>
          <div class="col-sm-6">
            <h2 id="umumButton" class="virtualexpo-category">Umum</h2>
          </div>
        </div>
        <div id="mahasiswaCategory" class="virtualexpo-form" style="display: block;">
          <input type="text" class="virtualexpo-input" id="name" name="name" placeholder="Nama Lengkap">
          <input type="text" class="virtualexpo-input" id="nrp" name="nrp" placeholder="NRP">
          <input type="text" class="virtualexpo-input" id="major" name="major" placeholder="Departemen">
        </div>
        <div id="umumCategory" class="virtualexpo-form" style="display: none;">
          <input type="text" class="virtualexpo-input" id="name" name="name" placeholder="Nama Lengkap">
          <input type="text" class="virtualexpo-input" id="origin" name="origin" placeholder="Asal Instansi">
        </div>
      </div>
      <button type="submit" class="virtualexpo-submit text-center">
        <i class="fas fa-2x fa-play"></i>
      </button>
    </form>
  </div>
  <img src="<?= base_url('assets/img/'); ?>svg/event-star.svg" class="event-star-bg" alt="">
  <img src="<?= base_url('assets/img/'); ?>svg/event-star.svg" class="event-star-bg" alt="">
  <img src="<?= base_url('assets/img/'); ?>svg/event-star.svg" class="event-star-bg" alt="">
  <img src="<?= base_url('assets/img/'); ?>svg/event-star.svg" class="event-star-bg" alt="">
  <img src="<?= base_url('assets/img/'); ?>svg/event-star.svg" class="event-star-bg" alt="">
</section>
<!-- End of Virtual Expo Header -->