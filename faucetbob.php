<?php



$head = array(
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'cookie: __cfduid=d9ad6da860bd1b6faca88c056adec67071606914448; PHPSESSID=8p2374nmgeoslk8oggfqioet03',
    'user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.93 Safari/537.36'


);
while(true){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://faucetofbob.xyz/faucet.php?address=EC-UserId-101252&BTC=0&BCH=0&BCN=0&DASH=0&DGB=0&DOGE=1&ETH=0&ETC=0&EXG=0&EXS=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=0&POT=0&XRP=0&STRAT=0&TRX=0&WAVES=0&ZEC=0&ADA=0&XTZ=0&RDD=0&PIVX=0&KMD=0&VTC=0');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    $result = curl_exec($ch);
	
	$plo = explode('Your remaining AutoClaim Tokens:', $result);
    $olo = explode('<!-- Modal Trigger -->', $plo[1]);
	
	$plo1 = explode('<div class="card center-align green darken-4 white-text z-depth-2">', $result);
    $olo1 = explode('</div>', $plo1[1]);

	echo "\r                                   \r";
	echo "YOUR TOKEN : ".$olo[0]."\n";
	
	echo "\r                                   \r";
    echo "succes => " . $olo1[0] . "\n";
    sleep(1);
  
      for ($i = 60; $i > -1; $i--) {
        echo "\r                                   \r";
        echo "\033[0;32m• menunggu terkadang membosankan " . "\033[0;37m[ " . "\033[0;32m" . $i . "\033[0;37m ]";

        sleep(1);
    }
}