<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>Cornac</title>
          <link rel="stylesheet" href="style.css" />
     </head>
     <body>
          <header>
               <?php
               include("header.php")
               ?>
          </header>
          <table>

               <tr>
                    <th>Heure</th>
                    <th>Spectacle</th>
                    <th>Artiste</th>
                    <th>Image</th>
               </tr>

               <?php
               include("tableau.php");

               foreach ($programme as $clef => $value) {


                    echo "<tr>
                    <td>". $value['heure']."</td>
                    <td>". $value['titre_spectacle']."</td>
                    <td>". $value['artiste']."</td>
                    <td> <img src=".$value['image_url']." alt='image'/></td>
               </tr>";



               }
               ?>

          </table>
          <footer>
               <?php
               include("footer.php")
                ?>
          </footer>
     </body>
</html>
