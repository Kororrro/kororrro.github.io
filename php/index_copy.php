<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        #r{     display:flex;  }
        #l{     width: 33%; }
        #p{     width: 67%; }
        p{text-align: center;}
    </style>
</head>
<body>
   <section id='r'>
        <section id='l'>
            <p>Szukaj pacjenta</p>
            <form action='index.php' method='post'>
                <input name='szukaj'/>
                <input type='submit'/>
            </form>
        </section>
        <section id='p'>
            <p>Pacjenci</p>
            <?php
            $szukaj = $_POST['szukaj'] ?? -1;
            if($szukaj != -1){
                $baza = new mysqli('localhost', 'root','','przychodnia');
                $sql = "SELECT * FROM pacjent WHERE imie LIKE '%{$szukaj}%'";
                $wynik = $baza->query($sql);
                echo "<table>";
                foreach($wynik as $w){
                    echo "<tr>";
                    echo "<td>{$w['id_pacjent']}</td>";

                    echo "<td>{$w['imie']}</td><td>{$w['nazwisko']}</td>";
                    echo "<td>{$w['data_ur']}</td><td>{$w['plec']}</td>";
                    echo "</tr>";;
                }
                echo "</table>";
                $baza->close();
            }
            ?>
        </section>
   </section>
</body>
</html>