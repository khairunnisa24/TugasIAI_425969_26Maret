<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class TaskController extends Controller
{
    public function pangkatdua(){
    $data['bilangan pangkatdua'] = [];
    for($n = 1; $n< 41; $n++){
    $hasil = ($n * $n) ; 
    $data['bilangan pangkatdua'][] = $hasil ;    
}
    return response()->json($data);
}

}