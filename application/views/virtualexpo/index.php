<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UKM EXPO 2021 Virtual Booth</title>
  <link rel="shortcut icon" href="<?= base_url('assets/img/'); ?>logo/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url('assets/virtualbooth/'); ?>TemplateData/style.css">
  <script src="<?= base_url('assets/virtualbooth/'); ?>TemplateData/UnityProgress.js"></script>
  <script src="<?= base_url('assets/virtualbooth/'); ?>Build/UnityLoader.js"></script>
  <script>
    var unityInstance = UnityLoader.instantiate("unityContainer", "<?= base_url('assets/virtualbooth/'); ?>Build/Vtour 8.json", {
      onProgress: UnityProgress
    });
  </script>
</head>

<body>
  <div class="webgl-content">
    <div id="unityContainer"></div>
    <div class="footer">
      <div class="webgl-logo"></div>
      <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
      <div class="title">Virtual Tour UKM Expo 2021</div>
    </div>
    <div class="state-bg">
      <img src="<?= base_url('assets/img/svg/state-flower.svg'); ?>" alt="">
      <img src="<?= base_url('assets/img/svg/state-flower.svg'); ?>" alt="">
    </div>
  </div>
</body>

</html>