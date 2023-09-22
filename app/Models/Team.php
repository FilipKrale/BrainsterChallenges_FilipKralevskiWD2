<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'founded',
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function homeMatches()
    {
        return $this->hasMany(Metch::class, 'home', 'id');
    }
    public function awayMatches()
    {
        return $this->hasMany(Metch::class, 'away', 'id');
    }
}
