<?php

namespace App\Http\Controllers;

use App\Models\Manu;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Rules\RestoCategoriesValidate;

class ManuController extends Controller
{
    public function saveManuItem(Request $request)
    {
        $postData = $this->validate($request, [
            'restoId' => 'required|numeric',
            'price' => 'required|numeric',
            'item' => 'required',
            'description' => 'required|min:2',
            'category' => ['required', new RestoCategoriesValidate(request('restoId'))],
        ]);

        $category = Category::where('resto_id' , $postData['restoId'])
        ->where('name' , $postData['category'])->first();

        $manu = Manu::create([
            'name' => $postData['item'],
            'price' => $postData['price'],
            'description' => $postData['description'],
            'resto_id' => $postData['restoId'],
            'category_id' => $category->id,
        ]);

        return response()->json($manu,201);
        //return $request->all();
    }
}
