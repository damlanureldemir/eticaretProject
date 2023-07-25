<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function contactstore(ContentFormRequest $request){
        /*
        $validationdata= $request->validate([
            'name'=>'required|string|min:3',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ],[
            'name.required'=>'İsim Soyisim zorunlu!!',
            'name.string'=>'İsim Soyisim karakterlerden oluşmalı!!',
            'name.min'=>'İsim Soyisim minimum 3 karakterden oluşmalı!!',
            'email.required'=>' Email zorunlu!!',
            'email.email'=>'Geçersiz bir email adresi!!',
            'subject.required'=>'Konu zorunlu!!',
            'message.required'=>'mesaj zorunlu!!',
            ]);
        */
        $data=$request->all();
        $data['ip']=request()->ip();
        $sonkaydedilen=Contact::create($data);
        $sonkaydedilen->save();
        return redirect()->back()->with(['success'=>'Başarıyla gönderildi']);
    }
}
