<?php

namespace Jebpkgs\ContactUs\Model;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}
