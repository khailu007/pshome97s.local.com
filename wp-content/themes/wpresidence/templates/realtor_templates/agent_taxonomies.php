
<?php
$agent_term_list='';
$agent_term_list.=  get_the_term_list($post->ID, 'property_county_state_agent', '', '', '') ;
$agent_term_list.=  get_the_term_list($post->ID, 'property_city_agent', '', '', '') ;
$agent_term_list.=  get_the_term_list($post->ID, 'property_area_agent', '', '', '');
$agent_term_list.=  get_the_term_list($post->ID, 'property_category_agent', '', '', '') ;
$agent_term_list.=  get_the_term_list($post->ID, 'property_action_category_agent', '', '', '');  

if( trim($agent_term_list)!=''):
?>


<div class="developer_taxonomy agent_taxonomy">          
    <h4><?php esc_html_e('Specialties & Service Areas','wpresidence');?></h4>
    <?php print trim($agent_term_list); ?>
</div>    

<?php 
endif;
?>