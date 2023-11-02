<header>
    <!-- Fixed navbar -->

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="#">
      <img src="/images/profile.png" class="img-fluid" alt="" width="50%" >
    </a>

    <div class="container">

    <a class="navbar-brand" href="/">Dasboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link  @yield('navHome')" href="/home" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('navSis')" href="{{url('siswa')}}">Siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('navGuru')" href="{{url('guru')}}">Guru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('kelas')}}">Kelas</a>
            </li>
          </ul>


          <ul class="navbar-nav ms-auto mb-2 mb-md-0">

            @auth
            <li class="nav-item">
              <form action="/logout" method="post">
                @csrf
                <button class="link-primary" type="submit">Logout</button>
              </form>
            </li>

            @else
            <li class="nav-item">
              <a class="nav-link  @yield('login')" href="/login">Login</a>
            </li>
            @endauth

          </ul>

        </div>
      </div>
    </nav>
  </header>
