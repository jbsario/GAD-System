<?php

use Illuminate\Database\Seeder;
use App\GADProfiles;

class GADProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\GADProfiles::create([
                                'NameOfOrg'=>'College Of Computer Studies',
                                'OfficeAddress'=>'IT building Indang, Cavite',
                                'telephone'=>'(046) 4150-101',
                                'Fax'=>'(046) 4150-012',
                                'mobile'=>'09759571854',
                                'website'=>'cvsu@gmail.com',
                                'headOfOrg'=>'HERNANDO D ROBLES',
                                'chairperson'=>'Susan Phd.',
                                        ]);
        
         
    }
}
