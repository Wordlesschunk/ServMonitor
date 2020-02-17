

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#screen").load('inc/serv.stat.php')
}, 1000);
});
</script>

<div id="screen">
<?php include_once("inc/serv.stat.php"); ?>
</div>

