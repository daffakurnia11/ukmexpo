<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>UKM EXPO 2021 Virtual Booth</title>
  <link rel="shortcut icon" href="TemplateData/favicon.ico">
  <link rel="stylesheet" href="TemplateData/style.css">
  <script src="<?= base_url('assets/virtualbooth/'); ?>TemplateData/UnityProgress.js"></script>
  <script src="<?= base_url('assets/virtualbooth/'); ?>Build/UnityLoader.js"></script>
  <script>
    var unityInstance = UnityLoader.instantiate("unityContainer", "<?= base_url('assets/virtualbooth/'); ?>Build/vtour 7.json", {
      onProgress: UnityProgress
    });
  </script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      overflow: hidden;
    }
  </style>
</head>

<body>
  <div class="webgl-content">
    <div id="unityContainer" style="width: 100vw; height: 100vh"></div>
    <div class="footer">
      <div class="webgl-logo"></div>
      <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
      <!-- <div class="title">Vtour UKM</div> -->
    </div>
  </div>
</body>

</html>