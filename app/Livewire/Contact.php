<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
#[Title('Contact | METRACO')]
class Contact extends Component
{
  public $name = '';
  public $email = '';
  public $company = '';
  public $message = '';
  public $successMessage = null;

  protected $rules = [
    'name' => 'required|min:2',
    'email' => 'required|email',
    'company' => 'nullable|string',
    'message' => 'required|min:10',
  ];

  public function submit(): void
  {
    $this->validate();

    Mail::to(config('mail.from.address'))->send(new ContactMail(
      $this->name,
      $this->email,
      $this->company,
      $this->message
    ));

    $this->successMessage = 'Thank you for your message. We will get back to you soon!';
    $this->reset(['name', 'email', 'company', 'message']);
  }

  public function render()
  {
    return view('livewire.contact.contact');
  }
}
