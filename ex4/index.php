<!doctype>
<html>
  <head>
    <title>Hello, User</title>
    <link rel="stylesheet"
          type="text/css"
	  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">

      <div class="jumbotron">
        <h1>Welcome, Stranger!</h1>
      </div>

      <?php require './content.php' ?>
      
      <?php echo "Name is " . "$_GET[name]" ?>

    </div>
  
  </body>
</html>
