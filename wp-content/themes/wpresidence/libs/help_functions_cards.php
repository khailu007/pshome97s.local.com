<?php
/**
*
*
* Unit selector blog
*
*
*/

if(!function_exists('wpestate_blog_unit_selector')):
function wpestate_blog_unit_selector(){
    $blog_unit                   =   esc_html ( wpresidence_get_option('wp_estate_blog_unit','') ); 
    
    if($blog_unit=='list'){
        return 'blog_unit.php'  ;
    }else if($blog_unit=='grid2'){
        return 'blog_unit3.php'  ;
    }else{
        return 'blog_unit2.php'  ;
    }        
 
}
endif;


/**
*
*
* Return sorting options for listings
*
*
*/
if(!function_exists('wpestate_listings_sort_options_array')):
function wpestate_listings_sort_options_array(){
    $we_lang = ICL_LANGUAGE_CODE;
    $priceDownLabel = 'Giá Giảm dần';
    $priceUpLabel = 'Giá Tăng dần';
    switch ($we_lang) {
        case 'en':
            $priceDownLabel = 'Descending';
            $priceUpLabel = 'Ascending';
            break;
        
        default:
            break;
    }

    $listing_filter_array=array(
        "1"=>esc_html__($priceDownLabel,'wpresidence'),
        "2"=>esc_html__($priceUpLabel,'wpresidence'),
        // "3"=>esc_html__('Newest first','wpresidence'),
        // "4"=>esc_html__('Oldest first','wpresidence'),
        // "11"=>esc_html__('Newest Edited','wpresidence'),
        // "12"=>esc_html__('Oldest Edited ','wpresidence'),
        // "5"=>esc_html__('Bedrooms High to Low','wpresidence'),
        // "6"=>esc_html__('Bedrooms Low to high','wpresidence'),
        // "7"=>esc_html__('Bathrooms High to Low','wpresidence'),
        // "8"=>esc_html__('Bathrooms Low to high','wpresidence'),
        "0"=>esc_html__('Mặc định','wpresidence')
    );
    return $listing_filter_array;
}
endif;

/**
*
*
*
*
*
*/




if(!function_exists('wpestate_return_unit_class')):
    function wpestate_return_unit_class ($wpestate_no_listins_per_row,$content_class,$align,$is_shortcode,$row_number_col,$wpestate_property_unit_slider){
        $wpestate_prop_unit          =   esc_html ( wpresidence_get_option('wp_estate_prop_unit','') );

        if($wpestate_no_listins_per_row==3){
            $col_class  =   'col-md-6';
            $col_org    =   6;
        }else{
            $col_class  =   'col-md-4';
            $col_org    =   4;
        }



        if($content_class=='col-md-12' ){
            if($wpestate_no_listins_per_row==3){
                $col_class  =   'col-md-4';
                $col_org    =   4;
            }else if($wpestate_no_listins_per_row==2){
                $col_class  =   'col-md-6';
                $col_org    =   6;
            }else{
                $col_class  =   'col-md-3';
                $col_org    =   3;
            }

        }


        // if template is vertical
        if($align=='col-md-12'){
            $col_class  =  'col-md-12';
           // $col_org    =  12;
             if($wpestate_no_listins_per_row==3){
            
                $col_org    =   4;
            }else if($wpestate_no_listins_per_row==2){
               
                $col_org    =   6;
            }else{
              
                $col_org    =   3;
            }
        }


        if(isset($is_shortcode) && $is_shortcode==1 ){
            $col_class='col-md-'.$row_number_col.' shortcode-col';
        }

        if(isset($is_col_md_12) && $is_col_md_12==1){
            $col_class  =   'col-md-6';
            $col_org    =   6;
        }

        if(isset($wpestate_prop_unit) && $wpestate_prop_unit=='list' && !isset($is_shortcode)){
            $col_class= 'col-md-12';

        }


        if( $wpestate_property_unit_slider==1){
            $col_class.=' has_prop_slider ';
        }


        if($wpestate_no_listins_per_row==4){
            $col_class.=' has_4per_row ';
        }


        $return_array=array(
                    'col_class' =>  $col_class,
                    'col_org'   =>  $col_org,
                );


    return $return_array;
}
endif;




if( !function_exists('wpestate_interior_classes') ):
function wpestate_interior_classes($wpestate_uset_unit){
    $return='';
    if($wpestate_uset_unit==1) {
        $return= 'property_listing_custom_design';
    }
    return $return;
}
endif;





?>
