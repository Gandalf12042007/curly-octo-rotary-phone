<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family:Helvetica;
            display:flex;
            margin:0;
        }
        .sidebar{
            width:250px;
            background:#333;
            color:#fefefe;
            height:100vh;
            padding:20px;
        }
        .sidebar ul{
            list-style:none;
            padding:0px;
        }
        .sidebar ul li{
            paddiing:10px 0px;
        }
        .sidebar ul li a{
            color:#fefefe;
            text-decoration:none;
        }
        .content{
            flex-grow:1;
            padding:20px;
        }
        </style>
</head>
<body>
    <div class="sidebar">
        <h2> Daswhboard </h2>
        <ul>
            <li><a href="a">Inicio</a></li>
            <li><a href="a">Relatórios</a></li>
            <li><a href="a">Comunição</a></li>
        </ul>
    </div>
    <div class="content">
        <h2> Bem vindo! <b> Faluna </b> </h2>
        <p> Esse  é o painel principal</p>
    </div>
</body>
</html>