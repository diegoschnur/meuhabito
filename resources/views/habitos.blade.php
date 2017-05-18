<?php
/**
 * Created by PhpStorm.
 * User: Diego Schnur
 * Date: 11/05/2017
 * Time: 20:44
 */
?>

<html>
<head>
    <title>Hábitos</title>
</head>
<body>
    <h1>Hábitos</h1>
    <ul>
        @foreach($habitos as $hab)
            <li>
                {{ $hab->nome  }}<br>
                {{ $hab->descricao  }}<br>
            </li>
            @endforeach
    </ul>
</body>
</html>