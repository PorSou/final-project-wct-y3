<?php

namespace App\Mail;

use App\Models\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentSuccessMail extends Mailable  // ← must match filename
{
    use Queueable, SerializesModels;

    public Payment $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function build(): self
    {
        $subject = $this->payment->status === 'Approved'
            ? 'RUPP Payment Approved ✅'
            : 'RUPP Payment Rejected ❌';

        return $this->subject($subject)
                    ->view('emails.payment-success');
    }
}