<?php

use App\Programs\Program;
use Illuminate\Database\Seeder;
use Database\Traits\JsonSeederTrait;

class programTemplateMatchRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use JsonSeederTrait;

    public function run()
    {
      $dataUrl = base_path("database/data/program_template_match_requirements.json");
      $programs = $this->getDataFromJson($dataUrl);
      foreach ($programs as $programName => $matchingOccupations)
      {
        $program = Program::findByName($programName);
        $program->matching_requirements = json_encode($matchingOccupations,JSON_UNESCAPED_UNICODE);
        $program->save();
      }
    }
}
