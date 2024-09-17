<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="container">
    <form action="">
        <h1>LOGIN</h1>
        
        <!-- Input para Username com ícone -->
        <div class="input-container">
            <i class='bx bx-user'></i>
            <input id="letra" type="text" placeholder="Username" class="user" required>
        </div>

        <!-- Input para Password com ícone -->
        <div class="input-container">
            <i class='bx bxs-key'></i>
            <input type="password" placeholder="Password" class="password" required>
        </div>

        <div class="remember">
            <label>
                <input type="checkbox" name="" id="caixa">Lembrar de mim
            </label>
        </div>
        <div class="botao">
        <button>ENTRAR</button>
        </div>

        <div class="registrar"><label>Não possui uma conta? </label><a class="link" href="youtube.com">Crie uma aqui!</a></div>
        <div class="esqueceu">
        <a>Esqueceu sua senha? Clique</a><a class="link" href="youtube.com"> aqui!</a>
        </div>
    </form>
</div>

</body>
</html>