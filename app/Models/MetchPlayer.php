<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetchPlayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'metch_id',
        'team_id',
    ];

    protected $table = "metch_player";

    public function players()
    {
        return $this->hasMany(Player::class, "id", "player_id");
    }

    public function homeTeam()
    {
        return $this->belongsTo(Metch::class, "home", "id");
    }

    public function awayTeam()
    {
        return $this->belongsTo(Metch::class, "away", "id");
    }
}
