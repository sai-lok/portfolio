<style>.ekit-user-consent-for-banner{
		margin: 0 0 15px 0!important;
		max-width: 655px;
	}
	.ekit-success-notice {
		position: fixed;
		top: 50px;
		right: 20px;
		background-color: #f2295b;
		color: white;
		padding: 10px;
		border-radius: 5px;
		display: none;
	}</style>
<script>
	jQuery(document).ready(function ($) {
		"use strict";
		$('#ekit-admin-switch__ekit-user-consent-for-banner').on('change', function(){
			let val = ($(this).prop("checked") ? $(this).val() : 'no');
			let data = {
				'settings' : {
					'ekit_user_consent_for_banner' : val, 
				}, 
				'nonce': "<br />
<b>Fatal error:  Uncaught Error: Call to undefined function esc_html() in D:\xampp\htdocs\portfolio\wp-content\plugins\elementskit-lite\libs\framework\views\layout-user-consent-for-banner.php:26
Stack trace:
#0 {main}
  thrown in <b>D:\xampp\htdocs\portfolio\wp-content\plugins\elementskit-lite\libs\framework\views\layout-user-consent-for-banner.php on line <b>26<br />
</script>