<link rel="stylesheet" href="header.css">

<header>
    <nav class="nav" >
        <div class="name">
        <h1 class="dev" >Alexander M Polo</h1>
        <p class="job" >Web Developer</p>

        </div>
        <img src="me.jpg" class="myself">
        <div class="links">

            <a href="about.php">About Me</a>
            <a href="services.php">Services Offered</a>
            <a href="myresume.pdf" download>Resume</a>
<img src="moon.png" id="icon">
        </div>
    </nav>
</header>
<script>
var icon = document.getElementById("icon");
if(localStorage.getItem("theme")==null) {
  localStorage.setItem  ("theme", "light");
}
let localdata = localStorage.getItem("theme");
if(localdata=="light") {
  icon.src = "moon.png";
  document.body.classList.remove("dark-mode");

}
else if(localdata=="dark") {
  icon.src = "sun.png";
  document.body.classList.add("dark-mode");
}
  icon.onclick = function(){
    document.body.classList.toggle("dark-mode");
    if(document.body.classList.contains("dark-mode")) {
      icon.src = "sun.png";
      localStorage.setItem  ("theme", "dark");
    }
    else {
      icon.src="moon.png"
      localStorage.setItem  ("theme", "light");
    }
  }  
</script>