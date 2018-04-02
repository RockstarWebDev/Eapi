<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToYou extends Exception
{
    public function render()
    {
    	return ['errors' => 'Product Not Belongs to You'];
    }
}
