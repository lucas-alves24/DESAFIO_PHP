<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Cadastro de Usuários</h2>
            </div>
            <div class="card-body">
                @if (session('mensagem'))
                    <div class="alert alert-success">
                        {{ session('mensagem') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('people.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome"
                            value="{{ old('sobrenome') }}">

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone"
                            value="{{ old('telefone') }}">

                    </div>
                    <div class="form-group">
                        <label for="data_de_nascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" id="data_de_nascimento" name="data_de_nascimento"
                            value="{{ old('data_de_nascimento') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit"  class="btn btn-primary">Adicionar Usuário</button>
                    
                    <a href="{{ route('people.user') }}" target = "_blank" class="btn btn-primary mb-3">Ver Usuários</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
