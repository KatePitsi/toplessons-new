<!doctype html>
<html lang="en" class="no-js scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= wp_get_document_title() ?></title>
    <?php $favicon = get_field('logo_fav_icon', 'option');?>
    <link rel="icon" type="image/png" href="<?php echo $favicon['url']; ?>">
    <?php wp_head() ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/wp-content/themes/ergasiesmathitwn/style-main.css" type="text/css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body <?php body_class() ?>>

    <main class="main-content py-0 my-0 antialiased">

        <div class="main-menu">
            <?php get_template_part( 'global-templates/menu-full' ); ?>
        </div>

