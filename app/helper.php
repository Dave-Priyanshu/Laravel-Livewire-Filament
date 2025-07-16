<?php

use App\Models\Service;

function getServices(){
    $services = Service::where('status',1)->orderBy('title','ASC')->get();
    return $services;
}
?>