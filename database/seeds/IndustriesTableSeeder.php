<?php

use Illuminate\Database\Seeder;
use Database\Traits\JsonSeederTrait;

class IndustriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use JsonSeederTrait;
    public function run()
    {
      $dataUrl = base_path().'/database/data/industries.json';
      $convertedDataSet = $this->getDataFromJson($dataUrl);
      foreach ($convertedDataSet as $item){
       $this->createIndustryIfNotExist($item);
      }
    }

  /**
   * @param $key
   * @param $value
   */
  protected function createIndustryIfNotExist($item)
  {
    \App\Industry::firstOrCreate($item);
  }
}
