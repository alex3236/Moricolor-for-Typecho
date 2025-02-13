<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<?php
$nextPost = theNext($this);
$prevPost = thePrev($this);
?>

<div id="main" class="container">
    <div id="main-post" role="main" itemscope itemtype="http://schema.org/BlogPosting" style="display: none;">
        <article class="post">
            <?php if($this->user->hasLogin()):?>
                <a class="headline-btn" href="/admin/write-post.php?cid=<?php echo $this->cid;?>">编辑</a>
            <?php endif;?>
            <h3 itemprop="name headline" class="headline"><?php $this->title() ?></h3>
            <div class="text-right">
                <?php if ($GLOBALS['style_TextBar'] == '1') : ?>
                    <div class="text-bar">
                        <p class="float-left arc-date" style="padding: .5em">Floatinh</p>
                        <a href="<?php $this->options->siteUrl(); ?>" class="fui-home"></a>
                        <a id="tor_show" href="javascript:void(0)" class="fui-list-bulleted"></a>
                        <a id="comment_go" href="#comments" class="fui-bubble"></a>
                    </div>
                    <div class="post-info">
                        <span class="post-info-n"><?php $this->category(' '); ?></span>
                        <?php $this->tags(' ', true, ''); ?>
                        <a><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></a>
                        <?php if(isset($this->fields->weather)): ?>
                            <a class="weather"><?php echo $this->fields->weather; ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if ($GLOBALS['style_TextBar'] == '0') : ?>
                    <p>
                        <small><?php _e('Category: '); ?><?php $this->category(', '); ?></small><br>
                        <small><?php _e('Tag: '); ?><?php $this->tags(', ', true, 'none'); ?></small><br>
                        <small>Written by <a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> with ♥ on <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></small>
                    </p>
                <?php endif; ?>
            </div>
            <!-- 头图 -->
            <?php img_postthumb($this->cid, 1); ?>
            <!-- end -->
            <div class="post-content" itemprop="articleBody">
                <?php parseContnet($this->content); ?>
            </div>
        </article>
    </div>

    <div id="postnav" style="display: none;">
        <?php if ($prevPost->have() and $nextPost->permalink != $this->permalink) : ?>
            <div class="text-left">
                <a href="<?php $prevPost->permalink() ?>">
                    <small>
                        <i class="fui-arrow-left"></i>
                        <?php $prevPost->title() ?>
                    </small>
                </a>
            </div>
        <?php endif; ?>
        <?php if ($nextPost->have() and $nextPost->permalink != $this->permalink) : ?>
            <div class="text-right">
                <a href="<?php $nextPost->permalink() ?>">
                    <small>
                        <?php $nextPost->title() ?>
                        <i class="fui-arrow-right"></i>
                    </small>
                </a>
            </div>
        <?php endif; ?>
    </div>
    <?php $this->need('comments.php'); ?>

    <div class="post-tor-content">
        <div class="post-tor" id="postTor" style="display: none;">
            <div class="torarc-t">
                <div class="torarc-tile">
                    <?php post_tor($this->content); ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->need('footer.php'); ?>