<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

<a class="navbar-brand" href="#">
      <img src="/images/logo1.jpg" alt="Bootstrap"  width=213
    height=100>
    </a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success badge text-bg-secondary" type="submit">Search</button>
      </form> -->
    <div class="navbar-nav">

      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button class="badge text-bg-secondary" type="submit">Logout</button>
        </form>


      </div>
    </div>
  </header>
