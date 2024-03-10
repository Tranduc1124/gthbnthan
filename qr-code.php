<?php require_once('inc/common.php'); ?>
<?php if ($_CONF['captcha-anti-badbot']): ?>
<?php include("config/anti-badbot.php"); ?>
<?php endif; ?>
<?php ThanhDieuHead() + ThanhDieuConfig() + ThanhDieuEffect() ?>
<!DOCTYPE html>
<html>
<head lang="vi-VN">
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $_CONF['SET']['title']; ?></title>
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="keywords" content="<?= $_CONF['SET']['keywords']; ?>">
    <meta name="description" content="<?= $_CONF['SET']['title']; ?>">
    <meta property="og:description" content="<?= $_CONF['SET']['og:description']; ?>">
    <meta property="og:type" content="acticle">
    <meta property="og:locale" content="vi-VN" />
    <meta property="og:site_name" content="<?= $_CONF['SET']['og:site_name']; ?>">
    <meta property="og:title" content="<?= $_CONF['SET']['og:title']; ?>">
    <link rel="shortcut icon" href="<?= $_CONF['SET']['shortcut_icon']; ?><?=$CACHE_CONF?>" />
    <meta property="og:image" content="<?= $_CONF['SET']['og:image']; ?><?=$CACHE_CONF?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/styles/style.css?<?=RandCache()?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    <link rel="stylesheet" href="assets/styles/porn-hub.css?<?=RandCache()?>">
    <?php if ($_CONF['dark-mode']): ?>
    <link rel="stylesheet" href="./assets/styles/style-dark.css?<?=RandCache()?>">
<?php else: ?>
  <link id="dark-style" class="dark-theme" rel="stylesheet" href="assets/styles/style-dark.css?<?= rand() ?>" disabled>
<?php endif; ?>
    <?php if ($_CONF['anti-f12-pro']): ?>
<script src="https://api.thanhdieu.com/protect/sfs.js<?=$CACHE_CONF?>"></script>
<?php endif; ?>
  </head>
    <body class="bg-triangles">
  <div id="top-td"></div><br/>
