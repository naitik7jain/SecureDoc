
<?php      
    include('db.php');   
 
    $mail = $_POST['mail'];  
    $_SESSION['mail'] = $mail;
    $password = $_POST['password'];
    $_SESSION['password'] = $password;
    
    $sql = "select * from users where email = '$mail'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    
    if($count == 1){  
        $query = "SELECT pass,otp_mobile FROM users WHERE email='" . $mail. "'";
        $result = mysqli_query($conn,$query);
        while($row = $result->fetch_assoc()) {
        $pass = $row['pass'];
        $otp_mobile = $row['otp_mobile'];

        if(($pass) == ($password)){
            echo ("<script>
                    window.location.href='profile.php';
                    </script>");
        }
    }
}                                        
                ?>