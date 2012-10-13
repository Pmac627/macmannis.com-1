<?php /* footer.php */ ?>

		<footer>
			<div class='footer'>
				<table class='footer'>
					<tr>
						<td class='footer'>
							<span class='vcard'><a href='index/contact' class='credits' title='Get in touch with me via the contact page!' target='_blank' rel='nofollow'><span class='fn'>patrick macmannis</span></a> <span class='shrink'> &copy; <?php echo date('Y'); ?></span> ~ <a href='humans.txt' class='credits' target='_blank' title='Credits' rel='nofollow'>credits</a><br>
							<a class='url credits' id='Google+' title='Visit My Google+ Profile' href='https://plus.google.com/b/114897654058958447509?rel=author/' target='_blank' rel='nofollow'>google+</a> :: <a class='url credits' id='LinkedIn' title='Visit My LinkedIn Profile' href='http://www.linkedin.com/profile/view?id=146079138' target='_blank' rel='nofollow'>LinkedIn</a> :: <a class='url credits' id='Twitter' title='Visit My Twitter Profile' href='https://twitter.com/#!/pat_macmannis' target='_blank' rel='nofollow'>Twitter</a> :: <a class='url credits' id='Facebook' title='Visit My Facebook Profile' href='http://www.facebook.com/MacMannis' target='_blank' rel='nofollow'>Facebook</a></span>
						</td>
					</tr>
				</table>
			</div>
		</footer>
	</div>
	<?php
		if($page_info[$page]['page_jquery'] == 1)
		{
			echo "<script type='text/javascript' src='http://www.macmannis.com/view/javascript/jquery-min.js'></script>"; // If jQuery needed
		}

		if($page_info[$page]['page_thickbox'] == 1)
		{
			echo "<script type='text/javascript' src='http://www.macmannis.com/view/javascript/thickbox-min.js' defer='defer'></script>"; // If ThickBox needed
		}
	?>
	<script type='text/javascript'>
		var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-29803754-1']);_gaq.push(['_setDomainName','macmannis.com']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.macmannis.com/view/javascript/ga-min.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();
	</script>
	<script type='text/javascript'>
		if($("#home_page").is(":visible")){$("#home_box").toggleClass('highlight');}if($("#resume_page").is(":visible")){$("#resume_box").toggleClass('highlight');}if($("#portfolio_page").is(":visible")){$("#portfolio_box").toggleClass('highlight');}if($("#demos_page").is(":visible")){$("#demos_box").toggleClass('highlight');}if($("#contact_page").is(":visible")){$("#contact_box").toggleClass('highlight');}
	</script>
</div>
</body>
</html>