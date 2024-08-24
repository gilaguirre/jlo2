<?php
/*
function get_inquiries(){

    global $wpdb;

    $table_name = 'jlo_inquiries';


    $data = array(

        'checkout_url' => $checkout_url,
    );
    $where = array(

        'id' => $payouts_amount_id
    );

    return $wpdb->update($table_name, $data, $where);

}*/

function get_inquiries(){

    global $wpdb;

    $table_name = 'jlo_inquiries';

    $query = $wpdb->prepare("SELECT * FROM $table_name");

    $results = $wpdb->get_results($query, ARRAY_A);

    return $results;

}

function insert_inquiry($subject, $content, $email_address, $name){

    global $wpdb;

    $table_name = 'jlo_inquiries';

    $data = array(
        'subject' => $subject,
        'content' => $content,
        'email_address' => $email_address,
        'name' => $name

    );

    return $wpdb->insert($table_name, $data);

}