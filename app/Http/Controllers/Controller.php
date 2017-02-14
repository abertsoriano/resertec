<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use File;
use App\Product;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    /**
     * Agrega o no una imagen, si es que fuera subida.
     * @param $request
     * @param $image_name
     * @param $page
     * @param string $path
     * @return mixed|string
     */
    protected function addReplaceImage($request, $image_name, $page, $path = 'images/')
    {
    	$file_name = '';

    	if ($request->hasFile($image_name)) {
    	    if (!is_null($page)) {
                File::delete($path . $page->getAttribute($image_name));
            }

            $file_name = str_replace([' ', '-'], '_', $request->file($image_name)->getClientOriginalName());
            $request->file($image_name)->move($path, $file_name);
        }

        return $file_name;
    }

    protected function getProducts() {
        $items = Product::all();

        $sliders = $items->filter(function ($item) {
            return $item->flag === 'S';
        });
        $tableProducts = $items->filter(function ($item) {
            return $item->flag === 'T';
        });

        return [$sliders, $tableProducts];
    }
}
