<?php

namespace App\Models;

use App\Models\Team;
use App\Models\Metch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'birth_date',
        'team_id',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function matches()
    {
        return $this->belongsToMany(Metch::class)->withPivot('team_id')->with('homeTeam' , "awayTeam");
    }
}
