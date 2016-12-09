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
			<p class="text-center">
				<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t50.1;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->
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