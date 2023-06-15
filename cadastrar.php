<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, violet, black);
      }
      
      div {
        background-color: rgba(255, 0, 184, 0.9);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 80px;
        border-radius: 15px;
        color: white;
        border: 2px solid;
        animation: neon-border 2s infinite alternate;
      }
       
      input {
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
        background-image: linear-gradient(to right, purple, blue); /* Efeito degradê de roxo para azul */
        color: white;
        font-weight: bold; /* Deixa o texto em negrito */
      }
      
      #cadastrar {
        display: block;
        margin: 0 auto;
      }
      
      @keyframes neon-border {
        0% {
          border-color: #ff00ff;
        }
        50% {
          border-color: #ff00ff;
        }
        100% {
          border-color: #ff00ff;
        }
      }
    </style>
</head>
<body>
    <div>
        <h3>Digite as seguintes informações</h3>
        <form id="cadastro" action="cadastro.php" method="post">
            nome: <input type="text" name="nome" required placeholder="Digite seu nome"><br><br>
            login: <input type="text" name="login" required placeholder="Digite seu login"><br><br>
            senha: <input type="password" name="senha" required placeholder="Digite sua senha"><br><br>
            <input type="submit" id="cadastrar" value="Cadastrar">
        </form>
    </div>

    <script>
      function getRandomColor() {
        const letters = "0123456789ABCDEF";
        let color = "#";
        for (let i = 0; i < 6; i++) {
          color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
      }
  
      const divElement = document.querySelector("div");
      divElement.style.borderColor = getRandomColor();
    </script>
</body>
</html>
