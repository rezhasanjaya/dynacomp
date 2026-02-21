<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $table = 'contact_messages';
    protected $guarded = ['id'];

    protected $fillable = [
        'uuid',
        'name',
        'email',
        'project_type',
        'message',
    ];
}
