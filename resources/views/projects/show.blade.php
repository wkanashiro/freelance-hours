<x-layouts.app>
    <livewire:projects.show :project="$project" />

    <livewire:projects.proposals :$project />
</x-layouts.app>
<!-- 
<div>
    <pre>
        @dd(request()->route('project')) 
        Traz o componente
</pre>
</div>
-->
