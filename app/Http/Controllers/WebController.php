<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\NewsletterRequest;
use App\Http\Requests\ContactRequest;
use App\Newsletter;
use App\Page;
use App\Galery;
use Mail;

class WebController extends Controller
{
	public function index()
	{
		$homeBanner = true;
		$page = Page::getByPage('INICIO');
		return view('index', compact('homeBanner', 'page'));
	}

	public function nosotros()
	{
		$title = 'NOSOTROS';
		$page = Page::getByPage($title);
		return view('nosotros', compact('title', 'page'));
	}

	public function clientes()
	{
		$title = 'CLIENTES';
		$page = Page::getByPage($title);
		return view('clientes', compact('title', 'page'));
	}

	public function productos()
	{
		$title = 'PRODUCTOS';
		return view('productos', compact('title'));
	}

	public function servicios()
	{
		$title = 'SERVICIOS';
		$page = Page::getByPage($title);
		return view('servicios', compact('title', 'page'));
	}

	public function contacto()
	{
		$title = 'CONTACTO';
		$page = Page::getByPage($title);
		return view('contacto', compact('title', 'page'));
	}

	public function galeria() {
        $title = 'GALERÍA';
        $galeries = Galery::all();
        return view('galeria', compact('title', 'galeries'));
    }

	public function newsletter(NewsletterRequest $request)
	{
		Newsletter::create($request->all());

		return response()->json('MF000');
	}

	public function sendContact(ContactRequest $request)
	{
		Mail::send('partials.send-contact', $request->all(), function($message) {
			$message->to(env('TO_ADDRESS'), env('TO_NAME'))->subject('Resertec :: Página Contacto');
		});

		return response()->json($request->all());
	}
}
