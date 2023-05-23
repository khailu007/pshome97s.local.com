<?php
if (!is_active_sidebar('first-footer-widget-area') && !is_active_sidebar('second-footer-widget-area') && 
    !is_active_sidebar('third-footer-widget-area') && !is_active_sidebar('fourth-footer-widget-area')){
    return;  
}

$footer_type  =   wpresidence_get_option('wp_estate_footer_type','');
if($footer_type==''){
    $footer_type=1;
}

$class1 =   '';
$class2 =   '';
$class3 =   '';
$class4 =   '';

switch ($footer_type) {
    case 1:
        $class1 =   'col-md-3';
        $class2 =   'col-md-3';
        $class3 =   'col-md-3';
        $class4 =   'col-md-3';
        break;
    case 2:
        $class1 =   'col-md-4';
        $class2 =   'col-md-4';
        $class3 =   'col-md-4';
        $class4 =   '';
        break;
    case 3:
        $class1 =   'col-md-6';
        $class2 =   'col-md-6';
        $class3 =   '';
        $class4 =   '';
        break;
    case 4:
        $class1 =   'col-md-12';
        $class2 =   '';
        $class3 =   '';
        $class4 =   '';
        break;
    case 5:
        $class1 =   'col-md-6';
        $class2 =   'col-md-3';
        $class3 =   'col-md-3';
        $class4 =   '';
        break;
    case 6:
        $class1 =   'col-md-3';
        $class2 =   'col-md-6';
        $class3 =   'col-md-3';
        $class4 =   '';
        break;
    case 7:
        $class1 =   'col-md-3';
        $class2 =   'col-md-3';
        $class3 =   'col-md-6';
        $class4 =   '';
        break;
    case 8:
        $class1 =   'col-md-8';
        $class2 =   'col-md-4';
        $class3 =   '';
        $class4 =   '';
        break;
    case 9:
        $class1 =   'col-md-4';
        $class2 =   'col-md-8';
        $class3 =   '';
        $class4 =   '';
        break;
    
}
?>
<!-- Begin Alan Hong customize footer -->
<style type="text/css">
    #colophon .social_sidebar_internal a {
        background-color: #fff;
        color: #003882;
    }

    #colophon .contact_sidebar_wrap .widget_contact_email a:hover,
    #colophon .contact_sidebar_wrap .widget_contact_phone a:hover {
        color: #FF7925!important;
    }

    #colophon .we_third_sidebar ul li a:hover {
        color: #FF7925!important;
    }
</style>
<?php if (is_active_sidebar('first-footer-widget-area') && $class1!='' ) : ?>
    <div id="first" class="widget-area col-md-3 ">
        <ul class="xoxo">
            <?php // dynamic_sidebar('first-footer-widget-area'); ?>
            <?php
                $we_lang = ICL_LANGUAGE_CODE;
                $we_first_footer_widget_title = 'Liên hệ';
                $we_first_footer_widget_addr  = '183/41 Nguyễn Hữu Cảnh P22 Bình Thạnh TP Hồ Chí Minh';
                $we_first_footer_widget_phone = '0387327930';
                $we_first_footer_widget_mail  = 'pshome97s.vn@gmail.com';
                $we_first_footer_widget_slogan = 'PSHome 97s với sứ mệnh là cung cấp dịch vụ phòng cho thuê ngắn hạn và dài hạn các quận tại TP HCM.';
                switch ($we_lang) {
                    case 'en':
                        $we_first_footer_widget_title = 'Contact';
                        $we_first_footer_widget_addr  = '183/41 Nguyen Huu Canh Ward 22 Binh Thanh Ho Chi Minh City';
                        $we_first_footer_widget_phone = '0387327930';
                        $we_first_footer_widget_mail  = 'pshome97s.vn@gmail.com';
                        $we_first_footer_widget_slogan = 'PSHome 97s with the mission of providing short-term and long-term room rental services in districts in Ho Chi Minh City.';
                        break;
                    
                    default:
                        break;
                }
            ?>
            <li id="contact_widget-1" class="widget-container contact_sidebar">
                <h4 class="widget-title-footer"><?php _e($we_first_footer_widget_title,'wpresidence-core'); ?></h4>
                
                <div class="contact_sidebar_wrap">
                    <p class="widget_contact_addr">
                        <?php _e($we_first_footer_widget_slogan,'wpresidence-core'); ?>
                    </p>
                    <p class="widget_contact_addr">
                        <i class="fas fa-building"></i><?php _e($we_first_footer_widget_addr,'wpresidence-core'); ?>
                    </p>
                    <p class="widget_contact_phone">
                        <i class="fas fa-phone"></i><a href="tel:<?php _e($we_first_footer_widget_phone,'wpresidence-core'); ?>"><?php _e($we_first_footer_widget_phone,'wpresidence-core'); ?></a>
                    </p>
                    <p class="widget_contact_email">
                        <i class="far fa-envelope"></i><a href="mailto:<?php _e($we_first_footer_widget_mail,'wpresidence-core'); ?>"><?php _e($we_first_footer_widget_mail,'wpresidence-core'); ?></a>
                    </p>
                </div>
            </li>        
        </ul>
    </div>  
    <!-- #first .widget-area -->
<?php endif; ?>
    
