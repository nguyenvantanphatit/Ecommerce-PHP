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
                        setcookie("checkLogin",$row['id'],time()+(83000*30),"/");                  
                        echo("<script>alert('Login successful');</script>");
                        $flag=1;
                        if($row['Quyen']==1)
                        {
                            echo("<script>location='../Pages/index.html'</script>");
                        }
                        }else{
                            echo("<script>location='../Pages/admin.html'</script>");
                        }
                        
                    }
            }
        }   
        if($flag!=0)
        {
         echo("<script> var a=confirm('Login False! Please Check Your Input!');
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
                echo("<script> var a=confirm('Login False! Please Check Your Input!');
                if(a==true)
                {
                    location='login.html';
                }
                else{
                    location='login.html';
                }
                </script>");
            
    }

?>