<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class IndexController extends Controller
{
    
     public function showIndex()
    {
         
         return view('index');
    }
      
    
}


/*<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    
     public function showIndex()
    {
         
         return view('index');
    }
    
    
    
}*/
