@extends('layout.modele_pages_gest')

@section('content')
<article>
  <header class="section background-primary">
    <div class="line">
      <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Ajoutez une nouvelle salle</h1>
      
    </div>
  </header>
<div class="post">


    <form name="nouvelle_salle" method="post" action="{{route('salle.store')}}">
        {{csrf_field()}}



        <label for="numeroSalle"> Numero de Salle : </label>
        <input name="numeroSalle" type="text"></input>

        <label for="nom"> Nom : </label>
        <input name="nom" type="text"></input>

        
        <label for="capacite"> Capacité : </label>
        <input name="capacite" type="text"></input>
        
</div>


        <label for="equipements"> Equipements : </label>
        <input name="equipements" type="text"></input>

        <label for="services"> Services : </label>
        <input name="services" type="text"></input>

        <label for="batiment"> Batiment : </label>
        <input name="batiment" type="text"></input>

</div>

<div style="text-align:center;padding-top:50px">
    <input type="submit" value="Sauvegarder"></input>

</div>

</form>

</div>
@endsection