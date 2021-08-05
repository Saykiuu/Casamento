<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David & Debora</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: Popplin;
            src: url(../font/Poppins-Light.ttf);
        }
        @font-face {
            font-family: apple;
            src: url(../font/apple/apple-chancery.ttf);
        }
        * {
                font-family:Popplin;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-size: 20px;
                font-weight: 200;
                text-align: justify;
                
        }
        p{
            word-spacing: 10px;
        }
        
        body{
          
            background-color: #ff99ff;
        }
        .container{
            background-color: white;
            margin-top: 30px;
            margin-bottom: 30px;
            border-radius: 10px;
            padding: 10px;
            
        }
        img{
            width: 300px;
            height: 300px;
            margin: 30px;
        }
        button{
            border: solid 2px #ff99ff;
            border-radius: 10px;
            padding: 20px 30px 20px 30px;
            background-color: white;
            margin: 30px 0 30px 0;

        }
        button:hover{
            background-color: #ff99ff;
            color: white;
            border: solid 2px blueviolet;
        }
        button:focus{
            outline: none;
        }
       
        h3{
            font-family: apple;
            text-align: center;
            margin: 50px 0 50px 0;
        }
    </style>
</head>


<body>
      <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
                
                <img  class="rounded mx-auto d-block" src="../imagens/casamento.png">
                <div class="col-6 offset-3" id="title">
                    <h3>David & Débora</h3>
                </div>
               
                <P>
                    O casamento é um de um laço de amor. Um laço que deve ser leve como um abraço, não apertado como um nó, mas firme o 
                    suficiente para não se desfazer com o vento. O casamento deve ser feito de amor, de respeito e admiração. Deve sobreviver 
                    ao fim da paixão, a tormentas e qualquer tipo de tentação. Num casamento deve haver diálogo, não discussão. O importante não 
                    é saber quem tem razão, mas encontrar um consenso.Num casamento, as duas partes devem aprender a ceder. Se apenas um cede, sem 
                    nada em troca receber, a frustração se instala e a amargura pode começar a crescer. As mágoas e tristezas que surgem não devem 
                    ser guardadas, devem virar palavras, que sejam escritas ou faladas. As palavras emudecidas, viram rancor. E não há nada melhor 
                    para acabar com o amor do que um baú de memórias cheio de rancor. O casamento deve ser um compromisso feliz e espontâneo. Não 
                    um encargo pesado, uma obrigação. No casamento deve haver união, porque quando duas pessoas se juntam é para remar na mesma direção. 
                    O casamento é apenas o começo! Um laço de amor que pode guardar um presente maravilhoso para o futuro.
                </P>            
            </div>
          </div>
          <div class="row">
            <div class="col-2 offset-5">
                    <button onclick="window.location.href='presente.php'">Presentear</button>
            </div>
          </div>
      </div>


      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>