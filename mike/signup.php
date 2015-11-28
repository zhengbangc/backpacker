<!DOCTYPE HTML>
<html> 
<head> 
    <title>Sign-Up</title> 
</head> 
<body id="body-color"> 
    <div id="Sign-Up"> 
        <fieldset style="width:30%">
            <legend>Registration Form</legend> 
            <table border="0"> 
                <tr> <form method="POST" action=""> 
                    <td>Username</td><td> <input type="text" name="username"></td> </tr> 
                    <tr> <td>Password</td><td> <input type="password" name="password"></td> </tr> 
                    <tr> <td>Age</td><td> <input type="text" name="age"></td> </tr>
                    <tr> <td>Gender</td><td> 
                        <select name="gender">
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select></td> </tr> 
                    <tr> <td>City </td><td> <input type="text" name="city"></td> </tr> 
                    <tr> <td> <input id="button" type="submit" name="submit" value="Sign-Up"></td></tr> 
                </form> 
            </table> 
        </fieldset> 
    </div>
    <?php
        if(isset($_POST['submit']))
        {
        $servername = "engr-cpanel-mysql.engr.illinois.edu";
        $username= "backpack_zbc";
        $password="123456";
        $dbname="backpack_user";

        $su_username = $_POST['username'];
        $su_password = $_POST['password'];
        $su_age = $_POST['age'];
        $su_gender = $_POST['gender'];
        $su_city = $_POST['city'];
        if ($su_username == 0 || $su_password == 0 || $su_age==NULL || $su_city == NULL){
            echo "Missing information!!";
        }
            
        else{
            $conn = new mysqli($servername, $username, $password, $dbname);
            //$conn = mysqli_connect($servername, $username, $password, $dbname);
            
            $query = "SELECT * FROM user WHERE username='$su_username'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($result);
            //var_dump($conn);
            if ($row>0)
            {
                echo " Username already exist!!";
            }
            else
            {
                $sql = "INSERT INTO user (username, password, age, gender, city) 
                    VALUES('$su_username','$su_password','$su_age','$su_gender','$su_city')";
                mysqli_query($conn,$sql);
                echo "Signup Sucessfully!!";
            }
        }
    }
    ?>  
</body> 
</html>
