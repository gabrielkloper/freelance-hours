<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;

class Proposals extends Component
{
   public Project $project;

   
   public int $qty = 5;
   #[Computed()]
   public function proposals()
   {
      //  return $this->project->proposals()
      //  ->orderByDesc('hours')
      //  ->limit($this->qty)
      //  ->get();

      return $this->project->proposals()
      ->orderBy('hours')
      ->paginate($this->qty);
   }

   #[Computed()]
   public function lastProposalTime()
   {
      return $this->project->proposals()
      ->latest()
      ->first()->created_at->diffForHumans();
   }

   public function loadMore()
   {
       $this->qty += 5;
   }

   #[On('proposal::created')]
   public function render()
   {
       return view('livewire.projects.proposals', [
           'proposals' => $this->project->proposals,
       ]);
   }
}
