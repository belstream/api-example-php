<?php

define('API_KEY', "YOUR_API_KEY");
define('LIVE_ID', 0);

$content = file_get_contents("https://console.belstream.com/api/live?apiKey=".API_KEY."&liveId=".LIVE_ID);

if(file_put_contents("belstream_cache.json", $content) == FALSE) {
  echo "Error with cache";
}
