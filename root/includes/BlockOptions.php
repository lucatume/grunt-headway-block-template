<?php
namespace {%= prefix %};

    class BlockOptions extends \HeadwayBlockOptionsAPI {

        public $tabs = array(
            'my-only-tab' => 'Settings'
        );

        public $inputs = array(

            'my-only-tab' => array(

                'text-input' => array(
                    'type' => 'image',
                    'name' => 'logo',
                    'label' => 'Logo',
                    'tooltip' => 'Put anything relevant about the input in this tooltip.'
                )
            )
        );
    }