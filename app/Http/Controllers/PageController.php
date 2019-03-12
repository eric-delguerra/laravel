<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Promo;
class PageController extends Controller
{



public $board = [
    'eric' => [
                'name' => 'Éric',
                'link' => '/contacts/eric',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed tellus sapien, imperdiet eu aliquam eget, eleifend et ex.
                            Mauris vel scelerisque felis. Etiam odio est, varius eget tincidunt et,
                            imperdiet ac urna. Maecenas non arcu quis arcu congue ultrices. Vestibulum
                            dui orci, egestas id est id, ullamcorper porta arcu. Morbi ornare massa vel
                            tortor dignissim sodales. Cras ac orci elementum quam rutrum varius in ac
                            quam. Ut augue eros, blandit sit amet ullamcorper sed, imperdiet sit amet
                            ex. Cras non eleifend magna, vel placerat quam. ',
                'tel' => '0505050505',
                'mail' => 'Exemple@mail.com'
            ],
    'melanie' => [
                    'name' => 'Melanie',
                    'link' => '/contacts/mel',
                    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed tellus sapien, imperdiet eu aliquam eget, eleifend et ex.
                            Mauris vel scelerisque felis. Etiam odio est, varius eget tincidunt et,
                            imperdiet ac urna. Maecenas non arcu quis arcu congue ultrices. Vestibulum
                            dui orci, egestas id est id, ullamcorper porta arcu. Morbi ornare massa vel
                            tortor dignissim sodales. Cras ac orci elementum quam rutrum varius in ac
                            quam. Ut augue eros, blandit sit amet ullamcorper sed, imperdiet sit amet
                            ex. Cras non eleifend magna, vel placerat quam. ',
                    'tel' => '0505050505',
                    'mail' => 'Exemple@mail.com'
                 ],
    'christophe' => [
                    'name' => 'Christophe',
                    'link' => '/contacts/christophe',
                    'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed tellus sapien, imperdiet eu aliquam eget, eleifend et ex.
                            Mauris vel scelerisque felis. Etiam odio est, varius eget tincidunt et,
                            imperdiet ac urna. Maecenas non arcu quis arcu congue ultrices. Vestibulum
                            dui orci, egestas id est id, ullamcorper porta arcu. Morbi ornare massa vel
                            tortor dignissim sodales. Cras ac orci elementum quam rutrum varius in ac
                            quam. Ut augue eros, blandit sit amet ullamcorper sed, imperdiet sit amet
                            ex. Cras non eleifend magna, vel placerat quam. ',
                    'tel' => '0505050505',
                    'mail' => 'Exemple@mail.com'
                    ],
    'cedric' => [
                'name' => 'Cedric',
                'link' => '/contacts/cedric',
                'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed tellus sapien, imperdiet eu aliquam eget, eleifend et ex.
                            Mauris vel scelerisque felis. Etiam odio est, varius eget tincidunt et,
                            imperdiet ac urna. Maecenas non arcu quis arcu congue ultrices. Vestibulum
                            dui orci, egestas id est id, ullamcorper porta arcu. Morbi ornare massa vel
                            tortor dignissim sodales. Cras ac orci elementum quam rutrum varius in ac
                            quam. Ut augue eros, blandit sit amet ullamcorper sed, imperdiet sit amet
                            ex. Cras non eleifend magna, vel placerat quam. ',
                'tel' => '0505050505',
                'mail' => 'Exemple@mail.com'
                ]
];

    public function index()
    {
        return view('welcome');
    }



    public function contact($id)
    {

        if ($id == "eric") {
            return view('contacts/contact-fiche')
                ->with(['contacts'=>$this->board['eric']]);
        }
      elseif ($id == "christophe") {
            return view('contacts/contact-fiche')
                    ->with(['contacts' => $this->board['christophe']]);
      }
        elseif ($id == "mel") {
            return view('contacts/contact-fiche')
                ->with(['contacts' => $this->board['melanie']]);
        }
      elseif ($id == "cedric") {
          return view('contacts/contact-fiche')
              ->with(['contacts' => $this->board['cedric']]);
      }
      else {

            return view('contacts/ListContact');
      }
    }
    public function contacts()
    {
        return view('contacts.ListContact')
                ->with(['contacts'=>$this->board]);
    }

    public function connect(){

    }

    public function products(){
        $products = DB::select('SELECT * FROM product');
//        $products = Product::all();
        return view('products.products')
            ->with(['products'=>$products]);
    }

    public function prodName(){
        $products = Product::orderBy("name")->get();
        return view('products.products')
            ->with(['products'=>$products]);
    }

    public function prodPice(){
        $products = Product::orderBy("price")->get();
        return view('products.products')
            ->with(['products'=>$products]);
    }

    public function product($id){
                $product = Product::where('id', $id)->get();
//        dd(Product::find($id)->promo);
        $promo = Product::find($id)->promo;

        return view('products.product')
                    ->with(['product'=>$product[0]])
                    ->with(['promo'=>$promo]);
    }

    public function productAdd(Request $request){

        $product = new Product();
        $data =[
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'weigth' => $request->input('weigth'),
                'stock' => $request->input('stock'),
                'ID_category' => $request->input('Category')
        ];
        $product->fill($data);

        $product->save();

        return redirect('/products/edit/');
    }

    public function productsEdit(Request $request){
        $products = Product::all();
        return view('admin.editProducts')
            ->with(['products'=>$products]);


    }

    public function productEdit($id){
        $product = Product::where('id', $id)->get();
        return view('admin.editProduct')
            ->with(['product'=>$product[0]]);

    }

    public function productUpdate($id, Request $request){

        $product = Product::find($id);
//        dump($product);
        $data =[
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'weigth' => $request->input('weigth'),
            'stock' => $request->input('stock'),
            'ID_category' => $request->input('Category')
        ];
        $product->fill($data);
        $product->save();
        $products = Product::all();
        return redirect("/product/edit/$id")
            ->with(['product'=>$products]);

    }

    function productErase($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products/edit/')
            ->with('jsAlert', 'Produit Supprimer');
    }
}

