 <?php
$property_address   =   esc_html( get_post_meta($post->ID, 'property_address', true) );
$property_address_show='';
if($property_address!=''){
    $property_address_show.= esc_html($property_address);
}
// if($property_city!=''){
//     if($property_address!=''){
//         $property_address_show.= ', ';
//     }
//     $property_address_show.= wp_kses_post($property_city);
// }

// if($property_area!=''){
//     if($property_address!='' || $property_city!=''){
//         $property_address_show.= ', ';
//     }
//     $property_address_show.= wp_kses_post($property_area);
// }

// Begin Alan Hong Customize
$property_cities = get_the_terms( $post_id, 'property_city' );
$property_areas = get_the_terms( $post_id, 'property_area' );
$property_countries = get_the_terms( $post_id, 'property_county_state' );

foreach($property_cities as $item_p)
{
    $property_city = $item_p->name;
}

foreach($property_areas as $item_p)
{
    $property_area = $item_p->name;
}

foreach($property_countries as $item_p)
{
    $property_county = $item_p->name;
}   

if($property_city!=''){
    $property_address_show.= ', '.$property_city;
}

if($property_area!=''){
    $property_address_show.= ', '.$property_area;
}


?>
<div class="property_categs">
    <i class="fas fa-map-marker-alt"></i>
    <?php print wp_kses_post($property_address_show); ?>
</div>