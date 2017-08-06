<?php

use App\Material;
use App\Programs\Program;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $programs = Program::all();
      $programs->each(function(Program $program, $key){
        // create a ppt pitch deck
        $pitch = Material::make([
          "name" => "Pitch Deck",
          "type" => "ppt",
          "uri" => "https://gsm.ucdavis.edu/sites/main/files/file-attachments/business_summary_template_2014.ppt"
        ]);
        // create a pdf portfolio
        $portfolio = Material::make([
          "name" => "Porfolio",
          "type" => "pdf",
          "uri" => "http://www.toyota-global.com/pages/contents/company/profile/overview/pdf/companyprofile.pdf"
        ]);
        // create a pdf brochure
        $brochure = Material::make([
          "name" => "Brochure",
          "type" => "pdf",
          "uri" => "https://www.planetpdf.com/planetpdf/pdfs/MO_Jan-2003_Sample.pdf"
        ]);
        $materials = collect([$pitch, $portfolio, $brochure]);
        $program->materials()->saveMany($materials);
      });
    }
}
