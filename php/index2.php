<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .purple {
            background-color: purple;
        }
        .wyniki{
            width: 50%;
            align: right;
            text-align: center;
            background-color: red;
        }
        .forms{
            width: 50%;
        }
        header, footer, h2{
            overflow: auto;
        }
        main{
            display: flex;
        }
        #form1{
            background-color: green;
            padding: 10px;
        }
        #form2{
            background-color: turquoise;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header class="purple">
        <h1>Tytuł</h1>
    </header> 
    <main>
        <section class="forms">
            <section id="form1">

                <p>form1</p>
                <form action="">
                    <input type="number"> <br>
                    <input type="number"> <br>
                    <button>Policz</button>
                </form>
            </section>
            <section id="form2">

                <p>form2</p>
                <form action="">
                    <input type="number"> <br>
                    <input type="number"> <br>
                    <button>wyniki</button>
                </form>
            </section>
        </section>
        <section class="wyniki">
            <h3>Wyniki</h3>
            <hr>
        </section>
    </main>
    <footer class="purple">
        <h1>stopka</h1>
   </footer>
</body>
</html>