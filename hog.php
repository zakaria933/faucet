<?php



$head = array(
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'cookie: _data_html=23-1_30-1_77-1_429-2_587-2_760-2; PHPSESSID=1e1187e15589e1f24c1a5e8f2bd19bac; _data_cpc=902-5',
    'user-agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.93 Safari/537.36'


);

while (true) {

    #fungsi melihat ballance
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.hogdice.com/');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    $result = curl_exec($ch);

    $ambil_kata = explode('<h6 class="yellow-text" >', $result);
    $ambil_kata_lagi = explode('</h6>', $ambil_kata[1]);
    echo "\r                                   \r";
    echo $ambil_kata_lagi[0] . "\n";

    $bal = explode('<span id="ZEC_pending">', $result);
    $ance = explode('</span>', $bal[1]);
    echo "Your Balance ZEC : " . $ance[0] . " SATOSI \n";

    $bal = explode('<span id="BTC_pending">', $result);
    $ance = explode('</span>', $bal[1]);
    echo "Your Balance BTC : " . $ance[0] . " SATOSI \n";

    $bal = explode('<span id="ETH_pending">', $result);
    $ance = explode('</span>', $bal[1]);
    echo "Your Balance ETH : " . $ance[0] . " SATOSI \n";

    $bal = explode('<span id="DOGE_pending">', $result);
    $ance = explode('</span>', $bal[1]);
    echo "Your Balance DOGE : " . $ance[0] . " SATOSI \n";

    $bal = explode('<span id="LTC_pending">', $result);
    $ance = explode('</span>', $bal[1]);
    echo "Your Balance LTC : " . $ance[0] . " SATOSI \n";

    echo "==========||||==========\n";



    #fungsi claim

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.hogdice.com/send_to_wallet.php');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    $result = curl_exec($ch);
    $ambil_kata = explode('<div class="card center-align green darken-4 white-text z-depth-5 faa-horizontal animated">', $result);
    $ambil_kata_lagi = explode('</div>', $ambil_kata[1]);
    echo $ambil_kata_lagi[0] . "\n";

    echo "==========||||==========\n";

    for ($i = 60; $i > -1; $i--) {
        echo "\r                                   \r";
        echo "\033[0;32m # menunggu terkadang membosankan " . "\033[0;37m[ " . "\033[0;32m" . $i . "\033[0;37m ]";
        sleep(1);
    }

    #EXPRES ID EC-UserId-101252
}
