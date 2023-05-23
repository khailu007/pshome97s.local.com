<?php
$wp_estate_property_overview_order = wpresidence_get_option('wp_estate_property_overview_order', '');

if($is_tab!='yes'){ 
    ?>
    <div class="single-overview-section panel-group property-panel" id="single-overview-section">
        <h4 class="panel-title" id=""><?php print   esc_html($label);  ?></h4>
    <?php 
    } 

print '<div class="property-page-overview-details-wrapper">';
if( is_array($wp_estate_property_overview_order['enabled']) ):
    foreach ($wp_estate_property_overview_order['enabled'] as $key=>$value):
        switch ($key) {


            case 'updated_on':
                ?>
                <ul class="overview_element">
                    <li class="first_overview first_overview_left">
                        <?php esc_html_e('Updated On:','wpresidence'); ?>
                    </li>
                    <li class="first_overview_date"><?php print get_the_modified_date('F j, Y'); ?></li>
                </ul>
                <?php
                break;


            case 'bedrooms':
                $property_bedrooms      =   get_post_meta($post->ID,'property_bedrooms',true);
                if($property_bedrooms!='' && $property_bedrooms!=0) { ?>
                    <ul class="overview_element">
                        <li class="first_overview">
                            <?php include (locate_template('templates/svg_icons/single_bedrooms.html'))?>
                        </li>
                        <li><?php print esc_html($property_bedrooms).' '.esc_html__('Bedrooms','wpresidence'); ?></li>
            
                    </ul>
                <?php } 
                break;


            case 'bathrooms':
                $property_bathrooms     =   get_post_meta($post->ID,'property_bathrooms',true);
                if($property_bathrooms!='' && $property_bathrooms!=0) { ?>
                    <ul class="overview_element">
                        <li class="first_overview">
                           <?php include (locate_template('templates/svg_icons/single_bath.html'))?>
                        </li>
                        <li><?php print esc_html($property_bathrooms).' '.esc_html__('Bathrooms','wpresidence'); ?></li>
                    </ul>
                <?php } 
                break;


            case 'garages':
                $property_garage        =   get_post_meta($post->ID,'property-garage',true);
                if($property_garage!='' && $property_garage!=0) { ?>
                    <ul class="overview_element">
                        <li class="first_overview">
                            <?php include (locate_template('templates/svg_icons/single_garage.html'))?>
                        </li>
                        <li><?php print esc_html($property_garage).' '.esc_html__('Garages','wpresidence'); ?></li>
                    </ul>
                <?php }
                break;


            case 'size':
                $property_size          =   wpestate_get_converted_measure( $post->ID, 'property_size' );
                if($property_size!='' && $property_size!=0) { ?>
                    <ul class="overview_element">
                        <li class="first_overview">
                            <?php include (locate_template('templates/svg_icons/single_floor_plan.html'))?>
                        </li>
                        <li><?php print trim($property_size); ?></li>
                    </ul>
                <?php }
                break;


            case 'year_built':
                $property_year          =   get_post_meta($post->ID,'property-year',true);
                if($property_year!='' ) { ?>
                    <ul class="overview_element">
                        <li class="first_overview">
                            <?php include (locate_template('templates/svg_icons/single_calendar.html'))?>
                        </li>
                        <li><?php print esc_html__('Year Built:','wpresidence').' '.$property_year; ?></li>
                    </ul>
                <?php } 
                break;

                
            case 'property_category':
                ?>
                <ul class="overview_element">
                    <li class="first_overview first_overview_left">
                        <?php esc_html_e('Category','wpresidence'); ?>
                    </li>
                    <li class="first_overview_date"><?php print get_the_term_list($post->ID, 'property_category', '', ', ', ''); ?></li>
                </ul>
                <?php
                break;



            case 'property_id':
                ?>
                <ul class="overview_element">
                    <li class="first_overview first_overview_left">
                        <?php esc_html_e('Property ID','wpresidence'); ?>
                    </li>
                    <li class="first_overview_date"><?php print intval($post->ID); ?></li>
                </ul>
                <?php
                break;


            case 'rooms':
                $property_rooms         =   get_post_meta($post->ID,'property_rooms',true);
                if($property_rooms!='' && $property_rooms!=0) { ?>
                    <ul class="overview_element">
                        <li class="first_overview">
                            <?php include (locate_template('templates/svg_icons/single_rooms_overview.html'))?>
                        </li>
                        <li><?php print esc_html($property_rooms).' '.esc_html__('Rooms','wpresidence'); ?></li>
            
                    </ul>
                <?php } 
                break;

              

            case 'lot_size':
                $property_lot_size         =    wpestate_get_converted_measure( $post->ID, 'property_lot_size' ) ;  

                if($property_lot_size!='' && $property_lot_size!=0) { ?>
                    <ul class="overview_element">
                    <li class="first_overview">
                            <?php include (locate_template('templates/svg_icons/single_lot_size.html'))?>
                        </li>
                        <li><?php print trim($property_lot_size); ?></li>
            
                    </ul>
                <?php } 
                break;
        }
        
    endforeach;
endif;
print '</div>';

if($is_tab!='yes'){ ?>
    </div>
<?php 
} 
?>