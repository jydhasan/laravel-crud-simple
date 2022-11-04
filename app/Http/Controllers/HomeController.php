<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class HomeController extends Controller
{
    public function home(){
        $data=home::all();
        // echo $data;
        return view('home',['data'=>$data]);
    }
    // public function delete($id){
    //     $data=home::find($id);
    //     return view('home',['data'=>$data]);
    // }
        public function oneview($id){
            $data=home::find($id);
            $data->delete();
            return redirect('home');
            // $data=$id;
    }
    public function register(Request $request){
        // print_r($request->all());
        // echo $request;
        $home = new home;
        $home->fname = $request->input('fname');
        $home->lname = $request->input('lname');
        $home->address = $request->input('address');
        $home->save();
        return redirect('home');
    }
}
