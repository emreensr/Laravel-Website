<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Need;
use \App\Models\GetNeed;
use \App\Models\GetLesson;
use \App\Models\Lesson;
use \App\Http\Requests\NeedShareRequest;
use \App\Http\Requests\NeedLessonRequest;
use \App\Http\Requests\GetNeedRequest;
use \App\Http\Requests\GetLessonRequest;



class UserController extends Controller
{
    public function ihtiyacekle(){
        return view('ihtiyac-ekle');
    }

    public function ihtiyacstore(NeedShareRequest $request)
    {
        $ihtiyac= new Need();      
        $ihtiyac->name=$request->input('name');
        $ihtiyac->donate=$request->input('donate');
        $ihtiyac->contact=$request->input('contact');
        $ihtiyac->model=$request->input('model');
       
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
         $ihtiyac->image = $fileNameToStore;

        $ihtiyac->message=$request->input('message');
        $ihtiyac->howcontact=$request->input('howcontact');


        $ihtiyac->save();
        return redirect()->route('paylas')->withSuccess('Formunuz başarıyla gönderildi.');
    }

    public function ihtiyacedin(){
        return view('ihtiyac-edin');
    }

    public function edinpost(GetNeedRequest $request)
    {
        $ihtiyacedin= new GetNeed();      
        $ihtiyacedin->name=$request->input('name');
        $ihtiyacedin->product=$request->input('product');
        $ihtiyacedin->contact=$request->input('contact');
        $ihtiyacedin->message=$request->input('message');
        $ihtiyacedin->howcontact=$request->input('howcontact');

        $ihtiyacedin->save();
        return redirect()->route('edin')->withSuccess('Formunuz başarıyla gönderildi.');
    }

    
    public function dersedin(){
        return view('ders-edin');
    }

    public function dersedinpost(GetLessonRequest $request)
    {
        $dersedin= new GetLesson();      
        $dersedin->name=$request->input('name');
        $dersedin->lesson=$request->input('lesson');
        $dersedin->time=$request->input('time');
        $dersedin->contact=$request->input('contact');
        $dersedin->message=$request->input('message');
        $dersedin->howcontact=$request->input('howcontact');

        $dersedin->save();
        return redirect()->route('edin')->withSuccess('Formunuz başarıyla gönderildi.');
    }




  
    public function dersekle()
    {
     
        return view('ders-ekle');
    }

    public function dersstore(NeedLessonRequest $request)
    {
        $ders= new Lesson();      
        $ders->name=$request->input('name');
        $ders->lesson=$request->input('lesson');
        $ders->time=$request->input('time');
        $ders->contact=$request->input('contact');
        $ders->message=$request->input('message');
        $ders->howcontact=$request->input('howcontact');


        $ders->save();
        return redirect()->route('paylas')->withSuccess('Formunuz başarıyla gönderildi.');
    }
    
    public function ihtiyacindex()
    {
        $dersedin = GetLesson::paginate(5);
        $edin = GetNeed::paginate(5);
        $ders = Lesson::paginate(5);
        $ihtiyac = Need::paginate(5);    
        return view('panel',compact('ihtiyac','ders','edin','dersedin'));
    }

}
