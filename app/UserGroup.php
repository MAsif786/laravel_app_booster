<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    public function users()
    {
        return $this->hasMany("App\User", "user_group_id", "id");
    }

    public function submodules()
    {
        return $this->belongsToMany("App\SubModule", "groupHasModules", "user_group_id", "module_id");
    }

    protected $fillable = ["name", "description"];

    protected $casts = ["status" => "boolean"];
}
