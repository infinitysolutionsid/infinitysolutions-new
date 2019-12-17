<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailDB extends Model
{
    protected $table = 'emaillist';
    protected $primaryKey = 'email_id';
    protected $fillable = ['email_id', 'nama_pengirim', 'email', 'subject', 'messages', 'logIp'];
}
