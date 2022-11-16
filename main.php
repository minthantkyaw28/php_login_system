<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- bootstrap linking -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <!-- boxicon linking -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- CSS linking -->
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    
    <div class="container d-flex align-items-center justify-content-center">
       <div class="card">

            <!-- Header of card -->
            <div class="card-header">
                <h3 class="text-center">Vought International Superheroes Association (VISA)</h3>
                <h5 class="text-center">Registration Form</h5>
            </div>

            <!-- Body of card -->
            <div class="card-body">
                <form action="welcome.php" method="POST">

                    <!-- Name input field -->
                   <div class="input-group mb-3">

                        <span class="input-group-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12 10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36 7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8 8.1 8.1 0 0 1 8 8 8 8 0 0 1-2.39 5.64z"></path><path d="M12 6a3.91 3.91 0 0 0-4 4 3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2 1.91 1.91 0 0 1-2 2z"></path></svg>
                        </span>
                        
                        <input type="text" 
                        name='username'
                        class="form-control" 
                        id="username" 
                        placeholder="Enter your username" 
                        required>
                     
                    </div>

                    <!-- Password input field -->
                   <div class="input-group mb-3">

                        <span class="input-group-text">
                           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.995 6.9a.998.998 0 0 0-.548-.795l-8-4a1 1 0 0 0-.895 0l-8 4a1.002 1.002 0 0 0-.547.795c-.011.107-.961 10.767 8.589 15.014a.987.987 0 0 0 .812 0c9.55-4.247 8.6-14.906 8.589-15.014zM12 19.897C5.231 16.625 4.911 9.642 4.966 7.635L12 4.118l7.029 3.515c.037 1.989-.328 9.018-7.029 12.264z"></path><path d="m11 12.586-2.293-2.293-1.414 1.414L11 15.414l5.707-5.707-1.414-1.414z"></path></svg>
                        </span>
                        
                        <input type="password" 
                        name='password'
                        class="form-control" 
                        id="password" 
                        placeholder="Enter your password" 
                        autocomplete="off"
                        required>
                     
                    </div>

                    <!-- Password input field -->
                    <div class="input-group mb-3">

                        <span class="input-group-text">
                           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 12c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5S7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7z"></path></svg>
                        </span>
                        
                        <input type="password" 
                        name='passwordconfirm'
                        class="form-control" 
                        id="passwordconfirm" 
                        placeholder="Confirm your password" 
                        autocomplete="off"
                        required>
                     
                    </div>

                    <!-- singup button -->
                    <div class="form-group">
                        <input type="submit" class="btn signup" name="register" value="Sign up">
                    </div>

                </form>
            </div>

             <!-- Footer of card -->
            <div class="card-footer text-center text-light signin-btn">
                Already have an account ? <a href="signin.php">Sign In</a>
            </div>

       </div>
    </div>


   <?php
    // Connecting to MySQL DB
       require_once("./db_connection.php");

        //Things to do When the button is clicked
        if(isset($_POST['register'])){

            $name=$_POST['username'];
            $password=$_POST['password'];
            $confirmpassword=$_POST['passwordconfirm'];

            $toDB_name="";
            $toDB_password="";

            if($name!="" && $password!=""){

                if(strlen($password)>=6 && strlen($confirmpassword)>=6){
                    
                    if($password==$confirmpassword){

                        $toDB_name=$name;
                        $toDB_password=$password;
                        
                        $sql_query_insert="INSERT INTO `member`(`username`, `password`) VALUES ('$toDB_name','$toDB_password')";

                        if(mysqli_query($dbconnection,$sql_query_insert)){
                            echo "Data Insert Success";
                        }else{
                            echo "Data Insert Failed";
                        }

                    }else{
                        echo "Wrong Password";
                    }

                }else{

                    echo "Password must be greater than 6";

                }

            }else{

                echo "Need to fill.";
            }
            
        }
            
            
    ?>
</body>
</html>