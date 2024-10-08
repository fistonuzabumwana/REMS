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
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="index.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.15.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="fonts.css">
    <link id="u-page-google-font" rel="stylesheet" href="Home-fonts.css">
    
    
    
    
    
    
    
    
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
    <meta name="twitter:title" content="Home">
    <meta name="twitter:description" content="Real Estate Management System">
    <meta property="og:title" content="Home">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Home.html" data-home-page-title="Home" data-path-to-root="./" data-include-products="true" class="u-body u-overlap u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-9bdf" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" data-image-width="1920" data-image-height="540"><div class="u-clearfix u-sheet u-sheet-1">
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
?>
</li></ul>
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
<?php 
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
 echo "</li><li class='u-nav-item'><a class='u-button-style u-nav-link' href='status.php'>Admin</a>";
}
 ?>
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
    <section class="u-clearfix u-custom-color-9 u-section-1" id="sec-908d">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-clearfix u-custom-color-9 u-section-2" id="carousel_e920">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="custom-expanded data-layout-selected u-clearfix u-gutter-34 u-layout-spacing-all u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-container-align-center u-container-style u-hover-feature u-image u-image-round u-layout-cell u-radius u-size-30 u-image-1" data-image-width="1456" data-image-height="816">
                    <div class="u-border-3 u-border-custom-color-1 u-container-layout u-container-layout-1"></div>
                  </div>
                  <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <h2 class="u-text u-text-custom-color-10 u-text-1"> Real Estate Management</h2>
                      <p class="u-text u-text-body-color u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-2"> Our system manages properties, tenants, and leases, ensuring compliance with national laws and regulations. We facilitate efficient property management, streamline tenant communications, and support the overall development of real estate policies and strategies.<br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-size-31 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3">
                      <h2 class="u-text u-text-custom-color-10 u-text-3"> Property Listings and Tenant Services</h2>
                      <p class="u-text u-text-black u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-4"> Our platform offers comprehensive property listings, making it easy for potential tenants and buyers to find suitable properties. We provide detailed property information, including pricing, amenities, and location. Additionally, our tenant services streamline the leasing process, from application to lease signing, and offer support for maintenance requests and inquiries. Our goal is to create a seamless experience for both property owners and tenants.<br>
                      </p>
                    </div>
                  </div>
                  <div class="u-container-align-center u-container-style u-hover-feature u-image u-image-round u-layout-cell u-radius u-size-29 u-image-2" data-image-width="400" data-image-height="240">
                    <div class="u-border-3 u-border-custom-color-1 u-container-layout u-container-layout-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
    </section>
    <section class="u-align-center u-border-3 u-border-custom-color-1 u-clearfix u-custom-color-9 u-section-3" id="carousel_aacb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-custom-font u-text u-text-custom-color-1 u-text-1">Limited-Time Offers&nbsp;</h2>
        <img class="u-image u-image-contain u-image-default u-image-1" src="images/5bbc5b15d1afa-a32d5aeed008c59a0c18ec7a5abda467.png" alt="" data-image-width="500" data-image-height="389" data-animation-name="swing" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""><!--products--><!--products_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/products_options_json-->
        <div class="custom-expanded u-layout-horizontal u-products u-show-second-image u-products-1" data-site-sorting-prop="created" data-site-sorting-order="desc" data-products-datasource="site" data-items-per-page="3" data-products-id="1">
          <div class="u-list-control"></div>
          <div class="u-repeater u-repeater-1">
            <!--product_item--><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-1" data-product-id="6">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><!--product_image-->
                <a class="u-product-title-link" href="products/kigali-house-for-sale-in-gisozi.html"><img alt="" class="u-expanded-width u-image u-image-round u-product-control u-radius u-image-2" src="images/h4.jpeg"></a><img src="images/19-06-06-1-1-von-35.jpg" class="u-product-second-image"><!--/product_image--><!--product_title-->
                <h5 class="u-product-control u-text u-text-2">
                  <a class="u-product-title-link" href="products/kigali-house-for-sale-in-gisozi.html">Kigali House for sale in Gisozi</a>
                </h5><!--/product_title--><!--product_price-->
                <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-1">
                  <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                    <div class="u-old-price" style="text-decoration: line-through !important;">$175,000.00</div><!--/product_old_price--><!--product_regular_price-->
                    <div class="u-price u-text-palette-2-base" style="font-size: 0.75rem; font-weight: 700;">$150,000.00</div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"buy-now","content":"Buy Now"}--><!--/options_json-->
                <a href="#sec-b626" class="u-btn u-button-style u-custom-color-10 u-hover-custom-color-2 u-product-control u-text-body-alt-color u-btn-1 u-dialog-link u-payment-button" data-product-button-click-type="buy-now" data-product-id="6" data-product="{&quot;id&quot;:&quot;6&quot;,&quot;name&quot;:&quot;kigali-house-for-sale-in-gisozi&quot;,&quot;title&quot;:&quot;Kigali House for sale in Gisozi&quot;,&quot;description&quot;:&quot;Modern new house for sale in Gisozi at 350 million It has 5 bedrooms 5 bathrooms Modern kitchen Sitting room Dining room Staff quarter Beautiful view Prime location in Kigali &quot;,&quot;fullDescription&quot;:&quot;Modern new house for sale in Gisozi at 350 million It has 5 bedrooms 5 bathrooms Modern kitchen Sitting room Dining room Staff quarter Beautiful view Prime location in Kigali &quot;,&quot;price&quot;:&quot;150000&quot;,&quot;oldPrice&quot;:&quot;175000&quot;,&quot;quantity&quot;:1,&quot;currency&quot;:&quot;USD&quot;,&quot;sku&quot;:&quot;&quot;,&quot;outOfStock&quot;:false,&quot;isFeatured&quot;:false,&quot;categories&quot;:[&quot;4&quot;],&quot;images&quot;:[{&quot;url&quot;:&quot;images/h4.jpeg&quot;},{&quot;url&quot;:&quot;images/19-06-06-1-1-von-35.jpg&quot;}],&quot;created&quot;:1721689500048,&quot;updated&quot;:1722619270837,&quot;isDefault&quot;:true,&quot;categoriesData&quot;:[{&quot;link&quot;:&quot;./products/products.html#/1///4&quot;,&quot;title&quot;:&quot;HOUSE&quot;}]}"><!--product_button_content-->Buy Now<!--/product_button_content--></a><!--/product_button-->
              </div>
            </div><!--/product_item--><!--product_item--><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-2" data-product-id="5">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><!--product_image-->
                <a class="u-product-title-link" href="products/kigali-nice-house-for-sale-in-kagarama.html"><img alt="" class="u-expanded-width u-image u-image-round u-product-control u-radius u-image-3" src="images/h1.jpg"></a><img src="images/h3.jpg" class="u-product-second-image"><!--/product_image--><!--product_title-->
                <h5 class="u-product-control u-text u-text-3">
                  <a class="u-product-title-link" href="products/kigali-nice-house-for-sale-in-kagarama.html">Kigali Nice house for sale in Kagarama</a>
                </h5><!--/product_title--><!--product_price-->
                <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-2">
                  <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                    <div class="u-old-price" style="text-decoration: line-through !important;">$80,000.00</div><!--/product_old_price--><!--product_regular_price-->
                    <div class="u-price u-text-palette-2-base" style="font-size: 0.75rem; font-weight: 700;">$48,000.00</div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"buy-now","content":"Buy Now"}--><!--/options_json-->
                <a href="#sec-b626" class="u-btn u-button-style u-custom-color-10 u-hover-custom-color-2 u-product-control u-text-body-alt-color u-text-hover-custom-color-9 u-btn-2 u-dialog-link u-payment-button disabled" data-product-button-click-type="buy-now" data-product-id="5" data-product="{&quot;id&quot;:&quot;5&quot;,&quot;name&quot;:&quot;kigali-nice-house-for-sale-in-kagarama&quot;,&quot;title&quot;:&quot;Kigali Nice house for sale in Kagarama&quot;,&quot;description&quot;:&quot;Kigali's new house is for sale in a big compound located in a good place.&quot;,&quot;fullDescription&quot;:&quot;Kigali's new house is for sale in a big compound located in a good place.\n\nLocation: Kigali, kanombe . Near Cumi an kabiri\nBedrooms: 5\nBathrooms: 4\nLiving room and dining room \nIndoor modern kitchen \nParking \nGarden \nBig compound \nPrice: 150,000,000 Few\nPlot size: 700 sqm&quot;,&quot;price&quot;:&quot;48000&quot;,&quot;oldPrice&quot;:&quot;80000&quot;,&quot;quantity&quot;:1,&quot;currency&quot;:&quot;USD&quot;,&quot;sku&quot;:&quot;&quot;,&quot;outOfStock&quot;:true,&quot;isFeatured&quot;:false,&quot;categories&quot;:[&quot;4&quot;],&quot;images&quot;:[{&quot;url&quot;:&quot;images/h1.jpg&quot;},{&quot;url&quot;:&quot;images/h3.jpg&quot;}],&quot;created&quot;:1721689500048,&quot;updated&quot;:1722956390890,&quot;isDefault&quot;:true,&quot;categoriesData&quot;:[{&quot;link&quot;:&quot;./products/products.html#/1///4&quot;,&quot;title&quot;:&quot;HOUSE&quot;}]}">Out Of Stock</a><!--/product_button-->
              </div>
            </div><!--/product_item--><!--product_item--><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-3" data-product-id="3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><!--product_image-->
                <a class="u-product-title-link" href="products/kigali-stunning-4-bedroom-apartment-for-sale-in-kanombe.html"><img alt="" class="u-expanded-width u-image u-image-round u-product-control u-radius u-image-4" src="images/h2.jpg"></a><img src="images/Visit-Rwanda-Vision-City-1920x1280.jpg" class="u-product-second-image"><!--/product_image--><!--product_title-->
                <h5 class="u-product-control u-text u-text-4">
                  <a class="u-product-title-link" href="products/kigali-stunning-4-bedroom-apartment-for-sale-in-kanombe.html">Kigali stunning 4 Bedroom apartment for sale in Kanombe</a>
                </h5><!--/product_title--><!--product_price-->
                <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-3">
                  <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                    <div class="u-old-price" style="text-decoration: line-through !important;">$90,000.00</div><!--/product_old_price--><!--product_regular_price-->
                    <div class="u-price u-text-palette-2-base" style="font-size: 0.75rem; font-weight: 700;">$60,000.00</div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"buy-now","content":"Buy Now"}--><!--/options_json-->
                <a href="#sec-b626" class="u-btn u-button-style u-custom-color-10 u-hover-custom-color-2 u-product-control u-text-body-alt-color u-btn-3 u-dialog-link u-payment-button" data-product-button-click-type="buy-now" data-product-id="3" data-product="{&quot;id&quot;:&quot;3&quot;,&quot;name&quot;:&quot;kigali-stunning-4-bedroom-apartment-for-sale-in-kanombe&quot;,&quot;title&quot;:&quot;Kigali stunning 4 Bedroom apartment for sale in Kanombe&quot;,&quot;description&quot;:&quot;This apartment has a captivating view, constructed with modern and brand new materials, and it is located in the urban area of Kanombe. This apartment is close to completion, with the last works being done on it. The price is 50,000 USD&quot;,&quot;fullDescription&quot;:&quot;Bedroom: 4\nBathroom: 3\nIndoor Modern Kitchen\nCustomized to meet excellent home standards\nClean, quiet neighborhood\nScenic views of the international airport and Rwandan mountains&quot;,&quot;price&quot;:&quot;60000&quot;,&quot;oldPrice&quot;:&quot;90000&quot;,&quot;quantity&quot;:1,&quot;currency&quot;:&quot;USD&quot;,&quot;sku&quot;:&quot;&quot;,&quot;outOfStock&quot;:false,&quot;isFeatured&quot;:true,&quot;categories&quot;:[&quot;4&quot;],&quot;images&quot;:[{&quot;url&quot;:&quot;images/h2.jpg&quot;},{&quot;url&quot;:&quot;images/Visit-Rwanda-Vision-City-1920x1280.jpg&quot;}],&quot;created&quot;:1721689500048,&quot;updated&quot;:1722956466063,&quot;isDefault&quot;:true,&quot;categoriesData&quot;:[{&quot;link&quot;:&quot;./products/products.html#/1///4&quot;,&quot;title&quot;:&quot;HOUSE&quot;}]}"><!--product_button_content-->Buy Now<!--/product_button_content--></a><!--/product_button-->
              </div>
            </div><!--/product_item--><!--product_item--><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-1" data-product-id="6">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><!--product_image-->
                <a class="u-product-title-link" href="products/new-apartments-for-sale-near-kigali-international-airport.html"><img alt="" class="u-expanded-width u-image u-image-round u-product-control u-radius u-image-2" src="images/image.jpg"></a><img src="images/Real-estate-analyst.jpg" class="u-product-second-image"><!--/product_image--><!--product_title-->
                <h5 class="u-product-control u-text u-text-2">
                  <a class="u-product-title-link" href="products/new-apartments-for-sale-near-kigali-international-airport.html">New apartments for sale near Kigali international airport</a>
                </h5><!--/product_title--><!--product_price-->
                <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-1">
                  <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                    <div class="u-old-price" style="text-decoration: line-through !important;">$120,000.00</div><!--/product_old_price--><!--product_regular_price-->
                    <div class="u-price u-text-palette-2-base" style="font-size: 0.75rem; font-weight: 700;">$80,000.00</div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"buy-now","content":"Buy Now"}--><!--/options_json-->
                <a href="#sec-b626" class="u-btn u-button-style u-custom-color-10 u-hover-custom-color-2 u-product-control u-text-body-alt-color u-btn-1 u-dialog-link u-payment-button" data-product-button-click-type="buy-now" data-product-id="4" data-product="{&quot;id&quot;:&quot;4&quot;,&quot;name&quot;:&quot;new-apartments-for-sale-near-kigali-international-airport&quot;,&quot;title&quot;:&quot;New apartments for sale near Kigali international airport&quot;,&quot;description&quot;:&quot;These apartments are near the airport and are made with high-quality materials. The first bathroom has new fixtures and access to the balcony.\nThe second bedroom is bright with doors and windows and it also feature brand-new quality furniture.&quot;,&quot;fullDescription&quot;:&quot;Two bedrooms (1 bedroom units are also available)\nTwo bathrooms\nA water tank\nAn outside storage room\nLarge parking space\nSpacious living room\nLovely modern kitche\n\nYou will enjoy amazing views and new, stylish materials.\n\nThese apartments are near the airport and are made with high-quality materials.\n\nThe first bathroom has new fixtures and access to the balcony.\nThe second bedroom is bright with doors and windows and it also feature brand-new quality furniture.\nYou can buy this property to rent out or to live in. This project has a great view of the industrial area, the airport, and the mountains areas of Bumbogo. These views are nice and refreshing.&quot;,&quot;price&quot;:&quot;80000&quot;,&quot;oldPrice&quot;:&quot;120000&quot;,&quot;quantity&quot;:1,&quot;currency&quot;:&quot;USD&quot;,&quot;sku&quot;:&quot;&quot;,&quot;outOfStock&quot;:false,&quot;isFeatured&quot;:false,&quot;categories&quot;:[&quot;4&quot;],&quot;images&quot;:[{&quot;url&quot;:&quot;images/image.jpg&quot;},{&quot;url&quot;:&quot;images/Real-estate-analyst.jpg&quot;}],&quot;created&quot;:1721689500048,&quot;updated&quot;:1722550233482,&quot;isDefault&quot;:true,&quot;categoriesData&quot;:[{&quot;link&quot;:&quot;./products/products.html#/1///4&quot;,&quot;title&quot;:&quot;HOUSE&quot;}]}"><!--product_button_content-->Buy Now<!--/product_button_content--></a><!--/product_button-->
              </div>
            </div><!--/product_item--><!--product_item--><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-2" data-product-id="5">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><!--product_image-->
                <a class="u-product-title-link" href="products/kigali-house-for-sale-in-kibagabaga.html"><img alt="" class="u-expanded-width u-image u-image-round u-product-control u-radius u-image-3" src="images/69426.jpg"></a><img src="images/b6604da4_z.webp" class="u-product-second-image"><!--/product_image--><!--product_title-->
                <h5 class="u-product-control u-text u-text-3">
                  <a class="u-product-title-link" href="products/kigali-house-for-sale-in-kibagabaga.html">Kigali House for sale in Kibagabaga</a>
                </h5><!--/product_title--><!--product_price-->
                <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-2">
                  <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                    <div class="u-old-price" style="text-decoration: line-through !important;">$85,000.00</div><!--/product_old_price--><!--product_regular_price-->
                    <div class="u-price u-text-palette-2-base" style="font-size: 0.75rem; font-weight: 700;">$54,000.00</div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"buy-now","content":"Buy Now"}--><!--/options_json-->
                <a href="#sec-b626" class="u-btn u-button-style u-custom-color-10 u-hover-custom-color-2 u-product-control u-text-body-alt-color u-text-hover-custom-color-9 u-btn-2 u-dialog-link u-payment-button" data-product-button-click-type="buy-now" data-product-id="2" data-product="{&quot;id&quot;:&quot;2&quot;,&quot;name&quot;:&quot;kigali-house-for-sale-in-kibagabaga&quot;,&quot;title&quot;:&quot;Kigali House for sale in Kibagabaga&quot;,&quot;description&quot;:&quot;Kigali House for sale in Kibagabaga \nThe house consists of Sitting room 3 Dining room 2\n6 Bedrooms 7 Bathrooms Beautiful Modern KitchenS  2 inside &amp; Store 3 Outside annex's worker&quot;,&quot;fullDescription&quot;:&quot;Kigali House for sale in Kibagabaga \n\nThe house consists of:\nSitting room 3\nDining room 2\n6Bedrooms\n7Bathrooms\nBeautiful Modern KitchenS 2 inside &amp; Store3\nOutside annex's worker 2 , kitchen and bathrooms \nNice Garden\nBig  Parking Space \nWater Tank 2\nPrice: 350000$\n built of burnt bricks\nFull documents available\n\nAsphalt road &quot;,&quot;price&quot;:&quot;54000&quot;,&quot;oldPrice&quot;:&quot;85000&quot;,&quot;quantity&quot;:1,&quot;currency&quot;:&quot;USD&quot;,&quot;sku&quot;:&quot;&quot;,&quot;outOfStock&quot;:false,&quot;isFeatured&quot;:false,&quot;categories&quot;:[&quot;4&quot;],&quot;images&quot;:[{&quot;url&quot;:&quot;images/69426.jpg&quot;},{&quot;url&quot;:&quot;images/b6604da4_z.webp&quot;}],&quot;created&quot;:1721689500047,&quot;updated&quot;:1722619294044,&quot;isDefault&quot;:true,&quot;categoriesData&quot;:[{&quot;link&quot;:&quot;./products/products.html#/1///4&quot;,&quot;title&quot;:&quot;HOUSE&quot;}]}"><!--product_button_content-->Buy Now<!--/product_button_content--></a><!--/product_button-->
              </div>
            </div><!--/product_item--><!--product_item--><div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-3" data-product-id="3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><!--product_image-->
                <a class="u-product-title-link" href="products/property-for-sale-rubavu-on-lake-kivu-rwanda.html"><img alt="" class="u-expanded-width u-image u-image-round u-product-control u-radius u-image-4" src="images/q2.jpg"></a><img src="images/q1.png" class="u-product-second-image"><!--/product_image--><!--product_title-->
                <h5 class="u-product-control u-text u-text-4">
                  <a class="u-product-title-link" href="products/property-for-sale-rubavu-on-lake-kivu-rwanda.html">Property for sale Rubavu on Lake Kivu Rwanda</a>
                </h5><!--/product_title--><!--product_price-->
                <div data-add-zero-cents="true" class="u-product-control u-product-price u-product-price-3">
                  <div class="u-price-wrapper u-spacing-10"><!--product_old_price-->
                    <div class="u-old-price" style="text-decoration: line-through !important;">$160,000.00</div><!--/product_old_price--><!--product_regular_price-->
                    <div class="u-price u-text-palette-2-base" style="font-size: 0.75rem; font-weight: 700;">$115,000.00</div><!--/product_regular_price-->
                  </div>
                </div><!--/product_price--><!--product_button--><!--options_json--><!--{"clickType":"buy-now","content":"Buy Now"}--><!--/options_json-->
                <a href="#sec-b626" class="u-btn u-button-style u-custom-color-10 u-hover-custom-color-2 u-product-control u-text-body-alt-color u-btn-3 u-dialog-link u-payment-button" data-product-button-click-type="buy-now" data-product-id="1" data-product="{&quot;id&quot;:&quot;1&quot;,&quot;name&quot;:&quot;property-for-sale-rubavu-on-lake-kivu-rwanda&quot;,&quot;title&quot;:&quot;Property for sale Rubavu on Lake Kivu Rwanda&quot;,&quot;description&quot;:&quot;Kigali house and big plot for sale in Rubavu Access on lake  House with 16 bedrooms Bar and restaurent Big garden Plot size is 3200 msq Kitchen Big parking &quot;,&quot;fullDescription&quot;:&quot;Kigali house and big plot for sale in Rubavu\n\nAccess on lake \nHouse with 16 bedrooms\nBar and restaurent \nBig garden\nPlot size is 3200 msq\nKitchen\nBig parking &quot;,&quot;price&quot;:&quot;115000&quot;,&quot;oldPrice&quot;:&quot;160000&quot;,&quot;quantity&quot;:1,&quot;currency&quot;:&quot;USD&quot;,&quot;sku&quot;:&quot;&quot;,&quot;outOfStock&quot;:false,&quot;isFeatured&quot;:false,&quot;categories&quot;:[&quot;4&quot;],&quot;images&quot;:[{&quot;url&quot;:&quot;images/q2.jpg&quot;},{&quot;url&quot;:&quot;images/q1.png&quot;}],&quot;created&quot;:1721689500047,&quot;updated&quot;:1722550378820,&quot;isDefault&quot;:true,&quot;categoriesData&quot;:[{&quot;link&quot;:&quot;./products/products.html#/1///4&quot;,&quot;title&quot;:&quot;HOUSE&quot;}]}"><!--product_button_content-->Buy Now<!--/product_button_content--></a><!--/product_button-->
              </div>
            </div><!--/product_item-->
            
            
          </div>
          <div class="u-list-control"></div>
          <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div><!--/products-->
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-9 u-section-4" id="carousel_4080">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-custom-color-10 u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xlink:href="#svg-c776"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-c776" style="enable-background:new 0 0 60 60;"><path d="M48.014,42.889l-9.553-4.776C37.56,37.662,37,36.756,37,35.748v-3.381c0.229-0.28,0.47-0.599,0.719-0.951
	c1.239-1.75,2.232-3.698,2.954-5.799C42.084,24.97,43,23.575,43,22v-4c0-0.963-0.36-1.896-1-2.625v-5.319
	c0.056-0.55,0.276-3.824-2.092-6.525C37.854,1.188,34.521,0,30,0s-7.854,1.188-9.908,3.53C17.724,6.231,17.944,9.506,18,10.056
	v5.319c-0.64,0.729-1,1.662-1,2.625v4c0,1.217,0.553,2.352,1.497,3.109c0.916,3.627,2.833,6.36,3.503,7.237v3.309
	c0,0.968-0.528,1.856-1.377,2.32l-8.921,4.866C8.801,44.424,7,47.458,7,50.762V54c0,4.746,15.045,6,23,6s23-1.254,23-6v-3.043
	C53,47.519,51.089,44.427,48.014,42.889z M51,54c0,1.357-7.412,4-21,4S9,55.357,9,54v-3.238c0-2.571,1.402-4.934,3.659-6.164
	l8.921-4.866C23.073,38.917,24,37.354,24,35.655v-4.019l-0.233-0.278c-0.024-0.029-2.475-2.994-3.41-7.065l-0.091-0.396l-0.341-0.22
	C19.346,23.303,19,22.676,19,22v-4c0-0.561,0.238-1.084,0.67-1.475L20,16.228V10l-0.009-0.131c-0.003-0.027-0.343-2.799,1.605-5.021
	C23.253,2.958,26.081,2,30,2c3.905,0,6.727,0.951,8.386,2.828c1.947,2.201,1.625,5.017,1.623,5.041L40,16.228l0.33,0.298
	C40.762,16.916,41,17.439,41,18v4c0,0.873-0.572,1.637-1.422,1.899l-0.498,0.153l-0.16,0.495c-0.669,2.081-1.622,4.003-2.834,5.713
	c-0.297,0.421-0.586,0.794-0.837,1.079L35,31.623v4.125c0,1.77,0.983,3.361,2.566,4.153l9.553,4.776
	C49.513,45.874,51,48.28,51,50.957V54z"></path></svg></span>
                <h3 class="u-custom-font u-font-montserrat u-text u-text-custom-color-10 u-text-1" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> 12324</h3>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-2">CLIENTS</h4>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-custom-color-10 u-icon u-icon-circle u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 60 60" style=""><use xlink:href="#svg-b212"></use></svg><svg class="u-svg-content" viewBox="0 0 60 60" x="0px" y="0px" id="svg-b212" style="enable-background:new 0 0 60 60;"><g><path d="M30,26c3.86,0,7-3.141,7-7s-3.14-7-7-7s-7,3.141-7,7S26.14,26,30,26z M30,14c2.757,0,5,2.243,5,5s-2.243,5-5,5
		s-5-2.243-5-5S27.243,14,30,14z"></path><path d="M29.823,54.757L45.164,32.6c5.754-7.671,4.922-20.28-1.781-26.982C39.761,1.995,34.945,0,29.823,0
		s-9.938,1.995-13.56,5.617c-6.703,6.702-7.535,19.311-1.804,26.952L29.823,54.757z M17.677,7.031C20.922,3.787,25.235,2,29.823,2
		s8.901,1.787,12.146,5.031c6.05,6.049,6.795,17.437,1.573,24.399L29.823,51.243L16.082,31.4
		C10.882,24.468,11.628,13.08,17.677,7.031z"></path><path d="M42.117,43.007c-0.55-0.067-1.046,0.327-1.11,0.876s0.328,1.046,0.876,1.11C52.399,46.231,58,49.567,58,51.5
		c0,2.714-10.652,6.5-28,6.5S2,54.214,2,51.5c0-1.933,5.601-5.269,16.117-6.507c0.548-0.064,0.94-0.562,0.876-1.11
		c-0.065-0.549-0.561-0.945-1.11-0.876C7.354,44.247,0,47.739,0,51.5C0,55.724,10.305,60,30,60s30-4.276,30-8.5
		C60,47.739,52.646,44.247,42.117,43.007z"></path>
