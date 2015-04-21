<?php
/**
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 */


function Radix_header_socials() { ?>

	<div class="top-bar-right social-style-font_icons" id="top-bar-social">
		<?php $twitter = ro_get_option('twitter'); 
		if (!empty ($twitter) && ro_get_option('twitter')) { ?>
		<a itemprop="url" target="_blank" title="twitter" href="<?php echo esc_url( $twitter ); ?>">
			<i class="fa fa-twitter"></i>
		</a>
		<?php } ?>
		<?php $facebook = ro_get_option('facebook'); 
		if (!empty ($facebook) && ro_get_option('facebook')) { ?>
		<a itemprop="url" target="_blank" title="facebook" href="<?php echo esc_url( $facebook ); ?>">
			<i class="fa fa-facebook"></i>
		</a>
		<?php } ?>
		<?php $google_plus = ro_get_option('google_plus'); 
		if (!empty ($google_plus) && ro_get_option('google_plus')) { ?>
		<a itemprop="url" target="_blank" title="google+" href="<?php echo esc_url( $google_plus ); ?>">
			<i class="fa fa-google-plus"></i>
		</a>
		<?php } ?>
		<?php $pinterest = ro_get_option('pinterest'); 
		if (!empty ($pinterest) && ro_get_option('pinterest')) { ?>
		<a itemprop="url" target="_blank" title="pinterest" href="<?php echo esc_url( $pinterest ); ?>">
			<i class="fa fa-pinterest"></i>
		</a>
		<?php } ?>
		<?php $dribbble = ro_get_option('dribbble'); 
		if (!empty ($dribbble) && ro_get_option('dribbble')) { ?>  
		<a itemprop="url" target="_blank" title="dribbble" href="<?php echo esc_url( $dribbble ); ?>">
			<i class="fa fa-dribbble"></i>
		</a>
		<?php } ?>
		<?php $linkedin = ro_get_option('linkedin'); 
		if (!empty ($linkedin) && ro_get_option('linkedin')) { ?>  
		<a itemprop="url" target="_blank" title="linkedin" href="<?php echo esc_url( $linkedin ); ?>">
			<i class="fa fa-linkedin"></i>
		</a>
		<?php } ?>
		<?php $flickr = ro_get_option('flickr'); 
		if (!empty ($flickr) && ro_get_option('flickr')) { ?>  
		<a itemprop="url" target="_blank" title="flickr" href="<?php echo esc_url( $flickr ); ?>">
			<i class="fa fa-flickr"></i>
		</a>
		<?php } ?>
		<?php $vimeo = ro_get_option('vimeo'); 
		if (!empty ($vimeo) && ro_get_option('vimeo')) { ?> 
		<a itemprop="url" target="_blank" title="vimeo" href="<?php echo esc_url( $vimeo ); ?>">
			<i class="fa fa-vimeo-square"></i>
		</a>
		<?php } ?>
		<?php $rss = ro_get_option('rss'); 
		if (!empty ($rss) && ro_get_option('rss')) { ?>
		<a itemprop="url" target="_blank" title="rss" href="<?php echo esc_url( $rss ); ?>">
			<i class="fa fa-rss"></i>
		</a>
		<?php } ?>
	</div><!-- #top-bar-social -->
<?php }

function Radix_author_socials() { ?>

	<?php if (!empty ($author_socials_text) || ro_get_option('author_socials')) { ?>
	<span class="author-social-bar-text"><?php echo ro_get_option ('author_socials_text'); ?></span>
	<?php } ?>
	<ul class="author-social-bar unstyled">
		<?php $twitter = ro_get_option('author_twitter'); 
		if (!empty ($twitter) && ro_get_option('author_twitter')) { ?>
		<li>
			<a class="twitter" target="_blank" title="twitter" href="<?php echo esc_url( $twitter ); ?>">
				<i class="fa fa-twitter"></i>
			</a>
		</li>
		<?php } ?>
		<?php $facebook = ro_get_option('author_facebook'); 
		if (!empty ($facebook) && ro_get_option('author_facebook')) { ?>
		<li>
			<a class="facebook" target="_blank" title="facebook" href="<?php echo esc_url( $facebook ); ?>">
				<i class="fa fa-facebook"></i>
			</a>
		</li>
		<?php } ?>

		<?php $google_plus = ro_get_option('author_google_plus'); 
		if (!empty ($google_plus) && ro_get_option('author_google_plus')) { ?>
		<li>
			<a class="google_plus" target="_blank" title="google+" href="<?php echo esc_url( $google_plus ); ?>">
				<i class="fa fa-google-plus"></i>
			</a>
		</li>
		<?php } ?>

		<?php $linkedin = ro_get_option('author_linkedin'); 
		if (!empty ($linkedin) && ro_get_option('author_linkedin')) { ?>  
		<li>
			<a class="linkedin" target="_blank" title="linkedin" href="<?php echo esc_url( $linkedin ); ?>">
				<i class="fa fa-linkedin"></i>
			</a>
		</li>
		<?php } ?>
	</ul> <!-- author-social-bar -->
<?php } 

