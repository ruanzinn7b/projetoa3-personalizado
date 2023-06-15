<?php
session_start();
?>
<html>
<head>
    <style>
      body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, violet, black);
      }
      div{
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
       
      input{
        padding: 15px;
        border: none;
        outline: none;
        font-size: 15px;
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
        Olá, seja bem-vindo <?php
        if (isset($_SESSION['nome']) == null){
            ?> visitante<br>
            Realize o <a href="login.php">login</a>
        <?php } else {
            echo $_SESSION['nome']; ?><br><br>
            Para cadastrar um novo usuário, clique em: <a href="cadastrar.php"><h3>cadastrar</h3></a>
            Para finalizar a sessão, clique em: <a href="logout.php"><h3>sair</h3></a>
        <?php } ?>
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
