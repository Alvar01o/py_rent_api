<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\User;

class HouseInformation extends Model
{
    use HasFactory, InteractsWithMedia;
    protected  $table = 'house_information';
    protected $fillable = [
        'real_state_id',
        'description',
        'status',
        'price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
