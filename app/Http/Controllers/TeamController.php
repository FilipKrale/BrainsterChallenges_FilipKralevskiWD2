<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use App\Models\Metch;
use App\Models\Player;
use App\Models\MetchPlayer;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();


        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {

        Team::create(
            $request->all()
        );

        return redirect()
            ->route('team.index')
            ->with('success', "Team created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $players = Player::where('team_id', $team->id)->get();

        return view('teams.show', compact('players', 'team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {

        return view('teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param   \App\Http\Requests\TeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, Team $team)
    {
        $team->update(
            $request->all()
        );
        return redirect()
            ->route('team.index')
            ->with('success', "Team updated");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $unplayedMatches = Metch::whereRaw("(home = {$team->id} OR away = {$team->id})")
            ->where('result', "NULL")
            ->get()
            ->toArray();

        if ($unplayedMatches)
            return redirect()->route('team.index')->with("error", "Team has unplayed matches can't be deleted");

        $team->delete();

        return redirect()
            ->route('team.index')
            ->with('success', "Team deleted");
    }
}
