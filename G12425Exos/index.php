<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Github</title>
        <script src="coursjs.js"></script>
        <script type="text/javascript">
            var x = 5;
            var y = 5;
            var z;
            const u = 6;
            let i;
            
            function listAnimalsNumber(animals){
                document.writeln("Animals number");
                for (a in animals)
                {
                    document.write(a + "<br />");
                }
            }
        </script>
    </head>
    <body>
        <?php
            echo 'Mon test Git 2 nouveau nouveau';
        ?>
        <br>
        <a href="ExempleAjax2019/index.php">Exemple AJAX</a>
        <br>
        <a href="JavaScriptNonIntrusif/eventmanagement.html">Event Management</a>
        <br>
        <script type="text/javascript">
            document.writeln("Bonjour G1");
            document.write("<h1> Hello G1!</h1>");
            document.write('Fin de l\'affichage');
            document.writeln("Fin de l\"affichage");
            
            z = y + 2;
            document.writeln("y+2 = "+z);
            
            try{
                u = x *3;
                document.writeln("u = x *3 = "+u);
                let j = false;
                document.writeln("La valeur de j est = "+j);
            }catch (error){
                document.write(error);
                console.error(error);
                let j = true;
                document.writeln("La valeur de j est = "+j);
            }
            
            //i = y *2;
            //document.writeln("i = y *2 = "+i+" and there is "+j);
            i = y *2;
            document.writeln("i = y *2 = "+i);
            
            var animals = new Array();
            animals[0] = "Dog";
            animals[1] = "Cat";
            animals[2] = "Delphin";
            
            
            document.write("<br />");
            listAnimalsNames(animals);
            listAnimalsNumber(animals);
            
        </script>
    </body>
</html>
