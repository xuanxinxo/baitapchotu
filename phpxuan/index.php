<!DOCTYPE html>
<html>
<link rel="stylesheet" href="./form.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<body>
    <div class="login" >
        <h2 class="active"> sign in </h2>

        <h2 class="nonactive"> sign up </h2>
        <form method="post">
            <input type="text" class="text" name="username">
            <span>username</span>
            <br>
            <br>
            <input type="phone" class="text" name="phone">
            <span>phone</span>
            <br>
            <br>
            <input type="email" class="text" name="email">
            <span>email</span>
            <br>
            <br>
            <input type="password" class="text" name="password" >
            <span>password</span>
            <br>
            <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
            <label for="checkbox-1-1">Keep me Signed in</label>

            <button class="signin" name="sub">
                Sign In
            </button>
            <hr>
            <a href="#">Forgot Password?</a>
        </form>

    </div>
    <?php
        if (isset($_POST['sub'])){
            function checkusername($username)
            {
                if (empty($username)){
                    echo "username không được rỗng <br>";
                }else{
                    if(is_string($username)){
                        echo "$username <br>";
                    }else{
                        echo"usname không được chứa số <br>";
                    }
                }

            }
            function checkemail($email)
            {
                if (empty($email)){
                    echo "email không được rỗng";
                }else{
                    if(($email)){
                        echo "$email";
                    }else{
                        echo"email khong có chứ";
                    }

                }

            }
            function checkpasswork($passwork)
            {
                if (empty($passwork)){
                    echo "passwork không được rỗng";
                }else{
                    if(($passwork)){
                        echo "$passwork";
                    }else{
                        echo"passwwork khong có chứ";
                    }

                }

            }
            function checkphone($phone)
            {
                if (empty($phone)){
                    echo "phone không được rỗng<br>";
                }else{
                    if(is_string($phone)){
                        echo "$phone<br>";
                    }else{
                        echo"phone khong có chứa số <br>";
                    }

                }

            }
            $username= $_POST['username'];
             checkusername($username);
            
            $phone=$_POST['phone'];
            checkphone($phone);
            $email=$_POST['email'];
            checkemail($email);
            $passwork=$_POST['passwork'];
            checkpasswork($passwork);
            
            

        }
    ?>


</body>

</html>