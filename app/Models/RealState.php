<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use App\Models\HouseInformation;
use App\Models\RealStateType;

class RealState extends Model
{
    use HasFactory, InteractsWithMedia;

    protected  $table = 'real_state';
    protected $fillable = [
        'name',
        'user_id',
        'active',
    ];

    public function houses()
    {
        return $this->hasMany(HouseInformation::class);
    }

    public function type()
    {
        return $this->hasOne(RealStateType::class);
    }

}
