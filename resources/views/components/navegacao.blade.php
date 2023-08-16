<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" aria-current="page" href="{{ route('dashboard.index') }}">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ route('venda.index') }}">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Venda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href=" {{ route('produto.index') }} ">
              <svg class="bi"><use xlink:href="#"/></svg>
              Produto
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ route('cliente.index') }}">
              <svg class="bi"><use xlink:href="#people"/></svg>
              Cliente
            </a>
          </li>
        </ul>

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ route('usuario.index') }}">
              <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
              Usuário
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>