</g></svg></span>
                <h3 class="u-custom-font u-font-montserrat u-text u-text-custom-color-10 u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> 915</h3>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-4">Available property </h4>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-custom-color-10 u-file-icon u-icon u-icon-circle u-text-white u-icon-3"><img src="images/1705213-bb67cae4.png" alt=""></span>
                <h3 class="u-custom-font u-font-montserrat u-text u-text-custom-color-10 u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> 8120</h3>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-6">Pending Deal</h4>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-radius-50 u-repeater-item u-shape-round u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-custom-color-10 u-file-icon u-icon u-icon-circle u-text-white u-icon-4"><img src="images/1831669-b3164254.png" alt=""></span>
                <h3 class="u-custom-font u-font-montserrat u-text u-text-custom-color-10 u-text-7" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">12010</h3>
                <h4 class="u-custom-font u-font-montserrat u-text u-text-8">SALES Completed</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-custom-color-9 u-section-5" id="sec-ef66">
      <div class="u-clearfix u-sheet u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        <div class="custom-expanded u-blog u-layout-horizontal u-blog-1" data-items-per-page="3">
          <div class="u-list-control"></div>
          <div class="u-repeater u-repeater-1"><!--blog_post-->
            <div class="u-align-left u-blog-post u-container-style u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <a class="u-post-header-link" href="blog/exploring-kigalis-luxury-real-estate-market.html"><!--blog_post_image-->
                  <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="images/Visit-Rwanda-Vision-City-1920x1280.jpg" data-image-width="1500" data-image-height="1000"><!--/blog_post_image-->
                </a>
                <div class="u-align-center u-container-style u-grey-5 u-group u-video-cover u-group-1">
                  <div class="u-container-layout u-container-layout-2"><!--blog_post_metadata-->
                    <div class="u-blog-control u-metadata u-metadata-1"><!--blog_post_metadata_date-->
                      <span class="u-meta-date u-meta-icon">Aug 01, 2024</span><!--/blog_post_metadata_date-->
                    </div><!--/blog_post_metadata--><!--blog_post_header-->
                    <h4 class="u-blog-control u-text u-text-1">
                      <a class="u-post-header-link" href="blog/exploring-kigalis-luxury-real-estate-market.html">Exploring Kigali's Luxury Real Estate Market</a>
                    </h4><!--/blog_post_header--><!--blog_post_content-->
                    <div class="u-blog-control u-post-content u-text u-text-2 fr-view">Kigali has become a hotspot for luxury real estate in East Africa, attracting high-net-worth individuals and investors seeking exclusive properties. The city's appeal lies in its combination of modern infrastructure.....</div><!--/blog_post_content-->
                  </div>
                </div>
              </div>
            </div><div class="u-align-left u-blog-post u-container-style u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <a class="u-post-header-link" href="blog/affordable-housing-initiatives-in-kigali.html"><!--blog_post_image-->
                  <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-2" src="images/1706770336808.jpeg" data-image-width="720" data-image-height="424"><!--/blog_post_image-->
                </a>
                <div class="u-align-center u-container-style u-grey-5 u-group u-video-cover u-group-2">
                  <div class="u-container-layout u-container-layout-4"><!--blog_post_metadata-->
                    <div class="u-blog-control u-metadata u-metadata-2"><!--blog_post_metadata_date-->
                      <span class="u-meta-date u-meta-icon">Aug 01, 2024</span><!--/blog_post_metadata_date-->
                    </div><!--/blog_post_metadata--><!--blog_post_header-->
                    <h4 class="u-blog-control u-text u-text-3">
                      <a class="u-post-header-link" href="blog/affordable-housing-initiatives-in-kigali.html">Affordable Housing Initiatives in Kigali</a>
                    </h4><!--/blog_post_header--><!--blog_post_content-->
                    <div class="u-blog-control u-post-content u-text u-text-4 fr-view">Kigali's rapid urbanization has brought about challenges, particularly in the area of affordable housing. As the city grows, so does the need for housing options that cater to all income levels. In recent years, the Rwandan...</div><!--/blog_post_content-->
                  </div>
                </div>
              </div>
            </div><div class="u-align-left u-blog-post u-container-style u-repeater-item u-video-cover">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <a class="u-post-header-link" href="blog/sustainable-real-estate-development-in-kigali.html"><!--blog_post_image-->
                  <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-3" src="images/csm_UMUTUZO_VILLAGE_af34b9da73.jpg" data-image-width="800" data-image-height="496"><!--/blog_post_image-->
                </a>
                <div class="u-align-center u-container-style u-grey-5 u-group u-group-3">
                  <div class="u-container-layout u-container-layout-6"><!--blog_post_metadata-->
                    <div class="u-blog-control u-metadata u-metadata-3"><!--blog_post_metadata_date-->
                      <span class="u-meta-date u-meta-icon">Aug 01, 2024</span><!--/blog_post_metadata_date-->
                    </div><!--/blog_post_metadata--><!--blog_post_header-->
                    <h4 class="u-blog-control u-text u-text-5">
                      <a class="u-post-header-link" href="blog/sustainable-real-estate-development-in-kigali.html">Sustainable Real Estate Development in Kigali</a>
                    </h4><!--/blog_post_header--><!--blog_post_content-->
                    <div class="u-blog-control u-post-content u-text u-text-6 fr-view">Kigali is not only known for its cleanliness and well-organized urban planning but also for its commitment to sustainable development. As the city continues to expand, there is a growing focus on incorporating sustainable.....</div><!--/blog_post_content-->
                  </div>
                </div>
              </div>
            </div><!--/blog_post--><!--blog_post-->
            <!--/blog_post--><!--blog_post-->
            <!--/blog_post-->
          </div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-palette-1-base u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-palette-1-base u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
          <div class="u-list-control"></div>
        </div><!--/blog-->
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-9 u-section-6" id="carousel_45b6">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="custom-expanded data-layout-selected u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <div class="custom-expanded u-border-20 u-border-custom-color-1 u-container-style u-group u-shape-rectangle u-white u-group-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
                        <div class="u-container-layout u-container-layout-2">
                          <div class="u-image u-image-circle u-image-1" alt="" data-image-width="640" data-image-height="640"></div>
                          <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">Cyusa Clever</h5>
                          <div class="u-social-icons u-spacing-10 u-social-icons-1">
                            <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-text-custom-color-10 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-b310"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b310"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                            </a>
                            <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-custom-color-10 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-5689"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5689"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                            </a>
                            <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-text-custom-color-10 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-d619"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d619"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <p class="u-text u-text-black u-text-2"> The Real Estate Management System has been instrumental in transforming our property management practices. With their support, we’ve seen a significant increase in tenant satisfaction and overall property efficiency.<br>
                      </p>
                    </div>
                  </div>
                  <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-3">
                      <div class="custom-expanded u-border-20 u-border-custom-color-10 u-container-style u-group u-shape-rectangle u-white u-group-2" data-animation-name="customAnimationIn" data-animation-duration="2000">
                        <div class="u-container-layout u-container-layout-4">
                          <div class="u-image u-image-circle u-image-2" alt="" data-image-width="640" data-image-height="640"></div>
                          <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-3">Uzabumwana Fiston</h5>
                          <div class="u-social-icons u-spacing-10 u-social-icons-2">
                            <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-text-custom-color-1 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-7912"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7912"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                            </a>
                            <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-custom-color-1 u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-ee3a"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ee3a"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                            </a>
                            <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-text-custom-color-1 u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-a562"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a562"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <p class="u-text u-text-black u-text-default u-text-4"> Thanks to the Real Estate Management System's&nbsp; programs, Their dedication to supporting property managers and landlords is truly commendable.<br>
                        <br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-5">
                      <div class="custom-expanded u-border-20 u-border-custom-color-10 u-container-style u-group u-shape-rectangle u-white u-group-3" data-animation-name="customAnimationIn" data-animation-duration="2000">
                        <div class="u-container-layout u-container-layout-6">
                          <div class="u-image u-image-circle u-image-3" alt="" data-image-width="590" data-image-height="711"></div>
                          <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-5">Byiringiro Yves</h5>
                          <div class="u-social-icons u-spacing-10 u-social-icons-3">
                            <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-text-custom-color-1 u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-e3b9"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e3b9"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                            </a>
                            <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-custom-color-1 u-icon-8"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-07b5"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-07b5"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                            </a>
                            <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-text-custom-color-1 u-icon-9"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-e4ca"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e4ca"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <p class="u-text u-text-black u-text-6"> The guidance and resources provided by the Real Estate Management System have helped our property management business thrive. We are now able to maintain properties more efficiently and attract new tenants.</p>
                    </div>
                  </div>
                  <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-4">
                    <div class="u-container-layout u-container-layout-7">
                      <div class="custom-expanded u-border-20 u-border-custom-color-1 u-container-style u-group u-shape-rectangle u-white u-group-4" data-animation-name="customAnimationIn" data-animation-duration="2000">
                        <div class="u-container-layout u-container-layout-8">
                          <div class="u-image u-image-circle u-image-4" alt="" data-image-width="640" data-image-height="640"></div>
                          <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-7">Rukundo Eric</h5>
                          <div class="u-social-icons u-spacing-10 u-social-icons-4">
                            <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-text-custom-color-10 u-icon-10"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-d4d8"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d4d8"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                            </a>
                            <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-custom-color-10 u-icon-11"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-2af1"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-2af1"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                            </a>
                            <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-text-custom-color-10 u-icon-12"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-d7b0"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d7b0"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <p class="u-text u-text-black u-text-default u-text-8"> I am grateful for the Real Estate Management System's efforts in promoting sustainable property management. Their initiatives have not only improved our property operations but also ensured we manage them in an environmentally friendly way.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
