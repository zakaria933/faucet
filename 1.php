<?php

error_reporting(0);

$url = 'https://cryptodelta.net/lvlup/ec//home?BTC=0&BCH=0&BCN=0&ADA=0&DASH=0&DGB=0&DOGE=1&ETH=0&ETC=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=0&POT=0&RDD=0&XRP=0&STRAT=0&XTZ=0&TRX=0&WAVES=0&ZEC=1&EXS=0&EXG=0&PIVX=0&VTC=0';
	     

$head =	array('User-Agent: Mozilla/5.0 (X11; U; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.90 Safari/537.36',
    	      'cookie: PHPSESSID=6e2df012887f279a5578bb37d3737d82; uniqueID=EC-UserId-101252; _ga=GA1.2.1623262071.1611920437; _gid=GA1.2.235445918.1611920437');

$head1 = array('User-Agent: Mozilla/5.0 (X11; U; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.90 Safari/537.36',
	       'Cookie: __cfduid=d122a85ff02969ed82b103696b33a43a41611916610; PHPSESSID=nrbhrpedpkh5mimelcp0t3i1t2; _ga=GA1.2.680295769.1611916627; _gid=GA1.2.2145588480.1611916627; uniqueID=EC-UserId-101252; a=bVGHKSKW94R9LSSsG7dc6dU3qEhH5W7w; _data_html=77-1; _popfired=2; _popfired_expires=Invalid%20Date; lastOpenAt_=1611916795451; token_QpUJAAAAAAAAGu98Hdz1l_lcSZ2rY60Ajjk9U1c=BAYAYBPlbQFgE-ZngAGBAsAAIPpHCMV21mpN7eJepeVVsle997zNJ3YVv96_n2ZjAez0wQBHMEUCIHVwDwRz4YuGWGdC7ofQW3xAVGmMguEvkreYMjlOKyxBAiEAn0Gn36B_VHZ_T-Hm9IqAs9LFa7_Pdj1I5QEIytR8Ylk');


