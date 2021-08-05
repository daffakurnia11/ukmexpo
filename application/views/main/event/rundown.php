<!-- Event Header -->
<section id="rundown">
  <div class="container">
    <h1 class="rundown-title">Rundown</h1>
    <div class="rundown-content">
      <h2 class="rundown-date mx-auto mx-md-0"><?= $date; ?></h2>
      <div class="row rundown-table">
        <?php foreach ($events as $event) : ?>
          <div class="col-md-6 rundown-list">
            <div class="row">
              <div class="col-5 col-sm-4 col-md-5 col-lg-4 col-xxl-3">
                <span class="rundown-time">
                  <?= $event['timeStart']; ?> - <?= $event['timeEnd']; ?>
                </span>
              </div>
              <div class="col-7 col-sm-8 col-md-7 col-lg-8 col-xxl-9">
                <span class="rundown-subevent">
                  <?= $event['subevent']; ?>
                </span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<!-- End of Event Header -->