<div class="grid grid-cols-2 gap-4">
   @foreach ($this->projects as $project)

   <li class="list-none">

      <a href="{{route('projects.show', $project)}}">
       <x-projects.simple-card :$project />
      </a>

   </li>

   @endforeach
   
</div>
