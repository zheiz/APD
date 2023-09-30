<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function adminnews()
    {
        return view('admin/adminnews');
    }

    public function create(array $data)
    {
        return DB::table('news')
        ->insert([
            'title' => $data['title'],
            'content' => $data['content'],
            'author' => $data['author'],
        ]);
    }

    public function post(Request $request)
    {  
        $data = $request->all();
        $check = $this->create($data);  
        return response()->json(["success"=>true]);
    }
}
