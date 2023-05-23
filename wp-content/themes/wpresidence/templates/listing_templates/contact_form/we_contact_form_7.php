<style type="text/css">
	.we-wpcf7-note {
		color: #cf2e2e;
		font-weight: bolder;
	}
</style>
<?php

    global $post;
    $slug = str_replace(home_url(),'',get_permalink());
    $title = esc_html( get_the_title() );

    $contactFormVi = '
        <form id="ctf_pshome97s_20319" action="'.$slug.'#wpcf7-f20319-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="20319">
                <input type="hidden" name="_wpcf7_version" value="5.7.6">
                <input type="hidden" name="_wpcf7_locale" value="en_US">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f20319-o1">
                <input type="hidden" name="_wpcf7_container_post" value="0">
                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contact_form_name_20319" autocomplete="name" aria-required="true" aria-invalid="false" placeholder="Họ và tên" value="" type="text" name="your-name"></span>
                    </p>
                </div>
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="contact_form_email_20319" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="your-email"></span>
                    </p>
                    <p>
                    	<span class="we-wpcf7-note">Email Example: text@domain.com</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" id="contact_form_phone_20319" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" value="" type="tel" name="your-phone"></span>
                    </p>
                    <p>
                    	<span class="we-wpcf7-note">Mobile Example: 0888888888</span>
                    </p>                    
                </div>
				<div class="col-md-12">
					<p>
					<span class="wpcf7-form-control-wrap" data-name="your-message">
						<textarea rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="your_message_20319" autocomplete="message" aria-required="true" aria-invalid="false" placeholder="Nội dung liên hệ" name="your-message" style="width: 100%;"></textarea>
					</span>
					</p>
				</div>
            </div>				
            <div class="row">
                <div class="col-md-4">
                    '.do_shortcode( '[cf7sr-simple-recaptcha]' ).'
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <p>
                        <input class="wpcf7-form-control has-spinner wpcf7-submit" id="contact_form_message_20319" type="submit" value="Liên hệ"><span class="wpcf7-spinner"></span>
                    </p>
                </div>
                <div class="wpcf7-response-output" aria-hidden="true"></div>
            </div>
        </form>
    ';

    $contactFormEn = '
        <form id="ctf_pshome97s_20760" action="/en/'.$slug.'#wpcf7-f20760-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="20760">
                <input type="hidden" name="_wpcf7_version" value="5.7.6">
                <input type="hidden" name="_wpcf7_locale" value="en_US">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f20760-o1">
                <input type="hidden" name="_wpcf7_container_post" value="0">
                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contact_form_name_20760" autocomplete="Your name" aria-required="true" aria-invalid="false" placeholder="Your name" value="" type="text" name="your-name"></span>
                    </p>
                </div>
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="contact_form_email_20760" autocomplete="Your email" aria-required="true" aria-invalid="false" placeholder="Your email" value="" type="email" name="your-email"></span>
                    </p>
                    <p>
                    	<span class="we-wpcf7-note">Email Example: text@domain.com</span>
                    </p>                    
                </div>
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" id="contact_form_phone_20760" aria-required="true" aria-invalid="false" placeholder="Your mobile" value="" type="tel" name="your-phone"></span>
                    </p>
                    <p>
                    	<span class="we-wpcf7-note">Mobile Example: 0888888888</span>
                    </p>                     
                </div>
				<div class="col-md-12">
					<p>
					<span class="wpcf7-form-control-wrap" data-name="your-message">
						<textarea rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="your_message_20760" autocomplete="message" aria-required="true" aria-invalid="false" placeholder="Your message" name="your-message" style="width: 100%;"></textarea>
					</span>
					</p>
				</div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    '.do_shortcode( '[cf7sr-simple-recaptcha]' ).'
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <p>
                        <input class="wpcf7-form-control has-spinner wpcf7-submit" id="contact_form_message_20760" type="submit" value="Register property"><span class="wpcf7-spinner"></span>
                    </p>
                </div>
                <div class="wpcf7-response-output" aria-hidden="true"></div>
            </div>
        </form>
    ';

    switch ($we_lang) {
        case 'en':
            $weForm = $contactFormEn;
            break;
        
        default:
            $weForm = $contactFormVi;
            break;
    }

    echo $weForm;    

?>