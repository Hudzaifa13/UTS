<?php

if(isset($_POST['fname']) && 
    isset($_POST['uname']) && 
    isset($_POST['pass'])){

        $fname = $_POST['fname'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        $data = "&fname=".$fname."&uname=".$uname;

        if (empty($fname)) {
            $em = "Full name is required";
            header("location: reglog.php?error=$em&$data");
            exit;
        }else if(empty($uname)) {
            $em = "Username is required";
            header("location: reglog.php?error=$em&$data");
            exit;
        }else if(empty($pass)) {
            $em = "Password is required";
            header("location: reglog.php?error=$em&$data");
            exit;
        }else {
            echo "Nice";
        }

}else {
    header("location: reglog.php?error=error");
    exit;
}