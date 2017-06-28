<?php

use Illuminate\Database\Seeder;
use App\Industry;

class ServiceProviderSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $dataUrl = 'database/data/serviceProviders.json';
    $convertedDataSet = $this->getListOfIndustryAndOccupationsFromJson($dataUrl);
    foreach ($convertedDataSet as $serviceProvider) {
      $industryName = $serviceProvider['industry'];
      $industryId = Industry::where('name', $industryName)->first()->id;
      array_forget($serviceProvider, 'industry');
      $serviceProvider['industry_id'] = $industryId;
      \App\ServiceProvider::create($serviceProvider);
    }
  }

  protected function getListOfIndustryAndOccupationsFromJson($dataUrl)
  {
    // use this to convert excel to json
    // https://shancarter.github.io/mr-data-converter/
    $occupationsJson = File::get($dataUrl);
    $convertedDataSet = json_decode($occupationsJson, true);
    return $convertedDataSet;
  }


}