<?php if (is_active_sidebar('second-footer-widget-area') && $class2!='' ) : ?>
    <div id="second" class="widget-area <?php print esc_attr($class2);?>">
        <ul class="xoxo">
            <?php // dynamic_sidebar('second-footer-widget-area'); ?>
            <?php
                $we_lang = ICL_LANGUAGE_CODE;
                $we_second_footer_widget_title = 'Về công ty';
                $we_second_footer_array_term = ['can-ho-dich-vu', 'chia-se', 'xay-dung', 'lien-he'];
                switch ($we_lang) {
                    case 'en':
                        $we_second_footer_widget_title = 'Company';
                        $we_second_footer_array_term = ['rooming-houses', 'blog', 'construction-news', 'contact'];
                        break;
                    
                    default:
                        break;
                }
            ?>        
            <li id="text-1" class="widget-container widget_text"><h4 class="widget-title-footer"><?php _e($we_second_footer_widget_title,'wpresidence-core'); ?></h4>            
                <div class="textwidget we_third_sidebar">
                    <ul>
                        <?php
                            foreach ($we_second_footer_array_term as $key_t => $item_t) 
                            {
                                $page = get_page_by_path($item_t);
                                //
                                $slug = $item_t;                     
                                //
                                $default_permalink = home_url( $slug );                                                         
                                $we_second_footer_url = $default_permalink;                              
                                $we_second_footer_url_name = trim($page->post_title);
                        ?>
                        <li>
                            <a href="<?php echo $we_second_footer_url; ?>">
                                <span style="line-height: 22px; padding-bottom: 8px;"><?php _e($we_second_footer_url_name, 'wpresidence-core'); ?></span>
                            </a>
                        </li>
                        <?php
                            }
                        ?>                            
                    </ul>
                </div>
            </li>        
        </ul>
    </div><!-- #second .widget-area -->
<?php endif; ?>
    
<?php if (is_active_sidebar('third-footer-widget-area') && $class3!='') : ?>
    <div id="third" class="widget-area <?php print esc_attr($class3);?>">
        <ul class="xoxo">
            <?php // dynamic_sidebar('third-footer-widget-area'); ?>
            <?php
                $we_lang = ICL_LANGUAGE_CODE;
                $we_third_footer_widget_title = 'Danh sách tòa nhà';
                $we_third_footer_array_term = ['ps-home-01-landmark-view-building', 'ps-home-97s-2'];
                switch ($we_lang) {
                    case 'en':
                        $we_third_footer_widget_title = 'List of buildings';
                        $we_third_footer_array_term = ['the-ps-home-01-landmark-view-building', 'the-ps-home-97s-2'];
                        break;
                    
                    default:
                        break;
                }
            ?>        
            <li id="text-1" class="widget-container widget_text"><h4 class="widget-title-footer"><?php _e($we_third_footer_widget_title,'wpresidence-core'); ?></h4>            
                <div class="textwidget we_third_sidebar">
                    <ul>
                        <?php
                            foreach ($we_third_footer_array_term as $key_t => $item_t) 
                            {
                                $page = get_page_by_path($item_t);
                                //
                                $slug = $item_t;                     
                                //
                                $default_permalink = home_url( $slug );                                                         
                                $we_third_footer_url = $default_permalink;                               
                                $we_third_footer_url_name = trim($page->post_title);
                        ?>
                        <li>
                            <a href="<?php echo $we_third_footer_url; ?>">
                                <span style="line-height: 22px; padding-bottom: 8px;"><?php _e($we_third_footer_url_name, 'wpresidence-core'); ?></span>
                            </a>
                        </li>
                        <?php
                            }
                        ?>                            
                    </ul>
                </div>
            </li>
        </ul>
    </div><!-- #third .widget-area -->
<?php endif; ?>
    
<?php if ( is_active_sidebar('fourth-footer-widget-area') && $class4!='' ) : ?>
    <div id="fourth" class="widget-area <?php print esc_attr($class4);?>">
        <ul class="xoxo">
            <?php // dynamic_sidebar('fourth-footer-widget-area'); ?>
            <?php
                $we_lang = ICL_LANGUAGE_CODE;
                $we_fourth_footer_widget_title = 'Mạng xã hội';
                $we_zalo_note = 'Mở Zalo, bấm quét QR để quét và xem trên điện thoại';
                switch ($we_lang) {
                    case 'en':
                        $we_fourth_footer_widget_title = 'Social';
                        $we_zalo_note = 'Open Zalo, click scan QR to scan and view on your phone';
                        break;
                    
                    default:
                        break;
                }
            ?>             
            <li id="social_widget-1" class="widget-container social_sidebar">
                <h4 class="widget-title-footer"><?php _e($we_fourth_footer_widget_title,'wpresidence-core'); ?></h4>
                <div class="social_sidebar_internal">
                    <a href="https://www.facebook.com/pshome97s" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.facebook.com/pshome97s" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <figure class="zalo-qr pt-20">
                        <div class="zalo-qr-image single-banner">
                            <a href="https://zalo.me/2332575840394775195" alt="WEMETRICS - Thiết kế Website chuyên nghiệp nhanh chóng">
                                <img src="https://page-photo-qr.zdn.vn/1648106451/13173a452700ce5e9711.jpg" width="520" height="520" loading="lazy" alt="WEMETRICS - Thiết kế Website chuyên nghiệp nhanh chóng">
                            </a>
                        </div>
                        <figcaption class="zalo-qr-desc"><?php _e($we_zalo_note,'wpresidence-core'); ?></figcaption>
                    </figure>                    
                </div>
            </li>            
        </ul>
    </div><!-- #fourth .widget-area -->
<?php endif; ?>
<!-- End Alan Hong customize footer -->