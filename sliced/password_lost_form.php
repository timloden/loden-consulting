<div class="sliced client login">

    <div class="row justify-content-center sliced-upper">

        <div class="col-12 col-md-4 sliced-login">

            <div id="password-lost-form" class="card mb-5">
                <div class="card-body">
                    <?php if ( $attributes['show_title'] ) : ?>
                    <h3><?php _e( 'Forgot Your Password?', 'sliced-invoices-client-area' ); ?></h3>
                    <?php endif; ?>

                    <?php if ( count( $attributes['errors'] ) > 0 ) : ?>
                    <?php foreach ( $attributes['errors'] as $error ) : ?>
                    <p>
                        <?php echo $error; ?>
                    </p>
                    <?php endforeach; ?>
                    <?php endif; ?>

                    <form id="lostpasswordform" action="<?php echo wp_lostpassword_url(); ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label"
                                for="user_login"><?php _e( 'Email or Username', 'sliced-invoices-client-area' ); ?>
                            </label>
                            <input class="form-control"
                                style="border-bottom-left-radius: 4px; border-top-left-radius: 4px;" type="text"
                                name="user_login" id="user_login">
                        </div>

                        <?php do_action( 'login_form' ); ?>

                        <div class="lostpassword-submit">
                            <input class="btn btn-dark d-block w-100" type="submit" name="submit"
                                class="lostpassword-button"
                                value="<?php _e( 'Reset Password', 'sliced-invoices-client-area' ); ?>" />
                        </div>
                    </form>

                    <p class="text-muted mb-0 mt-3">
                        <?php
						_e(
							"Enter your email address and we'll send you a link you can use to pick a new password.",
							'sliced-invoices-client-area'
						);
					?>
                    </p>

                    <?php do_action( 'login_footer' ); ?>
                </div>
            </div>

        </div>

    </div>

</div>