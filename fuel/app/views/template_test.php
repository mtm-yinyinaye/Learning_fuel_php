<!DOCTYPE html> 
<html> 
   <head> 
      <meta charset = "utf-8"> 
      <title><?php echo $title; ?></title> 
      <?php echo Asset::css('bootstrap.css'); ?> 
   </head> 

   <body> 
      <div> 
         <?php echo $content; ?>
      </div> 
   </body> 
</html> 