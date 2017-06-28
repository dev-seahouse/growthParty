<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class OccupationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */

  public function run()
  {
    $dataUrl = 'database/data/occupations.json';
    $convertedDataSet = $this->getListOfIndustryAndOccupationsFromJson($dataUrl);
    foreach ($convertedDataSet as $key => $values) {
      $industry = $this->insertIndustryNameIntoDb($key);
      $this->insertOccupationsIntoDb($industry, $values);
    }
  }

  /**
   * @return mixed
   */
  protected function getListOfIndustryAndOccupationsFromJson($dataUrl)
  {
    // use this to convert excel to json
    // https://shancarter.github.io/mr-data-converter/
    $occupationsJson = File::get($dataUrl);
    $convertedDataSet = json_decode($occupationsJson);
    return $convertedDataSet;
  }

  /**
   * @param $values
   */
  protected function insertOccupationsIntoDb($industry, $values)
  {
    foreach ($values as $value) {
      \App\Occupation::create(array(
        'industry_id' => $industry->id,
        'name'        => $value
      ));
    }
  }

  /**
   * @param $key
   * @return the industry just created
   */
  protected function insertIndustryNameIntoDb($key)
  {
    $industry = \App\Industry::create(array(
      'name' => $key
    ));
    return $industry;
  }
}
