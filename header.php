<?php require_once('common.php'); ?>
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
  <?php if ($_CONF['dark-mode']): ?><link rel="stylesheet" href="./assets/styles/style-dark.css?<?=RandCache()?>"><?php else: ?>
  <link id="dark-style" class="dark-theme" rel="stylesheet" href="assets/styles/style-dark.css?<?= rand() ?>" disabled><?php endif; ?><?php if ($_CONF['anti-f12-pro']): ?>
<script src="https://api.thanhdieu.com/protect/sfs.js<?=$CACHE_CONF?>"></script><?php endif; ?>

    </head>
    <body class="bg-triangles">
    <div id="thanhdieudata"></div>
