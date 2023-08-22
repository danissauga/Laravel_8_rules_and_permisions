<?php
  
namespace App\Mail;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
   
    public $data;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $product_data = Product::all();
        return $this->subject('Contact US - '. $this->data->subject)
                            ->view('emails.contact', ['products'=>$product_data]);


    //     if ($this->data->id == 1) {
    //             return $this->subject('Contact US - '. $this->data->subject)
    //                         ->view('emails.contact', ['products'=>$product_data]);
    //     }
    //     if ($this->data->id == 4) {
    //         return $this->subject('Contact US - '. $this->data->subject)
    //                     ->view('emails.ladders', ['products'=>$product_data]);
    // }


    }
}