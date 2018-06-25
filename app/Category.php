<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'created_by','modified_by','parent_id'];

    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug(mb_substr($this->title,0,40)."-".Carbon::now()->format('dmyHi'),'-');
    }

    public function children(){
        return $this->hasMany(self::class, 'parent_id');
    }

}
