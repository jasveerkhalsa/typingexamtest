<?php
include_once "AppConfig/config.php";
$isorignal=false;
$Keytype="Practice";
$lessonKey="practice-1";
$lessonFont_Name="English";
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website Title</title>
  <meta name="description" content="Your website description (max 155 characters)">
  
  <link rel="stylesheet" href="css/style.min.css?v=<?php echo vernum; ?>"  media="all">
<style>
    body {
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #f1f1f1;
  padding: 20px;
}

h1 {
  text-align: center;
}

nav {
  text-align: center;
}

nav ul {
  list-style: none;
  padding: 0;
}

nav li {
  display: inline-block;
  margin: 10px;
}

nav a {
  text-decoration: none;
  color: black;
}

main {
  padding: 20px;
}

section {
  margin-bottom: 20px;
}



footer {
  background-color: #f1f1f1;
  text-align: center;
  padding: 10px;
}

/* Media Queries for Responsive Design */

@media (max-width: 768px) {
  h1 {
    font-size: 1.5rem;
  }

  nav li {
    margin: 5px;
  }
}

@media (max-width: 480px) {
  section {
    padding: 10px;
  }
}

</style>
</head>
<body>
  <header>
    <h1>Your Website Name</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section>
      <h2>Main Content Heading</h2>
      <p>Your main website content here. Focus on relevant keywords and user experience.</p>
      <img src="image.jpg" alt="Image description">
    </section> 
<div class="content">
<?php   bind_typing_master($Keytype,$isorignal,$lessonKey,$lessonFont_Name);  ?>

</div>  
  
  </main>

  <?php
  include_once "layout/footer.php";
?>

</body>
</html>
