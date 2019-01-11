<?php
    function do_login($username, $password){
        //cek kondisi jika username dan password salah
        if($username != 'yudha' || $password != 'yudha'){
            header("location: index.php?error=wrong");
        }
        // cek kondisi jika username dan password benar
        if($username == 'yudha' && $_POST['password'] == 'yudha'){
            $_SESSION['user'] = $username;
            $_SESSION['pass'] = $password;

            header("location: beranda.php");
        }
    }

    function check_login(){
        // cek kondisi login session
        if(!isset($_SESSION['user'])){
            header("location: index.php");
        }
    }
?>
