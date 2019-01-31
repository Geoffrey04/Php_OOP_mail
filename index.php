<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 09:32
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    form {
        display: table-caption;
    }
    textarea {
        margin: 0px;
        height: 176px;
        width: 200px;
    }


</style>

<body>
<form action="send.php" method="post">

    <label>Mail expéditeur :
        <input type="text" id="mail_expe" name="mail_expe"/>
    </label>

    <label>Mail du destinataire:
        <input type="text" id="mail_dest" name="mail_dest"/>
    </label><br>

    <label>Objet du mail:
        <input type="text" id="mail_object" name="mail_object"/>
    </label>

    <label>Message :
        <textarea id="message" name="message"></textarea>
    </label>

    <button type="submit" >Valider</button>
</form>




</body>
</html>
