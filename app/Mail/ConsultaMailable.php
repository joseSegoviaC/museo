<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConsultaMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Consultas";
    public $email;
    public $text;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$name,$text)
    {
        $this->email = $email;
        $this->name = $name;
        $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
                    ->to('jose.segovia@usil.pe')
                    ->view('consultas')
                    ->with([
                        'name'=>$this->name,
                        'text'=>$this->text,
                        'email'=>$this->email
                    ]);
    }
}
