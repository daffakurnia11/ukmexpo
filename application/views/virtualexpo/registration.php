<!-- Virtual Expo Header -->
<section id="event-header">
  <div class="container">
    <h1 class="event-title">Virtual Expo</h1>
    <p class="text-center mt-4">Redirecting to virtual exhibition ...</p>
    <form action="<?= base_url('virtualexpo/mahasiswa'); ?>" method="post" id="mahasiswaCategory" class="virtualexpo-form" style="display: block;">
      <div class="virtualexpo-regis">
        <div class="row">
          <div class="col-sm-6">
            <h2 class="mahasiswaButton virtualexpo-category active">Mahasiswa</h2>
          </div>
          <div class="col-sm-6">
            <h2 class="umumButton virtualexpo-category">Umum</h2>
          </div>
        </div>
        <div class="form-content">
          <input type="text" class="virtualexpo-input" id="name" name="name" placeholder="Nama Lengkap" required>
          <input type="text" class="virtualexpo-input" id="nrp" name="nrp" placeholder="NRP" required>
          <input type="text" class="virtualexpo-input" id="major" name="major" placeholder="Departemen" required>
        </div>
      </div>
      <button type="submit" class="virtualexpo-submit text-center">
        <i class="fas fa-2x fa-play"></i>
      </button>
    </form>

    <form action="<?= base_url('virtualexpo/umum'); ?>" method="post" id="umumCategory" class="virtualexpo-form" style="display: none;">
      <div class="virtualexpo-regis">
        <div class="row">
          <div class="col-sm-6">
            <h2 class="mahasiswaButton virtualexpo-category">Mahasiswa</h2>
          </div>
          <div class="col-sm-6">
            <h2 class="umumButton virtualexpo-category active">Umum</h2>
          </div>
        </div>
        <div class="form-content">
          <input type="text" class="virtualexpo-input" id="name" name="name" placeholder="Nama Lengkap" required>
          <input type="text" class="virtualexpo-input" id="origin" name="origin" placeholder="Asal Instansi" required>
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