<div class="preloader">
    <div class="preloader__wrap">
      <div class="circle-pulse">
        <div class="circle-pulse__1">
      </div>
      <div class="circle-pulse__2">
      </div>
    </div>
    <div class="preloader__progress">
    <span>
  </span>
  </div>
  </div>
  </div>
    <main class="main">
      <div class="container gutter-top">
        <div class="row sticky-parent">
          <!-- Sidebar -->
          <aside class="col-12 col-md-12 col-xl-3">
            <div class="sidebar box pb-0 sticky-column">
              <div class="text-center">
                <img class="ft-logo" src="https://upload.thanhdieu.com/3ba7d4.gif"/>
                <h3 class="title title--h3 sidebar__user-name td-name">
                  <span class="weight--500 td-name">Vương Thanh Diệu <img class="td-verify" src="https://i.imgur.com/L0GmCbu.png"/><br>
                    <div class="badge badge--gray td-bio">@wusthanhdieu</div>
                </h3>
                <!-- Social -->
                </div>
                <div class="sidebar__info box-inner box-inner--rounded">
                  <ul class="contacts-block">
                    <li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="Website">
                      🔹Website:&nbsp;<a href="https://thanhdieu.com" target="_blank">thanhdieu.com</a></li>
                  </li>
                    <li class="contacts-block__item" data-toggle="tooltip" data-placement="top" title="Zalo Vietnam">
                      🔹Zalo:&nbsp;<a href="https://0968091844" target="_blank">0968091844</a></li>
                    </li>
                  </ul>
                  <a class="btn btn--blue-gradient navbar-brand" href="./">Về Trang Chính</a>
                </div>
              </div>
          </aside>
          <!-- Content -->
          <div class="col-12 col-md-12 col-xl-9">
            <div class="box pb-0">
              <!-- About -->
              <div class="pb-2">
                <h3 class="title title--h3 title__separate">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Quét QR-Code</font>
                  </font>
                </h3>
              </div>
              <div class="pb-0">
                <div class="select">
                  <input type="hidden" name="changemetoo">
                </div>
                <div class="gallery-grid js-masonry js-filter-container" style="position: relative; height: 688.538px;">
                  <div class="gutter-sizer" style="position: absolute; left: 0px; top: 0px;"></div>
                  <figure class="gallery-grid__item category-concept" style="position: absolute; left: 0%; top: 0px;">
                    <div class="gallery-grid__image-wrap">
                      <img style="" class="gallery-grid__image cover medium-zoom-image lazyloaded" src="https://i.imgur.com/WvafJfT.jpg" data-zoom="" alt="">
                    </div>
                    <figcaption class="gallery-grid__caption">
                      <h4 class="title gallery-grid__title">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">QR-Code MB Bank</font>
                        </font>
                      </h4>
                    </figcaption>
                  </figure>
                  <!-- Item 2 -->
                  <figure class="gallery-grid__item category-concept" style="position: absolute; left: 0%; top: 344.269px;">
                    <div class="gallery-grid__image-wrap">
                      <img style="" class="gallery-grid__image cover medium-zoom-image lazyloaded" src="https://i.imgur.com/WvafJfT.jpg" data-zoom="" alt="">
                    </div>
                    <figcaption class="gallery-grid__caption">
                      <h4 class="title gallery-grid__title">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">QR-Code Momo</font>
                        </font>
                      </h4>
                    </figcaption>
                  </figure>
                  <figure class="gallery-grid__item category-concept" style="position: absolute; left: 0%; top: 344.269px;">
                    <div class="gallery-grid__image-wrap">
                      <img style="" class="gallery-grid__image cover medium-zoom-image lazyloaded" src="https://i.imgur.com/WvafJfT.jpg" data-zoom="" alt="">
                    </div>
                    <figcaption class="gallery-grid__caption">
                      <h4 class="title gallery-grid__title">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">QR-Code Vietinbank</font>
                        </font>
                      </h4>
                    </figcaption>
                  </figure>
                  <figure class="gallery-grid__item category-concept" style="position: absolute; left: 0%; top: 344.269px;">
                    <div class="gallery-grid__image-wrap">
                      <img style="" class="gallery-grid__image cover medium-zoom-image lazyloaded" src="https://i.imgur.com/WvafJfT.jpg" data-zoom="" alt="">
                    </div>
                    <figcaption class="gallery-grid__caption">
                      <h4 class="title gallery-grid__title">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">QR-Code Vietcombank</font>
                        </font>
                      </h4>
                    </figcaption>
                  </figure>
                  <figure class="gallery-grid__item category-concept" style="position: absolute; left: 0%; top: 344.269px;">
                    <div class="gallery-grid__image-wrap">
                      <img style="" class="gallery-grid__image cover medium-zoom-image lazyloaded" src="https://i.imgur.com/WvafJfT.jpg" data-zoom="" alt="">
                    </div>
                    <figcaption class="gallery-grid__caption">
                      <h4 class="title gallery-grid__title">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">QR-Code Đang update...</font>
                        </font>
                      </h4>
                    </figcaption>
                  </figure>
                  <figure class="gallery-grid__item category-concept" style="position: absolute; left: 0%; top: 344.269px;">
                    <div class="gallery-grid__image-wrap">
                      <img style="" class="gallery-grid__image cover medium-zoom-image lazyloaded" src="https://i.imgur.com/WvafJfT.jpg" data-zoom="" alt="">
                    </div>
                    <figcaption class="gallery-grid__caption">
                      <h4 class="title gallery-grid__title">
                        <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">QR-Code Đang update...</font>
                        </font>
                      </h4>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class="corner-icon-container">
<div class="corner-icon corner-icon-moon">
    <a class="" data-toggle="tooltip" data-placement="left" data-original-title="Toggle Display Theme">
        <img height="23" width="23" src="./assets/icons/moon-td.svg" alt="Dark Mode">
    </a>
</div>
<div class="corner-icon corner-icon-qrcode">
    <a class="" data-toggle="tooltip" data-placement="left" data-original-title="Mã qr của trang này">
        <img height="24" width="24" src="./assets/icons/qr-code-td.svg" alt="QR Code">
    </a>
</div>
<div class="corner-icon corner-icon-github">
    <a class="" data-toggle="tooltip" data-placement="left" data-original-title="Github của tôi">
        <img height="20" width="20" src="./assets/icons/github-color-td.svg" alt="My github">
    </a>
</div>
<div class="corner-icon corner-icon-scroll" id="scrollToTop">
    <a class="" data-toggle="tooltip" data-placement="left">
        <i class="fa fa-angle-up td-scroll"></i>
    </a>
</div>
</div>
  <footer style="text-transform: capitalize;"class="footer">2023 ©️ - <a id="website" href="#" target="_blank">From ThanhDieu ❤️</a></footer>
      </div>
      </div>
      </div>
    </main>
<?php require_once('inc/footer.php'); ?>
  </body>
</html>