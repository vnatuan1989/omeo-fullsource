<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */

$classes = array(
    '_row_class' => array('footer-wrapper'),
    '_class_cont' => array()
);

global $yesshop_datas;

?>

</div></div>
</div><!--.body-wrapper-->

<footer id="footer">
    <div class="<?php echo esc_attr(implode(' ', $classes['_row_class'])) ?>">
        <?php do_action('yesshop_footer_init'); ?>
    </div>
</footer>

<div class="offcanvas-bg offcanvas-close"></div>

</div><!--#body-wrapper-->

<?php do_action('yesshop_footer_before_body_endtag'); ?>

<?php wp_footer(); ?>

</body>
</html>