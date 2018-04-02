<?php

namespace App\Model;

use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
		protected $fillable = [
		'customer','star','review'
	 ];

	public function product()
	{
		return $this->BelongsToMany(Product::class);
	}
    
}
