<div id='wa-footer'>
    <footer>
        <div class="row expanded">
            <div class="small-12 large-6 large-push-6 columns">
                <div class="wa-sub-menu-bottom">
                 <?php wp_nav_menu(array('theme_location'=>'third')); ?>
             </div>
         </div>
         <div class="small-12 large-6 large-pull-6 columns">
             <div class="copyright-div">
                <span class='copyright-pre'><?php esc_attr_e('Copyright ©', 'preference'); ?> </span> <span class='copyright-date'><?php echo ' '; _e(date('Y')); echo ' ';?></span><span class='copyright-custom'> <?php echo get_theme_mod('wa_copyright'); ?></span> | Website by <span class="designer-credit"><a href=<?php echo get_theme_mod('wa_designed_url'); ?> title="Website by Wonkasoft.com" ><?php echo get_theme_mod('wa_designed'); ?></a></span>
            </div>
        </div>
    </div>

</footer> <!-- End of footer -->
</div>
</div> <!-- End of site-wrap -->
<?php wp_footer(); ?>
</body>
</html>