<?php

// use App\groupHasModules;
use Illuminate\Database\Seeder;

class groupHasModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('groupHasModules')->count() == 0) {
	    	DB::table('groupHasModules')->insert([
		        'user_group_id'  => "1",
                'module_id' => "1",
		        'created_at' => now(),
		    ]);
            DB::table('groupHasModules')->insert([
                'user_group_id'  => "1",
                'module_id' => "2",
                'created_at' => now(),
            ]);
            DB::table('groupHasModules')->insert([
                'user_group_id'  => "1",
                'module_id' => "3",
                'created_at' => now(),
            ]);
    	}
    }
}
