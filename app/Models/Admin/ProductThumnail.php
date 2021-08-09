<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductThumnail extends Model
{
    use HasFactory;

     protected $table = 'thumnails';

	protected $fillable = [
		'product_id',
		'title',
		'thumnail',
	];
}
