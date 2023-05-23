<?php

namespace ElementorWpResidence\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Box_Shadow;

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

class Wpresidence_Blog_Post_List extends Widget_Base {

    /**
     * Retrieve the widget name.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'Wpresidence_Blog_Post_List';
    }

    public function get_categories() {
        return ['wpresidence'];
    }

    /**
     * Retrieve the widget title.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __('WpResidence Blog Post List', 'residence-elementor');
    }

    /**
     * Retrieve the widget icon.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-posts-masonry';
    }

    /**
     * Retrieve the list of scripts the widget depended on.
     *
     * Used to set scripts dependencies required to run the widget.
     *
     * @since 1.0.0
     *
     * @access public
     *
     * @return array Widget scripts dependencies.
     */
    public function get_script_depends() {
        return [''];
    }

    /**
     * Register the widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    public function elementor_transform($input) {
        $output = array();
        if (is_array($input)) {
            foreach ($input as $key => $tax) {
                $output[$tax['value']] = $tax['label'];
            }
        }
        return $output;
    }

    public function get_all_categories_posts() {
        $categories = get_categories(array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => false,
        ));

        $return_array = array();
        foreach ($categories as $category) {
            $return_array[$category->term_id] = $category->name;
        }

        return $return_array;
    }

    protected function register_controls() {




        $sort_options = array(
            "0" => esc_html__('Default', 'wpresidence'),
            "1" => esc_html__('Title Asc', 'wpresidence'),
            "2" => esc_html__('Title Desc', 'wpresidence'),
            "3" => esc_html__('Newest first', 'wpresidence'),
            "4" => esc_html__('Oldest first', 'wpresidence'),
        );


        $this->start_controls_section(
                'section_content', [
            'label' => __('Content', 'residence-elementor'),
                ]
        );

        $this->add_control(
                'title_residence', [
            'label' => __('Title', 'residence-elementor'),
            'type' => Controls_Manager::TEXT,
            'Label Block'
                ]
        );



        $this->add_control(
                'control_terms_id', [
            'label' => __('Select Post Categories', 'residence-elementor'),
            'label_block' => true,
            'type' => \Elementor\Controls_Manager::SELECT2,
            'multiple' => true,
            'default' => '',
            'options' => $this->get_all_categories_posts(),
                ]
        );

        $this->add_control(
                'number', [
            'label' => __('No of items', 'residence-elementor'),
            'type' => Controls_Manager::TEXT,
            'default' => 9,
                ]
        );

        $this->add_control(
                'rownumber', [
            'label' => __('No of items per row(except card type 1)', 'residence-elementor'),
            'type' => Controls_Manager::TEXT,
            'default' => 3,
                ]
        );







        $this->add_control(
                'sort_by', [
            'label' => __('Sort By ?', 'residence-elementor'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 0,
            'options' => $sort_options
                ]
        );

        $this->add_control(
                'card_version', [
            'label' => __('Card Type ?', 'residence-elementor'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 0,
            'options' => array(
                '1' => 'Type 1',
                '2' => 'Type 2',
                '3' => 'Type 3',
            )
                ]
        );


        $this->end_controls_section();

        /*
         * -------------------------------------------------------------------------------------------------
         * Start typography section
         */
        $this->start_controls_section(
                'typography_section', [
            'label' => esc_html__('Typography', 'residence-elementor'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'post_title',
            'label' => esc_html__('Post Title', 'residence-elementor'),
            'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} h3 a,{{WRAPPER}} h4 a',
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'post_excerpt',
            'label' => esc_html__('Excerpt', 'residence-elementor'),
            'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .blog_unit_content p,{{WRAPPER}} .listing_details ',
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'post_meta',
            'label' => esc_html__('Post Date & Meta', 'residence-elementor'),
            'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
            'selector' =>
            '{{WRAPPER}} .blog_unit_meta, .blog_unit_meta a',
                ]
        );
        $this->add_responsive_control(
                'post_meta_icon', [
            'label' => esc_html__('Post Date & Meta Icon size', 'residence-elementor'),
            'type' => Controls_Manager::SLIDER,
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'devices' => ['desktop', 'tablet', 'mobile'],
            'desktop_default' => [
                'size' => '',
                'unit' => 'px',
            ],
            'tablet_default' => [
                'size' => '',
                'unit' => 'px',
            ],
            'mobile_default' => [
                'size' => '',
                'unit' => 'px',
            ],
            'selectors' => [
                '{{WRAPPER}} .blog_unit_meta i,.read_more i' => 'font-size: {{SIZE}}px;',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'post_contienue_reading',
            'label' => esc_html__('Continue Reading', 'residence-elementor'),
            'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .read_more',
                ]
        );


        $this->end_controls_section();

        /*
         * -------------------------------------------------------------------------------------------------
         * End typography section
         */
        /*
         * -------------------------------------------------------------------------------------------------
         * Start typography section
         */
        $this->start_controls_section(
                'Margins_section', [
            'label' => esc_html__('Margins', 'residence-elementor'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'margin_title', [
            'label' => esc_html__('Title Margins', 'plugin-name'),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em'],
            'selectors' => [
                '{{WRAPPER}}  h3,{{WRAPPER}} h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_control(
                'margin_excerpt', [
            'label' => esc_html__('Excerpt Margins', 'plugin-name'),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em'],
            'selectors' => [
                '{{WRAPPER}} .blog_unit_content p,.property_listing_blog .listing_details.the_grid_view' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );


        $this->add_control(
                'margin_meta', [
            'label' => esc_html__('Date & Meta Margins', 'plugin-name'),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%', 'em'],
            'selectors' => [
                '{{WRAPPER}}  .blog_unit_meta ' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->add_responsive_control(
                'submit_ button_border_radius', [
            'label' => esc_html__('Unit Border Radius', 'residence-elementor'),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%'],
            'selectors' => [
                '{{WRAPPER}} .property_listing_blog ,{{WRAPPER}} .blog_unit.col-md-12 ,{{WRAPPER}} .blog_unit_image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
                ]
        );

        $this->end_controls_section();

        /*
         * -------------------------------------------------------------------------------------------------
         * Start shadow section
         */
        $this->start_controls_section(
                'section_grid_box_shadow', [
            'label' => esc_html__('Box Shadow', 'residence-elementor'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
        $this->add_group_control(
                Group_Control_Box_Shadow::get_type(), [
            'name' => 'box_shadow',
            'label' => esc_html__('Box Shadow', 'residence-elementor'),
            'selector' => '{{WRAPPER}} .property_listing_blog ,{{WRAPPER}} .blog_unit.col-md-12 ',
                ]
        );

        $this->end_controls_section();
        /*
         * -------------------------------------------------------------------------------------------------
         * End shadow section
         */


        /*
         * -------------------------------------------------------------------------------------------------
         * Start color section
         */
        $this->start_controls_section(
                'section_grid_colors', [
            'label' => esc_html__('Colors', 'residence-elementor'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'back_color', [
            'label' => esc_html__('Unit Background', 'residence-elementor'),
            'type' => Controls_Manager::COLOR,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .property_listing_blog,{{WRAPPER}} .blog_unit ' => 'background-color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'border_color', [
            'label' => esc_html__('Border', 'residence-elementor'),
            'type' => Controls_Manager::COLOR,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .property_listing_blog,{{WRAPPER}} .blog_unit' => 'border-color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'title_color', [
            'label' => esc_html__('Title Color', 'residence-elementor'),
            'type' => Controls_Manager::COLOR,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} h3 a,{{WRAPPER}} h4 a' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'excerpt_color', [
            'label' => esc_html__('Excerpt Color', 'residence-elementor'),
            'type' => Controls_Manager::COLOR,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .blog_unit_content p,{{WRAPPER}} .listing_details ' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'meta_color', [
            'label' => esc_html__('Date or Meta Color', 'residence-elementor'),
            'type' => Controls_Manager::COLOR,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .blog_unit_meta ,{{WRAPPER}} .blog_unit_meta a ,{{WRAPPER}} .blog_unit_meta i ' => 'color: {{VALUE}}',
            ],
                ]
        );


        $this->add_control(
                'read_color', [
            'label' => esc_html__('Continue Reading Color', 'residence-elementor'),
            'type' => Controls_Manager::COLOR,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .read_more ,{{WRAPPER}} .read_more a ,{{WRAPPER}} .read_more i ' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->end_controls_section();
        /*
         * -------------------------------------------------------------------------------------------------
         * End color section
         */


        /*
         * -------------------------------------------------------------------------------------------------
         * Load more section
         */
        $this->start_controls_section(
                'section_load_more', [
            'label' => esc_html__('Load More Button', 'residence-elementor'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
        $this->add_control(
                'load_more_bg_color', [
            'label' => esc_html__('Background Color', 'residence-elementor'),
            'type' => Controls_Manager::COLOR,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .wpresidence_button' => 'background-color: {{VALUE}};background-image:linear-gradient(to right, transparent 50%, {{VALUE}} 50%);border-color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'load_more_color', [
            'label' => esc_html__('Color', 'residence-elementor'),
            'type' => Controls_Manager::COLOR,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .wpresidence_button' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'load_more_bg_color_hover', [
            'label' => esc_html__('Background Color Hover', 'residence-elementor'),
            'type' => Controls_Manager::COLOR,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .wpresidence_button:hover' => 'background-color: {{VALUE}};border-color: {{VALUE}};',
            ],
                ]
        );
        $this->add_control(
                'load_more_color_hover', [
            'label' => esc_html__('Color Hover', 'residence-elementor'),
            'type' => Controls_Manager::COLOR,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .wpresidence_button:hover' => 'color: {{VALUE}};',
            ],
                ]
        );





        $this->end_controls_section();
        /*
         * -------------------------------------------------------------------------------------------------
         * End Load more section
         */
    }

    /**
     * Render the widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     *
     * @access protected
     */
    public function wpresidence_send_to_shortcode($input) {
        $output = '';
        if ($input !== '') {
            $numItems = count($input);
            $i = 0;

            foreach ($input as $key => $value) {
                $output .= $value;
                if (++$i !== $numItems) {
                    $output .= ', ';
                }
            }
        }
        return $output;
    }

    protected function render() {
        $settings = $this->get_settings_for_display();


        $attributes['title'] = $settings['title_residence'];
        $attributes['number'] = $settings['number'];
        $attributes['rownumber'] = $settings['rownumber'];
        $attributes['control_terms_id'] = $this->wpresidence_send_to_shortcode($settings['control_terms_id']);
        $attributes['sort_by'] = $settings['sort_by'];
        $attributes['card_version'] = $settings['card_version'];
        //   echo  wpestate_recent_posts_pictures_new($attributes);
        echo wpestate_blog_list_widget($attributes, 0);
    }

    /**
     * Render the widget output in the editor.
     *
     * Written as a Backbone JavaScript template and used to generate the live preview.
     *
     * @since 1.0.0
     *
     * @access protected
     */
}