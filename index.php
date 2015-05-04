<?

  $basePath = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
  
  $file = file_get_contents('bookmarklet.min.js');
  
  $script = str_replace('{$BASE_PATH}', $basePath, $file);

?>

<!DOCTYPE html>

<html lang="de">
  
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Bookmarklet</title>
    
  </head>
  <body>
    
    <div class="container">
      
      <h3>1. Add the bookmarklet</h3>
    
      <p><a href='javascript:<?= $script; ?>' class="btn btn-primary btn-lg" title="Bookmarklet">Bookmarklet</a></p>
      
      <p class="text-muted">(drag me to your bookmarks!)</p>
    
      <hr />
      
      <h3>2. Open come website</h3>
      
      <p class="text-muted">(for example <a href="http://de.wikipedia.org/wiki/Stuttgart" target="_blank">this</a>)</p>
      
      <hr />
      
      <h3>3. Click on the bookmarklet</h3>
      
      <p class="text-muted">(mark some text)</p>
            
    </div>
    
  </body>
</html>
