<?php
    include 'php/dbConnection.php';

    $conn = getDatabaseConnection();
?>

<!DOCTYPE html>
<html>

<head>
    <title> Final Exam: Program 1 - Superhero Quiz</title>
    <!-- <script src="js/jquery.min.js"></script> -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="js/bootstrap.min.js">
    </script>
    <script>
        var superhero = "Captain America";
        var superheroRealName = "Steve Rogers";
    </script>
    <style>
        .jumbotron,
        #feedback,
        #stats {
            text-align: center;
            margin: 0px;
        }
    </style>
</head>

<body>
    <div class="jumbotron">
        <h3>What is the real name of the following superhero?</h3>

        <img src="img/superheroes/captain_america.png">


        <form>
            <select>
                <option value=""> Select One </option>
                <option>Bruce Banner</option>
                <option>Bruce Wayne</option>
                <option>Clark Kent</option>
                <option>Diana Prince</option>
                <option>Peter Parker</option>
                <option>Steve Rogers</option>
                <option>Tony Stark</option>
            </select>

            <br /><br />
            <input type="button" value="Check Answer" />
        </form>
        <br />
    </div>

    <div id="feedback">
    </div>

    <div id="stats">
    </div>

    <br /><br />

    <table border="1" width="600" cellpadding="10px">
        <tbody>
            <tr>
                <th>#</th>
                <th>Task Description</th>
                <th>Points</th>
            </tr>
            <tr style="background-color:#ffffff">
                <td>1</td>
                <td>A random image of a superhero is displayed when refreshing the page <br></td>
                <td width="20" align="center">15</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td>2</td>
                <td>
                    <p>The "real names" of the superheroes in the dropdown menu come from the database (without duplicates and in alphabetical order) <br>
                    </p>
                </td>
                <td width="20" align="center">15</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td>3</td>
                <td>An error message is displayed if the user clicks on the "Check Answer" button without selecting anything. <br></td>
                <td width="20" align="center">10</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td>4</td>
                <td>The right color-coded feedback (correct or incorrect) is displayed upon clicking on the "Check Answer" button <br></td>
                <td width="20" align="center">15</td>
            </tr>
            <tr style="background-color:#ffffff">
                <td>5</td>
                <td>The number of times the real name for the specific superhero has been answered correctly and incorrectly is stored in the database, via AJAX (you'll need to create a new table, you decide the structure)<br></td>
                <td width="20" align="center">15</td>
            </tr>

            <tr style="background-color:#ffffff">
                <td>6</td>
                <td>The updated number of times for total of correct and incorrect answers (for the specific superhero) is displayed, via AJAX <br></td>
                <td width="20" align="center">15</td>
            </tr>

            <tr style="background-color:#ffffff">
                <td>7</td>
                <td>The spinning images (indicating that data is being loaded) are displayed and replaced when the data is retrieved, via AJAX</td>
                <td width="20" align="center">5</td>
            </tr>

            <tr style="background-color:#ffffff">
                <td>8</td>
                <td>This rubric is properly included AND UPDATED</td>
                <td width="20" align="center">2</td>
            </tr>

            <tr>
                <td></td>
                <td>T O T A L </td>
                <td width="20" align="center">&nbsp;</td>
            </tr>
        </tbody>
    </table>

</body>

</html>