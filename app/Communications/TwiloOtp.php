<?php

namespace App\Communications;


use DebugBar;
use Session;
use Twilio\Rest\Client;

class TwiloOtp implements Otp
{
  private $message = "Welcome to the growthparty family!";
  private $client;

  public function __construct(Client $client)
  {
    $this->client = $client;
  }

  public function send($mobile)
  {
    // TODO: throw invalid request exception  if failed
    $otp_num = mt_rand(0, 9999);
    Session::put('twillo_token', $otp_num);
    $sms = $this->client->messages->create(
      $mobile,
      array(
        'from' => env('TWILO_NUMBER'),
        'body' => $this->message . " Your one-time pin is " . $otp_num
      )
    );
    return true;
  }

  public function validate($otp)
  {

    $validToken = Session::get('twillo_token');
    if ($otp == $validToken) {
      Session::forget('twillo_token');
      return true;
    } else {
      return false;
    }
  }
}
