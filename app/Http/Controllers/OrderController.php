<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
 public function show($date,$num){

    return view('show',compact('date','num'));
 }

 public function home(){

    return view('site.home');
 }

 public function about(){

    return view('site.about');
 }

 public function produit(){

    return view('site.produit');
 }
 public function contact(){
    return view('site.contact');
 }

 public function save(Request $request){
    $sujet=$request->input('sujet');
    //dd($sujet);
    $contact=$request->all();
    //dd($contact);
    return view('site.save',compact('contact'));
 }
}
