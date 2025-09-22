<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
    <h3>Formulário</h3>
    <input type="text" placeholder="usuário" id="usuário">
    <input type="password" placeholder="Senha" id="senha">
    <input type="email" placeholder="email" id="email">
    <input type="tel" placeholder="telefone" id="telefone">
    <button onclick="logar(); return false">ENTRAR</button>
</form>

<script>
    function logar() {
        var login = document.getElementById('usuário').value;
        var senha = document.getElementById('senha').value;
        var email = document.getElementById('email').value;
        var telefone = document.getElementById('telefone').value;

        localStorage.setItem("login", usuário);
        localStorage.setItem("senha", senha);
        localStorage.setItem("email", email);
        localStorage.setItem("telefone", telefone);

        if (login === "admin" && senha === "admin") {
            alert('Login realizado com sucesso!');
            location.href = "home.html";
        } else {
            alert('Usuário ou senha incorretos');
        }
    }
</body>
</html>