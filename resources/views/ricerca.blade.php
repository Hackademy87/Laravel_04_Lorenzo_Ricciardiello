<x-layout>
<x-slot name="title" >Home Page</x-slot>

    <div class="container my-5">
        <div class="row">
        <h2>Risultato della ricerca: {{ $valoreRicercato }}</h2> 
        </div>
        <div class="row">
            @if(count($films) > 0)
        @foreach ($films as $film)
            <div class="col-12 col-md-3">
            <x-card
            filmFoto="{{ $film['foto']}}"
            filmTrama="{{ $film['trama']}}"
            filmTitolo="{{ $film['titolo']}}"
            />
            </div>
            @endforeach
            </div>
            </div>
@else
<div class="col-12">
    <p>Nessun film trovato</p>
</div>
@endif

</x-layout>