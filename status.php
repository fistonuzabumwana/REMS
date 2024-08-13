<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: signin.html");
    exit();
}
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rems";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM contactinfo";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM user";
$result2 = $conn->query($sql2);
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en-RW"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Stakeholders Contact Information">
    <meta name="description" content="">
    <title>status</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="status.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.15.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="fonts.css">
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Real Estate Management System",
		"logo": "images/real-estate-management-system-high-resolution-logo-transparent.png",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name",
				"https://instagram.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="status">
    <meta name="twitter:description" content="Real Estate Management System">
    <meta property="og:title" content="status">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-9bdf" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" data-image-width="1920" data-image-height="540"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-image u-image-round u-logo u-radius u-image-1" data-image-width="2000" data-image-height="2000">
          <img src="images/real-estate-management-system-high-resolution-logo-transparent.png" class="u-logo-image u-logo-image-1">
        </a>
         <?php
        if (isset($_SESSION['user_id'])) {
       echo "<a href='logout.php' onclick='return confirmLogout()' class='u-image u-image-round u-logo u-radius u-image-2' data-image-width='150' data-image-height='150' title='signin'>
          <img src='images/guest-128.png' class='u-logo-image u-logo-image-2'>
        </a>";
      }
      else{
        echo "<a href='signin.html' class='u-image u-image-round u-logo u-radius u-image-2' data-image-width='150' data-image-height='150' title='signin'>
          <img src='images/guest-128.png' class='u-logo-image u-logo-image-2'>
        </a>";
      }
      ?>
     <script>
function confirmLogout() {
    var confirmMessage = "Are you sure you want to log out?";
    return confirm(confirmMessage); // Returns true if the user clicks "OK", otherwise false
}
</script>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XS">
          <div class="menu-collapse" style="font-size: 0.875rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-effect-duration u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-nav-link u-text-active-custom-color-1 u-text-hover-custom-color-2 u-text-white" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-heading-font u-nav u-spacing-30 u-unstyled u-nav-1" data-submenu-level="with-reload"><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white u-text-white" href="index.php" style="padding: 8px 5px;">Home</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white u-text-white" href="About.php" style="padding: 8px 5px;">About Us</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white u-text-white" href="Services.php" style="padding: 8px 5px;">Services</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white u-text-white" href="property.php" style="padding: 8px 5px;">Property</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-custom-color-10 u-hover-grey-10 u-nav-link u-text-hover-black u-text-white" href="property.php">RENT HOUSE</a>
</li><li class="u-nav-item"><a class="u-button-style u-custom-color-10 u-hover-grey-10 u-nav-link u-text-hover-black u-text-white" href="property.php">BUY HOUSE</a>
</li><li class="u-nav-item"><a class="u-button-style u-custom-color-10 u-hover-grey-10 u-nav-link u-text-hover-black u-text-white" href="property.php">BUY LAND</a>
</li><li class="u-nav-item"><a class="u-button-style u-custom-color-10 u-hover-grey-10 u-nav-link u-text-hover-black u-text-white" href="property.php">LEASES OF LAND OR HOUSE</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white u-text-white" href="Contact.php" style="padding: 8px 5px;">Contact</a>
<?php 
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
echo "</li><li class='u-nav-item'><a class='u-active-custom-color-2 u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-custom-color-2 u-nav-link u-text-active-white u-text-hover-white u-text-white' href='status.php' style='padding: 8px 5px;'>Admin</a>";
}
?></li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-spacing-5 u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php">About Us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Services.php">Services</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="property.php">Property</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-custom-color-10 u-hover-grey-10 u-nav-link u-text-hover-black u-text-white" href="property.php">RENT HOUSE</a>
</li><li class="u-nav-item"><a class="u-button-style u-custom-color-10 u-hover-grey-10 u-nav-link u-text-hover-black u-text-white" href="property.php">BUY HOUSE</a>
</li><li class="u-nav-item"><a class="u-button-style u-custom-color-10 u-hover-grey-10 u-nav-link u-text-hover-black u-text-white" href="property.php">BUY LAND</a>
</li><li class="u-nav-item"><a class="u-button-style u-custom-color-10 u-hover-grey-10 u-nav-link u-text-hover-black u-text-white" href="property.php">LEASES OF LAND OR HOUSE</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php">Contact</a>
<?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="status.php">Admin</a>
<?php endif; ?>


</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <p class="u-align-center u-small-text u-text u-text-variant u-text-white u-text-1">
          <a class="u-btn u-button-link u-button-style u-text-body-alt-color u-text-hover-grey-5 u-btn-1" data-href="signin.html" href="signin.html">
          <?php 