<span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 20px; bottom: 20px; padding: 20px; background-image: none;" class="u-back-to-top u-border-2 u-border-palette-1-base u-icon u-icon-circle u-opacity u-opacity-85 u-white" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-payment-dialog u-dialog-section-9" id="sec-b626">
      <div class="u-align-center u-container-style u-dialog u-radius-25 u-shape-round u-white u-dialog-1">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <h5 class="u-align-left u-text u-text-1">Buy Now</h5>
          <div class="custom-expanded u-products u-products-1" data-site-sorting-prop="created" data-site-sorting-order="desc" data-items-per-page="1">
            <div class="u-list-control"></div>
            <div class="u-repeater u-repeater-1">
              <!--product_item--><div class="u-container-style u-products-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-container-layout-2">
                  <h5 class="u-align-left u-product-control u-text u-text-2">
                    <a class="u-product-title-link" href="#">Product 1 Title</a>
                  </h5>
                  <div class="u-align-left u-product-control u-product-desc u-text u-text-3">
                    <p>Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
                  </div>
                  <div class="u-align-left u-product-control u-product-quantity u-product-quantity-1">
                    <div class="u-hidden u-quantity-label">Quantity</div>
                    <div class="u-border-1 u-border-grey-30 u-quantity-input u-radius-50">
                      <a class="disabled minus u-button-style u-quantity-button u-text-body-color">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="m 4 8 h 8" fill="none" stroke="currentColor" stroke-width="1" fill-rule="evenodd"></path></svg>
                      </a>
                      <input class="u-input" type="text" value="1" pattern="[0-9]+">
                      <a class="plus u-button-style u-quantity-button u-text-body-color">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="m 4 8 h 8 M 8 4 v 8" fill="none" stroke="currentColor" stroke-width="1" fill-rule="evenodd"></path></svg>
                      </a>
                    </div>
                  </div>
                  <div data-add-zero-cents="true" class="u-align-left u-product-control u-product-price u-product-price-1">
                    <div class="u-price-wrapper u-spacing-10">
                      <div class="u-old-price" style="text-decoration: line-through !important;">$20.00</div>
                      <div class="u-price" style="font-size: 1.25rem; font-weight: 700;">$17.00</div>
                    </div>
                  </div>
                </div>
              </div><!--/product_item-->
            </div>
            <div class="u-list-control"></div>
          </div>
          <div class="custom-expanded u-payment-services u-tab-links-align-justify u-tab-payment u-tab-vertical u-tabs u-payment-services-1" data-payment-order-approved-message="Your order has been approved. Thank you!" data-payment-order-cancelled-message="Unable to process your order. Please try again later." data-payment-service="e5aab2b9482ff519f303a66006f0df0e" data-paypal-hidden-buttons="">
            <ul class="u-tab-list u-unstyled" role="tablist"><li class="u-tab-item" role="presentation"><a class="active u-active-grey-10 u-button-style u-payment-paypal u-tab-link u-text-body-color u-white u-tab-link-1" id="link-tab-9cb3" href="#tab-9cb3" role="tab" aria-controls="tab-9cb3" aria-selected="true"><input type="radio" class="u-field-input u-grey-15 u-radius-15" name="payment-group" checked="checked"><span>Paypal</span><svg class="u-svg-content" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"><path fill="#009EE3" d="M11,5.9H18c3.8,0,5.2,1.9,4.9,4.7c-0.3,4.7-3.2,7.2-6.9,7.2h-1.9c-0.5,0-0.8,0.3-0.9,1.3l-0.8,4.3
  c-0.1,0.3-0.2,0.5-0.5,0.6H7.6c-0.4,0-0.5-0.3-0.4-1l2.6-16C9.9,6.3,10.2,5.9,11,5.9z"></path><path fill="#113984" d="M6.7,0h7.1c2,0,4.3,0.1,5.9,1.5c1.1,0.9,1.6,2.4,1.5,4c-0.4,5.4-3.7,8.5-8,8.5H9.6c-0.6,0-0.9,0.4-1.2,1.5
  l-0.9,5.1C7.4,21,7.3,21.3,7,21.3H2.6C2,21.3,1.9,21,2,20.1L5.2,1.3C5.3,0.4,5.7,0,6.7,0z"></path><path fill="#172C70" d="M8.6,14.8l1.3-7.9c0.1-0.7,0.5-1,1.3-1h7.1c1.2,0,2.1,0.2,2.8,0.5c-0.7,4.8-3.8,7.5-7.9,7.5H9.6
  C9.1,13.9,8.8,14.1,8.6,14.8z"></path></svg>
