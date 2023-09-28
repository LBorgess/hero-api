<?php

/**
 * @author: Pedro 
 */

$opts = array(
    'http' =>
    array(
        'method' => 'GET',
        'header' => 'content-type: application/json'
    )
);

$context = stream_context_create($opts);

$result = file_get_contents('http://localhost/hero-api/v1/Api.php?apicall=getheroes', false, $context);

$heroes = json_decode($result, true);
