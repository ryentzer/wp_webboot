
<footer class="text-muted py-5">
<div class="container">
    <p class="d-flex">
        <span class="mr-1">&copy;<?php echo date_i18n(_x('Y', 'copyright', 'wpwebboot')); ?></span>
         <a href="<?php echo esc_url( home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <a class="to-the-top ml-auto" href="#">back to top</a>
    </p>
</div>
</footer>
<?php
wp_footer(); ?>
</body>
</html>
