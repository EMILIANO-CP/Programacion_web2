<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra papel o tijeras</title>
</head>
<body>
    <form action = "Resultado.php" method = "post">
        <label for = "opc_ply1">Jugador 1:</label> <!-- se elije el id del select-->
        <select id = "opc_ply1" name = "opc_ply1">
                <option value = "Piedra">Piedra</option>
                <option value = "Papel">Papel</option>
                <option value = "Tijera">Tijera</option>
        </select>
        <label for = "opc_ply2">Jugador 2:</label> <!-- se elije el id del select-->
        <select id = "opc_ply2" name = "opc_ply2">
                <option value = "Piedra">Piedra</option>
                <option value = "Papel">Papel</option>
                <option value = "Tijera">Tijera</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>