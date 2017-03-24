<?php

namespace App;

 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class companies extends Model
{
	use SoftDeletes;

    protected $table = 'companies';
    protected $fillable = [
        'title','slug', 'company_profile', 'mission', 'vision', 'meta_title', 'meta_description', 'meta_keywords', 'updater_user_id', 'owner_user_id', 'deleted_at' 
    ];
}
