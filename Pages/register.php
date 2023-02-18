<?php
    require './ConnectDB.php';
    $user = $_POST['name'];
    $pass = $_POST['name1'];
    if(!empty($user) || !empty($pass)){
        $sql='SELECT * FROM taikhoan';
        $result=$conn->query($sql);
        $flag=0;
        while ($row=$result->fetch_assoc()){    
            if($row['UserName']==$user)
            {
                if($row['PassWord']==$pass)
                    {   
                        $flag = 1;

                        
                    }
            }
        }
    }   
        if($flag==0)
        {
            $sql="INSERT INTO `taikhoan`(`UserName`, `PassWord`, `Quyen`) VALUES ('$user','$pass','1')";
            $result = $conn->query($sql);
         echo("<script> var a=confirm('Register success!');
                if(a==true)
                {
                    location='login.html';
                }
                else{
                    location='login.html';
                }
                </script>");
        }
    
    else{

                echo("<script> var a=confirm('This User is tồn tại');
                if(a==true)
                {
                    location='register.html';
                }
                else{
                    location='register.html';
                }
                </script>");
            
    }

?>