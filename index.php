<?php

/**
 * 一片森林，一座木屋，如世外桃源般，静谧、安逸。森林的气息，如梦境般，让人神往。
 * 如同她的名字一样，给人以一种自然、恬静的文字阅读体验。
 * 本项目属于 ProjectNatureSimple
 * @package Moricolor
 * @author Trii Hsia, Modified by Alex3236
 * @version Chapter II (v1.61)
 * @link https://alex3236.top/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$i = 0;
?>

<div id="main" class="container">
  <div id="main-index" style="display: none;">
    <?php $totalpages = ceil($this->getTotal() / $this->parameter->pageSize); ?>
    <h4>纪事</h4>
    <?php while ($this->next()) : ?>
      <?php
      require 'config.php';
      $i = $i + 1;
      $num_qp = $GLOBALS['index_QuickPreview'];
      if ($i <= $num_qp) {
        $collapse = 'collapse in';
      } else {
        $collapse = 'collapse';
      }
      ?>
      <article>
        <dl class="dl-horizontal">
          <dt>
            <a data-toggle="collapse" href="#<?php echo $i ?>" aria-expanded="false" aria-controls="<?php $this->title() ?>">
              <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('M j, Y'); ?></time>
            </a>
          </dt>
          <dd><a class="headline" itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></span></dd>
          <dt><small class="disabled"><?php $this->date('H:m'); ?></small></dt>

          <dd class="<?php echo $collapse ?>" id="<?php echo $i ?>">
            <?php
            if ($GLOBALS['index_QuickPreview_Img'] == 'on') {
              img_postthumb($this->cid);
            } else {
              img_postthumb($this->cid, 2);
            }
            ?>
            <?php if (des_postthumb($this->cid) != '') : ?>
              <small><?php echo des_postthumb($this->cid) ?></small>
            <?php else : ?>
              <small><?php $this->excerpt(200, ' ······') ?></small>
            <?php endif; ?>
          </dd>
        </dl>
      </article>
    <?php endwhile; ?>
  </div>

  <div id="pagenav" class="text-right" style="display: none;">
    <div class="arrow-container">
        <?php
        $this->pageLink('<span><i class="fui-triangle-left-large"></i></span>', 'next');
        if ($this->is('index') && $this->_currentPage == $totalpages) {
          echo '<a class="disabled"><span><i class="fui-triangle-left-large"></i></span></a>';
        }
        ?>
        <?php if ($this->is('index') && $this->_currentPage != 1) {
          echo '<small>' . $this->_currentPage . ' / ' . $totalpages . '</small>';
        } ?>
        <?php
        $this->pageLink('<span><i class="fui-triangle-right-large"></i></span>');
        if ($this->is('index') && $this->_currentPage == 1) {
          echo '<a class="disabled"><span><i class="fui-triangle-right-large"></i></span></a>';
        }
        ?>
    </div>
  </div>

  <div id="bottomtools" style="display: none;">
    <?php
    $ifrun = $GLOBALS['bottomTools'];
    if ($ifrun == 'on') {
      echo '<h6>ヾ(•ω•`)o</h6><small><ul>';
      echo '<section class="bottomtool">';
      //
      //一言
      if ($GLOBALS['bottomTools_hitokoto'] == 'on') {
        echo '<div id="hitokoto">Hitokoto&nbsp; · &nbsp;&nbsp;哒哒哒...</div>';
      }
      //分类
      if ($GLOBALS['bottomTools_category'] == 'on') {
        echo '<span style="padding-right: 1px;">Categories</span>';
        $this->widget('Widget_Metas_Category_List')
          ->parse('&nbsp; · &nbsp;<a style="color:#95A5A6;text-shadow: 0 0 1px rgba(0,0,0,.1);" href="{permalink}"> &{name} </a>');
        echo '<br>';
      }
      //标签
      if ($GLOBALS['bottomTools_tag'] == 'on') {
        echo '<span>Tags</span>';
        $this->widget('Widget_Metas_Tag_Cloud')->to($tags);
        while ($tags->next()) :
          echo '&nbsp; · &nbsp;<a href="' . $tags->permalink . '" style="color:#95A5A6;text-shadow: 0 0 1px rgba(0,0,0,.1);">' . $tags->name . '</a>';
        endwhile;
        echo '<br>';
      }
      //页面
      if ($GLOBALS['bottomTools_page'] == 'on') {
        echo '<span>Page & Links</span>';
        $this->widget('Widget_Contents_Page_List')->to($pages);
        while ($pages->next()) :
          echo '&nbsp; · &nbsp;<a href="' . $pages->permalink . '" style="color:#95A5A6;text-shadow: 0 0 1px rgba(0,0,0,.1);">#' . $pages->title . '</a>';
        endwhile;
        $customPages = $GLOBALS['tools_Pages'];
        $titles = array_keys($GLOBALS['tools_Pages']);
        for ($i = 0; $i < count($customPages); $i++) {
          echo '&nbsp; · &nbsp;<a href="' . $customPages[$titles[$i]] . '" style="color:#95A5A6;text-shadow: 0 0 1px rgba(0,0,0,.1);">/' . $titles[$i] . '</a>';
        }
        
        echo '<br>';
      }
      echo '</section>';
      echo '</ul>';
      //
      //搜索
      if ($GLOBALS['bottomTools_search'] == 'on') {
        echo '<form method="post" class="searchbar">';
        echo '<input autocomplete="off" name="s" type="text" class="form-control input-sm" placeholder="Search anything here~" />';
        echo '</form>';
      }
      echo '</small>';
    }
    ?>
  </div>
</div>
<?php if ($GLOBALS['beta_MoriGarden'] == 'on') : ?>
  <div id="thatsi" style="display:none;margin-top: 20px;">
    <center><a href="javascript:void(0)"><i id="getT" class="zmdi zmdi-chevron-down zmdi-hc-2x"></i></a></center>
  </div>
<?php endif; ?>
<?php $this->need('footer.php'); ?>
