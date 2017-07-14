<?php

use Database\Traits\JsonSeederTrait;
use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  // precon: service provider seeder
  use JsonSeederTrait;

  public function run()
  {
    $dataUrl = base_path() . '/database/data/whoHasWhatPrograms.json';
    $convertedDataSet = $this->getDataFromJson($dataUrl);
    foreach ($convertedDataSet as $serviceProviderName => $programTemplateNames) {
      // find the service provider
      $serviceProvider = \App\ServiceProvider::findByName($serviceProviderName);
      foreach ($programTemplateNames as $programTemplateName) {
        $programTemplateId = \App\Programs\ProgramTemplate::findByName($programTemplateName)->id;
        $serviceProvider->programs()->create(array(
            "program_template_id" => $programTemplateId
          )
        );
      }
    }
  }
}
