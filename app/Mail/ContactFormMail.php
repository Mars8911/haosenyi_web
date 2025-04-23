<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('新視野網頁設計 - 聯絡表單通知')
                    ->view('emails.contact')
                    ->with([
                        'name' => $this->data['name'],
                        'phone' => $this->data['phone'],
                        'email' => $this->data['email'],
                        'company' => $this->data['company'] ?? '未提供',
                        'plan' => $this->data['plan'] ?? '未選擇',
                        'message' => $this->data['message']
                    ]);
    }
} 