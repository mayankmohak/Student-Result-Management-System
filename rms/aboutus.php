
<?php include('topbar.php');?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>PANCHNAMA</h1>
  <p>We are a team of 5 members colaborating in a project and made all possible efforts over nights to make it hope you like it.</p>
  <p> hope this may give us a good marks.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
     <div class="column">
          <div class="card">
               <img src="mohak.png" alt="Mayank Mohak" style="width:100%">
               <div class="container">
                    <h2>MAYANK MOHAK</h2>
                    <p class="title">TEAM:- PANCHNAMA</p>
                    <p>Ph No.   :   +91 - 9525177622</p>
                    <p>mayank8199@gmail.com</p>
                    <p><a href="https://forms.gle/dJRt4DuWtqh417n19"> <button class="button">Contact</button></a></p>
               </div>
          </div>
     </div>

     <div class="column">
          <div class="card">
               <img src="gupta.png" alt="Mayank Gupta" style="width:100%">
               <div class="container">
                    <h2>Mayank Gupta</h2>
                    <p class="title">TEAM:- PANCHNAMA</p>
                    <p>Ph No.   :   +91 - 7735953025</p>
                    <p>minku2711@example.com</p>
                    <p><a href="https://forms.gle/dJRt4DuWtqh417n19"> <button class="button">Contact</button></a></p>
               </div>
          </div>
     </div>
     <div class="column">
          <div class="card">
               <img src="issak.png" alt="Issak Nayank" style="width:100%">
               <div class="container">
                    <h2>Issak Nayank</h2>
                    <p class="title">TEAM:- PANCHNAMA</p>
                    <p>Ph No.   :   +91 - 9556601349</p>
                    <p>issak @gamil.com</p>
                    <p><a href="https://forms.gle/dJRt4DuWtqh417n19"> <button class="button">Contact</button></a></p>
               </div>
          </div>
     </div>
     <div class="column">
          <div class="card">
               <img src="adarsh.png" alt="Adarsh Gupta" style="width:100%">
               <div class="container">
                    <h2>Adarsh Gupta</h2>
                    <p class="title">TEAM:- PANCHNAMA</p>
                    <p>Ph No.   :   +91 - 8327775034</p>
                    <p>adarsh@gmail.com</p>
                    <p><a href="https://forms.gle/dJRt4DuWtqh417n19"> <button class="button">Contact</button></a></p>
               </div>
          </div>
     </div>
     <div class="column">
          <div class="card">
               <img src="faizan.jpg" alt="Faizan Ansari" style="width:100%">
               <div class="container">
                    <h2>Faizan Ansari</h2>
                    <p class="title">TEAM:- PANCHNAMA</p>
                    <p>Ph No.   :   +91 - 747855263</p>
                    <p>faizanansari@gmail.com</p>
                    <p><a href="https://forms.gle/dJRt4DuWtqh417n19"> <button class="button">Contact</button></a></p>
               </div>
          </div>
     </div>
</body>
</html>
