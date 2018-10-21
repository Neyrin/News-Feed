<?php
declare(strict_types=1);
require __DIR__.'/data.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>FakeNews</title>
   </head>
   <body>
      <header></header>
      <div class='newsFeed'>
<!-- Foreach-loop to assign all values from $articles array to variables-->
         <?php
         foreach ($articles as $article):
             $contentTitle = $article['title'];
             $contentText = $article['content'];
             $contentLikes = $article['likes'];
             $contentDate = $article['date'];
             $contentAuthor = $authors[$article['authorID']]; //Gets name from $authors array using the ID listed in $articles
         ?>

             <div class='article'>
               <header class='articleHeader'>
                  <h3 class='contentTitle'><?= $contentTitle; ?></h3>
               </header>

               <div class='articleContent'>
                  <p class='contentText'><?= $contentText; ?></p>
               </div>

               <footer class='articleFooter'>
                  <p class='contentAuthor'><?= $contentAuthor; ?></p>
                  <p class='contentDate'><?= $contentDate; ?></p>
                  <p class='contentLikes'><?= $contentLikes; ?></p>
               </footer>
            </div> <!--article-->
         <?php endforeach; ?>
      </div> <!--newsFeed-->
   </body>
</html>
