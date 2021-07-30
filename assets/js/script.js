$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 14,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    autoplaySpeed: 2000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      992: {
        items: 3
      }
    }
  })
});

var imgIndex = 1;
const instruction = [
  "<strong>Klik logo</strong> lagi untuk mengetahui maknanya!",
  "<strong>4 simbol hati</strong> melambangkan <strong>hubungan yang harmonis</strong> di antara 4 bidang UKM",
  "<strong>4 kelopak bunga</strong> yang sedang mengembang melambangkan 4 bidang UKM yang <strong>berkembang bersama</strong>",
  "<strong>Semanggi berdaun 4</strong> melambangkan <strong>harapan dan kepercayaan</strong> terhadap 4 bidang UKM dalam mengembangkan minat & bakat mahasiswa",
  "<strong>4 lingkaran</strong> di atas simbol kelopak bunga melambangkan <strong>4 bidang UKM</strong>"
];
$("#logo-interaction").on('click', function () {
  imgIndex++;
  if (imgIndex == 6) {
    imgIndex = 1;
  }
  $("#logo-interaction").attr('src', 'assets/img/logo/interact_logo' + imgIndex + '.png');
  $("#logo-instruction").html(instruction[imgIndex - 1]);
});