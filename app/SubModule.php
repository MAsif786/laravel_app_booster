<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubModule extends Model
{
	public function modulegroups()
    {
        return $this->belongsToMany("App\UserGroup", "groupHasModules", "module_id", "user_group_id");
    }

    protected $fillable = [
        'name', 'desc'
    ];

	protected $casts = ['status' => 'boolean'];

}
