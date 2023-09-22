<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metch extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'home',
        'away',
        'scheduled_at',
        'result'
    ];

    public function awayTeam()
    {
        return $this->hasOne(Team::class, 'id', "away");
    }
    public function homeTeam()
    {
        return $this->hasOne(Team::class, 'id', "home");
    }

    public function players()
    {
        return $this->belongsToMany(Player::class)->wtith('homeTeam', 'awayTeam');
    }

}
