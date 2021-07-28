<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use HasFactory;

	protected $table = 'categoies';

	protected $fillable = [
		'parent_id',
		'name',	
		'created_at',
		'updated_at',
	];
}
