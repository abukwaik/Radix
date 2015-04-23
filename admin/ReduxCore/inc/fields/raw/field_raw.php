<?php

// Exit if accessed directly
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    if ( ! class_exists( 'ReduxFramework_raw' ) ) {
        class ReduxFramework_raw {

            /**
             * Field Constructor.
             * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
             *
             * @since ReduxFramework 3.0.4
             */
            function __construct( $field = array(), $value = '', $parent ) {
                $this->parent = $parent;
                $this->field  = $field;
                $this->value  = $value;
            }

            /**
             * Field Render Function.
             * Takes the vars and outputs the HTML for the field in the settings
             *
             * @since ReduxFramework 1.0.0
             */
            function render() {

                if ( ! empty( $this->field['include'] ) && file_exists( $this->field['include'] ) ) {
                    require_once $this->field['include'] ;
                }

                do_action( 'redux-field-raw-' . $this->parent->args['opt_name'] . '-' . $this->field['id'] );

            }
        }
    }