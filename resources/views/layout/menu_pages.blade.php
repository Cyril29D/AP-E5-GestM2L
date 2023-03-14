  <!-- MENU -->
  <header role="banner" class="position-absolute">
    <!-- Top Navigation -->
    <nav class="background-transparent background-transparent-hightlight full-width sticky">
      <div class="s-12 l-2">
        <a href="{{route('home')}}" class="logo">
          <!-- Logo White Version -->
          <img class="logo-white" src="{{ asset('/img/logo_ligue.png') }}" alt="">
          <!-- Logo Dark Version -->
          <img class="logo-dark" src="{{ asset('/img/logo_ligue-dark.png') }}" alt="">
        </a>
      </div>
      <div class="top-nav s-12 l-10">

        <ul class="right chevron">
          <li><a href="{{route('home')}}">Accueil</a></li>
          <li><a href="{{route('ligues')}}">Nos ligues</a></li>
          <li><a>Plans</a>
            <ul>
              <li><a>Rez-de-chaussée général</a></li>
              <li><a>Etages</a></li>
              <li><a>Batîment A</a></li>
              <li><a>Batîment B</a></li>
              <li><a>Batîment C</a></li>              
              <li><a>Batîment D</a></li>
            </ul>
          </li>
          <li><a>La bibliothèque</a>
            <ul>
              <li><a href="{{route('ouvrage.index')}}">Ouvrages disponibles</a>
              <li><a href="{{route('home')}}">Evénements</a></li>
    
            </ul>
          </li>
          <li><a href="{{route('planning')}}">Planning</a></li>
          <li><a href="{{route('contact')}}">Nous contacter</a></li>

          <li class="bg-warning"><a href="{{route('admin-home')}}">Tableau de bord de gestion</a></li>
      </div>
    </nav>
  </header>