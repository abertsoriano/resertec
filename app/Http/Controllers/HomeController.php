<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::getByPage('INICIO');
        return view('admin.home', compact('page'));
    }

    public function updatePage(Request $request, $id)
    {
        $page = Page::find($id);

        $banner_title_img = $this->addReplaceImage($request, 'banner_title_img', $page);
        $banner_title2_img = $this->addReplaceImage($request, 'banner_title2_img', $page);
        $banner_title3_img = $this->addReplaceImage($request, 'banner_title3_img', $page);

        $data = $request->toArray();
        $data['banner_title_img'] = $banner_title_img;
        $data['banner_title2_img'] = $banner_title2_img;
        $data['banner_title3_img'] = $banner_title3_img;

        if ($request->has('data')) {
            $page->second_title = json_encode($request->input('data'));
        } else {
            $page->fill($data);
        }
        $page->save();

        return redirect()->back()->with('mensaje', 'Datos actualizados con exito');
    }

    public function nosotros()
    {
        $page = Page::getByPage('NOSOTROS');
        return view('admin.nosotros', compact('page'));
    }

    public function clientes()
    {
        $page = Page::getByPage('CLIENTES');
        return view('admin.cliente', compact('page'));
    }

    public function servicio()
    {
        $page = Page::getByPage('SERVICIOS');
        return view('admin.servicio', compact('page'));
    }
}
