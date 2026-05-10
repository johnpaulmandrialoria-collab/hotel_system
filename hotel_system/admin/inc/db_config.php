<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "hotel_system";

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn){
        die("Connection Failed: " . mysqli_connect_error());
    }

    function filteration($data){
        foreach($data as $key => $value){
            $value = trim($value);
            $value = stripslashes($value);
            $value = strip_tags($value);
            $value = htmlspecialchars($value);
            $data[$key] = $value;
        }
        return $data;
    }

    function selectALL($table)
    {
        $conn = $GLOBALS['conn'];
        $result = mysqli_query($conn, "SELECT * FROM $table");
        return $result;
    }

    function select($sql, $values, $datatypes)
    {
        $conn = $GLOBALS['conn'];
        if($stmt = mysqli_prepare($conn, $sql))
        {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $result;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Select");
            }
        }
        else{
            die("Query cannot be prepared - Select");
        }
    }

    function update($sql, $values, $datatypes)
        {
        $conn = $GLOBALS['conn'];
        if($stmt = mysqli_prepare($conn, $sql))
        {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $result;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Update");
            }
        }
        else{
            die("Query cannot be prepared - Update");
        }
    }

    function insert($sql, $values, $datatypes)
    {
        $conn = $GLOBALS['conn'];
        if($stmt = mysqli_prepare($conn, $sql))
        {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $result;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Insert");
            }
        }
        else{
            die("Query cannot be prepared - Insert");
        }
    }

    function delete($sql, $values, $datatypes)
        {
        $conn = $GLOBALS['conn'];
        if($stmt = mysqli_prepare($conn, $sql))
        {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $result;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Delete");
            }
        }
        else{
            die("Query cannot be prepared - Delete");
        }
    }


?>