@php
  $navbar_links = config('navbar')
@endphp

<header>
  <div class="container">
    <figure>
      <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo">
  </figure>
  <nav>
    <ul>
      @foreach($navbar_links as $link)        
        <li>
          <a 
            href={{ route($link['url'])}}
            {{ Route::is($link['url']) ? 'class=active' : ''}}
          >
            {{ $link['text']}}
          </a>
      </li>
      @endforeach
    </ul>
  </nav>
  </div>
</header>