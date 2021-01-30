<?php

require(__DIR__ . '/../src/autoloader.php');

$solver = new \TwoCaptcha\TwoCaptcha('d7bfc8ca9db0c22f3809889e6f6fe363');

try {
  $result = $solver->geetest([
    'gt'        => '60d0eb30df90804399f4432144edf3e5',
    'apiServer' => 'api.geetest.com',
    'challenge' => '9d37f8c283afeaf0ee967139e957d8bb8d',
    'url'       => 'https://api.cqdssl.com/api/uc/v3/turing/challenge',
  ]);
} catch (\Exception $e) {
  die($e->getMessage());
}

die('Captcha solved: ' . $result->code);
