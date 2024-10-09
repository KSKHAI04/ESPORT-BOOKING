<?php
    session_start();
    if(isset($_SESSION['admin_id'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Theatre Society</title>
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

        nav{
            color: white;
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

        .info{
            text-align: center;
            border: solid 1px;
            max-width: 30%;
            border-radius: 1dvh;
            margin-left: 420px;
            padding: 20px;
            margin-bottom: -100px;
            margin-top: 100px;
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
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#manageevents">Manage Events</a></li>
                <li><a href="#contact"></a></li>
              </ul>

        </div>
<div class="main">
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: black;">Add Events</nav>
<?php
$PAGE_TITLE = 'Edit Student';
include('additionalhelp.php');

?>

<!-- Start of content -->
<!-- P4Q2 -->
    
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            //echo "i load the form";
            
            $id = isset($_GET['id']) ? strtoupper(trim($_GET['id'])) : null;
            
            $con = new mysqli('localhost','root', '', 'gge');
            
            $id  = $con->real_escape_string($id);
            $sql = "SELECT * FROM event_form WHERE EventID = '".$id."'";
            
            $result = $con->query($sql);
            
            if ($row = $result->fetch_object())
            {
                $hideForm = false; // Flag, "false" to show the form.
            
                // Record found. Read field values.
                $id       = $row->EventID;
                $name     = $row->EventName;
                $time     = $row->Time;
            }
            else
            {
                echo '
                <div class="error">
                Opps. Record not found.
                [ <a href="admin.php">Back to list</a> ]
                </div>
                ';

                $hideForm = true; // Flag, "true" to hide the form.
            }
            
            $result->free();
            $con->close();
        }
        else
        {
            //echo "i go update the record";
            
            $hideForm = false;
            
            $id      = strtoupper(trim($_POST['id']));
            $name    = trim($_POST['name']);
            $time  = trim($_POST['time']);
            
            $error['name']    = validateEventName($name);
       
            
            $error = array_filter($error); // Remove null values.
            
            if (empty($error)) // data validation passed
            {
                $con = new mysqli('localhost', 'root', '', 'gge');
                
                $sql = '
                UPDATE event_form SET 
                EventName = ?, 
                Time = ?
                WHERE 
                EventID = ?
                ';
                
                $stm = $con->prepare($sql);
                
                $stm->bind_param('sss', $name, $time, $id);
                
                if($stm->execute()) // update success
                {
                    printf('
                    <div class="info">
                    Event <strong>%s</strong> has been updated.
                    <input type="button" value="Back To List" class="btn btn-secondary btn-sm" onclick="location=\'admin.php\'"/>
                    </div>',
                    $id);
                }
                else // update failed
                {
                    echo '
                    <div class="error">
                    Opps. Database issue. Record not updated.
                    </div>
                    ';
                }
                
                $stm->close();
                $con->close();
            }
        }
    ?>
    
    <?php 
        if ($hideForm == false)
        {
    ?>    
    <div class="forma">
            <form action="" method="post">
                <table cellpadding="5" cellspacing="0">
                    <tr>
                        <td><label for="id">Event ID :</label></td>
                        <td>
                            <?php echo $id ?>
                            <?php htmlInputHidden('id', $id) // Hidden field. ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="name">Event Name :</label></td>
                        <td>
                            <?php htmlInputText('name', $name, 30) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Time :</td>
                        <td>
                            <?php htmlInputText('time', $time) ?>
                        </td>
                    </tr>
                </table>
                <br/>
                <div class="click">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm">
                <input type="button" name="cancel" value="Cancel" class="btn btn-danger btn-sm" onclick="location='admin.php'"/>
                </div>
            </form>
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
}
        }
        else{
            header("Location: Homepage.php");
            exit();
        }
    ?>
