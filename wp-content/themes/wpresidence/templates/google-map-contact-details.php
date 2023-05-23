<?php
$company_name       =   esc_html( stripslashes( wpresidence_get_option('wp_estate_company_name', '') ) );
$company_picture    =   esc_html( stripslashes( wpresidence_get_option('wp_estate_company_contact_image', 'url') ) );
$company_email      =   esc_html( stripslashes( wpresidence_get_option('wp_estate_email_adr', '') ) );
$mobile_no          =   esc_html( stripslashes( wpresidence_get_option('wp_estate_mobile_no','') ) );
$telephone_no       =   esc_html( stripslashes( wpresidence_get_option('wp_estate_telephone_no', '') ) );
$fax_ac             =   esc_html( stripslashes( wpresidence_get_option('wp_estate_fax_ac', '') ) );
$skype_ac           =   esc_html( stripslashes( wpresidence_get_option('wp_estate_skype_ac', '') ) );

if (function_exists('icl_translate') ){
    $co_address      =  esc_html( icl_translate('wpestate','wp_estate_co_address_text', ( wpresidence_get_option('wp_estate_co_address') ) ) );
}else{
    $co_address      = esc_html( stripslashes ( wpresidence_get_option('wp_estate_co_address', '') ) );
}

$facebook_link      =   esc_html( wpresidence_get_option('wp_estate_facebook_link', '') );
$twitter_link       =   esc_html( wpresidence_get_option('wp_estate_twitter_link', '') );
$google_link        =   esc_html( wpresidence_get_option('wp_estate_google_link', '') );
$linkedin_link      =   esc_html ( wpresidence_get_option('wp_estate_linkedin_link','') );
$pinterest_link     =   esc_html ( wpresidence_get_option('wp_estate_pinterest_link','') );
$instagram_link     =   esc_html ( wpresidence_get_option('wp_estate_instagram_link','') );  


$wp_opening_hours_1         =   esc_html ( wpresidence_get_option('wp_opening_hours_1','') );  
$wp_opening_hours_value_1   =   esc_html ( wpresidence_get_option('wp_opening_hours_value_1','') );  
$wp_opening_hours_2         =   esc_html ( wpresidence_get_option('wp_opening_hours_2','') );  
$wp_opening_hours_value_2   =   esc_html ( wpresidence_get_option('wp_opening_hours_value_2','') );  
$wp_opening_hours_3         =   esc_html ( wpresidence_get_option('wp_opening_hours_3','') );  
$wp_opening_hours_value_3   =   esc_html ( wpresidence_get_option('wp_opening_hours_value_3','') );
//
$we_lang = ICL_LANGUAGE_CODE;
$we_helper = new weHelper();
$we_contact_title = 'Liên hệ với PSHome97S';
$we_opening_hours = 'Giờ mở cửa';
$we_phone = $telephone_no;
$we_mail = $company_email;
$we_address = '183/41 Nguyễn Hữu Cảnh, Phường 22, Bình Thạnh, TP Hồ Chí Minh';
$we_opening_hours_1 = $wp_opening_hours_1;
$we_opening_hours_2 = $wp_opening_hours_2;
$we_opening_hours_3 = $wp_opening_hours_3;
switch ($we_lang) {
      case 'en':
          $we_address = $we_helper::weGetLatinh($we_address);
          $we_opening_hours_1 = $we_helper::weGetLatinhDay($we_opening_hours_1);
          $we_opening_hours_2 = $we_helper::weGetLatinhDay($we_opening_hours_2);
          $we_opening_hours_3 = $we_helper::weGetLatinhDay($we_opening_hours_3);
          $we_contact_title = 'How To Find PSHome97S';
          $we_opening_hours = 'Opening Hours';
          break;
      
      default:
          break;
  }  
?>

<div class="contact_map_container">

    <h4><?php esc_html_e($we_contact_title,'wpresidence'); ?></h4>
    
       <?php      
            if ($telephone_no) {
                print '<div class="agent_detail contact_detail"><i class="fas fa-phone"></i><a href="tel:' . esc_html($we_phone) . '">'; print esc_html( $we_phone ). '</a></div>';
            }

            if ($company_email) {
                print '<div class="agent_detail contact_detail"><i class="far fa-envelope"></i>'; print '<a href="mailto:'.esc_html($we_mail).'">' .esc_html( $we_mail ). '</a></div>';
            }

           
            if ($co_address) {
                print '<div class="agent_detail contact_detail"><i class="fas fa-home"></i></i>';print  esc_html( $we_address ). '</div>';
            }
        ?>
    <h4><?php esc_html_e($we_opening_hours,'wpresidence'); ?></h4>
        
    <?php 
    if ($we_opening_hours_1) {
        print '<div class="agent_detail contact_detail">'.esc_html($we_opening_hours_1).' <span>'.esc_html( $wp_opening_hours_value_1 ). '</span></div>';
    }
    
    if ($we_opening_hours_2) {
        print '<div class="agent_detail contact_detail">'.esc_html($we_opening_hours_2).' <span>'.esc_html( $wp_opening_hours_value_2 ). '</span></div>';
    }
    
    if ($we_opening_hours_3) {
        print '<div class="agent_detail contact_detail">'.esc_html($we_opening_hours_3).' <span>'.esc_html( $wp_opening_hours_value_3 ). '</span></div>';
    }
    
    
    
    ?>
        
</div>
