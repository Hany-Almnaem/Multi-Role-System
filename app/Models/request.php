<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request extends Model
{
    protected $table = 'requests'; // Specify the table name
    protected $fillable = ['user_id', 'status', 'details'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
