<?php
$head3 = array(
    'User-Agent: Mozilla/5.0 (X11; U; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.90 Safari/537.36',
    'cookie: __cfduid=de7792fc187decdd3c7cb49c0333a96c31611923543; PHPSESSID=9biecgdr1kl9es1emlfh495876; uniqueID=EC-UserId-101252; popcashpu=1');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://gripo.website/auto/home?BTC=0&BCH=0&BCN=0&DASH=0&DGB=0&DOGE=1&ETH=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=0&POT=0&XRP=0&STRAT=0&TRX=0&WAVES=0&ZEC=0');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head3);
    $result = curl_exec($ch);
	var_dump($result);
    $plo31 = explode('<span class="label label-success">', $result);
    $olo31 = explode('</span>', $plo31[1]);

    echo "\r                                   \r";
    echo "succes => " . $olo31[0] . "\n";
	