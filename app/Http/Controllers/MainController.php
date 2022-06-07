<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Review;

class MainController extends Controller {

    public function pets(){
        $pets = new Pet();
        $data = $pets->getPets();
        return view('pets', ['data'=>$data]);
    }

    public function home(){
        $pets = new Pet();
        $data = $pets->getPets();
        $reviews = new Review();
        $data2 = $reviews->getReviews();
        return view('home', ['data'=>$data, 'data2'=>$data2]);
    }

    public function contacts(){
        return view('contacts');
    }

    public function help(){
        return view('help');
    }

    public function pet($pet){
        $pets = new Pet();
        $pet = $pets->getByName($pet);
        return view('pet', compact('pet'));
    }

    public function feedback(Request $req) {
        $req->validate([
            'name' =>  'required',
            'email' =>  array('required', 'regex:/[0-9a-z]+@[a-z]/'),
            'phone' =>  array('required', 'regex:/^(0|\+380)\d{9}$/')
        ]);
        $name = $req->input('name');
        return view('feedback', ['name' => $name]);
    }
}
