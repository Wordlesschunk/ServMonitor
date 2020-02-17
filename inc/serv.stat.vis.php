
<?php
// $df contains the number of bytes available on "/"
//$df = disk_free_space("/");
//echo $df; 
?>


<?php
   // $bytes = disk_total_space("/");
    //$si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    //$base = 1024;
    //$class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    //echo $bytes . '<br />';
    //echo sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class] . '<br />';
?>


<?php

/* get disk space free (in bytes) */
$df = disk_free_space("/var/www");

/* and get disk space total (in bytes)  */
$dt = disk_total_space("/var/www");

/* now we calculate the disk space used (in bytes) */
$du = $dt - $df;

/* percentage of disk used - this will be used to also set the width % of the progress bar */
$dp = sprintf('%.2f',($du / $dt) * 100);

/* and we formate the size from bytes to MB, GB, etc. */
$df = formatSize($df);
$du = formatSize($du);
$dt = formatSize($dt);

function formatSize( $bytes )
{
        $types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
        for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
                return( round( $bytes, 2 ) . " " . $types[$i] );
}

?>
<!-- % of disk used -->
<?php //echo $dp; ?>
<?php //echo "$du of $dt used"; ?>
<?php //echo "$df of $dt free"; ?>
      
<h1>ServMonitor | BETA 0.0.2</h1>
    <div class="container">
  <div class="row">
    <div class="col">
    <h2> % Disk Used:</h2>
    <div class="progress" style="height: 35px;">
        <div  class="progress-bar" role="progressbar" style="width: <?php echo $dp; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><h4><?php echo $dp; ?>%</h4></div>
      </div>
    
    <h2>
    <span class="badge badge-warning"><?php echo "$du of $dt Used"; ?></span>
    <span class="badge badge-danger"><?php echo "$df of $dt Free"; ?></span>
    </h2>

    </div>
  </div>
</div>
