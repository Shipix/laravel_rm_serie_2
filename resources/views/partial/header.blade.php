<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href={{route('home')}}>Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ Request::is('page1') ? 'active' : '' }}">
          <a class="nav-link" href={{route('page1')}}>Page1</a>
        </li>
        <li class="nav-item {{ Request::is('page2') ? 'active' : '' }}">
          <a class="nav-link" href={{route('page2')}}>Page2</a>
        </li>
        <li class="nav-item {{ Request::is('page3') ? 'active' : '' }}">
          <a class="nav-link" href={{route('page3')}}>Page3</a>
        </li>
        <li class="nav-item {{ Request::is('page4') ? 'active' : '' }}">
          <a class="nav-link" href={{route('page4')}}>Page4</a>
        </li>
      </ul>
    </div>
  </nav>