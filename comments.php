<?php
/**
 * @package Radix
 * @author Abukwaik http://www.croti.com
 * @since Radix 1.0
 */
?>

<?php if (post_password_required()) { ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view any comments.', RTD); ?></p>
<?php return; } ?>

<div id="comments" class="comments-area">
  <?php if (have_comments()) : ?>
    <h3 class="comments-header"><?php comments_number(__('No Comments on ', RTD), __('1 Comment on ', RTD), __('% Comments on ', RTD)); ?><?php the_title(); ?></h3>
    <ol class="commentlist">
      <?php wp_list_comments( array(
        'style'      => 'ol',
        'short_ping' => true,
        'avatar_size' => 60
        ) );
        ?>
      </ol> <!-- commentlist -->

      <?php Radix_comment_nav(); ?>

  <?php endif; ?> <!-- have_comments -->

  <?php if (comments_open()) : ?>
    <?php $comments_args = array(
      'id_form'           => 'commentform',
      'id_submit'         => 'submit',
      'title_reply'       => __( 'What do you think?', RTD),
      'title_reply_to'    => __( 'Reply to %s', RTD ),
      'cancel_reply_link' => __( 'Cancel Reply', RTD ),
      'label_submit'      => __( 'Submit Comment', RTD ),    
      'must_log_in'       => '<p class="must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to submit a comment.', RTD ), wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>', 
      'logged_in_as'      => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s" class="btn btn-success btn-sm"><i class="fa fa-user fa-fw" aria-hidden="true"></i>%2$s</a> <a href="%3$s" title="Log out of this account" class="btn btn-default btn-sm"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Logout</a>', RTD ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
      'comment_notes_before' => '<p class="text text-warning">' . __( 'Note: Your email address will not be published', RTD ).'</p>',
      'comment_notes_after'  => '</div><p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', RTD ), ' '  ) . '<br><code>' . allowed_tags() . '</code></p>',               
      'comment_field'        => '<div class="row"><div class="wpbs-textarea col-md-12"><label for="text_area"><span class="screen-reader-text">' . sprintf( __('text_area', RTD) ) . '</span>' .
      '<textarea class="form-control" id="text_area" name="comment" rows="8" aria-required="true" placeholder="Start commenting..."></textarea>' . '</label></div>' ,

      'fields' => apply_filters( 'comment_form_default_fields', array(
        'author' => '<div class="row"><div class="col-md-6 col-xs-6"><label for="Name"><span class="screen-reader-text">' . sprintf( __('Name', RTD) ) . '</span>' .
        '<div class="input-group"><span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>'.
        '<input class="form-control" placeholder="Your name" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
        '" size="30" aria-required="true" /></div>' .
        '</div></label>',
        'email' => '<div class="col-md-6 col-xs-6">' .
        '<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i> </span><label for="Email"><span class="screen-reader-text">' . sprintf( __('Email', RTD) ) . '</span>' .
        '<input class="form-control" placeholder="Your email" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" size="30" aria-required="true"  /></label></div>'.
        '</div></div>',
        'url' => ''
        ) ),          
        ); 
    ?>
    <?php comment_form($comments_args); ?>
  <?php endif; ?> <!-- comments_open -->

  <?php if (!empty($comments_by_type['pings'])) : // let's seperate pings/trackbacks from comments
  $count = count($comments_by_type['pings']);
  ($count !== 1) ? $txt = __('Pings&#47;Trackbacks', RTD) : $txt = __('Pings&#47;Trackbacks',RTD);
  ?>
  <h4 id="pings"><?php echo $count . " " . $txt; ?> <?php _e('for', RTD); ?> "<?php the_title(); ?>"</h4>
  <ol class="commentlist">
    <?php wp_list_comments('type=pings&max_depth=<em>'); ?>
  </ol>
  <?php endif; ?>
</div><!-- #comments -->