<?php 

function get_meta_values( $key ) {

$users = get_users(array(
    'meta_key' => $key,
));

$data = [];

foreach($users as $d) {

    $meta = get_user_meta($d->id, $key);
    array_push($data, $meta);
}

return $data;
}
