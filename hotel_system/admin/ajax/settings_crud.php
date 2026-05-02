<?php

    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if(isset($_POST['get_general']))
    {
        $query = "SELECT * FROM settings WHERE sr_no=?";
        $values = [1];
        $result = select($query, $values, "i");
        $data = mysqli_fetch_assoc($result);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['upd_general']))
    {
        $frm_data = filteration($_POST);

        $query = "UPDATE settings SET site_title=?, site_about=? WHERE sr_no=?";
        $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
        $result = update($query, $values, 'ssi');
        echo $result;
    }

?>