</a>
</li><li class="u-tab-item" role="presentation"><a class="u-active-grey-10 u-button-style u-payment-stripe u-tab-link u-text-body-color u-white u-tab-link-2" id="link-tab-ab80" href="#tab-ab80" role="tab" aria-controls="tab-ab80" aria-selected="false"><input type="radio" class="u-field-input u-grey-15 u-radius-15" name="payment-group"><span>Stripe</span><svg class="u-svg-content" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24"><path fill="#635BFF" d="M14,9.2c-2.3-0.8-3.4-1.5-3.4-2.4c0-0.8,0.8-1.3,2-1.3c2.3,0,4.7,0.8,6.4,1.6l0.9-5.5
  c-1.3-0.5-4-1.6-7.7-1.6C9.6,0,7.5,0.7,5.8,1.9C4.1,3.2,3.4,4.9,3.4,7.2c0,4,2.6,5.7,6.8,7.2c2.7,0.9,3.6,1.6,3.6,2.5
  c0,0.9-0.9,1.6-2.4,1.6c-1.9,0-5.2-0.9-7.3-2.1L3,22c1.8,0.9,5.1,2,8.7,2c2.8,0,5.1-0.7,6.6-1.9c1.8-1.3,2.7-3.2,2.7-5.7
  C20.9,12.3,18.2,10.7,14,9.2L14,9.2z"></path></svg>
