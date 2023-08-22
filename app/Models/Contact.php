<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;
  
    public $fillable = ['name', 'email', 'phone', 'subject', 'message'];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
       
//originalus kodas              
          //  $adminEmail = "sigitas@danis.lt";
          //  Mail::to($adminEmail)->send(new ContactMail($item));

//naudojama dabar is formos email

            Mail::to($item->email)->send(new ContactMail($item));
        });
    }
}