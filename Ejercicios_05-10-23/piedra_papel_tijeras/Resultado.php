<?php
    $player_one = $_POST["opc_ply1"];
    $player_two = $_POST["opc_ply2"];

    echo "<p>Jugador 1: " . $player_one . "</p>";
    echo "<p>Jugador 2: " . $player_two . "</p>";

    switch($player_one){
        case "Piedra":
            if($player_two == "Piedra"){
                echo "<p>EMPATE</p>";
            }
            elseif($player_two == "Papel"){
                echo "<p>JUGADOR 2 GANA</p>";
            }
            elseif($player_two == "Tijera"){
                echo "<p>JUGADOR 1 GANA</p>";
            }
            break;
        case "Papel":
            if($player_two == "Piedra"){
                echo "<p>JUGADOR 1 GANA</p>";
            }
            elseif($player_two == "Papel"){
                echo "<p>EMPATE</p>";
            }
            elseif($player_two == "Tijera"){
                echo "<p>JUGADOR 2 GANA</p>";
            }
            break;
        case "Tijera":
            if($player_two == "Piedra"){
                echo "<p>JUGADOR 2 GANA</p>";
            }
            elseif($player_two == "Papel"){
                echo "<p>JUGADOR 1 GANA</p>";
            }
            elseif($player_two == "Tijera"){
                echo "<p>EMPATE</p>";
            }
            break;
    }

    echo "<a href = 'index.php'>Al inicio</a>"
?>