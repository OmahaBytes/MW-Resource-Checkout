<?php
if ($_SESSION['user']['user_username'] != ADMIN_USERNAME) {
    redirect('./');
}

        $conn = new mysqli('localhost',DB_USERNAME,DB_PASSWORD,DB_NAME);
        $sql = "UPDATE settings SET setting_value='{$_POST['1']}'WHERE setting_id=1";
        $results = $conn->query($sql);

        $sql = "UPDATE settings SET setting_value='{$_POST['2']}'WHERE setting_id=2";
        $results = $conn->query($sql);

        writeLineToLog("");
        redirect('./', 'Settings saved');
?>
