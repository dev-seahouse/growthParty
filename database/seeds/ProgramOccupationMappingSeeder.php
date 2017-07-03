<?php

use App\Program;
use Illuminate\Database\Seeder;
use Database\Traits\JsonSeederTrait;

class ProgramOccupationMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use JsonSeederTrait;

    public function run()
    {
      $dataUrl = "database/data/program_occupation_mapping.json";
      $programs = $this->getDataFromJson($dataUrl);
      foreach ($programs as $programName => $matchingOccupations)
      {
        $program = Program::findByName($programName);
        $program->matching_requirements = json_encode($matchingOccupations);
        $program->save();
      }
    }
}
