<?php
    $servername = "localhost";
    $username = "root";
    $password = "pwdpwd9";
    $db = 'mahasiswa_db';

    // Create connection
    $conn = mysqli_connect($servername, $username, "$password");
    

    mysqli_select_db($conn, $db);
    $query = "SELECT * FROM mhs_tb;";
    $sql = mysqli_query($conn, $query);
    

// ini untuk test jangan lupa untuk dihapus;
 