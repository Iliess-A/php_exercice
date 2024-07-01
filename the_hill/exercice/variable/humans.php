<html>
  <head><title>Hi!</title></head>
  <body>

    <header><?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
   	<?php } ?>
  </header>

    <main>
      <?php
      $_age = 24;
      $_nom = 'abdelmadjid';
      $_prenom = 'iliess';
      $_famille =array("maman","pas de papa","grand-mere","pas de frere","pas de soeur") ;
      $_faim = false;
      ?>
      <h2>exercice 1 :</h2>
      <p>je m'appelle <?php echo $_prenom ;?></p>
      <p>mon nom de famille est <?php echo $_nom ; ?> </p>
      <p> j'ai <?php echo "<strong>$_age</strong>" ;?> ans </p>
      <p> je vis avec : <ul> <?php foreach ($_famille as $member){echo "<li>$member</li>";}?> </ul></p>
      <p>et j'ai <?php if($_faim){echo "faim";}else{echo"pas faim";}?></p> 
    </main>
    <footer>&copy;<?php echo $_GET['name'] ?></footer>
  </body>
</html>