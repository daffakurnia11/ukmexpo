<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand d-flex justify-content-center" href="<?= base_url(''); ?>">
      <img src="<?= base_url('assets/img/'); ?>logo/logo.png" alt="Logo UKM EXPO 2021">
      <div>
        <span class="brand-gradient">UKM</span><br>
        <span class="brand-gradient">EXPO</span><br>
        <span class="brand-gradient">2021</span><br>
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-fw fa-lg fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto text-center">
        <a class="nav-link <?= $navbar == 'Home' ? 'active' : ''; ?>" href="<?= base_url(''); ?>">Home</a>
        <a class="nav-link <?= $navbar == 'Event' ? 'active' : ''; ?>" href="<?= base_url('event'); ?>">Event</a>
        <a class="nav-link <?= $navbar == 'UKM' ? 'active' : ''; ?>" href="<?= base_url('daftarUKM'); ?>">UKM</a>
        <a class="nav-link <?= $navbar == 'Merchandise' ? 'active' : ''; ?>" href="<?= base_url('merchandise'); ?>">Merchandise</a>
      </div>
    </div>
  </div>
</nav>
<!-- End of Navigation Bar -->