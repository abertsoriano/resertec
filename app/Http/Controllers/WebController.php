<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\NewsletterRequest;
use App\Http\Requests\ContactRequest;
use App\Newsletter;
use Mail;

class WebController extends Controller
{
	public function index()
	{
		$homeBanner = true;
		return view('index', compact('homeBanner'));
	}

	public function nosotros()
	{
		$title = 'NOSOTROS';
		return view('nosotros', compact('title'));
	}

	public function clientes()
	{
		$title = 'CLIENTES';
		return view('clientes', compact('title'));
	}

	public function productos()
	{
		$title = 'PRODUCTOS';
		return view('productos', compact('title'));
	}

	public function servicios()
	{
		$title = 'SERVICIOS';
		return view('servicios', compact('title'));
	}

	public function contacto()
	{
		$title = 'CONTACTO';
		return view('contacto', compact('title'));
	}

	public function galeria() {
        $title = 'GALERÍA';
        return view('galeria', compact('title'));
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
