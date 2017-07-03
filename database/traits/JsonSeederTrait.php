<?php


namespace Database\Traits;
use Illuminate\Support\Facades\File;

trait JsonSeederTrait
{

  /**
   * @param $dataUrl
   * @return mixed
   */
  public function getDataFromJson($dataUrl)
  {
    // use this to convert excel to json
    // https://shancarter.github.io/mr-data-converter/
    $occupationsJson = File::get($dataUrl);
    $convertedDataSet = json_decode($occupationsJson,true);
    return $convertedDataSet;
  }
}