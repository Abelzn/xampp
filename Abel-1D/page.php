<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>

<form class="formulario">
    <h3>LOGIN</h3>
    <input type="text" placeholder="usuário" id="usuário">
    <input type="password" placeholder="Senha" id="senha">
    <input type="email" placeholder="email" id="email">
    <button onclick="logar(); return false">ENTRAR</button>
</form>

<script>
    function logar() {
        var login = document.getElementById('usuário').value;
        var senha = document.getElementById('senha').value;
        var email = document.getElementById('email').value;

        localStorage.setItem("login", usuário);
        localStorage.setItem("senha", senha);
        localStorage.setItem("email", email);


        if (login === "admin" && senha === "admin") {
            alert('Login realizado com sucesso!');
            location.href = "home.html";
        } else {
            alert('Usuário ou senha incorretos');
        }
    }
</script>

</body>
</html>