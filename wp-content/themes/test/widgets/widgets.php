<?php
// register Foo_Widget widget
function register_phone_widget() {
    register_widget( 'Phone_Widget' );
}
add_action( 'widgets_init', 'register_phone_widget' );