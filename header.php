<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<?php
require_once 'config.php';
require_once 'functions.php';
echo '<style>';
echo "\n";
if ($GLOBALS['style_Color'][0] != 'Mori') {
  $stColor = change_color($GLOBALS['style_Color']);
  echo $stColor;
}
if ($GLOBALS['style_FontWeight'][0] != '' || $GLOBALS['style_FontWeight'][0] != 'normal') {
  $stFontWeight = change_fontweight($GLOBALS['style_FontWeight']);
  echo $stFontWeight;
}
if ($GLOBALS['style_BGPic'] != '') {
  echo 'body{background: #fafafa;}body::before {background: url(' . $GLOBALS['style_BGPic'] . ') center/cover no-repeat;}';
  echo "\n";
}
if ($GLOBALS['style_TextIndent'] == 'on') {
  echo '.post-content p,.post-content li{text-indent: 2em;}';
  echo "\n";
}
echo '</style>';
echo "\n";
$index_img = $GLOBALS['index_Image'];
?>

<head>
  <meta charset="<?php $this->options->charset(); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('%s'),
            'tag'       =>  _t('%s'),
            'author'    =>  _t('%s')
          ), '', ' - '); ?><?php $this->options->title(); ?> | <?php echo $GLOBALS['name']; ?></title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/css/vendor/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.2.2/css/flat-ui.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.14.0/themes/prism.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet">
  <link href="<?php $this->options->themeUrl('./css/zoom.css'); ?>" rel="stylesheet">
  <link href="<?php $this->options->themeUrl('./css/mori.css'); ?>" rel="stylesheet">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🪐</text></svg>">

  <?php $this->header(); ?>
</head>

<body>
  <header>
    <?php if ($this->is('post') or ($this->is('page'))) : ?>
      <div class="container" style="margin-top: 1.5em; margin-bottom: 1em;">
        <p class="description" style="margin: 0">
          <a id="logo" href="<?php $this->options->siteUrl(); ?>">
            <span class="headline"><?php $this->options->title() ?></span>
          </a>
           · 
          <?php $this->options->description() ?>
        </p>
      </div>
    <?php else : ?>
      <div class="container" id="main">
        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
          <?php if ($this->options->logoUrl) : ?>
            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
          <?php endif; ?>
          <h3 class="headline"><?php $this->options->title() ?></h3>
        </a>
        <p class="description"><?php $this->options->description() ?></p>
        <hr>
      </div>
    <?php endif; ?>
  </header>