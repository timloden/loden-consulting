<?php if ( true ) : ?>

<div class="sliced client login">

    <div class="row sliced-upper">

        <div class="col-sm-12 sliced-login">

			<div class="login-form-container">
				<?php if ( $attributes['show_title'] ) : ?>
					<h2><?php _e( 'Sign In', 'sliced-invoices-client-area' ); ?></h2>
				<?php endif; ?>

				<!-- Show errors if there are any -->
				<?php if ( count( $attributes['errors'] ) > 0 ) : ?>
					<?php foreach ( $attributes['errors'] as $error ) : ?>
						<p class="login-error">
							<?php echo $error; ?>
						</p>
					<?php endforeach; ?>
				<?php endif; ?>
				
				<!-- Show logged out message if user just logged out -->
				<?php if ( $attributes['logged_out'] ) : ?>
					<p class="login-info">
						<?php _e( 'You have signed out. Would you like to sign in again?', 'sliced-invoices-client-area' ); ?>
					</p>
				<?php endif; ?>

				<?php if ( $attributes['registered'] ) : ?>
					<p class="login-info">
						<?php
							printf(
								__( 'You have successfully registered to <strong>%s</strong>. We have emailed your password to the email address you entered.', 'sliced-invoices-client-area' ),
								get_bloginfo( 'name' )
							);
						?>
					</p>
				<?php endif; ?>

				<?php if ( $attributes['lost_password_sent'] ) : ?>
					<p class="login-info">
						<?php _e( 'Check your email for a link to reset your password.', 'sliced-invoices-client-area' ); ?>
					</p>
				<?php endif; ?>

				<?php if ( $attributes['password_updated'] ) : ?>
					<p class="login-info">
						<?php _e( 'Your password has been changed. You can sign in now.', 'sliced-invoices-client-area' ); ?>
					</p>
				<?php endif; ?>
				
				<form name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ); ?>" method="post">
					
					<p class="login-username">
						<label for="user_login"><?php echo __( 'Email or Username', 'sliced-invoices-client-area' ); ?></label>
						<input type="text" name="log" id="user_login" class="input" value="" size="20">
					</p>
					<p class="login-password">
						<label for="user_pass"><?php echo __( 'Password', 'sliced-invoices-client-area' ); ?></label>
						<input type="password" name="pwd" id="user_pass" class="input" value="" size="20">
					</p>
					
					<?php do_action( 'login_form' ); ?>
					
					<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <?php echo __( 'Remember Me', 'sliced-invoices-client-area' ); ?></label></p>
					<p class="login-submit">
						<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="<?php echo __( 'Sign In', 'sliced-invoices-client-area' ); ?>">
						<input type="hidden" name="redirect_to" value="<?php echo $attributes['redirect']; ?>">
					</p>
					
				</form>
				
				<?php do_action( 'login_footer' ); ?>

				<a class="forgot-password" href="<?php echo wp_lostpassword_url(); ?>">
					<?php _e( 'Forgot your password?', 'sliced-invoices-client-area' ); ?>
				</a>

			</div>
			<?php else : ?>
				<div class="login-form-container">
					<form method="post" action="<?php echo wp_login_url(); ?>">
						<p class="login-username">
							<label for="user_login"><?php _e( 'Email or Username', 'sliced-invoices-client-area' ); ?></label>
							<input type="text" name="log" id="user_login">
						</p>
						<p class="login-password">
							<label for="user_pass"><?php _e( 'Password', 'sliced-invoices-client-area' ); ?></label>
							<input type="password" name="pwd" id="user_pass">
						</p>
						
						<?php do_action( 'login_form' ); ?>
						
						<p class="login-submit">
							<input type="submit" value="<?php _e( 'Sign In', 'sliced-invoices-client-area' ); ?>">
						</p>
					</form>
				</div>
			<?php endif; ?>

        </div>
        
    </div>

</div>
