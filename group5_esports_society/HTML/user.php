<?php
    session_start();
    if(isset($_SESSION['user_id'])&&isset($_SESSION['user_name'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body{
            overflow-x: hidden;
        }

       .container{
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
            background-color: rgb(33, 78, 105);
            color: white;
        }
        .main{
            flex: 4;
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
            text-decoration: none;
        }

        #aName, .time{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: bold;
        }
        #aName:hover{
            text-decoration: underline;
            cursor: context-menu;
        }

        .head{
            text-align: center;
        }

        .personal h3{
            font-size: 25px;
        }
        
        .personal{
            border: solid 1px;
            border-radius: 1cap;
            max-width: 40%;
            padding: 15px;
            margin-left: 370px;
            margin-bottom: 30px;
            text-align: center;
            background-color: lightblue; 
        }

        .membership{
            width: 40%; 
            background-color: lightblue; 
            padding: 20px;
            border: 1px solid; 
            text-align: center;
            margin-left: 25px;
            border-radius: 1cap;
        }

        .payment{
            width: 40%; 
            background-color: lightblue; 
            padding: 20px;
            border: 1px solid; 
            text-align: center;
            margin-right:25px ;
            border-radius: 1cap;
        }

        .box{
            margin-left: 100px;
            display: flex;
        }

        button{
            font-size: 15px;
            padding:3px;
            min-width: 60px;
            background-color: white;
            transition: 0.7s;
        }

        button:hover{
            background-color:rgb(154, 203, 255);
        }

        a{
            text-decoration: none;
        }

        .head p{
            font-size: 17px;
            margin-bottom: 70px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="menu">
            <p align="center" style="margin-bottom: 100px;">
                <br/>
                <span><b>GGE</b><bre/>User Profile Page</span>
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
                        echo $_SESSION['user_name'].
                    "<br/>";
                    echo "ID:".$_SESSION['user_id'];
                    ?>
                </span> <!--Name-->  
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
            <ul>
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="#">Personal Info</a></li>
                <li><a href="#">Payment History</a></li>
                <li><a href="#">MemberShip Status</a></li>
              </ul>

        </div>
        <div class="main">
            <div class="head">
            <h1>Welcome To User Page</h1>
            <p>Manage your info, privacy and security to make GGE work for better you.&nbsp;&nbsp;<a href="#">Learn More</a></p>
            </div>
            <div class="personal">
                <h3>Manage Your Info</h3>
                <p>Edit and Change Your Personal GGE Account's Info </p>
                <a href="#"><button>Start</button></a>
            </div>
            <div class="box">
            <div class="payment">
            <div class="box1">
                <h3>Check Your History</h3>
                <p>Check and Ensure your payment details after purchased</p>
                <a href="#"><button>Check</button></a>
            </div>
            </div>
            <div class="membership">
            <div class="box1">
                <h3>Join Our Membership</h3>
                <p>Join our membership to get more advantages!</p>
                <a href="#"><button>Join</button></a>
            </div>
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