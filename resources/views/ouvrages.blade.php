<!--La page suit le modèle de page "modele_pages.blade.php"-->
@extends('layout.modele_pages')

<!-- Commence ici le corps de la page -->
@section('content')


<!-- Content -->

<article>
  <header class="section background-dark">
    <div class="line">
      <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Les ouvrages</h1>
      <p class="margin-bottom-0 text-size-16">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
    </div>
  </header>


  <section class="section-top-padding full-width">
    <h2 class="text-size-50  text-m-size-40 text-center">Genres littéraires</h2>
    <hr class="break-small background-primary break-center">
    <div class="tabs background-primary-hightlight">


      @foreach ($lescategories as $categ)

      <div class="tab-item tab-active">
        <a class="tab-label">{{$categ->type}}</a>
        <div class="tab-content lightbox-gallery">

          @foreach ($leslivres as $livre)
          @if($livre->type===$categ->type)

          <div class="s-12 m-6 l-3">
            <a class="image-with-hover-overlay image-hover-zoom" href="{{asset($livre->urlImage)}}">
              <div class="image-hover-overlay background-primary">
                <div class="image-hover-overlay-content text-center padding-2x">
                  <h2 class="text-thin">{{$livre->titre}}</h2>
                  <p>{{$livre->auteur}}</p>
                </div>
              </div>
              @if($livre->urlImage===NULL)
              <img src="{{asset('/img/couvertures/livre.png')}}" alt="" title="{{$livre->titre}}" />
              @else
              <img src="{{asset($livre->urlImage)}}" alt="" title="{{$livre->titre}}" />
              @endif
            </a>
          </div>

          @endif
        
        @endforeach
        </div>
      </div>

      @endforeach

    </div>
  </section>

</article>
<!-- termine le corps de la page -->
@endsection