function Radix_footer_socials() { ?>
	<div id="footer-socials">
		<div class="social-bar">
			<div class="container-fluid clearfix">
				<div class="row-fluid">
					<span class="social-bar-text"><?php echo ro_get_option ('footer_socials_text'); ?></span>
					<?php $twitter = ro_get_option('twitter'); 
					if (!empty ($twitter) && ro_get_option('twitter')) { ?>
					<a itemprop="url" class="twitter" target="_blank" title="twitter" href="<?php echo esc_url( $twitter ); ?>">
						<i class="fa fa-twitter"></i>
					</a>
					<?php } ?>
					<?php $facebook = ro_get_option('facebook'); 
					if (!empty ($facebook) && ro_get_option('facebook')) { ?>
					<a itemprop="url" class="facebook" target="_blank" title="facebook" href="<?php echo esc_url( $facebook ); ?>">
						<i class="fa fa-facebook"></i>
					</a>
					<?php } ?>
					<?php $google_plus = ro_get_option('google_plus'); 
					if (!empty ($google_plus) && ro_get_option('google_plus')) { ?>
					<a itemprop="url" class="google_plus" target="_blank" title="google+" href="<?php echo esc_url( $google_plus ); ?>">
						<i class="fa fa-google-plus"></i>
					</a>
					<?php } ?>
					<?php $pinterest = ro_get_option('pinterest'); 
					if (!empty ($pinterest) && ro_get_option('pinterest')) { ?>
					<a itemprop="url" class="pinterest" target="_blank" title="pinterest" href="<?php echo esc_url( $pinterest ); ?>">
						<i class="fa fa-pinterest"></i>
					</a>
					<?php } ?>
					<?php $dribbble = ro_get_option('dribbble'); 
					if (!empty ($dribbble) && ro_get_option('dribbble')) { ?>  
					<a itemprop="url" class="dribbble" target="_blank" title="dribbble" href="<?php echo esc_url( $dribbble ); ?>">
						<i class="fa fa-dribbble"></i>
					</a>
					<?php } ?>
					<?php $linkedin = ro_get_option('linkedin'); 
					if (!empty ($linkedin) && ro_get_option('linkedin')) { ?>  
					<a itemprop="url" class="linkedin" target="_blank" title="linkedin" href="<?php echo esc_url( $linkedin ); ?>">
						<i class="fa fa-linkedin"></i>
					</a>
					<?php } ?>
					<?php $flickr = ro_get_option('flickr'); 
					if (!empty ($flickr) && ro_get_option('flickr')) { ?>  
					<a itemprop="url" class="flickr" target="_blank" title="flickr" href="<?php echo esc_url( $flickr ); ?>">
						<i class="fa fa-flickr"></i>
					</a>
					<?php } ?>
					<?php $vimeo = ro_get_option('vimeo'); 
					if (!empty ($vimeo) && ro_get_option('vimeo')) { ?> 
					<a itemprop="url" class="vimeo" target="_blank" title="vimeo" href="<?php echo esc_url( $vimeo ); ?>">
						<i class="fa fa-vimeo-square"></i>
					</a>
					<?php } ?>
					<?php $rss = ro_get_option('rss'); 
					if (!empty ($rss) && ro_get_option('rss')) { ?>
					<a itemprop="url" class="rss" target="_blank" title="rss" href="<?php echo esc_url( $rss ); ?>">
						<i class="fa fa-rss"></i>
					</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php }

