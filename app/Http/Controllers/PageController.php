<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('/welcome');
    }

    public function contact($id)
    {
        if ($id == "eric") {
            $board = [
                [
                    'name' => 'Eric',
                    'link' => '/contacts/eric'
                ],
                [
                    'name' => 'Melanie',
                    'link' => '/contacts/mel'
                ],
                [
                    'name' => 'Christophe',
                    'link' => '/contacts/christophe'
                ],
                [
                    'name' => 'Cedric',
                    'link' => '/contacts/cedric'
                ]
            ];

            return view('contacts/contact-eric', [
                'contacts' => $board
            ]);
        }
      elseif ($id == "christophe") {
          $board = [
              [
                  'name' => 'Eric',
                  'link' => '/contacts/eric'
              ],
              [
                  'name' => 'Melanie',
                  'link' => '/contacts/mel'
              ],
              [
                  'name' => 'Christophe',
                  'link' => '/contacts/christophe'
              ],
              [
                  'name' => 'Cedric',
                  'link' => '/contacts/cedric'
              ]
          ];
            return view('contacts/contact-christophe', [
                'contacts' => $board
            ]);
      }
        elseif ($id == "mel") {
            $board = [
                [
                    'name' => 'Eric',
                    'link' => '/contacts/eric'
                ],
                [
                    'name' => 'Melanie',
                    'link' => '/contacts/mel'
                ],
                [
                    'name' => 'Christophe',
                    'link' => '/contacts/christophe'
                ],
                [
                    'name' => 'Cedric',
                    'link' => '/contacts/cedric'
                ]
            ];
            return view('/contacts/contact-mel', [
                'contacts' => $board
            ]);
        }
      elseif ($id == "cedric") {
          $board = [
              [
                  'name' => 'Eric',
                  'link' => '/contacts/eric'
              ],
              [
                  'name' => 'Melanie',
                  'link' => '/contacts/mel'
              ],
              [
                  'name' => 'Christophe',
                  'link' => '/contacts/christophe'
              ],
              [
                  'name' => 'Cedric',
                  'link' => '/contacts/cedric'
              ]
          ];
            return view('/contacts/contact-cedric', [
                'contacts' => $board
            ]);
      }
      else {

            return view('/welcome');
      }
    }
    public function contacts()
    {
        $board = [
            [
                'name' => 'Eric',
                'link' => '/contacts/eric'
            ],
            [
                'name' => 'Melanie',
                'link' => '/contacts/mel'
            ],
            [
                'name' => 'Christophe',
                'link' => '/contacts/christophe'
            ],
            [
                'name' => 'Cedric',
                'link' => '/contacts/cedric'
            ]
        ];
        return view('contacts.ListContact', [
            'contacts' => $board
        ]);
    }

    public function connect(){

    }
}

