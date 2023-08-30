<x-layout>
<x-slot name='title'>
contatti
</x-slot>
<div class="container">
<div class="row">
<div class="col-12 my-4">
<h3>Contattaci</h3>
<h4>Consigliaci dei titoli</h4>

<form action="{{route('contatto.nuovo')}}" method="POST">
@csrf
<div class="mb-3">
<label class="form-label">Titolo Film</label>
<input type="text" name="titolo" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Regista</label>
<input type="text" name="regista" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Trama</label>
<textarea class="form-control" name="trama" cols="30" rows="10"></textarea>
</div>
<button type="submit" class="btn btn-primary">invia</button>
</form>

</div>
</div>
</div>







</x-layout>