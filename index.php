<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>calculadora IMC</title>
</head>

<body>
    <div class="card d-flex flex-column gap-3 justify-content-center align-items-center p-5">
        <h1>Calculadora IMC</h1>
        <a href="https://github.com/HenriquePassarelli">
            <svg height="32" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="32" data-view-component="true"
                class="octicon octicon-mark-github v-align-middle">
                <path fill-rule="evenodd"
                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
                </path>
            </svg>
        </a>
        <form calss="form  d-flex flex-colunm gap-4">
            <label class="form-label" for="value01">Peso</label>
            <input type="number" class="form-control" id="value01" name="value01" required placeholder="70">
            <label class="form-label mt-3" for="value02">Altura</label>
            <input type="number" class="form-control mb-3" id="value02" name="value02" placeholder="1.80" required>
            <button type="button" class="btn btn-outline-danger" id="clear">Limpar</button>
            <button type="button" class="btn btn-primary" id="submit">Calcular</button>
        </form>

        <div class="footer w-100 h-50">
            <span id="response"></span>
        </div>

    </div>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">Classificação</th>
                <th scope="col">IMC</th>
            </tr>
        </thead>
        <tbody>
            <tr id="abaixo">
                <td>Abaixo do Peso</td>
                <td>Abaixo 18,5</td>
            </tr>
            <tr id="normal">
                <td>Peso Normal</td>
                <td>18,5 - 25,9</td>
            </tr>
            <tr id="sobrepeso">
                <td>Sobrepeso</td>
                <td>25 - 29,9</td>
            </tr>
            <tr id="obesidadeI">
                <td>Obesidade Grau I</td>
                <td>30 - 34,9</td>
            </tr>
            <tr id="obesidadeII">
                <td>Obesidade Grau II</td>
                <td>35 - 34,9</td>
            </tr>
            <tr id="morbida">
                <td>Obesidade Grau III ou Mórbida</td>
                <td>Maior ou Igual 40</td>
            </tr>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="./index.js"></script>

</body>



</html>