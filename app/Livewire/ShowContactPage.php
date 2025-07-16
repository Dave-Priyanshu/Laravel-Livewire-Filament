<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShowContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

  protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:5'
    ];

    public function submit(){
        $this->validate();
        $mailData = [
            'subject'=> 'You have received a New mail',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];
        Mail::to('testpd@gmail.com')->send(new ContactEmail($mailData));

        session()->flash('success','Mail sent');
        $this->redirect('/contact');
    }

    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
