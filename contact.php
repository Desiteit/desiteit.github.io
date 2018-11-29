<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="style-contact.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="logo.ico"/>
<meta charset="UTF-8">
</head>
<body>

  <header>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutus.html">Over ons</a></li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  <div class="contain">
    <div class="logo">
      <img class="desite" src="Desite-text.png"/>
      <img class="it" src="IT-text.png"/>
    </div>
  </div>
  </header>
  <h1>Contacteer ons</h1>
  <div class="container">
    <form action="" method="post">
      <div class="row">
        <div class="col-25">
          <label for="lname">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lastname" placeholder="Jouw email.." required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Boodschap</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Schrijf hier uw boodschap..." style="height:200px" required></textarea>
        </div>
        Ons adres is: <br>
        Riddersstraat 47 <br>
        3000 Leuven <br>
      </div>
      <div class="row">
        <input type="submit" value="Verzenden">
      </div>
    </form>
  </div>
</body>
</html>
