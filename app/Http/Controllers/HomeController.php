<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Page;
use App\Galery;
use App\Product;
use File;

class HomeController extends Controller
{
    const PATH_GALLERY = 'images/galeria/';
    const PATH_LOGO = 'images/logos/';

    const LOGO_IMG = 'logo_img';

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

        if ($banner_title_img != '') {
            $data['banner_title_img'] = $banner_title_img;
        }

        if ($banner_title2_img) {
            $data['banner_title2_img'] = $banner_title2_img;
        }

        if ($banner_title3_img) {
            $data['banner_title3_img'] = $banner_title3_img;
        }

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

    public function productos() {

        list($sliders, $tableProducts) = $this->getProducts();

        return view('admin.productos', compact('sliders', 'tableProducts'));
    }

    public function servicio()
    {
        $page = Page::getByPage('SERVICIOS');
        return view('admin.servicio', compact('page'));
    }

    public function gallery()
    {
        $data = Galery::all();
        return view('admin.galery', compact('data'));
    }

    public function updateGalery(Request $request)
    {
        $imagen = Galery::find($request->input('id'));

        if ($imagen) {
            $file_name = $this->addReplaceImage($request, 'imagen', $imagen, self::PATH_GALLERY);
            if ($file_name) {
                $imagen->imagen = $file_name;
            }
        } else {
            if ($request->hasFile('imagen')) {
                $file_name = str_replace([' ', '-'], '_', $request->file('imagen')->getClientOriginalName());
                $request->file('imagen')->move(self::PATH_GALLERY, $file_name);
                $imagen = new Galery;
                $imagen->imagen = $file_name;
            }
        }

        $imagen->save();

        return redirect()->back();
    }

    public function deleteGallery($id)
    {
        $imagen = Galery::find($id);

        if ($imagen) {
            File::delete(self::PATH_GALLERY . $imagen->getAttribute('imagen'));
            $imagen->delete();
        }

        return response()->json(true);
    }

    public function addProduct(ProductRequest $request) {

        $imageName = $this->addReplaceImage($request, self::LOGO_IMG, null, self::PATH_LOGO);

        $data = $request->all();
        $data[self::LOGO_IMG] = $imageName;
        Product::create($data);

        return redirect()->back();
    }

    public function deleteProduct($idProduct) {
        $product = Product::find($idProduct);

        if ($product) {
            File::delete(self::PATH_LOGO . $product->getAttribute(self::LOGO_IMG));
            $product->delete();
        }

        return response()->json(true);
    }

    public function editProduct(Request $request, $id) {

        $product = Product::find($id);

        if ($product) {

            $imageName = $this->addReplaceImage($request, self::LOGO_IMG, $product, self::PATH_LOGO);
            if ($imageName) {
                $product->logo_img = $imageName;
            }

            $product->fill($request->only(['name', 'desc']));
            $product->save();
        }

        return redirect()->back();
    }
}
