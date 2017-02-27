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
            <li><a href="#">Create Issue</a></li>

            <li class="right"><a href="logout.php">Logout</a></li>
            <li class="right"><a href="profile.php">Profile</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="inner-wrapper">
      <article id="issue-list">
        <div id="issue-list-inner">
          <h1>Previous Issues</h1>

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
          <h1>Property Information</h1>
          <p>hello</p>
        </div>
      </aside>
    </section>
  </body>
</html>