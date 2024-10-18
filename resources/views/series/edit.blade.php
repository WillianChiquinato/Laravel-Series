<x-layout title="Editar Série '{!! $serie->nome !!}'">
    <!-- Aqui foi bastante resumido por conta do layout, mas so modifiquei a forma de como o forms se comportava usando o metodo update no controller -->
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" :update="true" />
</x-layout>