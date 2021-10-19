<!-- Single post box -->
<?php extract($args)?>
<div class="boxes">
    <a href="<?php echo esc_url($permalink) ?>" class="img_box">
        <?php if ($imgURL) {?>
        <img src="<?php echo esc_url($imgURL) ?>" alt="<?php echo esc_attr($title) ?>" />
        <?php } else {?>
        <img src="<?php echo JADA_NAILS_URL . 'Public/Assets/Images/dummy-image-square.jpg' ?>"
            alt="<?php echo esc_attr($title) ?>" />
        <?php }?>
    </a>
    <h3><?php echo esc_html__($title) ?> </h3>
</div>
<!-- end of single post box -->