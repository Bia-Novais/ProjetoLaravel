<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Agendamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</head>
    <body>
       
        <div class="container">
        
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                        <div class="container-fluid text-bg-primary p-3">
                            <a class="navbar-brand text-light" href="#">SISTEMA WEB</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-link active text-light" aria-current="page" href="#">Cadastrar</a>
                                        <a class="nav-link text-light" href="#">Consultar</a>
                                    </div>
                                </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col">
                <br><h4>Cadastrar - Agendamento de Ponteciais Clientes </h4>
                <br><h6>Sistema Utilizado para Agendamento de Serviços </h6><br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form method="POST" action="/adicionar">
                    @csrf
                        <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                                <input type="text" class="form-control" name="nome" id="exampleFormControlInput1" placeholder="Digite o nome">
                        </div>

                        <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
                                <input type="text" class="form-control" name="telefone" id="exampleFormControlInput1" placeholder="(xx)xxxxx-xxxx">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Origem:</label>
                            <select class="form-select" name="origem" aria-label="Default select example">
                                <option selected>Selecione uma opção</option>
                                <option value="Celular">Celular</option>
                                <option value="TelefoneFixo">Telefone Fixo</option>
                            </select>
                        </div>

                        <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
                                <input type="date" class="form-control" name="datacontato" id="exampleFormControlInput1" >
                        </div>

                        <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Observação </label>
                                <textarea class="form-control" name="observacoes" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>


            <div class="row">
                <div class="col">
                    <table class="table mt-5">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Origem</th>
                                    <th scope="col">Data de Contato</th>
                                    <th scope="col">Observação</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($contato) > 0)
                                    @foreach ($contato as $cont)
                                        <tr>
                                            <th> {{ $cont->id }}</th>
                                            <th> {{ $cont->nome }}</th>
                                            <th> {{ $cont->telefone }}</th>
                                            <th> {{ $cont->origem}}</th>
                                            <th> {{ $cont->datacontato }}</th>
                                            <th> {{ $cont->observacoes }}</th>
                                            <th><a href="/editar/{{ $cont->id }}" class="btn btn-primary">Editar</a>
                                                <a href="/excluir/{{ $cont->id }}" class="btn btn-danger">Excluir</a>
                                            </th>
                                        </tr>
                                    @endforeach
                                @else
                                <tr>
                                    <th>Sem registros!</th>
                                </tr>
                                @endif
                                        
                            </tbody>


                    </table>
                </div>
            </div>


            
            
        
        </div>
        
    </body>
</html>