while (true) {

#cryptodelta faucet-------------------------------------------------------------------------
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    $result = curl_exec($ch);

    $plo = explode('<span class="label label-success">', $result);
    $olo = explode('</span>', $plo[1]);

    echo "\r                                   \r";
    echo "succes => " . $olo[0] . "\n";

	sleep(1);
#levelupautofaucet--------------------------------------------------------------------------
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://phoenixfaucets.xyz/home?BTC=0&BCH=0&BCN=0&ADA=0&DASH=0&DGB=0&DOGE=1&ETH=0&ETC=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=0&POT=0&RDD=0&XRP=0&STRAX=0&XTZ=0&TRX=0&WAVES=0&ZEC=0&EXS=0&EXG=0&PIVX=0&VTC=0&KMD=0');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head1);
    $result = curl_exec($ch);

    $plo1 = explode('<span class="label label-success">', $result);
    $olo1 = explode('</span>', $plo1[1]);
	
    echo "\r                                   \r";
    echo "succes => " . $olo1[0] . "\n";
	
	sleep(1);
#cryptolovers faucet-------------------------------------------------------------------------
	$head3 = array(
    'User-Agent: Mozilla/5.0 (X11; U; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.90 Safari/537.36',
    'cookie: __cfduid=d84eb65b7f8b3c73b9b7e9bdbcff08c121611916038; _ga=GA1.2.1838992136.1611916040; _gid=GA1.2.2046508698.1611916040; uniqueID=EC-UserId-101252; PHPSESSID=8gu4stgm6fen33thc8qsjuqptt; pop_delay_48003=1; _coinzilla_fp_=%7B%22backed%22%3A%5B%7B%22cap%22%3A2%2C%22lastCall%22%3A1611917141859%7D%5D%7D; pop_delay_48002=1');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://cryptolovers.online/home?BTC=0&BCH=0&BCN=0&ADA=0&DASH=0&DGB=0&DOGE=1&ETH=0&ETC=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=0&POT=0&RDD=0&XRP=0&STRAX=0&XTZ=0&TRX=0&WAVES=0&ZEC=0&EXS=0&EXG=0&PIVX=0&VTC=0&KMD=0');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head3);
    $result = curl_exec($ch);

    $plo3 = explode('<span class="label label-success">', $result);
    $olo3 = explode('</span>', $plo3[1]);

    echo "\r                                   \r";
    echo "succes => " . $olo3[0] . "\n";
	
	sleep(1);

#lemecmail faucet-------------------------------------------------------------------------
    $head5 = array('User-Agent: Mozilla/5.0 (X11; U; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.90 Safari/537.36',
    	          'cookie: __cfduid=de60cf23bcbe7508cd99492f643a73a831611917492; PHPSESSID=24tdv8j4fi9aaiclminq805ug0; _ga=GA1.2.1114764236.1611917494; _gid=GA1.2.944295622.1611917494; adcashufpv3=650450918656850013139667094; uniqueID=EC-UserId-101252; popcashpu=1; _data_cpm=157-2; pop_delay_414=1');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://lemeclaim.website/home?ADA=0&BCH=0&BCN=0&DASH=0&DGB=0&DOGE=1&ETH=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=0&POT=0&XRP=0&STRAT=0&TRX=0&WAVES=0&ZEC=0&XTZ=0&RDD=0&PIVX=0');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head5);
    $result = curl_exec($ch);
    $plo5 = explode('Command: toastr["success"]("', $result);
    $olo5 = explode('")', $plo5[1]);

    echo "\r                                   \r";
    echo "succes => " . $olo5[0] . "\n";
	
	sleep(1);
#vinnyscrypto faucet-------------------------------------------------------------------------
    $head6 = array('User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.111 Safari/537.36',
    	          'Cookie: uniqueID=EC-UserId-101252; PHPSESSID=402ad089fb82a3ef451d69f32ff8a5c3');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://vinnyscrypto.fun/home?BTC=0&BCH=0&BCN=0&ADA=0&DASH=0&DGB=0&DOGE=1&ETH=0&ETC=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=0&POT=0&RDD=0&XRP=0&STRAT=0&XTZ=0&TRX=0&WAVES=0&ZEC=0&EXS=0&EXG=0&PIVX=0&VTC=0');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head6);
    $result = curl_exec($ch);
    $plo6 = explode('<span class="label label-success">', $result);
    $olo6 = explode('</span>', $plo6[1]);
    echo "\r                                   \r";
    echo "succes => " . $olo6[0] . "\n";
	
	sleep(1);
#manicoin faucet-------------------------------------------------------------------------
    $head7 = array('User-Agent: Mozilla/5.0 (X11; U; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.90 Safari/537.36',
    	          '');

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://manicoins.com/home?BTC=0&BCH=0&BCN=0&DASH=0&DGB=0&DOGE=1&ETH=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=0&POT=0&XRP=0&STRAT=0&TRX=0&WAVES=0&ZEC=0&ADA=0&ETC=0&EXG=0&EXS=0&PIVX=0&RDD=0&XTZ=0&VTC=0&KMD=0');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head7);
    $result = curl_exec($ch);
    $plo7 = explode('Command: toastr["success"]("', $result);
    $olo7 = explode('")', $plo7[1]);

    echo "\r                                   \r";
    echo "succes => " . $olo7[0] . "\n";

sleep(1);

#hogfaucet-------------------------------------------------------------------------
$head = array(
    'User-Agent: Mozilla/5.0 (X11; U; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.90 Safari/537.36',
    'cookie: DGBToken=2xIWS1m9GOpzEAIb4INyWj2i5gFDxwew; __gads=ID=3b17b4339883a11c-229625f5b6a600b5:T=1611918618:RT=1611918618:S=ALNI_Ma0tSH_dRbrXAb9Sab73zvoSpy7dA; PHPSESSID=be7096cffb545eb862b9050b9e35486e; 0x369b808887=0x369b808887');
	
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://hogfaucet.com/ec/claim.php?coin=DGB');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    $result = curl_exec($ch);
	
	$plo = explode("Balance: <br>", $result);
    $olo = explode("<!--", $plo[1]);
	
	$plo1 = explode("checked</i> <span>", $result);
    $olo1 = explode("</span>", $plo1[1]);
	

	if($olo1[0] == 'Success! We paid out 300000 BCN Satoshi to EC-UserId-101252'){
	echo "\r                                   \r";
	echo $olo1[0]."\n";
	}else{
	echo "\r                                   \r";
	echo "ballance DGB ANDA : ".$olo[0]."\n";
	}
	
	sleep(1);
#starfaucet-------------------------------------------------------------------------	
	$head9 = array(
    'User-Agent: Mozilla/5.0 (X11; U; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.90 Safari/537.36',
    'cookie: DOGEToken=kt5ThazOiJtkRUeG1XxSdvZWTPu2iwek; __cfduid=df69bcd54e0922295ed9edd92097ce10d1611918927; PHPSESSID=lo8lop59ntea0skc49dnku1qcm; undefinedrn_ad_native_jeodu=true; CoinTrafficPnd0=1');
	
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://starfaucet.net/Autofaucet/claim.php?coin=DOGE');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head9);
    $result = curl_exec($ch);

	$plo9 = explode("checked</i> <span>", $result);
    $olo9 = explode("</span>", $plo9[1]);
	echo "\r                                   \r";
	echo $olo9[0]."\n";
	
	sleep(1);
#hogcoin.ga-------------------------------------------------------------------------	
$head = array(
    'User-Agent: Mozilla/5.0 (X11; U; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.90 Safari/537.36',
    'cookie: BCNToken=voR7Cif7Jm2lvBLp6PEfbwDXbIIGvr3A; 0x369b808887=0x369b808887; PHPSESSID=1c2e447d6a5d748cd1691a9945e02983');
	
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.hogcoin.ga/bcn/claim.php?coin=BCN');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    $result = curl_exec($ch);
	
	$plo = explode("Balance: <br>", $result);
    $olo = explode("<!--", $plo[1]);
	
	$plo1 = explode("checked</i> <span>", $result);
    $olo1 = explode("</span>", $plo1[1]);
	

	if($olo1[0] == 'Success! We paid out 300000 BCN Satoshi to EC-UserId-101252'){
	echo "\r                                   \r";
	echo $olo1[0]."\n";
	}else{
	echo "\r                                   \r";
	echo "ballance BNC ANDA : ".$olo[0]."\n";
	}
	sleep(1);

	http://gripo.website/auto/home?BTC=0&BCH=0&BCN=0&DASH=0&DGB=0&DOGE=1&ETH=0&LSK=0&LTC=0&XMR=0&NEO=0&PPC=0&POT=0&XRP=0&STRAT=0&TRX=0&WAVES=0&ZEC=0
    sleep(1);
    for ($i = 60; $i > -1; $i--) {
        echo "\r                                   \r";
        echo "\033[0;32m• menunggu terkadang membosankan " . "\033[0;37m[ " . "\033[0;32m" . $i . "\033[0;37m ]";

        sleep(1);
    }
}
