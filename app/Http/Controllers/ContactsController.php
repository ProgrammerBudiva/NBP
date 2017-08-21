<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

use App\Models\Messages;
use App\Services\MessagesService;

class ContactsController extends Controller
{

    public $messageService;

    public function __construct(MessagesService $messagesService)
    {
        $this->messageService = $messagesService;
    }

    public function index()
    {
        return view('contacts');
    }

    public function message(Request $request)
    {

        $email = $request->input('email');
        $phone = $request->input('phone');
        $name = $request->input('name');
        $message = $request->input('message');
        $diller = $request->input('diller');

        $this->messageService->saveMessage(array('name' => $name, 'email' => $email, 'phone' => $phone, 'message' => $message, 'diller' => $diller));


        Mail::send('mails.new_question', ['phone' => $phone, 'diller' => $diller, 'name' => $name, 'email' => $email, 'text' => $message], function ($message) {
            $message->from('info@nbp.net.ua', 'NBP');
            $message->to('19ofis96@mail.ru');
        });

        $returnHTML = view('layouts.popup')->render();
        return response()->json(['success' => 'true', 'html' => $returnHTML]);
    }
}
