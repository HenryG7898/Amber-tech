<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ViewStudent extends Controller
{
    public function studentinfo($id)
    {
        $data = User::where('id', $id)->get();
        return view('Admin.ViewInfo',['data'=>$data]);
    }
}
