<?php

function get_services(){

    global $wpdb;

    $table_name = $wpdb->prefix . 'services';

    $results = $wpdb->get_results(

        $wpdb->prepare("SELECT * FROM $table_name")
    );

    if($results){

        return $results;
    }

}
