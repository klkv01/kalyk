<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="https://cdn-icons.flaticon.com/png/128/3049/premium/3049788.png?token=exp=1633930687~hmac=e173aec187d8ef2b704abbfd8511f8f1">
  <title>Button</title>
  
</head>
<body>
  <button class="button">Click Me</button>
</body>
</html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
} 

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
 
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  color: white;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;

}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
body {
  background-image: url('ss.jpg') ;
  background-repeat: no repeat;
  background-attachment: fixed:
  background-size: cover;
} 

<header>
  <h2>Dastan</h2>
</header>

</style>
</head>
<body>

<h2 style="color:black;">DASTAN ERKINBER UULU</h2>
<p style="color:white;"> This is my first website </p>
<p style="color:white;">Im 18 years old.Im from Issyk-Kol village of "Baet".
Now Im studying at Ala-Too College.I have an average family of 4 people .
My nationality is Kyrgyz.My group is T-CSC-19.Its all</p>



<section>
  <nav>
    <ul>
      <li><a href="https://instagram.com/_kalyk_01?r=nametag">Instagram</a></li>
      <li><a href="https://whatsapp.com/di/">WhatsApp</a></li>
      <li><a href="https://t.me/kalyk_01">Telgram</a></li>
    </ul>
  </nav>










































