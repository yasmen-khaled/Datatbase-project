<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/nsa.css">
  <link rel="stylesheet" href="./css/list.css">
    <title>Prisoner Search</title>
</head>


<nav>
  <ul>
    <li><a href="NSA.php">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="index.php">log out</a></li>
  </ul>
</nav>

<body>

<img src="./imge/g.gif" alt="g GIF">




<div class="container">
  <div class="card">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="search"></label>
        <div class="textInputWrapper">
        <input type="text" id="search" name="search" placeholder="Enter first name, last name, or prisoner number" class="textInput">
        </div>

        <label for="crime"></label>
        <select id="crime" name="crime">
            <option value="">All crimes</option>
            <option value="Serial killer">Serial killer</option>
            <option value="Fraudster">Fraudster</option>
            <option value="Terrorist">Terrorist</option>
            <option value="Thief">Thief</option>
            <option value="Psychopath">Psychopath</option>
            <option value="Scamming">Scamming</option>
            <option value="Debts">Debts</option>
            <option value="Domestic violence">Domestic violence</option>
        </select>

        <input type="submit" value="Search">
    </form>

  </div>
</div>

    <div>
 
    </div>


<?php

include './inc/nsadb.php';



?>
</body>
</html>