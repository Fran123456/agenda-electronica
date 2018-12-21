<?php

namespace App\Http\Controllers\Email;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->titulo = 'Demo One Value';
        $objDemo->yeti = 'Demo Two Value';
        $objDemo->path  = 'yeti.png';
        $objDemo->data ='It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like readable English.';
        $objDemo->sender = 'Support';
        $objDemo->receiver = 'Frank';
 
        Mail::to("navasfran98@gmail.com")->send(new Email($objDemo));
    }
}
