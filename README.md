# random-zahra
Random Quran Verse Web Application and web service api http://random-zahra.ga/

How to Use the web service
include the apiClass.php

	$test = new ZahraApi("ar"); //the argument of the consructor is the language for [ar:Arabic, am:Amazigh, it:Italian, es:Spanish, en:English, fr:French, zh:Chinese] 
	$res = $test->getData();
	echo $res["sura"]; //Sura Name(in Arabic and Chapter number in other languages)
	echo $res["aya"]; //Aya number
	echo $res["aya_text"]; //Aya txt
