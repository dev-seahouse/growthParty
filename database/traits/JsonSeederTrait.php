<?php
/**
 * Created by PhpStorm.
 * User: kenan
 * Date: 4/7/17
 * Time: 01:18
 */

namespace App\Database;


trait JsonDataTrait
{

  public function getDataFromJson($dataUrl)
  {
    // use this to convert excel to json
    // https://shancarter.github.io/mr-data-converter/
    $occupationsJson = File::get($dataUrl);
    $convertedDataSet = json_decode($occupationsJson);
    return $convertedDataSet;
  }
}