<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Teste - DialHost</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="./jquery/jquery.min.js"></script>
        <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./jquery/jquery.correios.js"></script>
        <script src="./jquery/jquery.correios.min.js"></script>
        <script src="./js/scriptUsuario.js"></script>

        <!-- Styles -->
        <style>
            @media (min-width: 992px) {
                body {
                    padding-top: 56px;
                }
            }
            html, body {
                background-color: #D3D3D3;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                padding-top: 54px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .botao{
                width:150px; 
                heigth:150px;
            }
        </style>
    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Teste DialHost</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/arthurvsn">GitHub</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    {{--  {!! Form::open(['url' => 'foo/bar']) !!}
        
    {!! Form::input("text", "nome", '', ['class' => 'form-control', 'autofocus']) !!}

    {!! Form::close() !!}  --}}

    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Teste para cadastro de usuario simples.</h1>
          <p class="lead"></p>
          <ul class="list-unstyled">
          </ul>
          <form onsubmit="return validaForm(this);" method="POST" action="{{ url('usuarios/novo') }}">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome ">
            </div>
            <div class="form-group">
                <label for="email">Endereço de email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email">
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div> -->
            <div class="form-group">
                <label for="telCelular">Telefone Celular</label>
                <input type="text" class="form-control" id="telCelular" name="telCelular" placeholder="Digite seu número de telefone" onkeyup="mascara( this, mtel );" maxlength="15">
            </div>
            <div class="form-group">
                <label for="data-nascimento">Data Nascimento:</label>
                <input type="date" class="form-control" id="data-nascimento" name="data-nascimento" placeholder="Digite seu nome ">
            </div>

            <div class="control-group">
                <label for="cep">CEP / Código Postal</label>
                <input class="form-control" id="cep" name="cep" type="text" placeholder="CEP">
                <p class="help-block"></p>
            </div>

            <!-- address-line1 input-->
            <div class="control-group">
                <label class="control-label" for="endereco">Endereço</label>
                <input id="endereco" name="endereco" type="text" placeholder="Endereço" class="form-control">
            </div>
            <!-- address-line2 input-->

            <div class="control-group">
                <label class="control-label" for="bairro">Bairro</label>
                <input id="bairro" name="bairro" type="text" placeholder="Bairro" class="form-control">
            </div>

            <div class="control-group">
                <label class="control-label" for="cidade">Cidade</label>
                <input id="cidade" name="cidade" type="text" placeholder="Cidade" class="form-control">
            </div>

            <div class="control-group">
                <label class="control-label" for="uf-estado">UF Estado</label>
                <input id="uf-estado" name="uf-estado" type="text" placeholder="UF" class="form-control">
            </div>
            <br />
            <input type="submit" class="btn btn-primary" value="Salvar">
        </form>
        </div>
      </div>
    </div>  
    </body>
</html>
