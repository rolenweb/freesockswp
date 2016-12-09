<?php $awada_theme_options = awada_theme_options();
$col = 12 / (int)$awada_theme_options['footer_layout']; ?>
<?php if ($awada_theme_options['site_layout'] == 'boxed') { ?>
</div><!-- end wrapper -->
<?php } if($awada_theme_options['show_footer_widget']==1){ ?>
   
<?php } if ($awada_theme_options['copyright_text_enabled']==1  || $awada_theme_options['footer_menu_enabled']==1) { ?>
<div id="copyrights" <?php if ($awada_theme_options['site_layout'] == 'boxed') { ?> class="container" <?php } ?>>
	<div class="container">
		<?php if ($awada_theme_options['copyright_text_enabled']==1) { ?>
		<div id="copyright_section" class="col-lg-5 col-md-6 col-sm-12">
			<div class="footer_copy_text">
				<p><span id="copyright_text">&copy;<?= date("Y") ?> Free Socks Top</span></p>
			</div><!-- end footer copyright text -->
		</div><!-- end widget -->
		<?php } if ($awada_theme_options['footer_menu_enabled']==1) { ?>
		<div id="copyright_menu" class="col-lg-7 col-md-6 col-sm-12 clearfix">
			<div class="footer-area-menu">
				<?php wp_nav_menu(array(
                        'theme_location' => 'secondary',
                        'container' => false,
                        'menu_class' => 'menu',
                ) ); ?>
			</div>
		</div><!-- end large-7 -->
		<?php } ?>
	</div><!-- end container -->
</div><!-- end copyrights -->
<?php } if ($awada_theme_options['custom_css'] != '') { ?>
<style>
	<?php echo $awada_theme_options['custom_css']; ?>
</style>
<?php } ?>
<div class="awadatop"><?php _e('Scroll to Top', 'awada'); ?></div>
<?php wp_footer(); ?>
</body>
</html>