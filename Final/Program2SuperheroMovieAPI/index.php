<?php
    include 'php/dbConnection.php';
    
    $conn = getDatabaseConnection();
?>

<!DOCTYPE html>
<html>

<head>
    <title> Final Exam: Program 2 - Superhero Movie API </title>
    <script>
        var superhero = "";
        var superheroRealName = "";
    </script>
    <!-- <script src="js/jquery.min.js"> -->
    </script>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="js/bootstrap.min.js">
    </script>
    <style>
        body {
            text-align: center;
        }
    </style>

</head>

<body>

    <div class="jumbotron">

        <h2>Select Superhero: </h2>

        <select name="superhero" id="superhero">
            <option>Batman</option>
            <option>Captain America</option>
            <option>Iron Man</option>
            <option>Spiderman</option>
            <option>Superman</option>
            <option>The Hulk</option>
            <option>Wonderwoman</option>
        </select>


        </a>
        <br /><br />
        <input type="button" value="Search Movies!" />

        <br /><br />
        <input type="button" value="Superhero Details" />

        <br><br>
        <a href="history.php" target='searchHistory'> See search history </a>

    </div>

    <div id="info">
    </div>

    <iframe name='searchHistory' width='300' height='800' frameborder=0></iframe>
    
     
   <table border="1" width="600" cellpadding="10">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#FFFFFF">
      <td>1</td>
      <td>The list of the superheroes in the dropdown menu is retrieved from the database (ordered alphabetically, no duplicates)<br></td>
      <td width="20" align="center">10</td>
    </tr> 
    <tr style="background-color:#FFFFFF">
      <td>2</td>
      <td>When clicking on the "Search Movies" button, the OMDB API is used to display the list of movies (<strong>poster</strong> and <strong>title</strong>) for the superhero selected<br></td>
      <td width="20" align="center">15</td>
    </tr>  
     <tr style="background-color:#FFFFFF">
      <td>3</td>
      <td> When clicking on the "Search Movies" button, the superhero selected is stored in a Session variable using AJAX<br></td>
      <td width="20" align="center">15</td>
    </tr>
     <tr style="background-color:#FFFFFF">
      <td>4</td>
      <td> When clicking on the "See Search History" link, the superheroes whose movies have been searched are displayed within an iFrame</td>
      <td width="20" align="center">15</td>
    </tr>   
     <tr style="background-color:#FFFFFF">
      <td>5</td>
      <td> When clicking on the "Superhero Details" button, an AJAX call is made to display all corresponding info (name, image, and pob)<br></td>
      <td width="20" align="center">15</td>
    </tr>  
     <tr style="background-color:#FFFFFF">
      <td>6</td>
      <td>When clicking on the "Superhero Details" button, the name and images of the superhero's enemies are displayed<br></td>
      <td width="20" align="center">10</td>
    </tr>
    <tr style="background-color:#FFFFFF">
      <td>7</td>
      <td>This rubric is properly included AND UPDATED</td>
      <td width="20" align="center">2</td>
    </tr>       
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center">&nbsp;</td>
    </tr> 
  </tbody></table>
  
    
</body>

</html>