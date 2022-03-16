<style>
 .topnav {
  background-color: #333;
  overflow: hidden;
  padding: 14px 16px;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 14px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
</style>    


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="w3-panel w3-border w3-round-small">
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">PAPARAN UTAMA</a>
  <a href="register.php">PENDAFTARAN PENGGUNA</a>
  <a href="fetch.php">SENARAI NGO BERDAFTAR</a>
  <a href="#about">HUBUNGI KAMI</a>
  <a href="#about">TENTANG KAMI</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>

<div class="w3-container"> 
  <h2>PSM2</h2>
  <p>London is the most populous city in the United Kingdom,
  with a metropolitan area of over 9 million inhabitants.</p>
  <hr>
</div>

<div class="w3-panel w3-border w3-round-xlarge" >
  <p>I have a thick blue left border and a pale-blue background color.</p>
  <p>I have a thick blue left border and a pale-blue background color.</p>
</div>

<script>
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>