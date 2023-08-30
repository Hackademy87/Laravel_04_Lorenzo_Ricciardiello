
<x-layout>
    <x-slot name="title" >Home Page</x-slot>


    <h1>Selezionati da noi</h1> 
    <div class="container">
        <div class="row">

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
    














    
</x-layout>