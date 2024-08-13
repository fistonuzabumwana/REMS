<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: signin.html");
    exit();
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en-RW"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Rwanda Agriculture Boar​​​d">
    <meta name="description" content="">
    <title>Contact</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Contact.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.15.2, nicepage.com">
    <meta name="referrer" content="origin">
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
    <meta name="twitter:title" content="Contact">
    <meta name="twitter:description" content="Real Estate Management System">
    <meta property="og:title" content="Contact">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="status.php">Admin</a>
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
?> </a>
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
    <section class="u-clearfix u-custom-color-9 u-section-1" id="carousel_4882">
      
      <div class="u-opacity u-opacity-75 u-palette-5-light-2 u-shape u-shape-rectangle u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"></div>
      <div class="u-custom-color-10 u-shape u-shape-rectangle u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0"></div>
      <div class="data-layout-selected u-clearfix u-gutter-10 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500">
              <div class="u-container-layout u-valign-bottom u-container-layout-1">
                <h2 class="u-align-left u-text u-text-custom-color-10 u-text-1">Contact Us</h2>
                <p class="u-align-left u-text u-text-black u-text-2">You are always welcome to contact us. Our Customer Service is available 24/7 (GMT +2). We look forward to hearing from you!</p>
                <div class="custom-expanded u-form u-form-radios-spacing-32 u-form-1">
                  <form action="contactform.php" method="post" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px;">
                    <div class="u-form-group u-form-name u-label-left">
                      <label for="name-3434" class="u-label u-spacing-0 u-text-black u-label-1" wfd-invisible="true">Full Name</label>
                      <input type="text" placeholder="Enter your Full Name" id="name-3434" name="name" class="u-border-none u-grey-10 u-input u-input-rectangle u-radius u-input-1" required="">
                    </div>
                    <div class="u-form-email u-form-group u-label-left">
                      <label for="email-3434" class="u-label u-spacing-0 u-text-black u-label-2" wfd-invisible="true">Email</label>
                      <input type="email" placeholder="Enter a valid email address" id="email-3434" name="email" class="u-border-none u-grey-10 u-input u-input-rectangle u-radius u-input-2" required="">
                    </div>
                    <div class="u-form-group u-form-phone u-label-left u-form-group-3">
                      <label for="phone-35f7" class="u-label u-spacing-0 u-text-black u-label-3">Phone</label>
                      <div class="iti iti--allow-dropdown">
                        <div class="iti__flag-container">
                          <div class="iti__selected-flag" role="combobox" aria-controls="iti-1__country-listbox" aria-owns="iti-1__country-listbox" aria-expanded="false" tabindex="0" title="Rwanda: +250" aria-activedescendant="iti-1__item-rw">
                            <div class="iti__flag iti__rw"></div>
                            <div class="iti__arrow"></div>
                          </div>
                          <ul class="iti__country-list iti__hide iti__np_editor__hide" id="iti-1__country-listbox" role="listbox" aria-label="List of countries">
                            <li class="iti__country iti__preferred" id="iti-1__item-us-preferred" role="option" data-country-code="us">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__us"></div>
                              </div>
                              <span class="iti__country-name">United States</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__preferred" id="iti-1__item-gb-preferred" role="option" data-country-code="gb">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gb"></div>
                              </div>
                              <span class="iti__country-name">United Kingdom</span>
                              <span class="iti__dial-code">+44</span>
                            </li>
                            <li class="iti__divider" role="separator" aria-disabled="true"></li>
                            <li class="iti__country iti__standard" id="iti-1__item-af" role="option" data-country-code="af">
                              <div class="iti__flag-box">
                                <div class="iti__af iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Afghanistan (‫افغانستان‬‎)</span>
                              <span class="iti__dial-code">+93</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-al" role="option" data-country-code="al">
                              <div class="iti__flag-box">
                                <div class="iti__al iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Albania (Shqipëri)</span>
                              <span class="iti__dial-code">+355</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-dz" role="option" data-country-code="dz">
                              <div class="iti__flag-box">
                                <div class="iti__dz iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Algeria (‫الجزائر‬‎)</span>
                              <span class="iti__dial-code">+213</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-as" role="option" data-country-code="as">
                              <div class="iti__flag-box">
                                <div class="iti__as iti__flag"></div>
                              </div>
                              <span class="iti__country-name">American Samoa</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ad" role="option" data-country-code="ad">
                              <div class="iti__flag-box">
                                <div class="iti__ad iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Andorra</span>
                              <span class="iti__dial-code">+376</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ao" role="option" data-country-code="ao">
                              <div class="iti__flag-box">
                                <div class="iti__ao iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Angola</span>
                              <span class="iti__dial-code">+244</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ai" role="option" data-country-code="ai">
                              <div class="iti__flag-box">
                                <div class="iti__ai iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Anguilla</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ag" role="option" data-country-code="ag">
                              <div class="iti__flag-box">
                                <div class="iti__ag iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Antigua and Barbuda</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ar" role="option" data-country-code="ar">
                              <div class="iti__flag-box">
                                <div class="iti__ar iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Argentina</span>
                              <span class="iti__dial-code">+54</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-am" role="option" data-country-code="am">
                              <div class="iti__flag-box">
                                <div class="iti__am iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Armenia (Հայաստան)</span>
                              <span class="iti__dial-code">+374</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-aw" role="option" data-country-code="aw">
                              <div class="iti__flag-box">
                                <div class="iti__aw iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Aruba</span>
                              <span class="iti__dial-code">+297</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ac" role="option" data-country-code="ac">
                              <div class="iti__flag-box">
                                <div class="iti__ac iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Ascension Island</span>
                              <span class="iti__dial-code">+247</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-au" role="option" data-country-code="au">
                              <div class="iti__flag-box">
                                <div class="iti__au iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Australia</span>
                              <span class="iti__dial-code">+61</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-at" role="option" data-country-code="at">
                              <div class="iti__flag-box">
                                <div class="iti__at iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Austria (Österreich)</span>
                              <span class="iti__dial-code">+43</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-az" role="option" data-country-code="az">
                              <div class="iti__flag-box">
                                <div class="iti__az iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Azerbaijan (Azərbaycan)</span>
                              <span class="iti__dial-code">+994</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bs" role="option" data-country-code="bs">
                              <div class="iti__flag-box">
                                <div class="iti__bs iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Bahamas</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bh" role="option" data-country-code="bh">
                              <div class="iti__flag-box">
                                <div class="iti__bh iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Bahrain (‫البحرين‬‎)</span>
                              <span class="iti__dial-code">+973</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bd" role="option" data-country-code="bd">
                              <div class="iti__flag-box">
                                <div class="iti__bd iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Bangladesh (বাংলাদেশ)</span>
                              <span class="iti__dial-code">+880</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bb" role="option" data-country-code="bb">
                              <div class="iti__flag-box">
                                <div class="iti__bb iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Barbados</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-by" role="option" data-country-code="by">
                              <div class="iti__flag-box">
                                <div class="iti__by iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Belarus (Беларусь)</span>
                              <span class="iti__dial-code">+375</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-be" role="option" data-country-code="be">
                              <div class="iti__flag-box">
                                <div class="iti__be iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Belgium (België)</span>
                              <span class="iti__dial-code">+32</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bz" role="option" data-country-code="bz">
                              <div class="iti__flag-box">
                                <div class="iti__bz iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Belize</span>
                              <span class="iti__dial-code">+501</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bj" role="option" data-country-code="bj">
                              <div class="iti__flag-box">
                                <div class="iti__bj iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Benin (Bénin)</span>
                              <span class="iti__dial-code">+229</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bm" role="option" data-country-code="bm">
                              <div class="iti__flag-box">
                                <div class="iti__bm iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Bermuda</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bt" role="option" data-country-code="bt">
                              <div class="iti__flag-box">
                                <div class="iti__bt iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Bhutan (འབྲུག)</span>
                              <span class="iti__dial-code">+975</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bo" role="option" data-country-code="bo">
                              <div class="iti__flag-box">
                                <div class="iti__bo iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Bolivia</span>
                              <span class="iti__dial-code">+591</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ba" role="option" data-country-code="ba">
                              <div class="iti__flag-box">
                                <div class="iti__ba iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span>
                              <span class="iti__dial-code">+387</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bw" role="option" data-country-code="bw">
                              <div class="iti__flag-box">
                                <div class="iti__bw iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Botswana</span>
                              <span class="iti__dial-code">+267</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-br" role="option" data-country-code="br">
                              <div class="iti__flag-box">
                                <div class="iti__br iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Brazil (Brasil)</span>
                              <span class="iti__dial-code">+55</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-io" role="option" data-country-code="io">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__io"></div>
                              </div>
                              <span class="iti__country-name">British Indian Ocean Territory</span>
                              <span class="iti__dial-code">+246</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-vg" role="option" data-country-code="vg">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__vg"></div>
                              </div>
                              <span class="iti__country-name">British Virgin Islands</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bn" role="option" data-country-code="bn">
                              <div class="iti__flag-box">
                                <div class="iti__bn iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Brunei</span>
                              <span class="iti__dial-code">+673</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bg" role="option" data-country-code="bg">
                              <div class="iti__flag-box">
                                <div class="iti__bg iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Bulgaria (България)</span>
                              <span class="iti__dial-code">+359</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bf" role="option" data-country-code="bf">
                              <div class="iti__flag-box">
                                <div class="iti__bf iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Burkina Faso</span>
                              <span class="iti__dial-code">+226</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bi" role="option" data-country-code="bi">
                              <div class="iti__flag-box">
                                <div class="iti__bi iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Burundi (Uburundi)</span>
                              <span class="iti__dial-code">+257</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-kh" role="option" data-country-code="kh">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__kh"></div>
                              </div>
                              <span class="iti__country-name">Cambodia (កម្ពុជា)</span>
                              <span class="iti__dial-code">+855</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cm" role="option" data-country-code="cm">
                              <div class="iti__flag-box">
                                <div class="iti__cm iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Cameroon (Cameroun)</span>
                              <span class="iti__dial-code">+237</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ca" role="option" data-country-code="ca">
                              <div class="iti__flag-box">
                                <div class="iti__ca iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Canada</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cv" role="option" data-country-code="cv">
                              <div class="iti__flag-box">
                                <div class="iti__cv iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Cape Verde (Kabu Verdi)</span>
                              <span class="iti__dial-code">+238</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bq" role="option" data-country-code="bq">
                              <div class="iti__flag-box">
                                <div class="iti__bq iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Caribbean Netherlands</span>
                              <span class="iti__dial-code">+599</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ky" role="option" data-country-code="ky">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ky"></div>
                              </div>
                              <span class="iti__country-name">Cayman Islands</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cf" role="option" data-country-code="cf">
                              <div class="iti__flag-box">
                                <div class="iti__cf iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Central African Republic (République centrafricaine)</span>
                              <span class="iti__dial-code">+236</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-td" role="option" data-country-code="td">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__td"></div>
                              </div>
                              <span class="iti__country-name">Chad (Tchad)</span>
                              <span class="iti__dial-code">+235</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cl" role="option" data-country-code="cl">
                              <div class="iti__flag-box">
                                <div class="iti__cl iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Chile</span>
                              <span class="iti__dial-code">+56</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cn" role="option" data-country-code="cn">
                              <div class="iti__flag-box">
                                <div class="iti__cn iti__flag"></div>
                              </div>
                              <span class="iti__country-name">China (中国)</span>
                              <span class="iti__dial-code">+86</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cx" role="option" data-country-code="cx">
                              <div class="iti__flag-box">
                                <div class="iti__cx iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Christmas Island</span>
                              <span class="iti__dial-code">+61</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cc" role="option" data-country-code="cc">
                              <div class="iti__flag-box">
                                <div class="iti__cc iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Cocos (Keeling) Islands</span>
                              <span class="iti__dial-code">+61</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-co" role="option" data-country-code="co">
                              <div class="iti__flag-box">
                                <div class="iti__co iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Colombia</span>
                              <span class="iti__dial-code">+57</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-km" role="option" data-country-code="km">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__km"></div>
                              </div>
                              <span class="iti__country-name">Comoros (‫جزر القمر‬‎)</span>
                              <span class="iti__dial-code">+269</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cd" role="option" data-country-code="cd">
                              <div class="iti__flag-box">
                                <div class="iti__cd iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span>
                              <span class="iti__dial-code">+243</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cg" role="option" data-country-code="cg">
                              <div class="iti__flag-box">
                                <div class="iti__cg iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Congo (Republic) (Congo-Brazzaville)</span>
                              <span class="iti__dial-code">+242</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ck" role="option" data-country-code="ck">
                              <div class="iti__flag-box">
                                <div class="iti__ck iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Cook Islands</span>
                              <span class="iti__dial-code">+682</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cr" role="option" data-country-code="cr">
                              <div class="iti__flag-box">
                                <div class="iti__cr iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Costa Rica</span>
                              <span class="iti__dial-code">+506</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ci" role="option" data-country-code="ci">
                              <div class="iti__flag-box">
                                <div class="iti__ci iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Côte d’Ivoire</span>
                              <span class="iti__dial-code">+225</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-hr" role="option" data-country-code="hr">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__hr"></div>
                              </div>
                              <span class="iti__country-name">Croatia (Hrvatska)</span>
                              <span class="iti__dial-code">+385</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cu" role="option" data-country-code="cu">
                              <div class="iti__flag-box">
                                <div class="iti__cu iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Cuba</span>
                              <span class="iti__dial-code">+53</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cw" role="option" data-country-code="cw">
                              <div class="iti__flag-box">
                                <div class="iti__cw iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Curaçao</span>
                              <span class="iti__dial-code">+599</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cy" role="option" data-country-code="cy">
                              <div class="iti__flag-box">
                                <div class="iti__cy iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Cyprus (Κύπρος)</span>
                              <span class="iti__dial-code">+357</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-cz" role="option" data-country-code="cz">
                              <div class="iti__flag-box">
                                <div class="iti__cz iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Czech Republic (Česká republika)</span>
                              <span class="iti__dial-code">+420</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-dk" role="option" data-country-code="dk">
                              <div class="iti__flag-box">
                                <div class="iti__dk iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Denmark (Danmark)</span>
                              <span class="iti__dial-code">+45</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-dj" role="option" data-country-code="dj">
                              <div class="iti__flag-box">
                                <div class="iti__dj iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Djibouti</span>
                              <span class="iti__dial-code">+253</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-dm" role="option" data-country-code="dm">
                              <div class="iti__flag-box">
                                <div class="iti__dm iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Dominica</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-do" role="option" data-country-code="do">
                              <div class="iti__flag-box">
                                <div class="iti__do iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Dominican Republic (República Dominicana)</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ec" role="option" data-country-code="ec">
                              <div class="iti__flag-box">
                                <div class="iti__ec iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Ecuador</span>
                              <span class="iti__dial-code">+593</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-eg" role="option" data-country-code="eg">
                              <div class="iti__flag-box">
                                <div class="iti__eg iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Egypt (‫مصر‬‎)</span>
                              <span class="iti__dial-code">+20</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sv" role="option" data-country-code="sv">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sv"></div>
                              </div>
                              <span class="iti__country-name">El Salvador</span>
                              <span class="iti__dial-code">+503</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gq" role="option" data-country-code="gq">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gq"></div>
                              </div>
                              <span class="iti__country-name">Equatorial Guinea (Guinea Ecuatorial)</span>
                              <span class="iti__dial-code">+240</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-er" role="option" data-country-code="er">
                              <div class="iti__flag-box">
                                <div class="iti__er iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Eritrea</span>
                              <span class="iti__dial-code">+291</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ee" role="option" data-country-code="ee">
                              <div class="iti__flag-box">
                                <div class="iti__ee iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Estonia (Eesti)</span>
                              <span class="iti__dial-code">+372</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sz" role="option" data-country-code="sz">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sz"></div>
                              </div>
                              <span class="iti__country-name">Eswatini</span>
                              <span class="iti__dial-code">+268</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-et" role="option" data-country-code="et">
                              <div class="iti__flag-box">
                                <div class="iti__et iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Ethiopia</span>
                              <span class="iti__dial-code">+251</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-fk" role="option" data-country-code="fk">
                              <div class="iti__flag-box">
                                <div class="iti__fk iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Falkland Islands (Islas Malvinas)</span>
                              <span class="iti__dial-code">+500</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-fo" role="option" data-country-code="fo">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__fo"></div>
                              </div>
                              <span class="iti__country-name">Faroe Islands (Føroyar)</span>
                              <span class="iti__dial-code">+298</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-fj" role="option" data-country-code="fj">
                              <div class="iti__flag-box">
                                <div class="iti__fj iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Fiji</span>
                              <span class="iti__dial-code">+679</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-fi" role="option" data-country-code="fi">
                              <div class="iti__flag-box">
                                <div class="iti__fi iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Finland (Suomi)</span>
                              <span class="iti__dial-code">+358</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-fr" role="option" data-country-code="fr">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__fr"></div>
                              </div>
                              <span class="iti__country-name">France</span>
                              <span class="iti__dial-code">+33</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gf" role="option" data-country-code="gf">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gf"></div>
                              </div>
                              <span class="iti__country-name">French Guiana (Guyane française)</span>
                              <span class="iti__dial-code">+594</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-pf" role="option" data-country-code="pf">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__pf"></div>
                              </div>
                              <span class="iti__country-name">French Polynesia (Polynésie française)</span>
                              <span class="iti__dial-code">+689</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ga" role="option" data-country-code="ga">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ga"></div>
                              </div>
                              <span class="iti__country-name">Gabon</span>
                              <span class="iti__dial-code">+241</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gm" role="option" data-country-code="gm">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gm"></div>
                              </div>
                              <span class="iti__country-name">Gambia</span>
                              <span class="iti__dial-code">+220</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ge" role="option" data-country-code="ge">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ge"></div>
                              </div>
                              <span class="iti__country-name">Georgia (საქართველო)</span>
                              <span class="iti__dial-code">+995</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-de" role="option" data-country-code="de">
                              <div class="iti__flag-box">
                                <div class="iti__de iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Germany (Deutschland)</span>
                              <span class="iti__dial-code">+49</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gh" role="option" data-country-code="gh">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gh"></div>
                              </div>
                              <span class="iti__country-name">Ghana (Gaana)</span>
                              <span class="iti__dial-code">+233</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gi" role="option" data-country-code="gi">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gi"></div>
                              </div>
                              <span class="iti__country-name">Gibraltar</span>
                              <span class="iti__dial-code">+350</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gr" role="option" data-country-code="gr">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gr"></div>
                              </div>
                              <span class="iti__country-name">Greece (Ελλάδα)</span>
                              <span class="iti__dial-code">+30</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gl" role="option" data-country-code="gl">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gl"></div>
                              </div>
                              <span class="iti__country-name">Greenland (Kalaallit Nunaat)</span>
                              <span class="iti__dial-code">+299</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gd" role="option" data-country-code="gd">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gd"></div>
                              </div>
                              <span class="iti__country-name">Grenada</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gp" role="option" data-country-code="gp">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gp"></div>
                              </div>
                              <span class="iti__country-name">Guadeloupe</span>
                              <span class="iti__dial-code">+590</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gu" role="option" data-country-code="gu">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gu"></div>
                              </div>
                              <span class="iti__country-name">Guam</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gt" role="option" data-country-code="gt">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gt"></div>
                              </div>
                              <span class="iti__country-name">Guatemala</span>
                              <span class="iti__dial-code">+502</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gg" role="option" data-country-code="gg">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gg"></div>
                              </div>
                              <span class="iti__country-name">Guernsey</span>
                              <span class="iti__dial-code">+44</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gn" role="option" data-country-code="gn">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gn"></div>
                              </div>
                              <span class="iti__country-name">Guinea (Guinée)</span>
                              <span class="iti__dial-code">+224</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gw" role="option" data-country-code="gw">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gw"></div>
                              </div>
                              <span class="iti__country-name">Guinea-Bissau (Guiné Bissau)</span>
                              <span class="iti__dial-code">+245</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gy" role="option" data-country-code="gy">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gy"></div>
                              </div>
                              <span class="iti__country-name">Guyana</span>
                              <span class="iti__dial-code">+592</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ht" role="option" data-country-code="ht">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ht"></div>
                              </div>
                              <span class="iti__country-name">Haiti</span>
                              <span class="iti__dial-code">+509</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-hn" role="option" data-country-code="hn">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__hn"></div>
                              </div>
                              <span class="iti__country-name">Honduras</span>
                              <span class="iti__dial-code">+504</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-hk" role="option" data-country-code="hk">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__hk"></div>
                              </div>
                              <span class="iti__country-name">Hong Kong (香港)</span>
                              <span class="iti__dial-code">+852</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-hu" role="option" data-country-code="hu">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__hu"></div>
                              </div>
                              <span class="iti__country-name">Hungary (Magyarország)</span>
                              <span class="iti__dial-code">+36</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-is" role="option" data-country-code="is">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__is"></div>
                              </div>
                              <span class="iti__country-name">Iceland (Ísland)</span>
                              <span class="iti__dial-code">+354</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-in" role="option" data-country-code="in">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__in"></div>
                              </div>
                              <span class="iti__country-name">India (भारत)</span>
                              <span class="iti__dial-code">+91</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-id" role="option" data-country-code="id">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__id"></div>
                              </div>
                              <span class="iti__country-name">Indonesia</span>
                              <span class="iti__dial-code">+62</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ir" role="option" data-country-code="ir">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ir"></div>
                              </div>
                              <span class="iti__country-name">Iran (‫ایران‬‎)</span>
                              <span class="iti__dial-code">+98</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-iq" role="option" data-country-code="iq">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__iq"></div>
                              </div>
                              <span class="iti__country-name">Iraq (‫العراق‬‎)</span>
                              <span class="iti__dial-code">+964</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ie" role="option" data-country-code="ie">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ie"></div>
                              </div>
                              <span class="iti__country-name">Ireland</span>
                              <span class="iti__dial-code">+353</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-im" role="option" data-country-code="im">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__im"></div>
                              </div>
                              <span class="iti__country-name">Isle of Man</span>
                              <span class="iti__dial-code">+44</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-il" role="option" data-country-code="il">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__il"></div>
                              </div>
                              <span class="iti__country-name">Israel (‫ישראל‬‎)</span>
                              <span class="iti__dial-code">+972</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-it" role="option" data-country-code="it">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__it"></div>
                              </div>
                              <span class="iti__country-name">Italy (Italia)</span>
                              <span class="iti__dial-code">+39</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-jm" role="option" data-country-code="jm">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__jm"></div>
                              </div>
                              <span class="iti__country-name">Jamaica</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-jp" role="option" data-country-code="jp">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__jp"></div>
                              </div>
                              <span class="iti__country-name">Japan (日本)</span>
                              <span class="iti__dial-code">+81</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-je" role="option" data-country-code="je">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__je"></div>
                              </div>
                              <span class="iti__country-name">Jersey</span>
                              <span class="iti__dial-code">+44</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-jo" role="option" data-country-code="jo">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__jo"></div>
                              </div>
                              <span class="iti__country-name">Jordan (‫الأردن‬‎)</span>
                              <span class="iti__dial-code">+962</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-kz" role="option" data-country-code="kz">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__kz"></div>
                              </div>
                              <span class="iti__country-name">Kazakhstan (Казахстан)</span>
                              <span class="iti__dial-code">+7</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ke" role="option" data-country-code="ke">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ke"></div>
                              </div>
                              <span class="iti__country-name">Kenya</span>
                              <span class="iti__dial-code">+254</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ki" role="option" data-country-code="ki">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ki"></div>
                              </div>
                              <span class="iti__country-name">Kiribati</span>
                              <span class="iti__dial-code">+686</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-xk" role="option" data-country-code="xk">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__xk"></div>
                              </div>
                              <span class="iti__country-name">Kosovo</span>
                              <span class="iti__dial-code">+383</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-kw" role="option" data-country-code="kw">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__kw"></div>
                              </div>
                              <span class="iti__country-name">Kuwait (‫الكويت‬‎)</span>
                              <span class="iti__dial-code">+965</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-kg" role="option" data-country-code="kg">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__kg"></div>
                              </div>
                              <span class="iti__country-name">Kyrgyzstan (Кыргызстан)</span>
                              <span class="iti__dial-code">+996</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-la" role="option" data-country-code="la">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__la"></div>
                              </div>
                              <span class="iti__country-name">Laos (ລາວ)</span>
                              <span class="iti__dial-code">+856</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-lv" role="option" data-country-code="lv">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__lv"></div>
                              </div>
                              <span class="iti__country-name">Latvia (Latvija)</span>
                              <span class="iti__dial-code">+371</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-lb" role="option" data-country-code="lb">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__lb"></div>
                              </div>
                              <span class="iti__country-name">Lebanon (‫لبنان‬‎)</span>
                              <span class="iti__dial-code">+961</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ls" role="option" data-country-code="ls">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ls"></div>
                              </div>
                              <span class="iti__country-name">Lesotho</span>
                              <span class="iti__dial-code">+266</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-lr" role="option" data-country-code="lr">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__lr"></div>
                              </div>
                              <span class="iti__country-name">Liberia</span>
                              <span class="iti__dial-code">+231</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ly" role="option" data-country-code="ly">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ly"></div>
                              </div>
                              <span class="iti__country-name">Libya (‫ليبيا‬‎)</span>
                              <span class="iti__dial-code">+218</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-li" role="option" data-country-code="li">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__li"></div>
                              </div>
                              <span class="iti__country-name">Liechtenstein</span>
                              <span class="iti__dial-code">+423</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-lt" role="option" data-country-code="lt">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__lt"></div>
                              </div>
                              <span class="iti__country-name">Lithuania (Lietuva)</span>
                              <span class="iti__dial-code">+370</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-lu" role="option" data-country-code="lu">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__lu"></div>
                              </div>
                              <span class="iti__country-name">Luxembourg</span>
                              <span class="iti__dial-code">+352</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mo" role="option" data-country-code="mo">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mo"></div>
                              </div>
                              <span class="iti__country-name">Macau (澳門)</span>
                              <span class="iti__dial-code">+853</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mk" role="option" data-country-code="mk">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mk"></div>
                              </div>
                              <span class="iti__country-name">North Macedonia (Македонија)</span>
                              <span class="iti__dial-code">+389</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mg" role="option" data-country-code="mg">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mg"></div>
                              </div>
                              <span class="iti__country-name">Madagascar (Madagasikara)</span>
                              <span class="iti__dial-code">+261</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mw" role="option" data-country-code="mw">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mw"></div>
                              </div>
                              <span class="iti__country-name">Malawi</span>
                              <span class="iti__dial-code">+265</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-my" role="option" data-country-code="my">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__my"></div>
                              </div>
                              <span class="iti__country-name">Malaysia</span>
                              <span class="iti__dial-code">+60</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mv" role="option" data-country-code="mv">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mv"></div>
                              </div>
                              <span class="iti__country-name">Maldives</span>
                              <span class="iti__dial-code">+960</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ml" role="option" data-country-code="ml">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ml"></div>
                              </div>
                              <span class="iti__country-name">Mali</span>
                              <span class="iti__dial-code">+223</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mt" role="option" data-country-code="mt">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mt"></div>
                              </div>
                              <span class="iti__country-name">Malta</span>
                              <span class="iti__dial-code">+356</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mh" role="option" data-country-code="mh">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mh"></div>
                              </div>
                              <span class="iti__country-name">Marshall Islands</span>
                              <span class="iti__dial-code">+692</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mq" role="option" data-country-code="mq">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mq"></div>
                              </div>
                              <span class="iti__country-name">Martinique</span>
                              <span class="iti__dial-code">+596</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mr" role="option" data-country-code="mr">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mr"></div>
                              </div>
                              <span class="iti__country-name">Mauritania (‫موريتانيا‬‎)</span>
                              <span class="iti__dial-code">+222</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mu" role="option" data-country-code="mu">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mu"></div>
                              </div>
                              <span class="iti__country-name">Mauritius (Moris)</span>
                              <span class="iti__dial-code">+230</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-yt" role="option" data-country-code="yt">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__yt"></div>
                              </div>
                              <span class="iti__country-name">Mayotte</span>
                              <span class="iti__dial-code">+262</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mx" role="option" data-country-code="mx">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mx"></div>
                              </div>
                              <span class="iti__country-name">Mexico (México)</span>
                              <span class="iti__dial-code">+52</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-fm" role="option" data-country-code="fm">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__fm"></div>
                              </div>
                              <span class="iti__country-name">Micronesia</span>
                              <span class="iti__dial-code">+691</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-md" role="option" data-country-code="md">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__md"></div>
                              </div>
                              <span class="iti__country-name">Moldova (Republica Moldova)</span>
                              <span class="iti__dial-code">+373</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mc" role="option" data-country-code="mc">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mc"></div>
                              </div>
                              <span class="iti__country-name">Monaco</span>
                              <span class="iti__dial-code">+377</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mn" role="option" data-country-code="mn">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mn"></div>
                              </div>
                              <span class="iti__country-name">Mongolia (Монгол)</span>
                              <span class="iti__dial-code">+976</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-me" role="option" data-country-code="me">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__me"></div>
                              </div>
                              <span class="iti__country-name">Montenegro (Crna Gora)</span>
                              <span class="iti__dial-code">+382</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ms" role="option" data-country-code="ms">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ms"></div>
                              </div>
                              <span class="iti__country-name">Montserrat</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ma" role="option" data-country-code="ma">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ma"></div>
                              </div>
                              <span class="iti__country-name">Morocco (‫المغرب‬‎)</span>
                              <span class="iti__dial-code">+212</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mz" role="option" data-country-code="mz">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mz"></div>
                              </div>
                              <span class="iti__country-name">Mozambique (Moçambique)</span>
                              <span class="iti__dial-code">+258</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mm" role="option" data-country-code="mm">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mm"></div>
                              </div>
                              <span class="iti__country-name">Myanmar (Burma) (မြန်မာ)</span>
                              <span class="iti__dial-code">+95</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-na" role="option" data-country-code="na">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__na"></div>
                              </div>
                              <span class="iti__country-name">Namibia (Namibië)</span>
                              <span class="iti__dial-code">+264</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-nr" role="option" data-country-code="nr">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__nr"></div>
                              </div>
                              <span class="iti__country-name">Nauru</span>
                              <span class="iti__dial-code">+674</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-np" role="option" data-country-code="np">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__np"></div>
                              </div>
                              <span class="iti__country-name">Nepal (नेपाल)</span>
                              <span class="iti__dial-code">+977</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-nl" role="option" data-country-code="nl">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__nl"></div>
                              </div>
                              <span class="iti__country-name">Netherlands (Nederland)</span>
                              <span class="iti__dial-code">+31</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-nc" role="option" data-country-code="nc">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__nc"></div>
                              </div>
                              <span class="iti__country-name">New Caledonia (Nouvelle-Calédonie)</span>
                              <span class="iti__dial-code">+687</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-nz" role="option" data-country-code="nz">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__nz"></div>
                              </div>
                              <span class="iti__country-name">New Zealand</span>
                              <span class="iti__dial-code">+64</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ni" role="option" data-country-code="ni">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ni"></div>
                              </div>
                              <span class="iti__country-name">Nicaragua</span>
                              <span class="iti__dial-code">+505</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ne" role="option" data-country-code="ne">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ne"></div>
                              </div>
                              <span class="iti__country-name">Niger (Nijar)</span>
                              <span class="iti__dial-code">+227</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ng" role="option" data-country-code="ng">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ng"></div>
                              </div>
                              <span class="iti__country-name">Nigeria</span>
                              <span class="iti__dial-code">+234</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-nu" role="option" data-country-code="nu">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__nu"></div>
                              </div>
                              <span class="iti__country-name">Niue</span>
                              <span class="iti__dial-code">+683</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-nf" role="option" data-country-code="nf">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__nf"></div>
                              </div>
                              <span class="iti__country-name">Norfolk Island</span>
                              <span class="iti__dial-code">+672</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-kp" role="option" data-country-code="kp">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__kp"></div>
                              </div>
                              <span class="iti__country-name">North Korea (조선 민주주의 인민 공화국)</span>
                              <span class="iti__dial-code">+850</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mp" role="option" data-country-code="mp">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mp"></div>
                              </div>
                              <span class="iti__country-name">Northern Mariana Islands</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-no" role="option" data-country-code="no">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__no"></div>
                              </div>
                              <span class="iti__country-name">Norway (Norge)</span>
                              <span class="iti__dial-code">+47</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-om" role="option" data-country-code="om">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__om"></div>
                              </div>
                              <span class="iti__country-name">Oman (‫عُمان‬‎)</span>
                              <span class="iti__dial-code">+968</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-pk" role="option" data-country-code="pk">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__pk"></div>
                              </div>
                              <span class="iti__country-name">Pakistan (‫پاکستان‬‎)</span>
                              <span class="iti__dial-code">+92</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-pw" role="option" data-country-code="pw">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__pw"></div>
                              </div>
                              <span class="iti__country-name">Palau</span>
                              <span class="iti__dial-code">+680</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ps" role="option" data-country-code="ps">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ps"></div>
                              </div>
                              <span class="iti__country-name">Palestine (‫فلسطين‬‎)</span>
                              <span class="iti__dial-code">+970</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-pa" role="option" data-country-code="pa">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__pa"></div>
                              </div>
                              <span class="iti__country-name">Panama (Panamá)</span>
                              <span class="iti__dial-code">+507</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-pg" role="option" data-country-code="pg">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__pg"></div>
                              </div>
                              <span class="iti__country-name">Papua New Guinea</span>
                              <span class="iti__dial-code">+675</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-py" role="option" data-country-code="py">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__py"></div>
                              </div>
                              <span class="iti__country-name">Paraguay</span>
                              <span class="iti__dial-code">+595</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-pe" role="option" data-country-code="pe">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__pe"></div>
                              </div>
                              <span class="iti__country-name">Peru (Perú)</span>
                              <span class="iti__dial-code">+51</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ph" role="option" data-country-code="ph">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ph"></div>
                              </div>
                              <span class="iti__country-name">Philippines</span>
                              <span class="iti__dial-code">+63</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-pl" role="option" data-country-code="pl">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__pl"></div>
                              </div>
                              <span class="iti__country-name">Poland (Polska)</span>
                              <span class="iti__dial-code">+48</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-pt" role="option" data-country-code="pt">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__pt"></div>
                              </div>
                              <span class="iti__country-name">Portugal</span>
                              <span class="iti__dial-code">+351</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-pr" role="option" data-country-code="pr">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__pr"></div>
                              </div>
                              <span class="iti__country-name">Puerto Rico</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-qa" role="option" data-country-code="qa">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__qa"></div>
                              </div>
                              <span class="iti__country-name">Qatar (‫قطر‬‎)</span>
                              <span class="iti__dial-code">+974</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-re" role="option" data-country-code="re">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__re"></div>
                              </div>
                              <span class="iti__country-name">Réunion (La Réunion)</span>
                              <span class="iti__dial-code">+262</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ro" role="option" data-country-code="ro">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ro"></div>
                              </div>
                              <span class="iti__country-name">Romania (România)</span>
                              <span class="iti__dial-code">+40</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ru" role="option" data-country-code="ru">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ru"></div>
                              </div>
                              <span class="iti__country-name">Russia (Россия)</span>
                              <span class="iti__dial-code">+7</span>
                            </li>
                            <li class="iti__active iti__country iti__standard" id="iti-1__item-rw" role="option" data-country-code="rw">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__rw"></div>
                              </div>
                              <span class="iti__country-name">Rwanda</span>
                              <span class="iti__dial-code">+250</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-bl" role="option" data-country-code="bl">
                              <div class="iti__flag-box">
                                <div class="iti__bl iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Saint Barthélemy</span>
                              <span class="iti__dial-code">+590</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sh" role="option" data-country-code="sh">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sh"></div>
                              </div>
                              <span class="iti__country-name">Saint Helena</span>
                              <span class="iti__dial-code">+290</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-kn" role="option" data-country-code="kn">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__kn"></div>
                              </div>
                              <span class="iti__country-name">Saint Kitts and Nevis</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-lc" role="option" data-country-code="lc">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__lc"></div>
                              </div>
                              <span class="iti__country-name">Saint Lucia</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-mf" role="option" data-country-code="mf">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__mf"></div>
                              </div>
                              <span class="iti__country-name">Saint Martin (Saint-Martin (partie française))</span>
                              <span class="iti__dial-code">+590</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-pm" role="option" data-country-code="pm">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__pm"></div>
                              </div>
                              <span class="iti__country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span>
                              <span class="iti__dial-code">+508</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-vc" role="option" data-country-code="vc">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__vc"></div>
                              </div>
                              <span class="iti__country-name">Saint Vincent and the Grenadines</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ws" role="option" data-country-code="ws">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ws"></div>
                              </div>
                              <span class="iti__country-name">Samoa</span>
                              <span class="iti__dial-code">+685</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sm" role="option" data-country-code="sm">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sm"></div>
                              </div>
                              <span class="iti__country-name">San Marino</span>
                              <span class="iti__dial-code">+378</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-st" role="option" data-country-code="st">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__st"></div>
                              </div>
                              <span class="iti__country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span>
                              <span class="iti__dial-code">+239</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sa" role="option" data-country-code="sa">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sa"></div>
                              </div>
                              <span class="iti__country-name">Saudi Arabia (‫المملكة العربية السعودية‬‎)</span>
                              <span class="iti__dial-code">+966</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sn" role="option" data-country-code="sn">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sn"></div>
                              </div>
                              <span class="iti__country-name">Senegal (Sénégal)</span>
                              <span class="iti__dial-code">+221</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-rs" role="option" data-country-code="rs">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__rs"></div>
                              </div>
                              <span class="iti__country-name">Serbia (Србија)</span>
                              <span class="iti__dial-code">+381</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sc" role="option" data-country-code="sc">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sc"></div>
                              </div>
                              <span class="iti__country-name">Seychelles</span>
                              <span class="iti__dial-code">+248</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sl" role="option" data-country-code="sl">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sl"></div>
                              </div>
                              <span class="iti__country-name">Sierra Leone</span>
                              <span class="iti__dial-code">+232</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sg" role="option" data-country-code="sg">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sg"></div>
                              </div>
                              <span class="iti__country-name">Singapore</span>
                              <span class="iti__dial-code">+65</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sx" role="option" data-country-code="sx">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sx"></div>
                              </div>
                              <span class="iti__country-name">Sint Maarten</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sk" role="option" data-country-code="sk">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sk"></div>
                              </div>
                              <span class="iti__country-name">Slovakia (Slovensko)</span>
                              <span class="iti__dial-code">+421</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-si" role="option" data-country-code="si">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__si"></div>
                              </div>
                              <span class="iti__country-name">Slovenia (Slovenija)</span>
                              <span class="iti__dial-code">+386</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sb" role="option" data-country-code="sb">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sb"></div>
                              </div>
                              <span class="iti__country-name">Solomon Islands</span>
                              <span class="iti__dial-code">+677</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-so" role="option" data-country-code="so">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__so"></div>
                              </div>
                              <span class="iti__country-name">Somalia (Soomaaliya)</span>
                              <span class="iti__dial-code">+252</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-za" role="option" data-country-code="za">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__za"></div>
                              </div>
                              <span class="iti__country-name">South Africa</span>
                              <span class="iti__dial-code">+27</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-kr" role="option" data-country-code="kr">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__kr"></div>
                              </div>
                              <span class="iti__country-name">South Korea (대한민국)</span>
                              <span class="iti__dial-code">+82</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ss" role="option" data-country-code="ss">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ss"></div>
                              </div>
                              <span class="iti__country-name">South Sudan (‫جنوب السودان‬‎)</span>
                              <span class="iti__dial-code">+211</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-es" role="option" data-country-code="es">
                              <div class="iti__flag-box">
                                <div class="iti__es iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Spain (España)</span>
                              <span class="iti__dial-code">+34</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-lk" role="option" data-country-code="lk">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__lk"></div>
                              </div>
                              <span class="iti__country-name">Sri Lanka (ශ්‍රී ලංකාව)</span>
                              <span class="iti__dial-code">+94</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sd" role="option" data-country-code="sd">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sd"></div>
                              </div>
                              <span class="iti__country-name">Sudan (‫السودان‬‎)</span>
                              <span class="iti__dial-code">+249</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sr" role="option" data-country-code="sr">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sr"></div>
                              </div>
                              <span class="iti__country-name">Suriname</span>
                              <span class="iti__dial-code">+597</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sj" role="option" data-country-code="sj">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sj"></div>
                              </div>
                              <span class="iti__country-name">Svalbard and Jan Mayen</span>
                              <span class="iti__dial-code">+47</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-se" role="option" data-country-code="se">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__se"></div>
                              </div>
                              <span class="iti__country-name">Sweden (Sverige)</span>
                              <span class="iti__dial-code">+46</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ch" role="option" data-country-code="ch">
                              <div class="iti__flag-box">
                                <div class="iti__ch iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Switzerland (Schweiz)</span>
                              <span class="iti__dial-code">+41</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-sy" role="option" data-country-code="sy">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__sy"></div>
                              </div>
                              <span class="iti__country-name">Syria (‫سوريا‬‎)</span>
                              <span class="iti__dial-code">+963</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tw" role="option" data-country-code="tw">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tw"></div>
                              </div>
                              <span class="iti__country-name">Taiwan (台灣)</span>
                              <span class="iti__dial-code">+886</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tj" role="option" data-country-code="tj">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tj"></div>
                              </div>
                              <span class="iti__country-name">Tajikistan</span>
                              <span class="iti__dial-code">+992</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tz" role="option" data-country-code="tz">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tz"></div>
                              </div>
                              <span class="iti__country-name">Tanzania</span>
                              <span class="iti__dial-code">+255</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-th" role="option" data-country-code="th">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__th"></div>
                              </div>
                              <span class="iti__country-name">Thailand (ไทย)</span>
                              <span class="iti__dial-code">+66</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tl" role="option" data-country-code="tl">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tl"></div>
                              </div>
                              <span class="iti__country-name">Timor-Leste</span>
                              <span class="iti__dial-code">+670</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tg" role="option" data-country-code="tg">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tg"></div>
                              </div>
                              <span class="iti__country-name">Togo</span>
                              <span class="iti__dial-code">+228</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tk" role="option" data-country-code="tk">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tk"></div>
                              </div>
                              <span class="iti__country-name">Tokelau</span>
                              <span class="iti__dial-code">+690</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-to" role="option" data-country-code="to">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__to"></div>
                              </div>
                              <span class="iti__country-name">Tonga</span>
                              <span class="iti__dial-code">+676</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tt" role="option" data-country-code="tt">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tt"></div>
                              </div>
                              <span class="iti__country-name">Trinidad and Tobago</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tn" role="option" data-country-code="tn">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tn"></div>
                              </div>
                              <span class="iti__country-name">Tunisia (‫تونس‬‎)</span>
                              <span class="iti__dial-code">+216</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tr" role="option" data-country-code="tr">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tr"></div>
                              </div>
                              <span class="iti__country-name">Turkey (Türkiye)</span>
                              <span class="iti__dial-code">+90</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tm" role="option" data-country-code="tm">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tm"></div>
                              </div>
                              <span class="iti__country-name">Turkmenistan</span>
                              <span class="iti__dial-code">+993</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tc" role="option" data-country-code="tc">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tc"></div>
                              </div>
                              <span class="iti__country-name">Turks and Caicos Islands</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-tv" role="option" data-country-code="tv">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__tv"></div>
                              </div>
                              <span class="iti__country-name">Tuvalu</span>
                              <span class="iti__dial-code">+688</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-vi" role="option" data-country-code="vi">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__vi"></div>
                              </div>
                              <span class="iti__country-name">U.S. Virgin Islands</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ug" role="option" data-country-code="ug">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ug"></div>
                              </div>
                              <span class="iti__country-name">Uganda</span>
                              <span class="iti__dial-code">+256</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ua" role="option" data-country-code="ua">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ua"></div>
                              </div>
                              <span class="iti__country-name">Ukraine (Україна)</span>
                              <span class="iti__dial-code">+380</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ae" role="option" data-country-code="ae">
                              <div class="iti__flag-box">
                                <div class="iti__ae iti__flag"></div>
                              </div>
                              <span class="iti__country-name">United Arab Emirates (‫الإمارات العربية المتحدة‬‎)</span>
                              <span class="iti__dial-code">+971</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-gb" role="option" data-country-code="gb">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__gb"></div>
                              </div>
                              <span class="iti__country-name">United Kingdom</span>
                              <span class="iti__dial-code">+44</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-us" role="option" data-country-code="us">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__us"></div>
                              </div>
                              <span class="iti__country-name">United States</span>
                              <span class="iti__dial-code">+1</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-uy" role="option" data-country-code="uy">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__uy"></div>
                              </div>
                              <span class="iti__country-name">Uruguay</span>
                              <span class="iti__dial-code">+598</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-uz" role="option" data-country-code="uz">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__uz"></div>
                              </div>
                              <span class="iti__country-name">Uzbekistan (Oʻzbekiston)</span>
                              <span class="iti__dial-code">+998</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-vu" role="option" data-country-code="vu">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__vu"></div>
                              </div>
                              <span class="iti__country-name">Vanuatu</span>
                              <span class="iti__dial-code">+678</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-va" role="option" data-country-code="va">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__va"></div>
                              </div>
                              <span class="iti__country-name">Vatican City (Città del Vaticano)</span>
                              <span class="iti__dial-code">+39</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ve" role="option" data-country-code="ve">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ve"></div>
                              </div>
                              <span class="iti__country-name">Venezuela</span>
                              <span class="iti__dial-code">+58</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-vn" role="option" data-country-code="vn">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__vn"></div>
                              </div>
                              <span class="iti__country-name">Vietnam (Việt Nam)</span>
                              <span class="iti__dial-code">+84</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-wf" role="option" data-country-code="wf">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__wf"></div>
                              </div>
                              <span class="iti__country-name">Wallis and Futuna (Wallis-et-Futuna)</span>
                              <span class="iti__dial-code">+681</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-eh" role="option" data-country-code="eh">
                              <div class="iti__flag-box">
                                <div class="iti__eh iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Western Sahara (‫الصحراء الغربية‬‎)</span>
                              <span class="iti__dial-code">+212</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ye" role="option" data-country-code="ye">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__ye"></div>
                              </div>
                              <span class="iti__country-name">Yemen (‫اليمن‬‎)</span>
                              <span class="iti__dial-code">+967</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-zm" role="option" data-country-code="zm">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__zm"></div>
                              </div>
                              <span class="iti__country-name">Zambia</span>
                              <span class="iti__dial-code">+260</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-zw" role="option" data-country-code="zw">
                              <div class="iti__flag-box">
                                <div class="iti__flag iti__zw"></div>
                              </div>
                              <span class="iti__country-name">Zimbabwe</span>
                              <span class="iti__dial-code">+263</span>
                            </li>
                            <li class="iti__country iti__standard" id="iti-1__item-ax" role="option" data-country-code="ax">
                              <div class="iti__flag-box">
                                <div class="iti__ax iti__flag"></div>
                              </div>
                              <span class="iti__country-name">Åland Islands</span>
                              <span class="iti__dial-code">+358</span>
                            </li>
                          </ul>
                        </div>
                        <input type="tel" placeholder="0720 123 " id="phone-35f7" name="phone" class="u-grey-10 u-input u-input-rectangle u-radius u-input-3" required="required" data-country-code="rw">
                      </div>
                    </div>
                    <div class="u-form-group u-form-input-layout-horizontal u-form-radiobutton u-label-left u-form-group-4">
                      <label class="u-label u-spacing-0 u-text-black u-label-4">Gender</label>
                      <div class="u-form-radio-button-wrapper">
                        <div class="u-input-row">
                          <input id="field-d7cb" type="radio" name="gender" value="M" class="u-field-input u-grey-15 u-hover-custom-color-2 u-radius" data-calc="M" required="required" style="--radius: 15px;">
                          <label class="u-field-label u-text-black" for="field-d7cb" style="">Male</label>
                        </div>
                        <div class="u-input-row">
                          <input id="field-0cf3" type="radio" name="gender" value="F" class="u-field-input u-grey-15 u-hover-custom-color-2 u-radius" data-calc="F" required="required" style="--radius: 15px;">
                          <label class="u-field-label u-text-black" for="field-0cf3" style="">Female</label>
                        </div>
                      </div>
                    </div>
                    <div class="u-form-group u-form-select u-label-left u-form-group-5">
                      <label for="select-0973" class="u-label u-spacing-0 u-text-black u-label-5">Service</label>
                      <div class="u-form-select-wrapper">
                        <select id="select-0973" name="service" class="u-border-none u-grey-10 u-input u-input-rectangle u-radius u-input-4" required="required">
                          <option value="Rent" data-calc="Rent">Rent</option>
                          <option value="Buy" data-calc="Buy">Buy</option>
                          <option value="Sell" data-calc="Sell">Sell</option>
                          <option value="select" selected="selected" data-calc="">select</option>
                        </select>
                        <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                      </div>
                    </div>
                    <div class="u-form-group u-form-message u-label-left">
                      <label for="message-3434" class="u-label u-spacing-0 u-text-black u-label-6" wfd-invisible="true">Message</label>
                      <textarea placeholder="Enter your message" rows="4" cols="50" id="message-3434" name="message" class="u-border-none u-grey-10 u-input u-input-rectangle u-radius u-input-5" required=""></textarea>
                    </div>
                    <div class="u-form-group u-form-submit u-label-left">
                      <label class="u-label u-spacing-0 u-label-7"></label>
                      <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                      <div class="u-align-left u-btn-submit-container">
                        <input type="submit" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-10 u-hover-custom-color-2 u-btn-1" value="Submit">
                      </div>
                    </div>
                    <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                    <input type="hidden" name="formServices" value="7c12fa7d-4d7e-ffe0-720a-9b287f9cadc9">
                  </form>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="500">
              <div class="u-container-layout">
                <div class="u-align-left u-expanded u-grey-10 u-hover-feature u-map u-map-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="1000" data-animation-out="0" data-animation-direction="X">
                  <div class="embed-responsive">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.524632118991!2d30.08058297382966!3d-1.942893836693885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca6966f6f14d5%3A0x725582ad5975af78!2sKG%20647%20St%2C%20Kigali!5e0!3m2!1sen!2srw!4v1722556699290!5m2!1sen!2srw" data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWVtYmVkJTIyJTJDJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlMkMlMjJlbWJlZCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGd3d3Lmdvb2dsZS5jb20lMkZtYXBzJTJGZW1iZWQlM0ZwYiUzRCExbTE4ITFtMTIhMW0zITFkMzk4Ny41MjQ2MzIxMTg5OTEhMmQzMC4wODA1ODI5NzM4Mjk2NiEzZC0xLjk0Mjg5MzgzNjY5Mzg4NSEybTMhMWYwITJmMCEzZjAhM20yITFpMTAyNCEyaTc2OCE0ZjEzLjEhM20zITFtMiExczB4MTlkY2E2OTY2ZjZmMTRkNSUyNTNBMHg3MjU1ODJhZDU5NzVhZjc4ITJzS0clMjUyMDY0NyUyNTIwU3QlMjUyQyUyNTIwS2lnYWxpITVlMCEzbTIhMXNlbiEyc3J3ITR2MTcyMjU1NjY5OTI5MCE1bTIhMXNlbiEyc3J3JTIyJTdE"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-2" id="carousel_c40a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="custom-expanded data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-align-center u-container-style u-image u-layout-cell u-left-cell u-size-30-lg u-size-30-xl u-size-30-xxl u-size-60-md u-size-60-sm u-size-60-xs u-image-1" data-image-width="1000" data-image-height="462">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-xl u-size-30-xxl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-align-center u-text u-text-1"> Follow us on Social</h2>
                  <p class="u-align-center u-text u-text-2"> Looking for the latest industry insights, timely agency updates? Follow us on social:</p>
                  <div class="u-hover-feature u-social-icons u-spacing-21 u-social-icons-1">
                    <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-2fe9"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-2fe9" class="u-svg-content"><circle fill="#3B5998" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-0979"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-0979" class="u-svg-content"><circle fill="#55ACEE" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-46f7"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-46f7" class="u-svg-content"><circle fill="#C536A4" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-270d"></use></svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-270d" class="u-svg-content"><circle fill="#007AB9" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href=""><span class="u-icon u-social-icon u-social-youtube u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-dbe5"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-dbe5"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" data-type="Whatsapp" title="Whatsapp" href=""><span class="u-icon u-social-icon u-social-whatsapp u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-4931"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-4931"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,28.3C77.2,21.7,68.4,18,59,18c-19.3,0-35.1,15.7-35.1,35.1c0,6.2,1.6,12.2,4.7,17.5l-5,18.2L42.2,84
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <style data-mode="XXL" data-visited="true">@media (max-width: 0px) {
   .u-section-2 {
    background-image: none;
  }
  .u-section-2 .u-sheet-1 {
    min-height: 519px;
  }
  .u-section-2 .u-layout-wrap-1 {
    margin-top: 60px;
    margin-bottom: 60px;
  }
  .u-section-2 .u-image-1 {
    min-height: 389px;
    background-image: url("images/7a1efc23-1b7a-7322-b1dc-bc6485a69227.jpg");
    background-position: 50% 50%;
  }
  .u-section-2 .u-container-layout-1 {
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 60px;
    padding-right: 60px;
  }
  .u-section-2 .u-layout-cell-2 {
    min-height: 389px;
  }
  .u-section-2 .u-container-layout-2 {
    padding-top: 23px;
    padding-bottom: 23px;
    padding-left: 30px;
    padding-right: 30px;
  }
  .u-section-2 .u-text-1 {
    margin-top: 0;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
  }
  .u-section-2 .u-text-2 {
    font-size: 1.5rem;
    margin-top: 30px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
  }
  .u-section-2 .u-social-icons-1 {
    height: 52px;
    min-height: 16px;
    width: 344px;
    min-width: 164px;
    white-space: nowrap;
    margin-top: 34px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-2 .u-icon-1 {
    height: 100%;
  }
  .u-section-2 .u-icon-2 {
    height: 100%;
  }
  .u-section-2 .u-icon-3 {
    height: 100%;
  }
  .u-section-2 .u-icon-4 {
    height: 100%;
  }
  .u-block-77ad-15 {
    height: 100%;
  }
  .u-section-2 .u-icon-5 {
    width: 146px;
    margin-top: 34px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-section-2 .u-icon-6 {
    background-image: none;
    border-style: solid;
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }
}</style>
      
    </section>
    <section class="u-clearfix u-custom-color-9 u-section-3" id="sec-4c2f">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
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