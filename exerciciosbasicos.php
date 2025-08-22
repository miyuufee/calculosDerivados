<!DOCTYPE html>
<div lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>ATIVIDADES</title>
    <!-- Style do programa -->
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #00ff8cff;
        }

        .exercicios-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .exercicio {
            background-color: #1e1e1e;
            border: 1px solid #333;
            border-radius: 12px;
            padding: 20px;
            width: 30%;
            box-sizing: border-box;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #2a2a2a;
            color: #fff;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #00ff99ff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #00e668ff;
        }

        p, label, i {
            color: #ccc;
        }
    </style>
</head>

    <h2 style="text-align:center;"><b>EXERCÍCIOS</b></h2>

    <!-- Início do programa para cada exercício proposto nas atividades -->
    <div class="exercicios-container">
        <div class="exercicio">
            <!-- EXERCÍCIO 1 -->
            <h2><b>Exercício 1</b></h2>
            <p><i>Digite os números para serem somados e depois multiplicar
                o primeiro número pelo resultado da primeira operação.</i></p><br>

            <form id="form" method="post">
                <input type="hidden" name="form" value="ex1">

                <label>Primeiro número desejado:</label>
                <input type="number" name="ex1numero1" step="any" required><br><br>

                <label>Segundo número desejado:</label>
                <input type="number" name="ex1numero2" step="any" required><br><br>

                <button type="submit">Calcular</button>
            </form>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form"]) && $_POST["form"] === "ex1") {
                $ex1numero1 = (float) $_POST["ex1numero1"];
                $ex1numero2 = (float) $_POST["ex1numero2"];

                $ex1soma = $ex1numero1 + $ex1numero2;
                $ex1resultado = round($ex1soma * $ex1numero1, 2);

                echo "<center><h3>Resultado: $ex1resultado</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 2 -->
        <div class="exercicio">
            <h2><b>Exercício 2</b></h2>
            <p><i>Digite três números para calcular a média entre eles.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex2">

                <label>Primeiro número:</label>
                <input type="number" name="ex2val1" step="any" required><br><br>

                <label>Segundo número:</label>
                <input type="number" name="ex2val2" step="any" required><br><br>

                <label>Terceiro número:</label>
                <input type="number" name="ex2val3" step="any" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["form"]) && $_POST["form"] === "ex2") {
                $ex2val1 = (float) $_POST["ex2val1"];
                $ex2val2 = (float) $_POST["ex2val2"];
                $ex2val3 = (float) $_POST["ex2val3"];
                $ex2media = round(($ex2val1 + $ex2val2 + $ex2val3) / 3, 2);

                echo "<center><h3>A média dos valores é: $ex2media</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 3 -->
        <div class="exercicio">
            <h2><b>Exercício 3</b></h2>
            <p><i>Digite um valor para saber 15% de seu valor.</i></p><br>
            
            <form method="post">
                <input type="hidden" name="form" value="ex3">

                <label>Digite o valor:</label>
                <input type="number" name="ex3valor" step="any" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex3valor"])) {
                $ex3valor = (float) $_POST["ex3valor"];
                $ex3resultado = round($ex3valor * 0.15, 2);

                echo "<center><h3>15% do valor de $ex3valor é de: $ex3resultado.</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 4 -->
        <div class="exercicio">
            <h2><b>Exercício 4</b></h2>
            <p><i>Digite um valor para saber 5% e 50% de seu valor.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex4">

                <label>Digite o valor:</label>
                <input type="number" name="ex4valorI" step="any" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex4valorI"])) {
                $ex4valorI = (float) $_POST["ex4valorI"];
                $ex4resultado1 = round($ex4valorI * 0.05, 2);
                $ex4resultado2 = round($ex4valorI * 0.5, 2);

                echo "<center><h3>5% de $ex4valorI é igual a $ex4resultado1, enquanto 50% de $ex4valorI é igual a $ex4resultado2.</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 5 -->
        <div class="exercicio">
            <h2><b>Exercício 5</b></h2>
            <p><i>Digite dois valores para seus quadrados serem calculados e somados.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex5">

                <label>Digite o primeiro valor:</label>
                <input type="number" name="ex5valor1" step="any" required><br><br>

                <label>Digite o segundo valor:</label>
                <input type="number" name="ex5valor2" step="any" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["form"]) && $_POST["form"] === "ex5") {
                $ex5valor1 = (float) $_POST["ex5valor1"];
                $ex5valor2 = (float) $_POST["ex5valor2"];
                $ex5quadrado1 = $ex5valor1 ** 2;
                $ex5quadrado2 = $ex5valor2 ** 2;
                $ex5soma = $ex5quadrado1 + $ex5quadrado2;

                echo "<center><h3>O resultado final é de: $ex5soma.</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 6 -->
        <div class="exercicio">
            <h2><b>Exercício 6</b></h2>
            <p><i>Digite quantos m/s desejar para ser convertido em km/h.</i></p><br>

            <form method="post">
                    <input type="hidden" name="form" value="ex6">

                    <label>Digite quantos metros foram andados em 1 segundo:</label>
                    <input type="number" name="ex6velms" step="any" required><br><br>

                    <button type="submit">Converter</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex6velms"])) {
                $ex6velms = (float) $_POST["ex6velms"];
                $ex6velkmh = round($ex6velms * 3.6, 2);

                echo "<center><h3>$ex6velms m/s equivalem a $ex6velkmh km/h.</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 7 -->
        <div class="exercicio">
            <h2><b>Exercício 7</b></h2>
            <p><i>Digite sua altura e seu peso e descubra seu IMC.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex7">

                <label>Insira seu peso (kg):</label>
                <input type="number" name="ex7peso" step="any" required><br><br>

                <label>Insira sua altura (m):</label>
                <input type="number" name="ex7altura" step="any" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex7peso"], $_POST["ex7altura"])) {
                $ex7peso = (float) $_POST["ex7peso"];
                $ex7altura = (float) $_POST["ex7altura"];
                $ex7imc = round($ex7peso / ($ex7altura * $ex7altura), 2);

                echo "<center><h3>Seu IMC é: $ex7imc.</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 8 -->
        <div class="exercicio">
            <h2><b>Exercício 8</b></h2>
            <p><i>Digite um valor para ver seu valor final com 9% de desconto.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex8">

                <label>Insira o valor desejado:</label>
                <input type="number" name="ex8valor" step="any" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex8valor"])) {
                $ex8valor = (float) $_POST["ex8valor"];
                $ex8desconto = $ex8valor * 0.09;
                $ex8resf = round($ex8valor - $ex8desconto, 2);

                echo "<center><h3>O valor final com o desconto de 9% é de: $ex8resf.</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 9 -->
        <div class="exercicio">
            <h2><b>Exercício 9</b></h2>
            <p><i>Digite um valor para ver seu valor inicial, final com 7% de desconto e o valor do desconto em si.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex9">

                <label>Insira o valor desejado:</label>
                <input type="number" name="ex9valor" step="any" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex9valor"])) {
                $ex9valor = (float) $_POST["ex9valor"];
                $ex9desconto = $ex9valor * 0.07;
                $ex9resd = round($ex9valor - $ex9desconto, 2);

                echo "<center><h3>O valor original era: $ex9valor.</h3>
                <h3>O valor final com o desconto de 7% é de: $ex9resd.</h3>
                <h3>O valor do próprio desconto é de: " . round($ex9desconto, 2) . "</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 10 -->
        <div class="exercicio">
            <h2><b>Exercício 10</b></h2>
            <p><i>Digite os valores para calcular o volume de uma caixa retangular.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex10">

                <label>Insira o comprimento:</label>
                <input type="number" step="any" name="ex10comprimento" required><br><br>

                <label>Insira a largura:</label>
                <input type="number" step="any" name="ex10largura" required><br><br>

                <label>Insira a altura:</label>
                <input type="number" step="any" name="ex10altura" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex10comprimento"]) && isset($_POST["ex10largura"]) && isset($_POST["ex10altura"])) {

                $ex10comprimento = (float) $_POST['ex10comprimento'];
                $ex10largura = (float) $_POST['ex10largura'];
                $ex10altura = (float) $_POST['ex10altura'];
                $ex10volume = round($ex10comprimento * $ex10largura * $ex10altura, 2);

                echo "<center><h3>O volume da caixa é: $ex10volume m³</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 11 -->
        <div class="exercicio">
            <h2><b>Exercício 11</b></h2>
            <p><i>Digite um valor para ver seu valor final com 27% de desconto.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex11">

                <label>Insira o valor desejado:</label>
                <input type="number" name="ex11valor" step="any" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex11valor"])) {
                $ex11valor = (float) $_POST["ex11valor"];
                $ex11desconto = $ex11valor * 0.27;
                $ex11resf = round($ex11valor - $ex11desconto, 2);

                echo "<center><h3>O valor final com o desconto de 27% é de: $ex11resf.</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 12 -->
        <div class="exercicio">
            <h2><b>Exercício 12</b></h2>
            <p><i>Digite os valores para calcular a área de um trapézio.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex12">

                <label>Insira o valor da base menor (cm):</label>
                <input type="number" step="any" name="ex12baseMen" required><br><br>

                <label>Insira o valor da base maior (cm):</label>
                <input type="number" step="any" name="ex12baseMar" required><br><br>

                <label>Insira o valor da altura (cm):</label>
                <input type="number" step="any" name="ex12altura" required><br><br>

                <button type="submit">Calcular</button>
            </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex12baseMen"]) && isset($_POST["ex12baseMar"]) && isset($_POST["ex12altura"])) {
                $ex12baseMen = (float) $_POST["ex12baseMen"];
                $ex12baseMar = (float) $_POST["ex12baseMar"];
                $ex12altura = (float) $_POST["ex12altura"];
                $ex12resultado = round((($ex12baseMar + $ex12baseMen) * $ex12altura) / 2, 2);

                echo "<center><h3>A área do trapézio é de $ex12resultado cm.</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 13 -->
        <div class="exercicio">
            <h2><b>Exercício 13</b></h2>
            <p><i>Insira as notas desejadas, sendo elas com peso definido para cálculo para a média final.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex13">

                <label>Insira a primeira nota (peso 2):</label>
                <input type="number" step="any" name="ex13nota1" required><br><br>

                <label>Insira a segunda nota (peso 3):</label>
                <input type="number" step="any" name="ex13nota2" required><br><br>

                <label>Insira a terceira nota (peso 5):</label>
                <input type="number" step="any" name="ex13nota3" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex13nota1"]) && isset($_POST["ex13nota2"]) && isset($_POST["ex13nota3"])) {
                $ex13nota1 = (float) $_POST["ex13nota1"];
                $ex13nota2 = (float) $_POST["ex13nota2"];
                $ex13nota3 = (float) $_POST["ex13nota3"];
                $ex13media = round(($ex13nota1 * 2 + $ex13nota2 * 3 + $ex13nota3 * 5) / 10, 2);

                echo "<center><h3>A média ponderada final, com os pesos em consideração, é de: $ex13media.</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 14 -->
        <div class="exercicio">
            <h2><b>Exercício 14</b></h2>
            <p><i>Digite o valor de um produto com 16% de juros e parcelado em 10 vezes.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex14">

                <label>Insira o valor do produto (R$):</label>
                <input type="number" step="any" name="ex14valor" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex14valor"])) {
                $ex14valor = (float) $_POST["ex14valor"];
                $ex14juros = $ex14valor * 1.16;
                $ex14parcela = $ex14juros / 10;

                echo "<center><h3>O valor final com o acréscimo de 16% de juros é de R$" . round($ex14juros, 2) . ", enquanto parcelado em 10 vezes fica em R$" . round($ex14parcela, 2) . "</h3></center>";
            }
    ?></div>

        <!-- EXERCÍCIO 15 -->
        <div class="exercicio">
            <h2><b>Exercício 15</b></h2>
            <p><i>Insira um valor em km e um em litros para calcular o valor médio do gasto de l/km.</i></p><br>

            <form method="post">
                <input type="hidden" name="form" value="ex15">

                <label>Insira a quantidade de km:</label>
                <input type="number" step="any" name="ex15km" required><br><br>

                <label>Insira a quantidade de litros:</label>
                <input type="number" step="any" name="ex15litros" required><br><br>

                <button type="submit">Calcular</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ex15km"]) && isset($_POST["ex15litros"])) {
                $ex15km = (float) $_POST["ex15km"];
                $ex15litros = (float) $_POST["ex15litros"];
                $ex15conMed = round($ex15litros / $ex15km, 2);

                echo "<center><h3>A média de combustível gasto é de $ex15conMed l/km</h3></center>";
            }
    ?></div></div>


    <!-- Script para evitar que a página volte para o topo após enviar os dados aos formulários -->
    <script>
document.querySelectorAll("form").forEach(form => {
    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch("", {
            method: "POST",
            body: formData
        })
        .then(res => res.text())
        .then(html => {
            let parser = new DOMParser();
            let doc = parser.parseFromString(html, "text/html");

            let resultados = doc.querySelectorAll("h3");

            this.parentElement.querySelectorAll("h3").forEach(el => el.remove());

            resultados.forEach(r => this.insertAdjacentElement("afterend", r));
        });
    });
});
</script>

<!-- Script para evitar salvamento de dados dos formulários após recarregar a página (F5) -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("form").forEach(form => form.reset());

    document.querySelectorAll(".resultado").forEach(div => div.innerHTML = "");
});
</script>
</html>