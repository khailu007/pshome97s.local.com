<?php
$title          =   get_the_title();
$link           =   get_permalink();
?>
<h4>  
<?php
if( wpresidence_get_option('wp_estate_unit_card_new_page','')=='_self' ){ ?>
    <a href="<?php echo esc_url($link);?>">
<?php         
    }else{
?>
   <a href="<?php echo esc_url($link);?>"  target="<?php  echo esc_attr(wpresidence_get_option('wp_estate_unit_card_new_page',''));?>">
<?php
}

    // echo mb_substr( $title,0,44); 
    // if(mb_strlen($title)>44){
    //     echo '...';   
    // } 
    echo mb_substr( $title,0,80); 
    if(mb_strlen($title)>80){
        echo '...';   
    } 
    ?>
    </a> 
</h4>
