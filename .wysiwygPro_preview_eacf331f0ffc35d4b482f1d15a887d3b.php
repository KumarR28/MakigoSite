<?php
if ($_GET['randomId'] != "uj_dZ5cuJJyqgk2zgk7ktmi_IM6sBnKi6cfJGk5yEhzd6IEY_zVA6EckG8VcRUUA") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
