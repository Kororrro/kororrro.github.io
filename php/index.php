<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main{
            display: flex;
        }
        header{
            overflow: auto;
        }
        #dane{
            background-color: #6060f0;
            width: 35%;
        }
        #listy{
            background-color: #f00000;
            width: 65%;
        }
        #wyniki{
            background-color: #00a000;
        }
    </style>
</head>
<body>
    <header id="wyniki">
        <h1>
            Wyniki
        </h1>
    </header>
    <main>
        <section id="dane">
            <p>Dane</p>
            <form action="" method="post">
                <input type="number" name="ilosc">
                <input type="text" name="tekst" id="">
                <button type="submit">Wyślij</button>
            </form>
        </section>
        <section id="listy">
            <ol>
               <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        $tekst = $_POST["tekst"];
                        $ilosc = $_POST["ilosc"];
                        for ($i=0; $i < $ilosc ; $i++) { 
                            echo "<li>{$tekst}</li>";
                        }
                    }
               ?> 
            </ol>
        </section>
    </main>
</body>
</html>