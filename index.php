<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SM 0.1</title>
  </head>

<!-- Script to reload div element -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#processing").load('inc/serv.stat.php')
}, 1000);
});
</script>


  <body>
        <!-- Data collection & processing -->
        <div id="processing">
        <?php include_once("inc/serv.stat.php"); ?>
        </div>
    
    
    <h1>ServMonitor | BETA 0.0.1</h1>
    <div class="container">
  <div class="row">
    <div class="col">
    <h2> % Disk Used:</h2>
    <div class="progress" style="height: 35px;">
        <div class="progress-bar" role="progressbar" style="width: <?php echo $dp; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><h4><?php echo $dp; ?>%</h4></div>
      </div>
    
    <h2>
    <span class="badge badge-warning"><?php echo "$du of $dt Used"; ?></span>
    <span class="badge badge-danger"><?php echo "$df of $dt Free"; ?></span>
    </h2>

    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>