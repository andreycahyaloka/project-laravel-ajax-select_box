<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
	protected $dates = ['created_at', 'updated_at'];

	protected $table = 'subcategories';

	protected $fillable = [
		'subcategory_name', 'category_id',
	];

	protected $hidden = [
		// 
	];

	protected $guarded = [
		'created_at', 'updated_at',
	];

	// 
	public function categories() {
		return $this->belongsTo('App\Category', 'category_id', 'id');
	}
}
