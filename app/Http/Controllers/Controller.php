<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use File;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected function addReplaceImage($request, $image_name, $page)
    {
    	$file_name = '';

    	if ($request->hasFile($image_name)) {
            File::delete('images/' . $page->getAttribute($image_name));
            $file_name = str_replace([' ', '-'], '_', $request->file($image_name)->getClientOriginalName());
            $request->file($image_name)->move('images/', $file_name);
        }

        return $file_name;
    }
}
