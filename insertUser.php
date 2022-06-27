<?php include('connexion.php')?>
<?php  
if(isset($_POST['USER_NAME'])):
    if(isset($_POST['USER_EMAIL'])):
        if(isset($_POST['USER_PW'])):
            $USER_NAME=$_POST['USER_NAME'];
            $USER_EMAIL=$_POST['USER_EMAIL'];
            $USER_PW=$_POST['USER_PW'];
            $sql="insert into users(USER_NAME,USER_EMAIL,USER_PW)values('$USER_NAME','$USER_EMAIL','$USER_PW')";
            $result=mysqli_query($conn,$sql);
            if(!$result){
                die(mysqli_error($conn));
            }
            include ("users.php");
        endif;
    endif;
endif;

?>