<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from registration where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from registration";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                <td>Nome</td>    
                <td>Email</td>    
                <td>Discussao</td>    
                <td>Anexo</td>        
            </tr>    
        </table>    
    </body>    
</html>  