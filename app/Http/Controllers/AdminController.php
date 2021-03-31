<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\AdminNeed;
use \App\Models\AdminLesson;
use \App\Models\AdminBlog;
use \App\Models\Need;




class AdminController extends Controller
{
    public function blogekle()
    {
        return view('kblog-ekle');
    }

    public function ihtiyacindex()
    {
        $ihtiyac = AdminNeed::get();
        return view('kategoriler',compact('ihtiyac'));
    }



    public function ihtiyacekleme()
    {
        return view('kihtiyac-ekle');
    }


    public function bloggonder(Request $request)
    {
        $ablog= new AdminBlog();
        $ablog->name=$request->input('name');
        $ablog->content=$request->input('content');


        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
             // Get just filename
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
             $extension = $request->file('image')->getClientOriginalExtension();
             //Filename to store
             $fileNameToStore = $filename.'_'.time().'.'.$extension;
           // Upload Image
             $path = $request->file('image')->    storeAs('public/images', $fileNameToStore);
         } else {
             $fileNameToStore = 'noimage.jpg';
         }
         $ablog->image = $fileNameToStore;

        $ablog->save();
        return redirect()->route('ihtiyaclist');
    }
    public function blogindex()
    {
        $blog = AdminBlog::get();
        return view('blog',compact('blog'));
    }
    public function blogshow(AdminBlog $adminBlog)
    {
        return view('blog-detay',compact('adminBlog'));
    }




    public function ihtiyacgonder(Request $request)
    {
        $aihtiyac= new AdminNeed();
        $aihtiyac->name=$request->input('name');
        $aihtiyac->donate=$request->input('donate');


        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
             // Get just filename
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
             $extension = $request->file('image')->getClientOriginalExtension();
             //Filename to store
             $fileNameToStore = $filename.'_'.time().'.'.$extension;
           // Upload Image
             $path = $request->file('image')->    storeAs('public/images', $fileNameToStore);
         } else {
             $fileNameToStore = 'noimage.jpg';
         }
         $aihtiyac->image = $fileNameToStore;

         $aihtiyac->description=$request->input('description');

        $aihtiyac->save();
        return redirect()->route('ihtiyaclist');
    }




    public function ihtiyaclist()
    {
        $bloglist = AdminBlog::get();
        $derslist= AdminLesson::get();
        $ihtiyaclist = AdminNeed::get();
        return view('ihtiyac-liste',compact('ihtiyaclist','derslist','bloglist'));
    }


    public function ihtiyacsil($id)
    {
         $ihtiyacsil = AdminNeed::find($id);

         $ihtiyacsil->delete();
         return redirect()->route('ihtiyaclist');
    }
    public function derssil($id)
    {
         $derssil = AdminLesson::find($id);

         $derssil->delete();
         return redirect()->route('ihtiyaclist');
    }

    public function blogsil($id)
    {
        $blogsil =AdminBlog::where('id',$id)->firstOrFail();

        if ($blogsil != null) {
            $blogsil->delete();

            return redirect()->route('ihtiyaclist');
        }
    }

    public function dersekleme()
    {
        return view('kders-ekle');
    }

    public function dersgonder(Request $request)
    {
        $aders= new AdminLesson();
        $aders->name=$request->input('name');
        $aders->lesson=$request->input('lesson');
        $aders->time=$request->input('time');
        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
             // Get just filename
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
             $extension = $request->file('image')->getClientOriginalExtension();
             //Filename to store
             $fileNameToStore = $filename.'_'.time().'.'.$extension;
           // Upload Image
             $path = $request->file('image')->    storeAs('public/images', $fileNameToStore);
         } else {
             $fileNameToStore = 'noimage.jpg';
         }
         $aders->image = $fileNameToStore;



        $aders->save();

        return redirect()->route('ihtiyaclist');
    }
    public function dersindex()
    {
        $ders = AdminLesson::get();
        return view('kategori-ders',compact('ders'));
    }



}
