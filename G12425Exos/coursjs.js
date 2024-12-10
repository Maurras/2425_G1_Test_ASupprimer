/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

function listAnimalsNames(animals){
    document.writeln("Animals names");
    for (a in animals)
    {
        document.write(animals[a] + "<br />");
    }
}