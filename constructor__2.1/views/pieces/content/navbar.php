<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/dash">Constructor__ Olá <?php $name= Auth::userName(); echo $name['firstname']; ?></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/dash">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/users/user">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logout">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>