<?php
    ob_start();
    session_start();
    require 'DBC.php';
    
    if($_GET && $_GET["exit"] == 1){
        unset($_SESSION);
        header("Location: welcome.php");
        exit();
    }
    
    if($_SESSION["LTPLogged"] == false){
        header("Location: welcome.php");
        exit();
    }else {
        $db = new DBLink;
        $UserInfo = $db->getUserInfo($_SESSION["LTPUserID"]);
        $RoommateInfo = $db->getRoommmates($UserInfo["PropertyID"],$UserInfo["TenantID"]);
    
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
	    <script>
	         $(document).ready(function() {
	             //var LTPName = "";
	             
	             var RoommateAmount = <?php echo $UserInfo["TotalTenants"]; ?> ;
	             
	             
	             $("#FullName").text("<?php echo $_SESSION["LTPUserName"]; ?>");
	             $("#Email").text("<?php echo $UserInfo["Email"]; ?>"); 
	             $("#Phone").text("<?php echo $UserInfo["Phone"]; ?>"); 
	             $("#LandlordName").text("<?php echo $UserInfo["LandlordFirstName"] . " " . $UserInfo["LandlordLastName"]; ?>"); 
	             $("#LandlordEmail").text("<?php echo $UserInfo["LandlordEmail"]; ?>");
	             $("#LandlordPhone").text("<?php echo $UserInfo["LandlordPhone"]; ?>");
	             $("#Address").text("<?php echo $UserInfo["Address"]; ?>");
	             $("#TenantAmount").text("Total Tenants: <?php echo $UserInfo["TotalTenants"]; ?>");
	             
	             if(RoommateAmount > 1) {
	                 $RoommateCon = $("#roommateCell").clone();
	                 
	                 //$("$RoommateCon").data("#roommateName").text("HAHAH");
	                // $(this).html($RoommateCon);
	             }else
	            
	                 $("#roommates").css("display", "none");
	             
	         });
	    </script>
        <?php
        
    }
    

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Landlord/Tenant Platform</title>
	  <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
	  <link rel="stylesheet" href="css/index.css"     type="text/css" media="screen" />
	  
  </head>

  <body>
    <header>
      <div id="header-inner">
        <a href="index.php" id="logo"></a>

        <nav>
          <a id="menu"></a>

          <ul>
            <li><a href="create.php">Create Issue</a></li>
            <li><a href="index.php">Current Issues</a></li>
            <li><a href="history.php">Issue History</a></li>
            <li><a href="index.php?exit=1">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="inner-wrapper">
      <article id="issue-list">
        <div id="issue-list-inner">
          <h1>Issue History</h1>

          <div class="issue">
            <table>
              <tr class="issue-bar">
                <td>#issue_id</td>
                <td><a href="#"></a></td>
              </tr>

              <tr>
                <th>Issue Name</th>
                <td>Issued By: user_name</td>
              </tr>

              <tr>
                <td>Issue Details</td>
                <td>Issued On: date</td>
              </tr>
            </table>
          </div>

          <div class="issue">
            <table>
              <tr class="issue-bar">
                <td>#issue_id</td>
                <td><a href="#"></a></td>
              </tr>

              <tr>
                <th>Issue Name</th>
                <td>Issued By: user_name</td>
              </tr>

              <tr>
                <td>Issue Details</td>
                <td>Issued On: date</td>
              </tr>
            </table>
          </div>

          <div class="issue">
            <table>
              <tr class="issue-bar">
                <td>#issue_id</td>
                <td><a href="#"></a></td>
              </tr>

              <tr>
                <th>Issue Name</th>
                <td>Issued By: user_name</td>
              </tr>

              <tr>
                <td>Issue Details</td>
                <td>Issued On: date</td>
              </tr>
            </table>
          </div>
        </div>
      </article>

      <aside id="information">
        <div id="information-inner">
          <label class="collapse" for="profile-drop-down">
            Profile
            <a class="drop-down-icon"></a>
          </label>
          <input id="profile-drop-down" type="checkbox">
          <div id="profile">
            <h1>Profile</h1>

            <p id="FullName">full_name</p>
            <p id="Email">email</p>
            <p id="Phone">phone</p>
          </div>

          <label class="collapse" for="property-drop-down">
            Property
            <a class="drop-down-icon"></a>
          </label>
          <input id="property-drop-down" type="checkbox">
          <div id="property">
            <h1>Property</h1>

            <p id="Address">address</p>
            <p id="TenantAmount">tenant_count</p>
            <!--<p>type</p>-->
          </div>

          <label class="collapse" for="landlord-drop-down">
            Landlord
            <a class="drop-down-icon"></a>
          </label>
          <input id="landlord-drop-down" type="checkbox">
          <div id="landlord">
            <h1>Landlord</h1>

            <p id="LandlordName">full_name</p>
            <p id="LandlordEmail">email</p>
            <p id="LandlordPhone">phone</p>
          </div>

          <!--<label class="collapse" for="tenants-drop-down">
            Tenants
            <a class="drop-down-icon"></a>
          </label>
          <input id="tenants-drop-down" type="checkbox">
          <div id="tenants">
            <h1>Tenants</h1>

            <h2>tenant_full_name</h2>
            <p>tenant_email</p>
            <p>tenant_phone</p>

            <hr />

            <h2>tenant_full_name</h2>
            <p>tenant_email</p>
            <p>tenant_phone</p>            
          </div>-->

          <label class="collapse" for="roommates-drop-down">
            Roommates
            <a class="drop-down-icon"></a>
          </label>
          <input id="roommates-drop-down" type="checkbox">
          <div id="roommates">
            <h1>Roommates</h1>

            <div id="roommateCell" style="border:none;padding:0;margin:0;display:none">
                <h2 id="roommateName">roommate_full_name</h2>
                <p>roommate_email</p>
                <p>roommate_phone</p>
            </div>

            <!--<hr />

            <h2>roommate_full_name</h2>
            <p>roommate_email</p>
            <p>roommate_phone</p>   -->         
          </div>
        </div>
      </aside>
    </section>
  </body>
</html>