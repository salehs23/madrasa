<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class DataModel extends Model
{
    use HasFactory;
    
    public function getmenu(){

       $menu=DB::select('SELECT main_menu, txt_icon_name, txt_function  FROM menu where status =?',['1']); 
       $submenu=DB::select('SELECT sub_menu FROM menu where sub_menu_status =?',['1']);

       return ['menu' =>$menu, 'submenu' => $submenu];

    }
}
