<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use Mail;
use App\Category;

class PagesController extends Controller {
    public function getIndex() {
        $posts = Post::orderBy('created_at', 'asc')->limit(5)->get();
        $post1 = Post::orderBy('created_at', 'desc')->limit(3)->get();
        $categories = Category::all();
        return view('pages/welcome')->withPosts($posts)->withPost1($post1)->withCategories($categories);
    }
    
    public function getAbout() {
        
//        print_r($data);exit;
        return view('pages/about');
    }
    
    public function getContact() {
        return view('pages.contact');
    }
    public function postContact(Request $request){
        $this->validate($request, array(
        'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
                ));
        
        $data = array(
          'email' => $request->email,
          'subject' => $request->subject,
          'bodyMessage' => $request->message
        );
        
        mail::send('emails.contact',$data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('kiran.naik@neosofttech.com');
            $message->subject($data['subject']);
        }
            );
    }
            
}

