<?php

namespace App\Communications;


interface Otp
{
  public function send($info);
  public function validate($info);
}