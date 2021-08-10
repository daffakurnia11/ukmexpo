AOS.refresh();
AOS.refreshHard();
AOS.init({
  once: true,
  offset: 75
})

$(document).ready(function () {
  $('.photo-carousel').owlCarousel({
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
  $('.mascot-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    center: true,
    items: 1,
    autoHeight: true,
    autoWidth: true,
    autoplayTimeout: 2000,
    autoplaySpeed: 2000,
  })

  // UKM LIST BUTTON TRIGGER
  $('#sportTrigger').on('click', function () {
    $('#ukm-list').css('display', 'block');
    $('.ukm-content').css('display', 'none');
    $('#Olahraga').css('display', 'block');
  })
  $('#otherTrigger').on('click', function () {
    $('#ukm-list').css('display', 'block');
    $('.ukm-content').css('display', 'none');
    $('#BidangKhusus').css('display', 'block');
  })
  $('#artTrigger').on('click', function () {
    $('#ukm-list').css('display', 'block');
    $('.ukm-content').css('display', 'none');
    $('#Seni').css('display', 'block');
  })
  $('#defenseTrigger').on('click', function () {
    $('#ukm-list').css('display', 'block');
    $('.ukm-content').css('display', 'none');
    $('#BelaDiri').css('display', 'block');
  })
  $('.scrollToTop').on('click', function () {
    $(window).scrollTop(0);
  })

  // VIRTUAL EXPO REGISTRATION BUTTON TRIGGER
  $('.mahasiswaButton').on('click', function () {

    $('.virtualexpo-form').css('display', 'none');
    $('#mahasiswaCategory').css('display', 'block');
  });
  $('.umumButton').on('click', function () {

    $('.virtualexpo-form').css('display', 'none');
    $('#umumCategory').css('display', 'block');
  });
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

const mascotDesc = [
  "Melambangkan ITS sebagai lembaga pendidikan formal",
  "Melambangkan identitas almamater kita, ITS",
  "Melambangkan empat bidang UKM yang ada di ITS",
  "Melambangkan keceriaan, semangat, dan optimisme"
];

const mascotTitle = [
  "Dasi dan Kerah", "Gerigi", "4 Badge", "Warna-warna Cerah"
];
$("#mascot-interaction").on('click', function () {
  imgIndex++;
  if (imgIndex == 5) {
    imgIndex = 1;
  }
  $("#mascot-image").attr('src', 'assets/img/mascot/component' + imgIndex + '.png');
  $(".component-desc").html(mascotDesc[imgIndex - 1]);
  $(".component-name").html(mascotTitle[imgIndex - 1]);
});

// COUNTDOWN TIMER
var countDownDate = new Date("Aug 28, 2021 23:59:59").getTime();

var x = setInterval(function () {
  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hour = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var min = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var sec = Math.floor((distance % (1000 * 60)) / 1000);

  function digit(n) {
    return n < 10 ? "0" + n : "" + n;
  }

  document.querySelector(".days").innerHTML = digit(days);
  document.querySelector(".hours").innerHTML = digit(hour);
  document.querySelector(".mins").innerHTML = digit(min);
  document.querySelector(".secs").innerHTML = digit(sec);

  if (distance < 0) {
    clearInterval(x);
    document.querySelector(".countdown-title").innerHTML = 'Regular Registration Ditutup'
    document.querySelector(".days").innerHTML = '00';
    document.querySelector(".hours").innerHTML = '00';
    document.querySelector(".mins").innerHTML = '00';
    document.querySelector(".secs").innerHTML = '00';
  }
}, 1000);