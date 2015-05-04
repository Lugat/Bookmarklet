<!DOCTYPE html>

<html lang="de">
  
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Bookmarklet</title>
    
    <script>
      $(function() {
        $('.modal').modal('show').on('hidden.bs.modal', function() {
          window.top.postMessage('destroy_bookmarklet', '*');
        });
      });
    </script>
    
  </head>

  <body style="background:none">
    
    <div class="modal fade"aria-hidden="false">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
            <h4 class="modal-title">Bookmarklet</h4>
          </div>
          <div class="modal-body">
            <blockquote>
              <p><?= $_GET['text']; ?></p>
              <footer><cite><?= $_GET['title']; ?></cite></footer>
            </blockquote>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cool!</button>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>