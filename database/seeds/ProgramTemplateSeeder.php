<?php

use Database\Traits\JsonSeederTrait;
use Illuminate\Database\Seeder;

class ProgramTemplateSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  use JsonSeederTrait;

  public function run()
  {
    $this->makeProgramList();
    $this->insertMatchingRequirementsIntoProgramTemplates();

  }

  protected function makeProgramList()
  {
    $dataUrl = base_path() . '/database/data/program_templates.json';
    $convertedDataSet = $this->getDataFromJson($dataUrl);
    foreach ($convertedDataSet as $programTemplate) {
      \App\Programs\ProgramTemplate::create($programTemplate);
    }
  }

  protected function insertMatchingRequirementsIntoProgramTemplates()
  {
    $dataUrl = base_path() . '/database/data/program_template_match_requirements.json';
    $convertedDataSet = $this->getDataFromJson($dataUrl);
    foreach ($convertedDataSet as $programTemplateName => $occupationsOfAffiliateThatMatch) {
      $programTemplate = \App\Programs\ProgramTemplate::findByName($programTemplateName);
      $programTemplate->matching_requirements = json_encode($occupationsOfAffiliateThatMatch, JSON_UNESCAPED_UNICODE);
      $programTemplate->save();
    }
  }
}
