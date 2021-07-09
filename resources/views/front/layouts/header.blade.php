<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="/">
          <img src="{{ asset(custom_config('logo')->value)}}" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Hamburger_icon_white.svg/1024px-Hamburger_icon_white.svg.png" alt="">

      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Members Directory
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('member.list')}}">Members</a></li>
              <li><a class="dropdown-item" href="{{ route('member.board')}}">Board Members</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('about')}}">About Us </a>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Media Center
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('gallery')}}">Gallery</a></li>
              <li><a class="dropdown-item" href="{{ route('videos')}}">Videos</a></li>
              <li><a class="dropdown-item" href="{{ route('download')}}">Downloads</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news.list')}}">News </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('event.list')}}">Events </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact')}}">Contact </a>
          </li>
          @if ($menuCount>0)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pages
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($menu as $m)
                        <li>
                            <a class="dropdown-item" href="{{ route('page',$m->id)}}">{{ $m->title}} </a>
                        </li>
                @endforeach
                </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
