<!-- Inicio Index -->
<?php require_once 'config.php'; ?>
<?php require_once DBAPI?>
<?php include (HEAD_TEMPLATE); ?>

<?php $db= open_database(); ?>

<?php if($db) : ?>
<body>
    <section class="vh-120"  style="background-image: linear-gradient(to bottom left, #ac1d9b, #990303);">
        <div class="container py-5 h-100" >
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="images/LoginImage.jpg" 
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;">
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black" id="Corpo">
      
                      <form>
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0" id="Titulo">Etecademy</span>
                        </div>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email Institucional</label>
                          <input type="email" id="email" class="form-control form-control-lg" required />
                        </div>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="senha">Senha</label>
                          <input type="password" id="senha" class="form-control form-control-lg" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label text-center" for="codigo-etec">Código da Etec</label>
                          <input type="text" id="codigo-etec" pattern="\d*" maxlength="3" class="form-control form-control-lg" style="width: 15%;" required/>
                        </div>
      

                        <div class="form-outline mb-4">
                        <label for="tipo-usuario">Tipo de Usuario</label>
                        <select class="form-select" style="width: 28%;" id="tipo-usuario">
                          <option selected>Aluno</option>
                          <option>Professor</option>
                          <option>Administrador</option>
                        </select>
                        </div>

                        
                        <div class="pt-1 mb-4">
                          <button class="btn btn-outline-dark btn-lg btn-block" type="button">Entrar</button>
                        </div>
      
                        <a class="small text-muted"  href="#!">Esqueceu a senha?</a>
                        <p class="mb-5 pb-lg-2" style="color: #000000;">Não tem uma conta? <a href="#!"
                            >Registre-se aqui</a></p>
                        <a href="#!" class="small text-muted">Termos de uso.</a>
                        <a href="#!" class="small text-muted">Politica de Privacidade.</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>