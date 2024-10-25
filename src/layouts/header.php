<?php
$baseUrl_Path = "";
$baseUrl = "https://b0.moonrehber.com" . $baseUrl_Path;

$PathExtName = basename($_SERVER['SCRIPT_NAME']);
$PathName = ucfirst(str_replace('.php', '', $PathExtName));

$DefaultOGImage = "/assets/image/og-image.png";

if (!isset($header_og_bool)) {
    $header_og_bool = false;
}

if (isset($PAGE_TITLE)) {
    $header_title = $PAGE_TITLE . " - " . "MoonGaming™ Rehber";
} else {
    $header_title = $PathName . " - " . "MoonGaming™ Rehber";
}

if (isset($PAGE_DESCRIPTION)) {
    $header_description = $PAGE_DESCRIPTION;
} else {
    $header_description = "Oyuncular için kapsamlı bilgiler ve ipuçları sunar. Oyun modları, stratejiler ve topluluk kaynaklarıyla oyun deneyiminizi geliştirin.";
}

if (isset($PAGE_OG_IMAGE_LOCAL) && $PAGE_OG_IMAGE_LOCAL === true) {
    if (isset($PAGE_OG_IMAGE) && !empty($PAGE_OG_IMAGE)) {
        $header_og_image = $baseUrl . $PAGE_OG_IMAGE;
    } else {
        $header_og_image = $DefaultOGImage;
    }
} else {
    if (isset($PAGE_OG_IMAGE)) {
        $header_og_image = $baseUrl . $PAGE_OG_IMAGE;
    } else {
        $header_og_image = $DefaultOGImage;
    }
}

?>
<!DOCTYPE html>
<html lang="tr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">

    <meta name="description"
          content="<?= $header_description ?>">
    <meta name="keywords" content="MoonRP, MoonGaming, mg, DarkRP, TTT, DarkRolePlay, garrysmod, gmod">

    <meta property="og:title" content="<?= $header_title ?>">
    <meta property="og:description"
          content="<?= $header_description ?>">
    <?php if ($header_og_bool) { ?>
        <meta property="og:image" content="<?= $header_og_image ?>">
    <?php } ?>
    <meta property="og:url" content="<?= $baseUrl; ?>">
    <meta property="og:type" content="website">

    <title><?= $header_title ?></title>

    <link rel="icon" type="image/x-icon" href="<?= $baseUrl; ?>/assets/image/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $baseUrl; ?>/assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= $baseUrl; ?>/assets/js/scripts.js"></script>
<script src="<?= $baseUrl; ?>/assets/js/search.js"></script>
