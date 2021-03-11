<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Churrascômetro</title>

    <link rel="stylesheet" href="{{asset('css/style_churras.css')}}">
</head>
<body>
    <div class="container">
        <h1>Churrascômetro</h1>
        <input type="number" id="adultos" name="adultos" placeholder="Adultos">
        <input type="number" id="criancas" name="criancas" placeholder="Crianças">
        <input type="number" id="duracao" name="duracao" placeholder="Duração">
        <button onclick="calcular()">Calcular</button>
        <div class="resultado">
        </div>
    </div>
    
    
    <script src="{{asset('js/script_churras.js')}}"></script>
</body>
</html>