<?php

namespace App\Http\Controllers;


use App\Models\Team;
use App\Models\Metch;
use Illuminate\Http\Request;
use App\Http\Requests\NewMatchRequest;
use App\Models\MetchPlayer;
use App\Models\Player;
use Illuminate\Database\Eloquent\Collection;

class MetchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Metch::where('result', "!=", "NULL")
            ->with('awayTeam', "homeTeam")
            ->get();

        $unplayed_matches = Metch::where('result', "NULL")
            ->with('awayTeam', "homeTeam")
            ->get();

        return view('matches.index', compact('matches', 'unplayed_matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('matches.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\NewMatchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewMatchRequest $request)
    {
        $homePlayers =  Player::where("team_id", $request->home)->get();
        $awayPlayers =  Player::where("team_id", $request->away)->get();
        $match = Metch::create($request->all());

        $homeMatches = $this->assignPlayerstoMatch($homePlayers, $match);
        $awayMatches = $this->assignPlayerstoMatch($awayPlayers, $match);

        $matchesPlayers = array_merge($homeMatches, $awayMatches);

        MetchPlayer::insert(
            $matchesPlayers
        );

        return redirect()
            ->route('match.create')
            ->with('succes', "Succesfuly booked match for {$request->scheduled_at}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metch $match
     * @return \Illuminate\Http\Response
     */
    public function edit(Metch $match)
    {
        $teams = Team::all();

        return view('matches.edit', compact('match', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\NewMatchRequest  $request
     * @param  \App\Models\Metch $match
     * @return \Illuminate\Http\Response
     */
    public function update(NewMatchRequest $request, Metch $match)
    {
        $homePlayers =  Player::where("team_id", $request->home)->get();
        $awayPlayers =  Player::where("team_id", $request->away)->get();
        $match->update(
            $request->all()
        );
        // dd($match);
        $homeMatches = $this->assignPlayerstoMatch($homePlayers, $match);
        $awayMatches = $this->assignPlayerstoMatch($awayPlayers, $match);

        $matchesPlayers = array_merge($homeMatches, $awayMatches);

        MetchPlayer::where('metch_id', $match->id)
            ->delete();

        MetchPlayer::insert(
            $matchesPlayers
        );

        return redirect()
            ->route('match.index')
            ->with('success', "Match Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metch $match)
    {
        $a = MetchPlayer::where('metch_id', $match->id)
            ->delete();

        $match->delete();

        return redirect()
            ->route("match.index")
            ->with("success", "Match deleted");
    }

    /**
     * Return an array of players  for the given match
     *  
     * @param Collection  $players
     * @param Metch   $match 
     * 
     * @return array  
     */
    private function assignPlayerstoMatch(Collection $players, Metch $match): array
    {
        $matchesPlayers = [];
        $players->each(function ($player) use ($match, &$matchesPlayers) {
            $arr = [
                "player_id" => $player->id,
                "metch_id" => $match->id,
                "team_id" => $player->team_id
            ];
            array_push($matchesPlayers, $arr);
        });
        return $matchesPlayers;
    }
}
