<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Timer extends Component
{
    public Project $project;


    public function render()
    {
        $diff = now()->diff($this->project->ends_at);

        return view('livewire.projects.timer', [
            'days' => $diff->days,
            'hours' => $diff->hours,
            'minutes' => $diff->minutes,
            'seconds' => $diff->seconds
        ]);
    }
}
