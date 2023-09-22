<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerRequest;
use App\Models\Metch;
use App\Models\MetchPlayer;
use App\Models\Team;
use App\Models\Player;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Carbon $carbon)
    {
        $players = Player::all()->fresh('team');


        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();

        return view('players.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PlayerRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerRequest $request)
    {
        $createdPlayer = Player::create($request->all());

        if ($createdPlayer)
            return redirect()->route("player.create")->with('success', "PLayer {$request->name}  {$request->surname} created");


        return redirect()->route("player.create")->with('error', "Something went worng!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        $playerInfo = $player->with('matches', "team")->find($player->id);

        return view("players.show", compact('playerInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $teams = Team::all();

        return view('players.edit', compact("player", "teams"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PlayerRequestRequest  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(PlayerRequest $request, Player $player)
    {
        $unplayedMatches = Metch::whereRaw("(home = {$player->team_id} OR away = {$player->team_id})")
            ->where('result', "NULL")
            ->get()
            ->toArray();
    
        if ($unplayedMatches && ($request->team_id != $player->team_id)) 
            return redirect()->route('player.index', $player->id)->with('error', "Player has active matches  cannot change team at this stage.");
 
        $player->update(
            $request->all()
        );
        return redirect()->route('player.index', $player->id)->with('success', "Player  updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        $match = MetchPlayer::where("player_id", $player->id)->delete();

        $playerDeleted =  Player::find($player->id)->delete();

        if ($playerDeleted)
            return redirect()->route("player.index")->with('success', "Player {$player->name} {$player->surname} deleted");

        return redirect()->route("player.index")->with('error', "Something went wrong!!!");
    }
}
