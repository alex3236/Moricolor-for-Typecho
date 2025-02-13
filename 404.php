<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container">

    <div class="error-page">
        <h2>╮(๑•́ ₃•̀๑)╭</h2>
        <br>
        <div class="text-center">
            <h3 class="post-title" >404</h3>
            <small>此处的星图落进了未预热的烤箱</small>
            <br>
            <small>将在 <span id="timeout">10</span> 秒后回到星际厨房</small>
        </div>
        <br><br>
        <form method="post">
            <p><input type="text" placeholder="此地址下的内容已经消失了，要不你可以搜索一下...？" name="s" autocomplete="off" class="form-control" /></p>
        </form>
    </div>

</div><!-- end #content-->

<script>
    var timeout = 10;
    function count() {
        if (timeout <= 0) {
            window.location.href = '<?php $this->options->siteUrl(); ?>';
        } else {
            document.getElementById('timeout').innerHTML = timeout;
            timeout--;
            setTimeout(count, 1000);
        }
    }
    count();
</script>

<?php $this->need('footer.php'); ?>