</a>
</li><li class="u-tab-item" role="presentation"><a class="u-active-grey-10 u-button-style u-payment-email u-tab-link u-white u-tab-link-3" id="link-tab-ab81" href="#tab-ab81" role="tab" aria-controls="tab-ab81" aria-selected="false"><input type="radio" name="payment-group" class="u-field-input u-grey-15 u-radius-15"><span>Email</span><svg class="u-svg-content" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 24 24"><path fill="#66B6FF" d="M0.7,3.6L12.2,13l11-9.3H0.7z M0,19.4l8.2-8.2L0,4.5V19.4L0,19.4z M9.1,11.9l-8.4,8.4h22.6l-8-8.4l-2.6,2.3
l0,0c-0.2,0.2-0.5,0.2-0.7,0L9.1,11.9z M16.1,11.2l7.9,8.3v-15L16.1,11.2z"></path></svg>
</a>
</li></ul>
            <div class="u-tab-content">
              <div class="u-container-style u-payment-paypal u-tab-active u-tab-pane" id="tab-9cb3" role="tabpanel" aria-labelledby="link-tab-9cb3">
                <div class="u-container-layout u-payment-services-inner u-container-layout-3">Loading...</div>
              </div>
              <div class="u-container-style u-payment-stripe u-tab-pane" id="tab-ab80" role="tabpanel" aria-labelledby="link-tab-ab80">
                <div class="u-container-layout u-container-layout-4">
                  <a href="#" class="u-btn u-button-style u-stripe-button u-btn-1">Pay with Stripe</a>
                </div>
              </div>
              <div class="u-container-style u-payment-email u-tab-pane" id="tab-ab81" role="tabpanel" aria-labelledby="link-tab-ab81">
                <div class="u-container-layout u-container-layout-5">
                  <form action="#" method="post" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="payment-email-form">
                    <div class="u-form-email u-form-group">
                      <label for="payment-email" class="u-label">Email</label>
                      <input type="email" placeholder="Your email" id="payment-email" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                    </div>
                    <div class="u-form-group u-form-message">
                      <label for="payment-message" class="u-label">Notes</label>
                      <textarea placeholder="Your message" rows="4" cols="50" id="payment-notes" name="notes" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">
                      <a href="#" class="u-btn u-btn-submit u-button-style">Submit Order</a>
                      <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div><button class="u-dialog-close-button u-icon u-text-grey-40 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-efe9"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-efe9"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </div>
    </section><style>.u-dialog-section-9 .u-dialog-1 {
  width: 570px;
  min-height: 644px;
  height: auto;
  box-shadow: 0px 0px 8px 0px rgba(0,0,0,0.2);
  margin: 101px auto 60px;
}

