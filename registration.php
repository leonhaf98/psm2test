<?php 

    require ('database.php');
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    function sendmail($email,$v_cod){
        
        require ('PHPMailer-master/src/PHPMailer.php');
        require ('PHPMailer-master/src/Exception.php');
        require ('PHPMailer-master/src/SMTP.php');

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;            
            $mail->Username   = 'muhammadhafz98@gmail.com';
            $mail->Password   = 'leonkenedy';                    
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   
            $mail->Port       = 587;                           

            $mail->setFrom('muhammadhafz98@gmail.com', 'sender name');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'email verification from aatmaninfo';
            $mail->Body    = "Thanks for registration.<br>click the link bellow to verify the email address
            <a href='http://localhost:8000/post-email/verify.php?email=$email&v_cod=$v_cod'>verify</a>";

            $mail->send();
                return true;
        } catch (Exception $e) {
                return false;
        }
    }

    if (isset($_POST['login'])) {
        
        $email_username =$_POST['username'];
        $password_login =$_POST['password'];

        $sql="SELECT * FROM users WHERE email = '$email_username' AND password = '$password_login' AND verification_status = '1'";
        $result = $conn->query($sql);
        
        if ($row = $result->fetch_assoc()) {
            $_SESSION['logged_in']=TRUE;
            $_SESSION['email']=$row['email'];
            header('location:mainpage.php');

        }else{
            echo "
                <script>
                    alert('please verify your email!!');
                    window.location.href='indexx.php'
                </script>";
        } 
    }

    if (isset($_POST['register'])) {
        
        $fullName =$_POST['first_name'];
        $username =$_POST['username'];
        $email =$_POST['email'];
        $password =$_POST['password'];

        $user_exist_query="SELECT * FROM users WHERE username= '$username' AND email = '$email' ";
        $result = $conn->query($user_exist_query);

        if ($result) {
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                
                if ($row['username'] === $username && $row['email'] === $email) {
                    echo "
                        <script>
                            alert('username alredy taken!');
                            window.location.href='indexx.php'
                        </script>";
                }else{
                    echo "
                        <script>
                            alert('email alredy register');
                            window.location.href='indexx.php'
                        </script>";
                }
            
            }else{
                
                $v_cod=bin2hex(random_bytes(16));
                
                $query ="INSERT INTO  users (`first_name`, `username`, `email`, `password`,`verification_id`, `verification_status`) VALUES ('$fullName','$username','$email','$password','$v_cod','0')";
                    
                if (($conn->query($query)===TRUE) && sendmail($email,$v_cod )===TRUE) {
                    echo "
                        <script>
                            alert('register successful.chack your mailbox in inbox or spam and verify your account.');
                                window.location.href='index.php'
                        </script>"; 
                }else{
                    echo "
                        <script>
                            alert('query can not run');
                            window.location.href='index.php'
                        </script>";
                }
            }
        }else{
            echo "
            <script>
                alert('query can not run');
                window.location.href='index.php'
            </script>";
        }
    }
 ?>