<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
		'page',
		'banner_inicio',
		'first_title',
		'second_title',
		'banner_title_img',
		'first_title2',
		'second_title2',
		'banner_title2_img',
		'first_title3',
		'second_title3',
		'banner_title3_img'
	];

	public function scopeGetByPage($q, $page)
	{
		return $q->where('page', $page)->first();
	}
}