.u-dialog-section-9 .u-container-layout-1 {
  padding: 0 35px;
}

.u-dialog-section-9 .u-text-1 {
  font-weight: 700;
  margin: 0 165px 0 0;
}

.u-dialog-section-9 .u-products-1 {
  width: 489px;
  margin: 30px auto 0 0;
}

.u-dialog-section-9 .u-repeater-1 {
  grid-template-columns: 100%;
  min-height: 206px;
  grid-gap: 10px;
}

.u-dialog-section-9 .u-container-layout-2 {
  padding: 0 0 30px;
}

.u-dialog-section-9 .u-text-2 {
  background-image: none;
  margin: 0;
}

.u-dialog-section-9 .u-text-3 {
  font-size: 0.875rem;
  margin: 20px 0 0;
}

.u-dialog-section-9 .u-product-quantity-1 {
  width: 125px;
  margin: 30px auto 0 0;
}

.u-dialog-section-9 .u-product-price-1 {
  margin: -34px 0 0 auto;
}

.u-dialog-section-9 .u-payment-services-1 {
  min-height: 297px;
  min-width: 50px;
  width: 489px;
  height: auto;
  margin: 0 auto 0 0;
}

.u-dialog-section-9 .u-tab-link-1 {
  background-image: none;
}

.u-dialog-section-9 .u-tab-link-2 {
  background-image: none;
}

