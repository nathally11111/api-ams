<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Revisão Javascript</h1>
    <script>
        const nome = "Fernando"
        var numero = 11
        let idade = 35

        let meninas = 
        [
            "Luana",
            "Maryellen",
            "Maria Eduarda",
            "Maria Clara",
            "Nathally",
            "Shaden"
        ]
        for (let i = 0; i < meninas.length; i++)
        {
            document.write(meninas[i]+"<br/>")
        }

        let marcelo = {
            "Nome" : "Marcelo",
            "idade" : "17",
            "Peso" : "62",
            "Altura" : "1.61",
        }
        let pedro = 
        {
            "Nome" : "Pedro",
            "idade" : "18",
            "Peso" : "70",
            "Altura" : "1.76"
        }
        let yago = 
        {
            "Nome" : "Yago",
            "idade" : "17",
            "Peso" : "62",
            "Altura" : "1.64"
        }
        let meninos = [marcelo,pedro,yago]
        for (let i = 0; i < meninos.length; i++)
        {
            document.write(meninos[i].Nome+"<br/>")
        }
    </script>
</body>
</html>