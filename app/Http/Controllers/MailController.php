<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\RegisterEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {

    public function send() {

        Mail::to('zahiryusof92@gmail.com')->send(new RegisterEmail());
    }

}
