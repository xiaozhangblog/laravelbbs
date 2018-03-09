<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-03-09
 * Time: 10:33
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
    public function root(){
      //  echo  base_path().'/bootstrap/helpers.php';
        return view('pages.root');
    }
}