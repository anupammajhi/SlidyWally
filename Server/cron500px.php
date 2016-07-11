<?php
$consumer_key = "DQBqNsztgn02dnQOMEDSoXthYWlG7bbJ9UMxYBpL";
/**
"https://api.500px.com/v1/photos?feature=editors&sort=created_at&image_size=5&consumer_key=".$consumer_key
**/
$base_url = "https://api.500px.com/v1/photos?feature=editors&consumer_key=".$consumer_key;

$ch = curl_init($base_url);
$fp = fopen("example_homepage.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

$contents = curl_exec($ch);
fwrite($fp, $contents);

curl_close($ch);
fclose($fp);

?>

