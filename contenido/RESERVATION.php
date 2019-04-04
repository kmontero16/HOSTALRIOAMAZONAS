<?php
include '../lib/constantes.php';
?>
<html>
    <div id="contenidoEspecifico">
        <form action="../hostalrioamazonas/contenido/ReservationOK.php" method="post">
            <table border="1">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><input id="name" name="name" type="text"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input id="email" name="email" type="email"></td>
                    </tr>
                    <tr>
                        <td>Source Region</td>
                        <td>
                            <select id="region" name="region">
                                <option value="Europe">Europe</option>
                                <option value="USA">USA</option>
                                <option value="Asia">Asia</option>
                                <option value="Africa">Africa</option>
                                <option value="South_America">South America</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>English Lenguaje</td>
                        <td><input type="radio" id="lenguaje" name="lenguaje" value="YES">Yes
                            <input type="radio" id="lenguaje" name="lenguaje" value="NO">No</td>
                    </tr>
                    <tr>
                        <td>Date Check IN</td>
                        <td><input type="date" id="dateIn" name="dateIn"></td>
                    </tr>
                    <tr>
                        <td>Date Check OUT</td>
                        <td><input type="date" id="dateOut" name="dateOut"></td>
                    </tr>
                    <tr>
                        
                        <td colspan="2" align="center">
                            <input type="submit" id="sub" value="Register">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</html>
