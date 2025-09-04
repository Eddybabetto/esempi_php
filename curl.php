<?php 
$this->curl = curl_init();
curl_setopt($this->curl, CURLOPT_URL, $url);
curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($this->curl);
$data = json_decode($response, true);

echo print_r($data);
curl_close($this->curl);

?>