<footer>
    <div class="row expanded">
        <div class="small-6 large-6 columns">
            <div class="copyright-div">
                <small><span class='copyright-pre'><?php esc_attr_e('Copyright ©', 'preference'); ?> </span> <span class='copyright-date'><?php echo ' '; _e(date('Y')); echo ' ';?></span><span class='copyright-custom'> <?php echo get_theme_mod('wa_copyright'); ?></span> | Website by <a href=<?php echo get_theme_mod('wa_designed_url'); ?> title="Website by Wonkasoft.com" ><?php echo get_theme_mod('wa_designed'); ?></a>
                </small>
            </div>
        </div>
        <div class="small-6 large-6 columns menu align-right">
           <?php wp_nav_menu(array('theme_location'=>'third')); ?>
        </div>
   </div>
</footer> <!-- End of footer -->

<?php wp_footer(); ?>

</div> <!-- End of site-wrap -->
</body>
</html>