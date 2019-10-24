<?php

use App\SubModule;
use Illuminate\Database\Seeder;

class SubModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	if (SubModule::count() == 0) {
    		$data = [
    					[
				        'name' 		    => "Users",
				        'description' 	=> "User Management test description",
				        'icon'		=> "fa-users"
				    	],
				    	[
				        'name' 		=> "Usergroups",
				        'description' 		=> "Configuration test description",
				        'icon'		=> "fa-gears"

				    	],
		    			[
				        'name' 		=> "Client",
				        'description' 		=> "Aque Lite test description",
				        'icon'		=> "fa-lightbulb-o"
				    	]
    				];
		    SubModule::insert($data);
		}else{
			echo "*soft_mudules* Table Already has Data\n";
		}
    }
}
