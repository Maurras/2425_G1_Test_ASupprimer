<html>
    <head>
        <script>
            function showUser(str)
            {
                if (str == "")
                {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest) {
                    xmlhttp= new XMLHttpRequest();
                } else {
                    if (window.ActiveXObject)
                        try {
                            xmlhttp= new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e) {
                            try {
                                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                            } catch (e) {
                                return NULL;
                            }
                        }
                }

                xmlhttp.onreadystatechange = function ()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "getuser.php?id=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <?php
            $conn = new PDO("mysql:host=localhost;dbname=DB", "root", "root");
            $reponse = $conn->prepare("select * from Person");
            $reponse->execute();
        ?>

        <form>
            <select name="users" onchange="showUser(this.value)">

                <option value="">Select a person:</option>
                <?php 
                    while ($row = $reponse->fetch()) {
                        echo "<option value=".$row['id'].">".$row['FirstName']." ".$row['LastName']."</option>";

                    }
                ?>
                
            </select>
        </form>
        <br />
        <div id="txtHint"><b>Person info will be listed here.</b></div>

    </body>
</html>
