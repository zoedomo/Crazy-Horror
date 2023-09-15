<?php 
$year = date('Y'); 
session_start();
  
  if(!$_SESSION['id']){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Survivor</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

</style>
</head>
<body>

<!-- Nav -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Crazy Horror</a>
    <!-- Rightside nav -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#Survivors" class="w3-bar-item w3-button">Survivors</a>
      <a href="#Killers" class="w3-bar-item w3-button">Killers</a>
    </div>
  </div>
</div>


<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="horror.jpg" alt="THE MOVIES" width="800" height="900">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge w3-white">THE MOVIES</h1>
  </div>
</header>

<!-- Page -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="jaws.jpg" class="w3-round w3-image" alt="jaws" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Crazy Horror</h1><br>
      <h5 class="w3-center">"You're gonna to need a bigger boat." -Jaws</h5>
      <p class="w3-large">Crazy Horror was designed to allow fellow horror fans to create a list of their favorite survivors and killers.<span class="w3-tag w3-light-grey">WOW</span> horror.</p>
      <p class="w3-large w3-text-grey w3-hide-medium">We hope you enjoy and share your posts with us on Instagram!</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Survivor Section -->
  <div class="w3-row w3-padding-64" id="Survivors">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Survivors</h1><br>
      <h4>Laurie Strode</h4>
      <img src="laurie.jpg" class="w3-round w3-image" alt="Laurie" width="600" height="750">
      <p class="w3-text-grey">She is a 17-year-old babysitter and high school student who lives in Haddonfield, Illinois. She is stalked and later targeted by escaped Smith's Grove patient, Michael Myers on Halloween night, 1978. He attempts to kill her, after killing four other people that night. </p><br>
    
      <h4>Sindey Prescott</h4>
      <img src="sydney.jpg" class="w3-round w3-image" alt="Sidney" width="600" height="750">
      <p class="w3-text-grey"> After a series of brutal murders occur on the anniversary of her mother's death, the killer begins targeting Sidney herself with attacks and taunting phone calls.</p><br>
    
      <h4>Nancy Thompson</h4>
      <img src="nancy.jpg" class="w3-round w3-image" alt="Nancy" width="600" height="750">
      <p class="w3-text-grey">Her dreams are killer. She was the daughter of alcoholic mother Marge Thompson and police sergeant Donald Thompson. In her final year of high school, she was the heroine whose life was put into jeopardy by a villainous dream stalker who killed her friends.</p><br>
    
      <h4>Danny Torrance</h4>
      <img src="danny.jpg" class="w3-round w3-image" alt="Danny" width="600" height="750">
      <p class="w3-text-grey">He is the son of Jack and Wendy Torrance. He has the "shining", which allows him to detect spirits, thus making him a prime target of the Overlook Hotel. His ability also allows him to see past, present, and future events through his 'guide', Tony. Tony is, at first, a mere imaginary playmate. Tony then evolves into a source of fear, and finally a source of strength.</p><br>
    
      <h4>Clarice Starling</h4>
      <img src="clarice.jpg" class="w3-round w3-image" alt="Clarice" width="600" height="750">
      <p class="w3-text-grey">Young F.B.I. trainee Clarice Starling is assigned to help find a missing woman to save her from a psychopathic serial killer who skins his victims. Clarice attempts to gain a better insight into the twisted mind of the killer by talking to another psychopath: Dr. Hannibal Lecter.</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="survivors.jpg" class="w3-round w3-image" alt="all of them" style="width:100%">
    </div>
  </div>


  <!-- add your own -->
  <title>Add Survivors</title>
<h1> <div class ="w3-sans-serif w3-text-red">Add Survivors</div></h1>
    <input type="text" name="name" placeholder = "Name of Survivor"> 
    <p>
    <input type="text" name="img" placeholder = "Insert image">
    <p>
    <input type="text" name="description" placeholder = "Write Description">
    <p>
    <button class="w3-button w3-circle w3-black">ADD</button>
    <button class="w3-button w3-circle w3-black">EDIT</button>
    <button class="w3-button w3-circle w3-black">DELETE</button>
</form>

  <hr>

  <!-- Killer Section -->
  <div class="w3-row w3-padding-64" id="Killers">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Killers</h1><br>
      <h4>Michael Myers</h4>
      <img src="michaelmyers.jpg" class="w3-round w3-image" alt="Michael" width="600" height="750">
      <p class="w3-text-grey">As a young boy he murdered his elder sister, Judith Myers. Fifteen years later, he returns home to Haddonfield, Illinois, to murder more teenagers.</p><br>
    
      <h4>Ghost Face</h4>
      <img src="ghostface.jpg" class="w3-round w3-image" alt="Ghosty" width="600" height="750">
      <p class="w3-text-grey">Ghostface often called his victims on the phone, taunting or threatening them before stabbing them to death with an eight-inch hunting knife. He occasionally asked his victims horror movie trivia, and stalked them in a manner reminiscent of said films.</p><br>
    
      <h4>Freddy Krueger</h4>
      <img src="freddy.jpg" class="w3-round w3-image" alt="Freddy" width="600" height="750">
      <p class="w3-text-grey">Teenagers fall prey to Freddy Krueger, a disfigured midnight mangler who preys on the teenagers in their dreams which, in turn, kills them in reality.</p><br>
    
      <h4>Jack Torrance</h4>
      <img src="jack.jpg" class="w3-round w3-image" alt="Jack" width="600" height="750">
      <p class="w3-text-grey">The evil spirits that inhabited the Overlook Hotel would eventually drive Jack insane by way of drowning him in his alcoholism, past trauma, and fears of becoming as abusive as his father. The spirits possess him into attempting to murder his family with a roque mallet, which is revealed when his wife realized that 'redrum', the word that Jack had been writing on the walls, means murder backwards.</p><br>
    
      <h4>Dr. Hannibal Lecter</h4>
      <img src="hannibal.jpg" class="w3-round w3-image" alt="Hannibal" width="600" height="750">
      <p class="w3-text-grey">Doctor Hannibal Lecter M.D. is a Lithuanian-American serial killer, notorious for consuming his victims, earning him the nickname "Hannibal the Cannibal".</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="killers.jpg" class="w3-round w3-image" alt="stabby guys" style="width:100%">
    </div>
  </div>


  <!-- add your own -->
  <title>Add Killers</title>
<h1><div class ="w3-sans-serif w3-text-red">Add Killers</div></h1>
    <input type="text" name="name" placeholder = "Name of Killer"> 
    <p>
    <input type="text" name="img" placeholder = "Insert image">
    <p>
    <input type="text" name="description" placeholder = "Write Description">
    <p>
    <button class="w3-button w3-circle w3-black">ADD</button>
    <button class="w3-button w3-circle w3-black">DELETE</button>
    <button class="w3-button w3-circle w3-black">EDIT</button>
</form>


<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
<a href="logout.php?logout=true">Logout</a>
  <p> &copy;<?php echo $year; ?> Zoe Domagalski</p>
</footer>

</body>
</html>
