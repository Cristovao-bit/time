<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Online Tutorials || CountDown</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="center">
            <h1><span>2019</span><hr> Contagem para o Novo Ano!</h1>
            <div id="clock"></div>
        </div>
        
        <script src="jquery.js"></script>
        <script src="countdown.js"></script>
        <script>
            $('#clock').countdown('2019/1/1', function(event){
                var $this = $(this).html(event.strftime('' 
                        + '<div><span>%w</span><span>semanas</span></div>'
                        + '<div><span>%d</span><span>dias</span></div>'
                        + '<div><span>%H</span><span>horas</span></div>'
                        + '<div><span>%M</span><span>minutos</span></div>'
                        + '<div><span>%S</span><span>segundos</span></div>'
                        ));
            });
        </script>
    </body>
</html>
