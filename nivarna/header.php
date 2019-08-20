<!DOCTYPE HTML>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Nirvana</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>./index.css"/>
</head>

<body>
  <div class="banner" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>./images/alex-gruber-pz_hAv6ER7c-unsplash.png');"></div>

  <div class="nav-bar">
    <div><img src="<?php echo get_bloginfo('template_directory'); ?>./images/sandwich.svg"></div>
    <ul id="nav-bar">
      <?php wp_list_pages( '&title_li=' ); ?>
    </ul>

    <div id="mobile-nav-bar">
        <div id="nav-div" onclick="pizaz()">
            <span class="uno"></span>
            <span class="uno"></span>
            <span class="uno"></span>
        </div>
    </div>
  
    <div id="nav-links">
        <ul>
            <?php wp_list_pages( '&title_li=' ); ?>
        </ul>
    </div>
  </div>
<?php wp_head(); ?>