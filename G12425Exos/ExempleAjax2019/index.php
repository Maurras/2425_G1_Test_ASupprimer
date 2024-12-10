
<?php
    require './connection.php';
?>
<html>
    <head>
        <script src="forajax.js"></script>
    </head>
    <body>
        <?php
            $reponse = $conn->prepare("select * from Person");
            $reponse->execute();
        ?>

        <form name="myForm" action="model.php" onsubmit="return validateForm()" method="post">
            Firstname: <input type="text" name="firstname"> <br>
            Lastname: <input type="text" name="lastname" required="">  <br>
            Age: <input type="text" name="age">  <br>
            Hometown: <input type="text" name="hometown" required="">  <br>
            Job: <input type="text" name="job">  <br>
            Email: <input type="text" name="EMail">  <br>
            <input type="submit" value="Submit">
        </form>
        
        <form>
            <select name="users" onchange="showUser(this.value)">

                <option value="">Select a person:</option>
                <?php 
                    echo "<option value=all> All </option>";
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
