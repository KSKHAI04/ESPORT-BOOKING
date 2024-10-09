<?php
    session_start();
    if(isset($_SESSION['admin_id'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index</title>
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
        .main table, th, td{
            border: solid 2px;
            border-collapse:collapse;
            padding: 10px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 200px;
        }
        .main table{
            width:80%;
        }

        .pattern a{
            color:white;
            text-decoration: none;
        }
        
        nav{
            color: white;
        }


    </style>
</head>
<body>
 
<?php
$PAGE_TITLE = 'Select Student';

include('additionalhelp.php');


?>

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
                <!--
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#manageevents">Manage Events</a></li>
                </ul>
                -->
        </div>
    <div class="main">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: black;">List Of Events</nav>
    <?php
        $headers = array(
            'EventID'   => 'Event ID',
            'EventName' => 'eventName',
            'Time'      => 'Time',
        );
        
        $sort  = empty($_GET) ? 'EventID' : (array_key_exists($_GET['sort'], $headers) ? $_GET['sort'] : 'EventID');
        $order = empty($_GET) ? 'ASC' : ($_GET['order'] == 'DESC' ? 'DESC' : 'ASC');

        $eventName = isset($_GET['eventName']) ? (array_key_exists($_GET['eventName'], $EVENTS) ? $_GET['eventName'] : '%') : '%';
    
    ?>
    <table class="content-table" border="1" cellpadding="5" cellspacing="0">
   
    <?php
    

    foreach ($headers as $key => $value)
    {
        if ($key == $sort) // The sorted field.
        {
            printf('
            <th>
            <a href="?sort=%s&order=%s&eventName=%s">%s</a>
            <p>%s</p>
            </th>',
            $key,
            $order == 'ASC' ? 'DESC' : 'ASC',
            $eventName,
            $value,
            $order == 'ASC' ? 'Ascending' : 'Descending'); // Alt text.
        }
        else // Non-sorted field.
        {
            printf('
                <th>
                <a href="?sort=%s&order=ASC&eventName=%s">%s</a>
                </th>',
                $key,
                $eventName,
                $value);
        }
    }       
    ?>
    <th>Action</th>
    </tr>
    <?php
        $con = new mysqli('localhost', 'root', '' , 'gge');
        
        if($con->connect_error){
            die("Connection failed: " . $con->connect_error);
        }
        
        $sql = "SELECT * FROM event_form WHERE 'eventName' LIKE '".$eventName."' ORDER BY ".$sort." ".$order;
        
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) // got record return
        {
            while ($row = $result->fetch_object())
            {
                printf('
                <tbody>
                    <tr>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="edit.php?id=%s">Edit</a> |
                            <a class="btn btn-danger btn-sm" href="delete.php?id=%s">Delete</a>
                        </td>
                    </tr>
                 </tbody>',
                $row->EventID,
                $row->EventName,
                $row->Time,
                $row->EventID,
                $row->EventID
                );
            }
            
            printf('
            <tr>
                <td colspan="5">
                
                    %d Records Has Been Returned.&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="pattern">
                     <a button class="btn btn-primary w-25" href="create.php">Insert Event</a></button>
                     </div>
                </td>
            </tr>',
            $result->num_rows);
            
            $result->free();
            $con->close();
        }
        else // no record found
        {
    ?>
             <tr>
                 <td colspan="5">No Record Has Been Found&nbsp;&nbsp;&nbsp;&nbsp; 
                    <div class="">
                    <a button class="btn btn-primary w-25" href="create.php">Insert Event</a></button>
                    </div>
                </td>
             </tr>

             
    
    <?php
        }
    ?>
    </table>
    


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
</html><?php
    }else{
        header("Location: Homepage.php");
        exit();
    }

?>






    
       
               
        