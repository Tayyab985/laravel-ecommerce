<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResellerDocument extends Model
{
    use HasFactory;
    protected $fillable=['user_id','documents','ein'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
