<!-- Success Popup -->
<div class="modal fade modal-success" id="modal-success-popup" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-form modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button
					type="button"
					class="modal-close"
					data-bs-dismiss="modal"
					aria-label="<?= esc_attr( __( 'Close popup', THEME_TEXTDOMAIN ) ) ?>"
				>
					<?= hm_get_svg_inline( get_theme_file_uri( "dist/images/icons/icon-close.svg" ) ); ?>
				</button>
			</div>

			<div class="modal-body">
				<div class="modal-content-wrapper">
					<div class="section-title section-title--style3 popup-title">
						<h2>
							<?= esc_html( __( 'Success', THEME_TEXTDOMAIN ) ); ?>
						</h2>
					</div>

					<div class="popup-description">
						<div class="text-content">
							<?= esc_html( __( 'Successfully sent', THEME_TEXTDOMAIN ) ); ?>
						</div>
					</div>

					<div class="popup-button-wrapper">
						<button
							class="button button--fill"
							data-bs-dismiss="modal"
							aria-label="<?= esc_attr( __( 'Close popup', THEME_TEXTDOMAIN ) ); ?>"
						>
							<?= esc_html( __( 'Close', THEME_TEXTDOMAIN ) ); ?>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Success Popup -->