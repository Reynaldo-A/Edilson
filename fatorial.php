<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fatorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"] {
            width: 100%; 
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            width: 100%; 
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Calculadora de Fatorial</h2>
        <form method="POST" style="width: 100%;">
            <label for="numero">Digite um número:</label>
            <input type="number" id="numero" name="numero" min="0" required>
            <button type="submit">Calcular Fatorial</button>
        </form>

        <?php
           
            function fatorial($n) {      
                if ($n <= 1) {
                    return 1;
                }
                return $n * fatorial($n - 1);
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $numero = $_POST['numero'];
                $fatorial = fatorial($numero);                
                echo "<div class='result'>O fatorial de $numero é: $fatorial</div>";
            }
        ?>
    </div>

</body>
</html>
