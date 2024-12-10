/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

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

function validateForm() {
    var x = document.forms["myForm"]["firstname"].value; 
    if (x == "") {
        alert("Le nom est vide");
        document.myForm.firstname.focus() ;
        return false;
    }
    var x = document.forms["myForm"]["age"].value; 
    if (x == "") {
        alert("L'âge est obligatoire");
        document.myForm.age.focus() ;
        return false;
    }
    var x = document.forms["myForm"]["job"].value; 
    if (x == "") {
        alert("Le job est obligatoire");
        document.myForm.job.focus() ;
        return false;
    }

    var emailID = document.myForm.EMail.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
       alert("Please enter correct email ID");
       document.myForm.EMail.focus() ;
       return false;
   }
}