<?php

ini_set("soap.wsdl_cache_enabled","0");

function bookYear($book)
{
    $_books=[
        ['name'=>'Book 1', 'year'=>2017],
        ['name'=>'Book 2', 'year'=>2018],
        ['name'=>'Book 3', 'year'=>2019],
    ];

    foreach($_books as $bk)
        if($bk['name']==$book)
            return $bk['year'];

    return Null;
}

$server=new SoapServer("test.wsdl");

// register available functions
$server->addFunction('bookYear');

// start handling requests
$server->handle();

