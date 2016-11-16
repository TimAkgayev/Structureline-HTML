<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Services</title>
<link href="../css/slcss.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/annie-use-your-telescope:n4:default;alice:n4:default;sanvito-pro-display:n7:default;abel:n4:default.js" type="text/javascript"></script>
</head>
<body>
<div id ="Background"> </div>
<header class="wrapper">
  <div class="StructurelineImageContainer"><img src="../images/1616.png" width="206" height="90" alt="Structureline logo"/></div>
  <nav>
    <ul class="navlinks">
      <li><a href="../index.html"> Home </a></li>
      <li><a href="../services.html"> Services </a></li>
      <li><a href="../projects.html"> Projects </a></li>
      <li><a href="../contact.html"> Contact Us </a></li>
      <li><a href="../blog.html"> Blog </a></li>
    </ul>
  </nav>
</header>
<main class="wrapper">
  <?php 

 

	$message = "Hi Nick, you have been contacted through your website structureline.\r\n" . "Name: " . $_POST['name'] . " E-mail: " . $_POST['email'] . " Tel: " . $_POST['tel'];
	//in case we're over 70 chars per line
	$message = wordwrap($message, 70, "\r\n");
	
	mail('akgayev.tymur@yahoo.com', 'Client action needed',  $message);



?>
  <div style="width: 100%; height: 400px; margin-top: 300px; display: inline-block; text-align: center;"> Thank you for contacting us! Our staff will be in touch with you shortly. </div>
</main>
<footer>
  <div id="footerTable">
    <div class="footerSection">
      <h3> Navigation </h3>
      <ul>
        <li><a href="../about.html"> About us </a></li>
        <li><a href="../services.html"> Services </a></li>
        <li><a href="../projects.html"> Projects </a></li>
        <li><a href="../contact.html"> Contact Us </a></li>
        <li><a href="../blog.html"> Blog </a></li>
      </ul>
    </div>
    <div class="footerSection">
      <h3> What we offer </h3>
      <ul>
        <li> <a href="#"> Millwork </a></li>
        <li> <a href="#"> Wood and Ceramic Flooring </a></li>
        <li> <a href="#"> Bathroom and Kitchen Remodeling </a></li>
        <li> <a href="#"> Masonry </a></li>
        <li> <a href="#"> Carpentry and Drywall </a></li>
        <li> <a href="#"> Wallpaper and Painting </a></li>
        <li> <a href="#"> Concrete and Foundations </a></li>
        <li> <a href="#"> Porches and Decks </a></li>
      </ul>
    </div>
    <div class="footerSection">
      <h3> The Blog </h3>
      <ul>
        <li> <a href="#"> Kitchen Design Perks </a></li>
        <li> <a href="#"> His and Hers Bathrooms </a></li>
        <li> <a href="#"> Picking the right Materials </a></li>
        <li> <a href="#"> Design your countertop </a></li>
        <li> <a href="#"> When to call a contractor </a></li>
      </ul>
    </div>
    <div class="footerSection">
      <h3> Get in Touch </h3>
      <ul>
        <li> Structureline &copy; 2016</li>
        <li> Privacy Policy </li>
        <li> 340 Madison Avenue 19 Floor </li>
        <li> New York, Ny 10017 </li>
        <li> Telephone: 212-951-0536 </li>
        <li> Fax: 212-719-1188 </li>
        <li> Email: nicolas@structureline.com </li>
      </ul>
    </div>
  </div>
  <div id="FooterDisclaimer"> StructureLine has maintained the quality of service over the years providing renovation and remodeling all over New York City area. Structureline was one of the most trusted and most awarded company in 2013 by Department of Housing after hurricane Sandy. With us you can build or renovate your house, because we do to last forever. </div>
</footer>
</body>
</html>