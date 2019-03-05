<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        $list = DB::select('SELECT * FROM product');
//        dd($list);
        return view('products.products', ['products'=>$list]);
    }

    public function product($id){
                $product = DB::select('SELECT * FROM product WHERE ID_product = ? ',[$id]);
//                dd($product);
                return view('products.product')
                    ->with(['product'=>$product[0]]);


    }
}

