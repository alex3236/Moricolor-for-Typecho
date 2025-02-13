<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main" class="container">
    <div id="main-page" role="main" style="display: none;">
        <article class="post">
            <?php if($this->user->hasLogin()):?>
                <a class="headline-btn" href="/admin/write-page.php?cid=<?php echo $this->cid;?>">编辑</a>
            <?php endif;?>
            <h3 itemprop="name headline" class="headline"><?php $this->title() ?></h3>
            <hr>
            <div class="clearfix"></div>
            <div class="post-content" itemprop="articleBody">
                <?php $this->content(); ?>
            </div>
        </article>
    </div>
</div>
<?php $this->need('footer.php'); ?>