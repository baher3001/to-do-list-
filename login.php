


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Clipboard-Plan-512.png">
    <style>
      
        
        
        i
        {
            position: absolute;
            right: 70;
            top:365;
        }
        small
        {
            display:none;
        }
        
        .h12 
        {
            color:red;
            position: relative;
            bottom:150;
           
            text-align: center;
        }
    </style>
</head>
<body>
<?php
    if(isset($_GET['error']))
    {
        echo"<div class='alert alert-danger ' role='alert'>
        please login first to access
   </div>" ;
    }
?>




    <header  >
        <div class="container h-100 d-flex align-items-center justify-content-center ">
            <form action="" method="POST"  class="w-100">       
             
                    <h1 class="text-center"> LOGIN  </h1>
              
               
       
                <div class="form-group">
                        <label for=""> Email </label>
                        <input type="mail" name="mail" class="form-control"  placeholder="Enter your Email" required>
                        <small style="color:red;"> please enter your Email  </small>
                    </div>
           
         
           <div class="form-group">
                        <label for=""> password </label>
                        <input type="password" name="pass"  class="form-control" placeholder="Enter your Password here" required>
                        <small style="color:red;"> please enter your password   </small>
                        <i class="fas fa-eye-slash"></i>
                        <i class="fas fa-eye" style="display:none;"></i>
               </div>  
              
                    <div class="form-group">
                    
                        <input type="submit" value="Login"   class="btn btn-primary btn-block"  name="log" required> 

              
                </div>  
                </form>          
  
        </div>
    </header>


    
    <script > 
 
 let inputs = document.querySelectorAll('.form-control');
let icons = document.querySelectorAll('i');  

icons[0].onclick = function()
{
    icons[0].style.display="none";
    icons[1].style.display="block";
    inputs[1].type="text";   
}

icons[1].onclick = function()
{
    icons[1].style.display="none";
    icons[0].style.display="block";
    inputs[1].type="password";   
}
for(let i =0;i<inputs.length;i++)
{
    inputs[i].onblur = function(e)
    {
        if(e.target.value<3)
        {
            e.target.nextElementSibling.style.display="block";
        }else
        {
            e.target.nextElementSibling.style.display="none";

        }
    }
}

</script>
</body>
</html>


<?php
  
  if(isset($_POST['log']))
  {
      include('db.php');
      $mail = $_POST['mail'];
      $pass = $_POST['pass'];
      $sql="SELECT * FROM test WHERE mail = '$mail' AND  pass = '$pass'";
      $result = $connection->query($sql);
      if($result->num_rows>0)
      {
          session_start();
          while($rows = $result->fetch_assoc())
          {
              $_SESSION['id']=$rows['id'];
          }

          header('location:home.php');
      }
      else
      {
            echo"<h1 class='h12'> please try again  </h1> ";
      }
  }






?>