<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/home">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('add') ? 'active' : '' }}" href="/add">
              <span data-feather="file" class="align-text-bottom"></span>
              Tambah Data
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('list') ? 'active' : '' }}" href="/list">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              List Pembelian
            </a>
          </li>
          
        </ul>

  
      </div>
    </nav>

    
  </div>
</div>