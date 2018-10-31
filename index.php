<?php
declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

usort($articles, "sortFunctionDate");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Fake News</title>
      <link rel='stylesheet' href='fakenews.css'>
      <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
   </head>
   <body>
      <header class='siteHeader'>
         <h1>Fake News</h1>
      </header> <!--siteHeader-->

      <div class='newsFeed'>
<!-- Foreach-loop to assign all values from $articles array to variables-->
         <?php
         foreach ($articles as $article):
             $title = $article['title'];
             $text = $article['content'];
             $likes = $article['likes'];
             $date = $article['date'];
             $author = $authors[$article['authorID']]; //Gets name from $authors array using the ID listed in $articles
         ?>

             <div class='article'>
               <header class='articleHeader'>
                  <h3 class='title'><?= $title; ?></h3>
               </header> <!--/articleHeader-->

               <div class='articleContent'>
                  <p class='text'><?= $text; ?></p>
               </div> <!--articleContent-->

               <div class='articleInfo'>
                  <p class='author'><?='<strong>Written by:</strong> ' . $author; ?></p>
                  <p class='date'><?='<strong>Published:</strong> ' . $date; ?></p>
                  <p class='likes'><?='<strong>Likes:</strong> ' . $likes; ?></p>
               </div> <!--/articleInfo-->

            </div> <!--/article-->
         <?php endforeach; ?>
         <button onclick='toTopFunction()' id='topBtn' title='Go to top'>^</button>
      </div> <!--/newsFeed-->


      <footer>
         <p class='copyright'> Copyright &copy Isa Areschoug, Yrgo <?= date('Y'); ?></p>
      </footer>

      <script src='script.js'></script>
   </body>
</html>
