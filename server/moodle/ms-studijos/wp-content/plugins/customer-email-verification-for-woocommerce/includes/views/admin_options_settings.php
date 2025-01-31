<?php
/**
 * Html code for settings tab
 */

 $ignore = get_transient( 'cev_settings_admin_notice_ignore' );
 $dismissable_url = esc_url(  add_query_arg( 'cev-pro-settings-ignore-notice', 'true' ) ); 
?>

<section id="cev_content_settings" class="cev_tab_section">
	<?php if ('no' != $ignore) { ?>
	<div class="cev_pro_banner" id="dataToDisplay">
		<div class="pro_banner_box">
			<div class="box_main">
				<div class="box_left">
					<h3>Upgrade to Customer Email Verification Pro!</h3>
					<p>Upgrade to Customer Email Verification Pro and supercharge your WooCommerce store! Verify emails at checkout, delay account emails until verified, and enjoy new login alerts. Get 20% off now!</p>
					<p>Use code <b>CEVPRO20</b> to get <b>20%</b> on your 1st year order</p>
					<div class="btn_box">
						<button class="btn_upgrade">Upgrade</button>
						<button class="btn_dismiss" id="btn_dismiss"><a href="<?php esc_html_e( $dismissable_url ); ?>">Dismiss for 30 days</a></button>
					</div>
				</div>
				<div class="box_right">
					<img src="<?php echo esc_url( woo_customer_email_verification()->plugin_dir_url() ); ?>assets/images/cev-banner.png" class="pro_banner_img">
				</div>
			</div>
			<div class="close_btn"><span class="dashicons dashicons-dismiss"></span></div>
		</div>
	</div>
	<?php } ?>
	<form method="post" id="cev_settings_form" action="" enctype="multipart/form-data"><?php #nonce ?>
		<div class="accordion_container">
			<div class="accordion_set">
				<div class="accordion heading cev-main-settings">
					<?php
					$checked = get_option( 'cev_enable_email_verification', 1 ) ? 'checked' : ''; 
					$disable_toggle_class = get_option( 'cev_enable_email_verification', 1 ) ? '' : 'disable_toggle';
					?>
					<div class="accordion-toggle">
						<input type="hidden" name="cev_enable_email_verification" value="0"/>
						<input class="tgl tgl-flat-cev" id="cev_enable_email_verification" name="cev_enable_email_verification" type="checkbox" <?php esc_html_e( $checked ); ?> value="1"/>
						<label class="tgl-btn tgl-panel-label" for="cev_enable_email_verification"></label>
					</div>
					<div class="accordion-open accordion-label <?php esc_html_e( $disable_toggle_class ); ?>">
						<?php esc_html_e( 'Signup Verification', 'customer-email-verification-for-woocommerce' ); ?>						
					</div>

					<div class="accordion-btn accordion-open <?php esc_html_e( $disable_toggle_class ); ?>">
						<span class="dashicons dashicons-arrow-right-alt2"></span>
						<div class="spinner workflow_spinner" style="float:none"></div>
						<button name="save" class="button-primary woocommerce-save-button cev_settings_save" type="submit" value="Save changes"><?php esc_html_e( 'Save & Close', 'customer-email-verification-for-woocommerce' ); ?></button>						
					</div>					
				</div>
				<div class="panel options add-tracking-option">
					<?php $this->get_html( $this->get_cev_settings_data() ); ?>
				</div>
			</div>
			<div class="accordion_set">
				<div class="accordion heading cev-main-settings">
					
					<div class="accordion-open accordion-label">
						<?php esc_html_e( 'Email verification settings', 'customer-email-verification-for-woocommerce' ); ?>						
					</div>
					
					<div class="accordion-btn accordion-open">
						<span class="dashicons dashicons-arrow-right-alt2"></span>
						<div class="spinner workflow_spinner" style="float:none"></div>
						<button name="save" class="button-primary woocommerce-save-button cev_settings_save" type="submit" value="Save changes"><?php esc_html_e( 'Save & Close', 'customer-email-verification-for-woocommerce' ); ?></button>						
					</div>

				</div>
				<div class="panel">
					<?php $this->get_html( $this->get_cev_settings_data_new() ); ?>	
				</div>
			</div>
		</div>		
		<?php wp_nonce_field( 'cev_settings_form_nonce', 'cev_settings_form_nonce' ); ?>
		<input type="hidden" name="action" value="cev_settings_form_update">		
	</form>
</section>
