<?php

namespace App\Communications;


interface Otp
{
  //* @param  $info
  //  - details needed to send opt e.g number, country, area code
  //* @return boolean
  // - return true if successful, else throw invalid otp request exception

  public function send($info);

  // * @param $info
  // - the verification code
  // * @return boolean
  // - true if valid, false if invalid
  public function validate($verificationCode);
}