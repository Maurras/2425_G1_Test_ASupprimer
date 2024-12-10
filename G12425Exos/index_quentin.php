<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Github</title>
        <<script src="g1.js"></script>
        <script type="text/javascript">
            var x = 5;
            var y = 6;
            
            function ListeDesAnimauxNoms(animaux){
                document.write("<br />")
                for(a in animaux){
                    document.write("Le nom de l'animal est "+animaux[a]+"<br />");
                }
            }
            
        </script>
    </head>
    <body>
        <?php
            echo 'Mon test Git avec quentyin';
        ?>
        <script>
            var z = x+y;
            document.write("Affichage de mon calcul");
            document.writeln("La valeur de x+y est "+z);
            
            var animals = new Array();
            animals[0] = "Dog";
            animals[1] = "Cat";
            animals[2] = "Delphin";
            
            ListeDesAnimauxNoms(animals);
            
            listeDesAnimauxNumeros(animals);
        </script>
        
    </body>
</html>
