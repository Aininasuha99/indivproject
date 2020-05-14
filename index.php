
<html>


</head>
<link rel="stylesheet" href="CSS/style.css">
<body>

<div class="tab" id="mytab">

  <button class="tablinks text" onclick="openCity(event, 'Home')" id="defaultOpen">Home</button>
  <button class="tablinks text" onclick="openCity(event, 'Profile')">Profile</button>
  <button class="tablinks text" onclick="openCity(event, 'Gallery')">Gallery</button>
  <button class="tablinks text" onclick="openCity(event, 'About')">About</button>
    <button class="tablinks text" onclick="openCity(event, 'Feedback')">Feedbacks</button>
</div>

<div id="Home" class="tabcontent">
 
  <div class="" ><?php include('home.html') ?></div>
 
</div>

<div id="Profile" class="tabcontent">

 
  <div class="" ><?php include('Profile.html') ?></div>
 
</div>

<div id="Gallery" class="tabcontent">
 
 
  <div class="" ><?php include('Gallery.html') ?></div>
 
</div>

<div id="About" class="tabcontent">

 
  <div class="" ><?php include('About.html') ?></div>
 
</div>

<div id="Feedback" class="tabcontent">
 
 
  <div class="" ><?php include('Feedback.html') ?></div>
 
</div>



</body>
</html>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
  
 
}
 document.getElementById("defaultOpen").click();
 

</script>