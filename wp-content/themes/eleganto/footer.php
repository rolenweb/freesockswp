<footer id="colophon" class="rsrc-footer" role="contentinfo">
	<div class="container">  
		<div class="row rsrc-author-credits">
			<?php if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 ) : ?>
				<div class="footer-socials text-center">
					<?php
					if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 ) {
						eleganto_social_links();
					}
					?>                 
				</div>
			<?php endif; ?>
			<p class="text-center">
				&copy;<?= date("Y") ?> Free Socks Top
			</p> 
		</div>
	</div>       
</footer> 
<p id="back-top">
	<a href="#top"><span></span></a>
</p>
<!-- end main container -->
</div>
<?php wp_footer(); ?>
</body>
</html>