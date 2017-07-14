<?php

use Illuminate\Database\Seeder;
use App\Industry;
use Database\Traits\JsonSeederTrait;

class ServiceProviderSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  use JsonSeederTrait;

  public function run()
  {
    $dataUrl = base_path().'/database/data/serviceProviders.json';
    $convertedDataSet = $this->getDataFromJson($dataUrl);

    foreach ($convertedDataSet as $serviceProvider) {
      $industryName = $serviceProvider['industry'];
      try{
        $industryId = Industry::where('name', $industryName)->first()->id;
      } catch (ErrorException $ex){
        throw new ErrorException('Check that name of industries in industry list matches industries of service providers.');
      }
      array_forget($serviceProvider, 'industry');
      $serviceProvider['industry_id'] = $industryId;
      \App\ServiceProvider::create($serviceProvider);
    }
  }
}

