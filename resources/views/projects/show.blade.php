<x-layouts.app>
    <div class="grid grid-cols-3 gap-6">
        <livewire:projects.show :project="$project" />

        <livewire:projects.proposals :$project />
    </div>
</x-layouts.app>
<!-- 
<div>
    <pre>
        @dd(request()->route('project')) 
        Traz o componente
</pre>
</div>
-->
