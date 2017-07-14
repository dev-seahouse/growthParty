<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Database\Traits\JsonSeederTrait;
class OccupationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */

  use JsonSeederTrait;


  public function run()
  {
    $dataUrl = base_path().'/database/data/occupations.json';
    $convertedDataSet = $this->getDataFromJson($dataUrl);
    foreach ($convertedDataSet as $key => $values) {
      $industry = $this->insertIndustryNameIntoDb($key);
      $this->insertOccupationsIntoDb($industry, $values);
    }
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
    $industry = \App\Industry::firstOrCreate(array(
      'name' => $key
    ));
    return $industry;
  }
}