.u-dialog-section-9 .u-tab-link-3 {
  background-image: none;
}

.u-dialog-section-9 .u-container-layout-3 {
  padding: 20px 0 0;
}

.u-dialog-section-9 .u-container-layout-4 {
  padding: 20px 0 0;
}

.u-dialog-section-9 .u-btn-1 {
  width: 100%;
  margin: 0 auto;
}

.u-dialog-section-9 .u-container-layout-5 {
  padding: 20px;
}

.u-dialog-section-9 .u-icon-1 {
  width: 20px;
  height: 20px;
  left: auto;
  top: 36px;
  position: absolute;
  right: 35px;
}

@media (max-width: 1199px) {
  .u-dialog-section-9 .u-text-1 {
    margin-right: 165px;
  }

  .u-dialog-section-9 .u-icon-1 {
    padding: 0;
  }
}

@media (max-width: 991px) {
  .u-dialog-section-9 .u-container-layout-1 {
    padding-left: 30px;
    padding-right: 30px;
  }

  .u-dialog-section-9 .u-container-layout-3 {
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }

  .u-dialog-section-9 .u-container-layout-4 {
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }

  .u-dialog-section-9 .u-icon-1 {
    top: 32px;
    right: 30px;
  }
}

@media (max-width: 767px) {
  .u-dialog-section-9 .u-dialog-1 {
    width: 540px;
  }

  .u-dialog-section-9 .u-container-layout-5 {
    padding-left: 10px;
    padding-right: 10px;
  }
}

@media (max-width: 575px) {
  .u-dialog-section-9 .u-dialog-1 {
    width: 340px;
  }

  .u-dialog-section-9 .u-container-layout-1 {
    padding-left: 20px;
    padding-right: 20px;
  }

  .u-dialog-section-9 .u-text-1 {
    margin-right: 5px;
  }

  .u-dialog-section-9 .u-products-1 {
    width: 320px;
  }

  .u-dialog-section-9 .u-payment-services-1 {
    width: 320px;
  }

  .u-dialog-section-9 .u-icon-1 {
    right: 20px;
  }
}</style>
</body></html>