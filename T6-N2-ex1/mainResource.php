<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . 'Resource.php');

$res1 = new Resource("PHP for dummies", Subject::php, ResourceType::web, "phpfordummies.com");

$res2 = new Resource(
    "La La Laravel",
    Subject::Laravel,
    ResourceType::web,
    URL: "Lalalaravel"
);

echo $res1;
echo $res2;
