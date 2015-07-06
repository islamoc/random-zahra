<?php
Class ZahraApi{
	public $lang;
	function __construct($lang) {
       $this->lang = $lang;
   }
   	function getData() {
		$url = "http://localhost:8000/Quran/api/api.php?lang=".$this->lang;
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		$data = substr($data, 3);
		return json_decode($data,true);;
	}
}
?>
