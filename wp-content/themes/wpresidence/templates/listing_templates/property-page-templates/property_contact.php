<style type="text/css">
    .we-wpcf7-note {
        color: #cf2e2e;
    }
</style>
<?php
    global $post;
    $slug = str_replace(home_url(),'',get_permalink());
    $title = esc_html( get_the_title() );

    $contactFormVi = '
        <form action="'.$slug.'#wpcf7-f20984-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="20984">
                <input type="hidden" name="_wpcf7_version" value="5.7.6">
                <input type="hidden" name="_wpcf7_locale" value="en_US">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f20984-o1">
                <input type="hidden" name="_wpcf7_container_post" value="0">
                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contact_form_name_20984" autocomplete="name" aria-required="true" aria-invalid="false" placeholder="Họ và tên" value="" type="text" name="your-name"></span>
                    </p>
                </div>
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="contact_form_email_20984" autocomplete="email" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="your-email"></span>
                    </p>
                    <p>
                        <span class="we-wpcf7-note">Email Example: text@domain.com</span>
                    </p>                    
                </div>
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" id="contact_form_phone_20984" aria-required="true" aria-invalid="false" placeholder="Số điện thoại" value="" type="tel" name="your-phone"></span>
                    </p>
                    <p>
                        <span class="we-wpcf7-note">Mobile Example: 0888888888</span>
                    </p>                    
                </div>
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-property"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contact_form_property_20984" readonly="readonly" autocomplete="property" aria-required="true" aria-invalid="false" placeholder="Phòng cần thuê" value="'.$title.'" type="text" name="your-property"></span>
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
                        <input class="wpcf7-form-control has-spinner wpcf7-submit" id="contact_form_message_20984" type="submit" value="Đăng ký thuê phòng"><span class="wpcf7-spinner"></span>
                    </p>
                </div>
                <div class="wpcf7-response-output" aria-hidden="true"></div>
            </div>
        </form>
    ';

    $contactFormEn = '
        <form action="/en/'.$slug.'#wpcf7-f20986-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="20986">
                <input type="hidden" name="_wpcf7_version" value="5.7.6">
                <input type="hidden" name="_wpcf7_locale" value="en_US">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f20986-o1">
                <input type="hidden" name="_wpcf7_container_post" value="0">
                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contact_form_name_20986" autocomplete="Your name" aria-required="true" aria-invalid="false" placeholder="Your name" value="" type="text" name="your-name"></span>
                    </p>
                </div>
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="contact_form_email_20986" autocomplete="Your email" aria-required="true" aria-invalid="false" placeholder="Your email" value="" type="email" name="your-email"></span>
                    </p>
                    <p>
                        <span class="we-wpcf7-note">Email Example: text@domain.com</span>
                    </p>                     
                </div>
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-phone"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" id="contact_form_phone_20986" aria-required="true" aria-invalid="false" placeholder="Your mobile" value="" type="tel" name="your-phone"></span>
                    </p>
                    <p>
                        <span class="we-wpcf7-note">Mobile Example: 0888888888</span>
                    </p>                    
                </div>
                <div class="col-md-4">
                    <p><span class="wpcf7-form-control-wrap" data-name="your-property"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contact_form_property_20986" readonly="readonly" autocomplete="Your property" aria-required="true" aria-invalid="false" placeholder="Your property" value="'.$title.'" type="text" name="your-property"></span>
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
                        <input class="wpcf7-form-control has-spinner wpcf7-submit" id="contact_form_message_20986" type="submit" value="Register property"><span class="wpcf7-spinner"></span>
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

    $result = '<div class="panel-group property-panel" id="'.esc_attr($id).'">
    <div class="panel panel-default">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-heading">
                    <a data-toggle="collapse" data-parent="#accordion_prop_contact_form" href="#'.esc_attr($acc_id).'">
                        <h4 class="panel-title">'.trim($label).' </h4>
                    </a>
                </div>
            </div>
        </div>

        <div id="'.esc_attr($acc_id).'" class="panel-collapse collapse in">
            <div class="panel-body">
                '.$weForm.'
            </div>
        </div>
        </div>
    </div>';

    print $result;