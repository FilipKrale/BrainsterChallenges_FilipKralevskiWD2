<?php

namespace App\Console\Commands;

use App\Models\Metch;
use Illuminate\Console\Command;

class PlayMatches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play:matches';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give a result to unplayed matches from the last 24H.';

    /**
     * The Metch model for matches
     * 
     * @var \App\Models\Metch
     */
    protected $match;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Metch $match)
    {
        parent::__construct();

        $this->match = $match;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now =  now()->format("Y-m-d");
        $unplayedMatches = $this->match->whereRaw("(`result` = 'NULL') AND (`scheduled_at` < NOW())")
            ->get();

        if ($unplayedMatches->toArray()) {
            $unplayedMatches->each(function ($match) {
                $match->update([
                    'result' => rand(0, 5) .  "-" . rand(0, 5),
                ]);
            });
        }

        return $this->line($unplayedMatches);
    }
}
