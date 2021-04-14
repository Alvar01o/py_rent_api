<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\HouseInformation;

class HouseDetails extends Model
{
    use HasFactory, InteractsWithMedia;
    protected  $table = 'house_details';
    protected $fillable = [
        'house_information_id',
        'rooms',
        'kitchen',
        'bathrooms',
        'user_id'
    ];

    public function House()
    {
        return $this->belongsTo(HouseInformation::class);
    }

}
