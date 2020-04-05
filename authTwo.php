<?php



set_time_limit(0);
date_default_timezone_set('UTC');

//Load Depends from Composer...
require __DIR__.'/vendor/autoload.php';
require_once 'config.php';
use InstagramAPI\Instagram;
use InstagramAPI\Request\Live;


/////// CONFIG ///////
$username = '';
$password = '';
$debug = false;
$truncatedDebug = false;
//////////////////////

$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);

try {
    $loginResponse = $ig->login(IG_USERNAME, IG_PASS);

    if ($loginResponse !== null && $loginResponse->isTwoFactorRequired()) {
        $twoFactorIdentifier = $loginResponse->getTwoFactorInfo()->getTwoFactorIdentifier();

        $line = readline("Command: ");

        // The "STDIN" lets you paste the code via terminal for testing.
        // You should replace this line with the logic you want.
        // The verification code will be sent by Instagram via SMS.
        $verificationCode = trim(fgets($line));
        $ig->finishTwoFactorLogin(IG_USERNAME, IG_PASS, $twoFactorIdentifier, $verificationCode);
    }
} catch (\Exception $e) {
    echo 'Something went wrong: '.$e->getMessage()."\n";
}