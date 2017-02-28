<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Landlord/Tenant Platform</title>
    <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/create.css"    type="text/css" media="screen" />
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
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="inner-wrapper">
      <article id="create">
        <div id="create-inner">
          <h1>Create Issue</h1>

          <form method="POST">
            <label>Issue Title:</label>
            <input type="text" placeholder="Enter Title" name="title" id="title" required>

            <label>Issue Details:</label>
            <textarea placeholder="Enter Details" name="details" id="details" required></textarea>

            <label>Issue Severity:</label>
            <select onchange="this.style.color=this.options[selectedIndex].style.color">
              <option style="color: #000;" value="">Select Severity</option>
              <option style="color: #00BF1D;" value="low">Low</option>
              <option style="color: #0043BF;" alue="medium">Medium</option>
              <option style="color: #BFA300;" value="high">High</option>
              <option style="color: #BF2300;" value="critical">Critical</option>
            </select>

            <button type="submit">Submit Issue</button>
          </form>
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

            <p>full_name</p>
            <p>email</p>
            <p>phone</p>
          </div>

          <label class="collapse" for="property-drop-down">
            Property
            <a class="drop-down-icon"></a>
          </label>
          <input id="property-drop-down" type="checkbox">
          <div id="property">
            <h1>Property</h1>

            <p>address</p>
            <p>tenant_count</p>
            <p>type</p>
          </div>

          <label class="collapse" for="landlord-drop-down">
            Landlord
            <a class="drop-down-icon"></a>
          </label>
          <input id="landlord-drop-down" type="checkbox">
          <div id="landlord">
            <h1>Landlord</h1>

            <p>full_name</p>
            <p>email</p>
            <p>phone</p>
          </div>

          <label class="collapse" for="tenants-drop-down">
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
          </div>

          <label class="collapse" for="roommates-drop-down">
            Roommates
            <a class="drop-down-icon"></a>
          </label>
          <input id="roommates-drop-down" type="checkbox">
          <div id="roommates">
            <h1>Roommates</h1>

            <h2>roommate_full_name</h2>
            <p>roommate_email</p>
            <p>roommate_phone</p>

            <hr />

            <h2>roommate_full_name</h2>
            <p>roommate_email</p>
            <p>roommate_phone</p>            
          </div>
        </div>
      </aside>
    </section>
  </body>
</html>