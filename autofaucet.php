<?php



$head = array(
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'cookie: uhash=c931ec5147296cf70abc9eb202388c3a; __cfduid=d172e1dedc5c7913648deb0861de05a341608103221; PHPSESSID=9e7cd17f799a592dd2698ce31f88ac85',
    'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10.14; rv:82.0) Gecko/20100101 Firefox/82.0');
	
while(true)
{	
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://autofaucet.org/dashboard/claim/auto/start');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    $result = curl_exec($ch);
	
	$plo1 = explode('<p class="message"><i class="fas fa-check green"></i>', $result);
    $olo1 = explode('</p>', $plo1[1]);
	
	$plo = explode('<p class="amount">', $result);
    $olo = explode('<span>', $plo[1]);
	
	echo "\r                                   \r";
	echo "JUMLAH FCT TOKEN ANDA : ".$olo[0]."\n";
	echo "\r                                   \r";
	echo "SUKSES KLAIM <==> ".$olo1[0]."\n";
	
    sleep(1);
  
      for ($i = 120; $i > -1; $i--) {
        echo "\r                                   \r";
        echo "\033[0;32m• menunggu terkadang membosankan " . "\033[0;37m[ " . "\033[0;32m" . $i . "\033[0;37m ]";

        sleep(1);
    }
}
	