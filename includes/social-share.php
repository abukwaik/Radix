<?php
/**
 * @package Radix
 * @since Radix 1.0
 */


function Radix_header_socials() { ?>
	<span class="screen-reader-text"><?php _e('Header Socials', RTD); ?></span>
	<nav id="header_socials" class="top-bar-right pull-right">
		<?php $twitter = ro_get_option('twitter'); 
		if (!empty ($twitter) && ro_get_option('twitter')) { ?>
		<a itemprop="url" title="twitter" href="<?php echo esc_url( $twitter ); ?>">
			<i class="fa fa-twitter" aria-hidden="true"></i><span class="screen-reader-text">Twitter</span>
		</a>
		<?php } ?>
		<?php $facebook = ro_get_option('facebook'); 
		if (!empty ($facebook) && ro_get_option('facebook')) { ?>
		<a itemprop="url" title="facebook" href="<?php echo esc_url( $facebook ); ?>">
			<i class="fa fa-facebook" aria-hidden="true"></i><span class="screen-reader-text">Facebook</span>
		</a>
		<?php } ?>
		<?php $google_plus = ro_get_option('google_plus'); 
		if (!empty ($google_plus) && ro_get_option('google_plus')) { ?>
		<a itemprop="url" title="google+" href="<?php echo esc_url( $google_plus ); ?>">
			<i class="fa fa-google-plus" aria-hidden="true"></i><span class="screen-reader-text">Google+</span>
		</a>
		<?php } ?>
		<?php $pinterest = ro_get_option('pinterest'); 
		if (!empty ($pinterest) && ro_get_option('pinterest')) { ?>
		<a itemprop="url" title="pinterest" href="<?php echo esc_url( $pinterest ); ?>">
			<i class="fa fa-pinterest" aria-hidden="true"></i><span class="screen-reader-text">Pinterest</span>
		</a>
		<?php } ?>
		<?php $dribbble = ro_get_option('dribbble'); 
		if (!empty ($dribbble) && ro_get_option('dribbble')) { ?>  
		<a itemprop="url" title="dribbble" href="<?php echo esc_url( $dribbble ); ?>">
			<i class="fa fa-dribbble" aria-hidden="true"></i><span class="screen-reader-text">Dribbble</span>
		</a>
		<?php } ?>
		<?php $linkedin = ro_get_option('linkedin'); 
		if (!empty ($linkedin) && ro_get_option('linkedin')) { ?>  
		<a itemprop="url" title="linkedin" href="<?php echo esc_url( $linkedin ); ?>">
			<i class="fa fa-linkedin" aria-hidden="true"></i><span class="screen-reader-text">Linkedin</span>
		</a>
		<?php } ?>
		<?php $flickr = ro_get_option('flickr'); 
		if (!empty ($flickr) && ro_get_option('flickr')) { ?>  
		<a itemprop="url" title="flickr" href="<?php echo esc_url( $flickr ); ?>">
			<i class="fa fa-flickr" aria-hidden="true"></i><span class="screen-reader-text">Flickr</span>
		</a>
		<?php } ?>
		<?php $vimeo = ro_get_option('vimeo'); 
		if (!empty ($vimeo) && ro_get_option('vimeo')) { ?> 
		<a itemprop="url" title="vimeo" href="<?php echo esc_url( $vimeo ); ?>">
			<i class="fa fa-vimeo-square" aria-hidden="true"></i><span class="screen-reader-text">Vimeo</span>
		</a>
		<?php } ?>
		<?php $rss = ro_get_option('rss'); 
		if (!empty ($rss) && ro_get_option('rss')) { ?>
		<a itemprop="url" title="rss" href="<?php echo esc_url( $rss ); ?>">
			<i class="fa fa-rss" aria-hidden="true"></i><span class="screen-reader-text">RSS</span>
		</a>
		<?php } ?>
	</nav><!-- #top-bar-social -->
<?php }

function Radix_author_socials() { ?>

	<?php if (!empty ($author_socials_text) || ro_get_option('author_socials')) { ?>
	<span class="screen-reader-text"><?php _e('Author Socials', RTD); ?></span>
	<span class="author-social-bar-text"><?php echo ro_get_option ('author_socials_text'); ?></span>
	<?php } ?>
	<ul class="author-social-bar unstyled">
		<?php $twitter = ro_get_option('author_twitter'); 
		if (!empty ($twitter) && ro_get_option('author_twitter')) { ?>
		<li>
			<a class="twitter" title="twitter" href="<?php echo esc_url( $twitter ); ?>">
				<i class="fa fa-twitter" aria-hidden="true"></i><span class="screen-reader-text">Twitter</span>
			</a>
		</li>
		<?php } ?>
		<?php $facebook = ro_get_option('author_facebook'); 
		if (!empty ($facebook) && ro_get_option('author_facebook')) { ?>
		<li>
			<a class="facebook" title="facebook" href="<?php echo esc_url( $facebook ); ?>">
				<i class="fa fa-facebook" aria-hidden="true"></i><span class="screen-reader-text">Facebook</span>
			</a>
		</li>
		<?php } ?>

		<?php $google_plus = ro_get_option('author_google_plus'); 
		if (!empty ($google_plus) && ro_get_option('author_google_plus')) { ?>
		<li>
			<a class="google_plus" title="google+" href="<?php echo esc_url( $google_plus ); ?>">
				<i class="fa fa-google-plus" aria-hidden="true"></i><span class="screen-reader-text">Google+</span>
			</a>
		</li>
		<?php } ?>

		<?php $linkedin = ro_get_option('author_linkedin'); 
		if (!empty ($linkedin) && ro_get_option('author_linkedin')) { ?>  
		<li>
			<a class="linkedin" title="linkedin" href="<?php echo esc_url( $linkedin ); ?>">
				<i class="fa fa-linkedin" aria-hidden="true"></i><span class="screen-reader-text">Linkedin</span>
			</a>
		</li>
		<?php } ?>
	</ul> <!-- author-social-bar -->
<?php } 

