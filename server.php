<?php
$host ="localhost";
$dbUsername="root";
$dbpassword="";
$dbname="jayu";
session_start();
//create a connection
$con = mysqli_connect($host,$dbUsername,$dbpassword,$dbname);


if (isset($_POST['btn_reg'])) 
{
  			 $firstname =($_POST['firstname']);
  			 $lastname =($_POST['lastname']);
  			 $email =($_POST['email']);
  			 $gender =$_POST['gender'];
  			 $date =$_POST['date'];  			
  			 $mobile =($_POST['mobile']);
        $address =($_POST['address']);
  			 $country =($_POST['country']);
  			 $state =($_POST['state']);
  			 $city =($_POST['city']);
  			 $pincode =($_POST['pincode']);
  			 $password =($_POST['password']);
  			 $password2 =($_POST['password2']);
         $picture =($_POST['picture']);


        $result="insert into users values('','$firstname','$lastname','$email','$gender','$date','$mobile','$address','$country','$state','$city','$pincode','$password','$password2','$picture')"; 
         $res =mysqli_query($con,$result);
        if($res)
     {     
              move_uploaded_file($_FILES['picture']['tmp_name'], "upload_img/".$picture);
            ?>
               <script>
                  alert("Registraton Successfully");
                 </script>
           <?php
          header("location:index.php");
    } 
    else 
    {
            ?>
                <script>
                   alert("Registraton Failed");
                 </script>
            <?php
    }

  	}	
  				
 
?>
