<?php
namespace {%= prefix %};

class Block extends \HeadwayBlockAPI {

    public $id = '{%= prefix %}';
    public $name = '{%= title %}';
    public $options_class = '\{%= prefix %}\BlockOptions';
    public $description = '{%= description %}';

    // public static function init_action($block_id, $block) 
    // {

    // }


    // public static function enqueue_action($block_id, $block, $original_block = null)
    // {

    // }


    // public static function dynamic_css($block_id, $block, $original_block = null)
    // {

    // }


    // public static function dynamic_js($block_id, $block, $original_block = null)
    // {

    // }

    // public function setup_elements() {
    //     $this->register_block_element(array(
    //         'id' => 'element1-id',
    //         'name' => 'Element 1 Name',
    //         'selector' => '.my-selector1',
    //         'properties' => array('property1', 'property2', 'property3'),
    //         'states' => array(
    //             'Selected' => '.my-selector1.selected',
    //             'Hover' => '.my-selector1:hover',
    //             'Clicked' => '.my-selector1:active'
    //             )
    //         ));
    // }

    public function content($block) {
        /* CODE HERE */
    }
}