function Radix_footer_socials() { ?>
	<nav id="footer-socials">
		<div class="social-bar">
			<div class="container-fluid clearfix">
				<div class="row-fluid">
					<span class="screen-reader-text"><?php _e('Footer Socials', RTD); ?></span>
					<span class="social-bar-text"><?php echo ro_get_option ('footer_socials_text'); ?></span>
					<?php $twitter = ro_get_option('twitter'); 
					if (!empty ($twitter) && ro_get_option('twitter')) { ?>
					<a itemprop="url" class="twitter" title="twitter" href="<?php echo esc_url( $twitter ); ?>">
						<i class="fa fa-twitter" aria-hidden="true"></i><span class="screen-reader-text">Twitter</span>
					</a>
					<?php } ?>
					<?php $facebook = ro_get_option('facebook'); 
					if (!empty ($facebook) && ro_get_option('facebook')) { ?>
					<a itemprop="url" class="facebook" title="facebook" href="<?php echo esc_url( $facebook ); ?>">
						<i class="fa fa-facebook" aria-hidden="true"></i><span class="screen-reader-text">Facebook</span>
					</a>
					<?php } ?>
					<?php $google_plus = ro_get_option('google_plus'); 
					if (!empty ($google_plus) && ro_get_option('google_plus')) { ?>
					<a itemprop="url" class="google_plus" title="google+" href="<?php echo esc_url( $google_plus ); ?>">
						<i class="fa fa-google-plus" aria-hidden="true"></i><span class="screen-reader-text">Google+</span>
					</a>
					<?php } ?>
					<?php $pinterest = ro_get_option('pinterest'); 
					if (!empty ($pinterest) && ro_get_option('pinterest')) { ?>
					<a itemprop="url" class="pinterest" title="pinterest" href="<?php echo esc_url( $pinterest ); ?>">
						<i class="fa fa-pinterest" aria-hidden="true"></i><span class="screen-reader-text">Pinterest</span>
					</a>
					<?php } ?>
					<?php $dribbble = ro_get_option('dribbble'); 
					if (!empty ($dribbble) && ro_get_option('dribbble')) { ?>  
					<a itemprop="url" class="dribbble" title="dribbble" href="<?php echo esc_url( $dribbble ); ?>">
						<i class="fa fa-dribbble" aria-hidden="true"></i><span class="screen-reader-text">Dribbble</span>
					</a>
					<?php } ?>
					<?php $linkedin = ro_get_option('linkedin'); 
					if (!empty ($linkedin) && ro_get_option('linkedin')) { ?>  
					<a itemprop="url" class="linkedin" title="linkedin" href="<?php echo esc_url( $linkedin ); ?>">
						<i class="fa fa-linkedin" aria-hidden="true"></i><span class="screen-reader-text">Linkedin</span>
					</a>
					<?php } ?>
					<?php $flickr = ro_get_option('flickr'); 
					if (!empty ($flickr) && ro_get_option('flickr')) { ?>  
					<a itemprop="url" class="flickr" title="flickr" href="<?php echo esc_url( $flickr ); ?>">
						<i class="fa fa-flickr" aria-hidden="true"></i><span class="screen-reader-text">Flickr</span>
					</a>
					<?php } ?>
					<?php $vimeo = ro_get_option('vimeo'); 
					if (!empty ($vimeo) && ro_get_option('vimeo')) { ?> 
					<a itemprop="url" class="vimeo" title="vimeo" href="<?php echo esc_url( $vimeo ); ?>">
						<i class="fa fa-vimeo-square" aria-hidden="true"></i><span class="screen-reader-text">Vimeo</span>
					</a>
					<?php } ?>
					<?php $rss = ro_get_option('rss'); 
					if (!empty ($rss) && ro_get_option('rss')) { ?>
					<a itemprop="url" class="rss" title="rss" href="<?php echo esc_url( $rss ); ?>">
						<i class="fa fa-rss" aria-hidden="true"></i><span class="screen-reader-text">RSS</span>
					</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</nav>
<?php }

