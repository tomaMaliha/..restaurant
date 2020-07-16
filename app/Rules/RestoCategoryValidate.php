<?php

namespace App\Rules;

use App\Models\Category;
use Illuminate\Contracts\Validation\Rule;

class RestoCategoryValidate implements Rule
{
    private $restoId;

    public function __construct($restoId)
    {
        $this->restoId = $restoId;
    }

    public function passes($attribute, $value)
    {
        // $conditions = [
        //     'resto_id' => $this->restoId,
        //     'name' => $value,
        // ];

        if (Category::where('name' , $value)->where('resto_id' , $this->restoId)->first()) {
            return true;
        }

        return false;
    }

    public function message()
    {
        return 'This category does not belong to this restaurant.';
    }
}
