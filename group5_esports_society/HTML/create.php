<?php

include 'additionalhelp.php';

if(isset($_POST['submit'])){



  $id = mysqli_real_escape_string($conn,$_POST['id']);
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $time = ($_POST['time']);
  
  $select = " SELECT * FROM event_form WHERE EventID = '$id'";

  $result = mysqli_query($conn,$select);

  if($id == null){
     $error['id'] = 'Please enter your <b>ID</b>';
  }
  else if($result->num_rows > 0){
      $error['id'] = '<b>ID</b> is already exist';
  }
  else if (!preg_match('/^GGE\d{5}$/',$id)) {
      $error['id'] = 'Your username should consist <b>GGEXXXXX</b> "X" can be any number';
  }
  else{
        $insert = "INSERT INTO event_form(EventID,EventName,Time) VALUES('$id','$name','$time')";
        mysqli_query($conn, $insert);
        header('location:admin.php');
    }
  };
  


?>
<?php
    session_start();
    if(isset($_SESSION['admin_id'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE-edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <style type="text/css">
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body{
            overflow-x: hidden;
        }

       .container{
        padding: 0;
        display: flex;
        margin:-9px;
        max-width: 100%;
       }

       .menu, .main{
        padding: 20px;
            display: inline-block;
            height: 100vh;
        }

        .menu{ 
            flex: 1;
            max-width: 20vh;
            background-color: black;
            color: white;
        }
        .main{
            flex: 4;
            background-image: url('../Media/adminbg.jpg');
        }

         ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li a {
            display: block;
            margin-top: 10px;
            color: white;
        }

        #aName, .time{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: bold;
        }
        #aName:hover{
            text-decoration: underline;
            cursor: context-menu;
        }
        
        .forma{
            margin-left: 400px;
            margin-right: 400px;
            margin-top: 150px;
            padding: 30px;
        }
        
        .click{
            margin-left: 100px;
        }
        
        nav{
            color: white;
        }

        .error{
            padding-bottom: 20px;
        }


    </style>
</head>
<body>
<div class="container">
        <div class="menu">
            <p align="center" style="margin-bottom: 100px;">
                <img src="../Media/GGE.jpg" width="80%" >
                <br/>
                <span>Admin</span>
            </p>
            <div align="center">
                <div class="date">
                    <span id="clock" class="time"></span>
                    <br/>
                    <span id="date1" class="time"></span>
                    
                </div>
                <br/>
                <img src="../Media/profile.jpg" width="50vh">
                <br/>
                SIGNED IN AS:
                <span id="aName">
                    <?php
                        echo $_SESSION['admin_id'];
                    ?>
                    </span> <!--Placeholder-->  
                    <br/><br/>
                    <img src="../Media/logout.jpg" id="logout" width="20px" onclick="logOut()"/>
                    <script>
                        function logOut(){
                        if (confirm("Are you sure want to logout?")){
                            window.location.href = "logout.php";
                        }
                        }
                    </script>
                </div>

        </div>
        <div class="main">
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: black;">Add Events</nav>

        <div class="forma">
    <form action="" method="post">
        <?php
          if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
          };
        
        ?>
        
        <div class="row mb-3">
        <label for="id" class="col-sm-3 col-form-label">Event ID</label>
        <div class="col-sm-6">
        <input type="text" name="id" placeholder="Enter Event ID" autocomplete="off">
        </div>
        </div>
        <div class="row mb-3">
        <label for="eventName" class="col-sm-3 col-form-label">Event Name</label>
        <div class="col-sm-6">
        <input type="text" name="name"  placeholder="Enter Event Name" autocomplete="off" required>
        </div>
        </div>
        <div class="row mb-3">
        <label for="eventTime" class="col-sm-3 col-form-label">Event Time</label>
        <div class="col-sm-6">
        <input type="datetime-local" name="time"  placeholder="Enter Your Date And Time" autocomplete="off" required>
        </div>
        </div>
        <div class="click">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm">
        <input type="button" name="cancel" value="cancel" class="btn btn-danger btn-sm" onclick="location='admin.php'"/>
        </div>
    </form>
        </div>
</div>
</div>
   <!--Clock-->
<script type="text/javascript">
    window.onload = startTime();
    function startTime() {
        const weekArr = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        const monthArr = ["January","February","March","April","May","June","July","August","September","October","November","December"];

        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();

        let day = today.getDate();
        var week = weekArr[today.getDay()];
        var month = monthArr[today.getMonth()];

        document.getElementById("date1").innerHTML = week + ", " + day +" " + month ;
        h = checkTime(h);
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
        setTimeout(startTime, 1000);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
    
</script>
</body>
</html>
<?php
    }else{
        header("Location: Homepage.php");
        exit();
    }

?>