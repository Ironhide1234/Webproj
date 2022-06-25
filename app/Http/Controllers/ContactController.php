<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller {

    public function submit(ContactRequest $req){
    /*    $validation = $req->validate([
            'phone_num' => 'required|min:13|max:13',
            'name' => 'required|min:3|max:50'
        ]);*/
        echo "Ваша форма была отправлена успешно";
    }

}
