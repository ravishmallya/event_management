<!DOCTYPE html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="tab_snippet.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="tab_snippet.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="tab_snippet.js"></script>
</head>
<body>

<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="newImg.jpg">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="newImg.jpg">
        </div>
        <div class="card-info"> <span class="card-title"><i>REGISTRATION</i></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab" value="Student"><span>Student</span>
                <div class="hidden-xs"></div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab" value="Staff"><span>Staff</span>
                <div class="hidden-xs"></div>
            </button>
        </div>
    </div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <div class="container">
            <div class="row main">
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">College Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" type="number" class="form-control" name="name" id="name"  placeholder="College Name" tabindex=0 onkeyup="keyEntered()" maxlength="3" disabled="true" 
                                    <?php echo (isset($_POST['username'])) ? ('value = "'.$_POST["username"].'"') : "value = \"\""; ?>/>
                                </div>
                            </div>
                            <span id="s_id"></span>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">No of People participating</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <select class="num_box" id='num_box' on></select>
                                </div>
                            </div>
                            <span id="s_num_box"></span>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="rep_name" class="cols-sm-2 control-label">Representative Name</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" name="rep_name" class="form-control" id="rep_name" required="true" />
                                    </div>
                                </div>
                                <span id="s_num_box"></span>
                            </div>
                            <div class="">
                                <label for="rep_number" class="cols-sm-2 control-label">Representative Contact No</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="tel" type="number" name="rep_number" class="form-control" id="rep_number" onchange="phonenumber()" required="true"/>    
                                    </div> 
                                </div>
                                <span id="s_cno"></span>
                            </div>
                        </div>
                        <div class="form-group ">
                            <button type="button" class="btn btn-primary btn-lg btn-block login-button" id="reg_button" name="bt_reg" value="Student">Confirm Registeration</button>
                        </div>
                        <div class="form-group" id="desc">
                            <p class="para"><b>YOU HAVE ALREADY REGISTERED FOR THIS EVENT</b></p>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
       
        </div>
        <div class="tab-pane fade in" id="tab2">
            <div class="container">
            <div class="row main">
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="#">
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">College Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" type="number" class="form-control" name="name" id="tname"  placeholder="College Name" tabindex=0 onkeyup="keyEntered()" maxlength="3" disabled="true"
                                    <?php echo (isset($_POST['username'])) ? ('value = "'.$_POST["username"].'"') : "value = \"\""; ?> />
                                </div>
                            </div>
                            <span id="s_id"></span>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">No of People participating</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <select class="num_box" id='tselect' on></select>
                                </div>
                            </div>
                            <span id="s_num_box"></span>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <label for="rep_name" class="cols-sm-2 control-label">Representative Name</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="text" name="rep_name" class="form-control" id="trep_name" required="true" />
                                    </div>
                                </div>
                                <span id="s_num_box"></span>
                            </div>
                            <div class="">
                                <label for="rep_number" class="cols-sm-2 control-label">Representative Contact No</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="tel" type="number" name="rep_number" class="form-control" id="trep_number" onchange="phonenumber()" required="true"/>    
                                         
                                    </div> 
                                </div>
                                <span id="s_cno"></span>
                            </div>

                        </div>
                        <div class="form-group ">
                            <button type="button" class="btn btn-primary btn-lg btn-block login-button" id="treg_button" value="Staff">Confirm Registeration</button>

                        </div>
                        <div class="form-group" id="tdesc">
                            <p class="para"><b>YOU HAVE ALREADY REGISTERED FOR THIS EVENT</b></p>
                        </div>
                    </form>
                </div>
            </div>
            </div>

        </div>

      </div>
      
    </div>
    </div>   
    <input type="text" name="i_hidden" id='i_hidden'<?php echo (isset($_POST['name'])) ? ('value = "'.$_POST["name"].'"') : "value = \"\""; ?> hidden="true"/>                
</body>
</html>

<?php
    $servername = "localhost";
    $username = "ravish";
    $password = "";
    
    $clg_id=$_POST["name"];

    $conn = new mysqli($servername, $username, $password,"event_project");
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        $result = $conn->query("SELECT * FROM `register_table` where college_id='$clg_id' LIMIT 0, 30");
        if ($result->num_rows>0)
        {
            while($row = $result->fetch_array(MYSQLI_ASSOC))
            {
                if($row['category']=='student')
                {
                    echo '<script type="text/javascript">',
                    'jsfunction();','</script>';
                }
                if($row['category']=='Staff')
                {
                     echo '<script type="text/javascript">',
                    'jsfunction2();','</script>';
                }
            }
            //echo '<script type="text/javascript">',
            //        'jsfunction();','</script>';
        }
    }
?>
