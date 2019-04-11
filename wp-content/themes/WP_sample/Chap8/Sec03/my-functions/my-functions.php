<?php
/*
Plugin Name: My Functions
Plugin URI: http://www.example.com/plugin/
Description: よく使う関数をまとめたプラグイン
Author: Nakashima
Author URI: http://www.example.com
Version: 1.0
*/
class My_Functions {
    function __construct() {
        add_shortcode( 'test', 'shortcode_test' );
    }

    function shortcode_test() {
        return "「ショートコードのテストです」";
    }

    function display_hello() {
        echo 'こんにちは。';
    }
}
$my_functions = new My_Functions();