if (isset($_SESSION['user_id'])) {
  // Output the username
  echo $_SESSION['username'];
} else {
  echo "Login";
}
?> 
          </a>
        </p>
        <img class="u-image u-image-contain u-image-default u-image-3" src="images/logo-no-background1.png" alt="" data-image-width="1500" data-image-height="339">
        <form action="#" method="get" class="u-border-2 u-border-custom-color-1 u-radius u-search u-search-left u-white u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10 u-search-icon-1">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xlink:href="#svg-6309"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-6309" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
            </span>
          </button>
          <input class="u-search-input u-search-input-1" type="search" name="search" value="" placeholder="Search">
        </form>
      </div></header>
    <section class="u-align-center u-clearfix u-container-align-center u-custom-color-9 u-section-1" id="sec-c04a">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-9 u-section-2" id="sec-a12c">
      <div class="u-clearfix u-sheet u-sheet-1">
  <h1 class='u-align-center u-custom-font u-font-courier-new u-text u-text-custom-color-1 u-text-default u-text-1'>
    <?php 

if (isset($_SESSION['user_id'])) {
      // Output the username
      echo "Welcome Back, " . $_SESSION['username'] . "!";
  } else {
      echo "No username found. Please log in.";
  }
  ?>
    </h1>;

        </div>
        <section class="u-align-center u-clearfix u-custom-color-9 u-section-3" id="sec-698b">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-custom-color-10 u-text-default u-text-1">User Management</h1>
        <div class="custom-expanded u-table u-table-responsive u-table-1">
            <table class="u-table-entity u-table-entity-1" id="editableTable">
                <colgroup>
                    <col width="3.28%">
                    <col width="17.31%">
                    <col width="14.51%">
                    <col width="17.68%">
                    <col width="3.88%">
                    <col width="11.33%">
                    <col width="19.33%">
                    <col width="3.88%">
                    <col width="11.33%">
                    <col width="19.33%">
                </colgroup>
                <thead class="u-custom-color-10 u-table-header u-table-header-1">
                    <tr style="height: 42px;">
                        <th class="u-border-1 u-border-custom-color-2 u-table-cell">No</th>
                        <th class="u-border-1 u-border-custom-color-2 u-table-cell">First name</th>
                        <th class="u-border-1 u-border-custom-color-2 u-table-cell">Last name</th>
                        <th class="u-border-1 u-border-custom-color-2 u-table-cell">Country</th>
                        <th class="u-border-1 u-border-custom-color-2 u-table-cell">Email</th>
                        <th class="u-border-1 u-border-custom-color-2 u-table-cell">Phone</th>
                        <th class="u-border-1 u-border-custom-color-2 u-table-cell">Password</th>
                        <th class="u-border-1 u-border-custom-color-2 u-table-cell">Date</th>
                        <th class="u-border-1 u-border-custom-color-2 u-table-cell">Agree</th>
                        <th class="u-border-1 u-border-custom-color-2 u-table-cell">Role</th>
                    </tr>
                </thead>
                <tbody class="u-table-body u-text-black u-table-body-1">
                <?php
                $index = 1;
                if ($result2->num_rows > 0) {
                    while($row = $result2->fetch_assoc()) {
                        echo "<tr data-id='" . $row["id"] . "' style='height: 7px;'>
                                <td class='u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-19'>" . $index. "</td>
                                <td class='u-border-1 u-border-grey-30 u-table-cell' contenteditable='true'>" . $row["firstname"]. "</td>
                                <td class='u-border-1 u-border-grey-30 u-table-cell' contenteditable='true'>" . $row["lastname"]. "</td>
                                <td class='u-border-1 u-border-grey-30 u-table-cell' contenteditable='true'>" . $row["country"]. "</td>
                                <td class='u-border-1 u-border-grey-30 u-table-cell' contenteditable='true'>" . $row["email"]. "</td>
                                <td class='u-border-1 u-border-grey-30 u-table-cell' contenteditable='true'>" . $row["phone"]. "</td>
                                <td class='u-border-1 u-border-grey-30 u-table-cell' contenteditable='true'>" . $row["password"]. "</td>
                                <td class='u-border-1 u-border-grey-30 u-table-cell' contenteditable='true'>" . $row["date"]. "</td>
                                <td class='u-border-1 u-border-grey-30 u-table-cell' contenteditable='true'>" . $row["agreed"]. "</td>
                                <td class='u-border-1 u-border-grey-30 u-table-cell' contenteditable='true'>" . $row["role"]. "</td>
                              </tr>";
                              $index++;
                    }
                } else {
                    echo "<tr class='u-border-1 u-border-grey-30 u-table-cell'><td colspan='10'>No records found</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <button class="save-button"   onclick="saveTableData()">Save Changes</button>
    </div>
</section>
    <section class="u-align-center u-clearfix u-custom-color-9 u-section-3" id="sec-698b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-custom-color-10 u-text-default u-text-1">Stakeholders Contact Information</h1>
        <div class="custom-expanded u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="3.28%">
              <col width="17.31%">
              <col width="14.51%">
              <col width="17.68%">
              <col width="3.88%">
              <col width="11.33%">
              <col width="19.33%">

            </colgroup>
            <thead class="u-custom-color-10 u-table-header u-table-header-1">
              <tr style="height: 42px;">
                <th class="u-border-1 u-border-custom-color-2 u-table-cell">No </th>
                <th class="u-border-1 u-border-custom-color-2 u-table-cell">Full name </th>
                <th class="u-border-1 u-border-custom-color-2 u-table-cell">Email </th>
                <th class="u-border-1 u-border-custom-color-2 u-table-cell"> Phone </th>
                <th class="u-border-1 u-border-custom-color-2 u-table-cell">Gender </th>
                <th class="u-border-1 u-border-custom-color-2 u-table-cell"> Service </th>
                <th class="u-border-1 u-border-custom-color-2 u-table-cell"> Message </th>
              </tr>
            </thead>
            <tbody class="u-table-body u-text-black u-table-body-1">
            <?php
            $index = 1;
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  
                    echo "<tr style='height: 7px;'>
                            <td class='u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-19'>" . $index. "</td>
                            <td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["name"]. "</td>
                            <td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["email"]. "</td>
                            <td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["phone"]. "</td>
                            <td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["gender"]. "</td>
                            <td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["service"]. "</td>
                            <td class='u-border-1 u-border-grey-30 u-table-cell'>" . $row["message"]. "</td>
                          </tr>";
                          $index++;
                }
            } else {
                echo "<tr class='u-border-1 u-border-grey-30 u-table-cell'><td colspan='7'>No records found</td></tr>";
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>

<script>
function saveTableData() {
    const table = document.getElementById('editableTable');
    const rows = table.getElementsByTagName('tr');
    const data = [];

    for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header
        const cells = rows[i].getElementsByTagName('td');
        const rowData = {
            id: rows[i].getAttribute('data-id'),
            firstname: cells[1].innerText,
            lastname: cells[2].innerText,
            country: cells[3].innerText,
            email: cells[4].innerText,
            phone: cells[5].innerText,
            password: cells[6].innerText,
            date: cells[7].innerText,
            agreed: cells[8].innerText,
            role: cells[9].innerText
        };
        data.push(rowData);
    }

    // Send data to the server via AJAX
    fetch('save_changes.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(result => {
        alert('Changes saved successfully!');
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
</script>
    
    <section class="u-align-center u-clearfix u-custom-color-9 u-section-4" id="carousel_357b">
      <h1 class="u-align-center u-text u-text-custom-color-10 u-text-default u-text-1">Selling House Client</h1>
      <div class="custom-expanded u-table u-table-responsive u-table-1">
        <table class="u-table-entity u-table-entity-1">
          <colgroup>
            <col width="16.6%">
            <col width="16.6%">
            <col width="12.1%">
            <col width="21.1%">
            <col width="16.6%">
            <col width="17%">
          </colgroup>
          <thead class="u-custom-color-10 u-table-header u-table-header-1">
            <tr style="height: 39px;">
              <th class="u-border-1 u-border-custom-color-2 u-table-cell">Column 1 </th>
              <th class="u-border-1 u-border-custom-color-2 u-table-cell">Column 2 </th>
              <th class="u-border-1 u-border-custom-color-2 u-table-cell">Column 3 </th>
              <th class="u-border-1 u-border-custom-color-2 u-table-cell">Column 4 </th>
              <th class="u-border-1 u-border-custom-color-2 u-table-cell"></th>
              <th class="u-border-1 u-border-custom-color-2 u-table-cell"></th>
            </tr>
          </thead>
          <tbody class="u-table-body u-text-black u-table-body-1">
            <tr style="height: 39px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-7">Row 1</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
            </tr>
            <tr style="height: 28px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-13">Row 2</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
            </tr>
            <tr style="height: 39px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-19">Row 3</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
            </tr>
            <tr style="height: 26px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-25">Row 4</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-9 u-section-5" id="carousel_0328">
      <h1 class="u-align-center u-text u-text-custom-color-10 u-text-default u-text-1">Renting House Client</h1>
      <div class="custom-expanded u-table u-table-responsive u-table-1">
        <table class="u-table-entity u-table-entity-1">
          <colgroup>
            <col width="12.1%">
            <col width="19%">
            <col width="18.7%">
            <col width="16.6%">
            <col width="16.6%">
            <col width="17%">
          </colgroup>
          <thead class="u-custom-color-10 u-table-header u-table-header-1">
            <tr style="height: 48px;">
              <th class="u-border-1 u-border-custom-color-2 u-table-cell">Column 1 </th>
              <th class="u-border-1 u-border-custom-color-2 u-table-cell">Column 2 </th>
              <th class="u-border-1 u-border-custom-color-2 u-table-cell">Column 3 </th>
              <th class="u-border-1 u-border-custom-color-2 u-table-cell">Column 4 </th>
              <th class="u-border-1 u-border-custom-color-2 u-table-cell"></th>
              <th class="u-border-1 u-border-custom-color-2 u-table-cell"></th>
            </tr>
          </thead>
          <tbody class="u-table-body u-text-black u-table-body-1">
            <tr style="height: 30px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-7">Row 1</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
            </tr>
            <tr style="height: 26px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-13">Row 2</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
            </tr>
            <tr style="height: 31px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-19">Row 3</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
            </tr>
            <tr style="height: 31px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-25">Row 4</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-custom-color-10 u-footer u-footer" id="sec-4d1a"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-1"><span class="u-icon u-text-white u-icon-1"><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path d="M56.612,4.569c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c3.736,3.736,3.736,9.815,0,13.552
		c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		C61.128,16.434,61.128,9.085,56.612,4.569z"></path><path d="M52.401,6.845c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414c1.237,1.237,1.918,2.885,1.918,4.639
		s-0.681,3.401-1.918,4.638c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293
		c1.615-1.614,2.504-3.764,2.504-6.052S54.017,8.459,52.401,6.845z"></path><path d="M4.802,5.983c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0c-4.516,4.516-4.516,11.864,0,16.38
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		C1.065,15.799,1.065,9.72,4.802,5.983z"></path><path d="M9.013,6.569c-0.391-0.391-1.023-0.391-1.414,0c-1.615,1.614-2.504,3.764-2.504,6.052s0.889,4.438,2.504,6.053
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
		c-1.237-1.237-1.918-2.885-1.918-4.639S7.775,9.22,9.013,7.983C9.403,7.593,9.403,6.96,9.013,6.569z"></path><circle cx="30" cy="53" r="2"></circle><path d="M42.595,0H17.405C14.976,0,13,1.977,13,4.405v51.189C13,58.023,14.976,60,17.405,60h25.189C45.024,60,47,58.023,47,55.595
		V4.405C47,1.977,45.024,0,42.595,0z M33,3h1c0.552,0,1,0.447,1,1s-0.448,1-1,1h-1c-0.552,0-1-0.447-1-1S32.448,3,33,3z M26,3h4
		c0.552,0,1,0.447,1,1s-0.448,1-1,1h-4c-0.552,0-1-0.447-1-1S25.448,3,26,3z M30,57c-2.206,0-4-1.794-4-4s1.794-4,4-4s4,1.794,4,4
		S32.206,57,30,57z M45,46H15V8h30V46z"></path>
</g></svg></span>&nbsp;Toll Free: 1010
        </p>
        <img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-1" src="images/real-estate-management-system-high-resolution-logo-transparent.png" alt="" data-image-width="2000" data-image-height="2000">
        <p class="u-align-left u-text u-text-2"><span class="u-icon u-opacity u-opacity-95 u-icon-2"><svg class="u-svg-content" viewBox="0 0 54.757 54.757" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952
	L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M27.557,26c-3.859,0-7-3.141-7-7s3.141-7,7-7s7,3.141,7,7
	S31.416,26,27.557,26z"></path></svg></span> &nbsp;Kg 647 Street, ​Rwanda
        </p>
        <p class="u-text u-text-3"><span class="u-file-icon u-icon u-text-white u-icon-3"><img src="images/3771343-a7bb209c.png" alt=""></span>www.rems.com
        </p>
        <a href="#" class="u-btn u-btn-rectangle u-button-style u-text-hover-grey-25 u-btn-1"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg></span>&nbsp;+ (250) 78-526-3279
        </a>
        <p class="u-text u-text-4"><span class="u-file-icon u-icon u-text-white u-icon-5"><img src="images/149973-70f77af9.png" alt=""></span> P. O Box 4016
        </p>
        <a href="mailto:info@rab.gov.rw" class="u-btn u-btn-rectangle u-button-style u-text-hover-grey-25 u-text-white u-btn-2"><span class="u-icon u-opacity u-opacity-95 u-text-white u-icon-6"><svg class="u-svg-content" viewBox="0 0 24 16" x="0px" y="0px" style="width: 1em; height: 1em;"><path fill="currentColor" d="M23.8,1.1l-7.3,6.8l7.3,6.8c0.1-0.2,0.2-0.6,0.2-0.9V2C24,1.7,23.9,1.4,23.8,1.1z M21.8,0H2.2
	c-0.4,0-0.7,0.1-1,0.2L10.6,9c0.8,0.8,2.2,0.8,3,0l9.2-8.7C22.6,0.1,22.2,0,21.8,0z M0.2,1.1C0.1,1.4,0,1.7,0,2V14
	c0,0.3,0.1,0.6,0.2,0.9l7.3-6.8L0.2,1.1z M15.5,9l-1.1,1c-1.3,1.2-3.6,1.2-4.9,0l-1-1l-7.3,6.8c0.2,0.1,0.6,0.2,1,0.2H22
	c0.4,0,0.6-0.1,1-0.2L15.5,9z"></path></svg></span>info@rems.com
        </a>
        <div class="u-hover-feature u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-e9ee"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e9ee"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-icon-8"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.2 112.2" style=""><use xlink:href="#svg-1edc"></use></svg><svg class="u-svg-content" viewBox="0 0 112.2 112.2" x="0px" y="0px" id="svg-1edc"><path d="M67.1,49.1L98.6,16h-12L62,42L43.2,16H11l32.8,45.2L11,96h11.6l26.3-27.7L69.1,96H101L67.1,49.1z M55,61.9l-5.1-7L27.5,24.4
	h11.4l17.3,23.8l5.1,7.1l23.4,32.2H73.8L55,61.9z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-icon-9"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-2553"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-2553"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href=""><span class="u-icon u-social-icon u-social-youtube u-icon-10"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-c132"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c132"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="LinkedIn" title="LinkedIn" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-11"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-a934"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a934"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
      C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
      H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="Whatsapp" title="Whatsapp" href=""><span class="u-icon u-social-icon u-social-whatsapp u-icon-12"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-d05f"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d05f"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,28.3C77.2,21.7,68.4,18,59,18c-19.3,0-35.1,15.7-35.1,35.1c0,6.2,1.6,12.2,4.7,17.5l-5,18.2L42.2,84
	c5.1,2.8,10.9,4.3,16.8,4.3h0l0,0c19.3,0,35.1-15.7,35.1-35.1C94.1,43.8,90.5,35,83.8,28.3 M59,82.3L59,82.3
	c-5.2,0-10.4-1.4-14.9-4.1l-1.1-0.6l-11,2.9L35,69.8l-0.7-1.1c-2.9-4.6-4.5-10-4.5-15.5C29.8,37,42.9,24,59,24
	c7.8,0,15.1,3,20.6,8.6c5.5,5.5,8.5,12.8,8.5,20.6C88.2,69.2,75.1,82.3,59,82.3 M75,60.5c-0.9-0.4-5.2-2.6-6-2.9
	c-0.8-0.3-1.4-0.4-2,0.4s-2.3,2.9-2.8,3.4c-0.5,0.6-1,0.7-1.9,0.2c-0.9-0.4-3.7-1.4-7.1-4.4c-2.6-2.3-4.4-5.2-4.9-6.1
	c-0.5-0.9-0.1-1.4,0.4-1.8c0.4-0.4,0.9-1,1.3-1.5c0.4-0.5,0.6-0.9,0.9-1.5c0.3-0.6,0.1-1.1-0.1-1.5c-0.2-0.4-2-4.8-2.7-6.5
	c-0.7-1.7-1.4-1.5-2-1.5c-0.5,0-1.1,0-1.7,0c-0.6,0-1.5,0.2-2.3,1.1c-0.8,0.9-3.1,3-3.1,7.3c0,4.3,3.1,8.5,3.6,9.1
	c0.4,0.6,6.2,9.4,15,13.2c2.1,0.9,3.7,1.4,5,1.8c2.1,0.7,4,0.6,5.5,0.3c1.7-0.3,5.2-2.1,5.9-4.2c0.7-2,0.7-3.8,0.5-4.2
	C76.5,61.1,75.9,60.9,75,60.5"></path></svg></span>
          </a>
        </div>
        <p class="u-text u-text-5">© 2024 REMS. All rights reserved.</p>
      </div></footer>
    
</body></html>