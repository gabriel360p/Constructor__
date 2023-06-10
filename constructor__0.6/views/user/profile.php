<!doctype html>
<html lang="en">

<head>
  <title>Perfil</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <?php
    include_once __DIR__.'/../pieces/content/navbar.php';
  ?>
  <div class="container">
    
    <div class="row">

      <div class="col">
        <span class="display-5 border-bottom">Perfil do Usuário</span>
      </div>

    </div>

    <div class="row mt-3">

      <div class="col"> 

        <form action="/user/update" method="POST">
          <div class="mb-3">
            <label for="" class="form-label">Nome do usuário</label>
            <input type="text"
              class="form-control" required name="firstname" id=""  value="<?php 
              include_once __DIR__.'/../../library/auth.php';
                $username = authName();
                echo $username['firstname'];
              ?>" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Nome do Usuário</small>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Sobrenome do usuário</label>
            <input type="text"
              class="form-control" required name="lastname" value="<?php 
              include_once __DIR__.'/../../library/auth.php';
                $username = authName();
                echo $username['lastname'];
              ?>" id="" aria-describedby="helpId" placeholder="" >
            <small id="helpId" class="form-text text-muted">Sobrenome do usuário</small>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Email do usuário</label>
            <input type="text"
              class="form-control" required name="email"  value="<?php 
              include_once __DIR__.'/../../library/auth.php';
                $useremail = authEmail();
                echo $useremail;
              ?>" id="" aria-describedby="helpId" placeholder="" >
            <small id="helpId" class="form-text text-muted">Email do usuário</small>
          </div>

          <!-- <div class="mb-3">
            <label for="" class="form-label">Definir nova senha</label>
            <input type="password"
              class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Mudar senha do usuário</small>
          </div> -->

          <div class="mb-3">
            <label for="" class="form-label">Confirmar senha</label>
            <input type="password"
              class="form-control"  name="confirmedPassword"  id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Confirmar senha para realizar alterações</small>
          </div>

            <button class="btn btn-primary">Salvar</button>
        </form>

      </div>

    </div>

  </div>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>