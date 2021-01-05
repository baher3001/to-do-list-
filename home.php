<?php
  session_start();
if(isset($_SESSION['id']))
{
  
}else
{
    header('location:login.php?error=1');
}




?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to do list </title>
    <link rel="icon" href="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Clipboard-Plan-512.png">
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        body
        {
            background-color: blue;
        }
        div
            {
                border: 2px solid white;
                width: 50%;
                text-align: center;
                margin-left: 25vw;
                margin-top: 10vh;
                padding: 30px;
                color:white;

            }
            div .form-control 
            {
                width:100%;
                padding:20px;
                border-radius: 15px;
                font-size: 15px;

            }
            div h1
            {
                margin-bottom: 10px;

            }

            div h2
            {
                margin-bottom: 15px;

            }
            .done
            {
                color:red;
                text-decoration:line-through;
            }
            ul
            {
                list-style:none;
            }
    </style>
</head>
<body>
     
     <div>
           <h1 id="day"> day </h1>
           <h2 id="data">  data </h2>
           <input type="text"   class="form-control" placeholder="Enter your task here " id="task">
            <button class="btn btn-primary btn-block mt-3" id="add"> add   </button>
            <h3  id="h3" style="color:red; display:none;"> please enter your task here   </h3>
            <details open class="mt-3">
            <summary> Task </summary>
            <ul>

            
            </ul>
            </details>
            <button class="btn btn-danger btn-block mt-3" id="clear"> Clear  </button>

      
     </div>
    




    <script >
        let task = document.getElementById('task');
        let add = document.getElementById('add');
        let clear = document.getElementById('clear');
        let ul = document.querySelector('ul');
        let datatoday = new Date().toLocaleDateString()
        document.getElementById('data').innerHTML=datatoday;  
        var todaynum =new Date().getDate();
        var days = ['Monday','Tuesday','Wednesday','Thurday','Friday','Sturday','Sunday']
        var day = days[todaynum-4]

        document.getElementById('day').innerHTML=day

        
        add.onclick = function()
        {
            if(task.value)
            {   
                document.getElementById('h3').style.display="none";
                var li = document.createElement('li');
                ul.appendChild(li)
                li.innerHTML= task.value;
                task.value=" "
                li.onclick = function()
                    {
                        li.classList.toggle('done');
                    }
                
            }
            else
            {
                document.getElementById('h3').style.display="block";

            }
        }
        
        clear.onclick =function()
            {
               location.reload();
            }

                
    
    
    </script>
</body>
</html>