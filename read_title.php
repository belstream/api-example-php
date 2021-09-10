<?php

$jsonData = json_decode(file_get_contents("belstream_cache.json"));
echo $jsonData->title;
