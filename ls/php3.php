<html>
<body>
<?php
session_start();
                    // Create connection
                    $user=$_SESSION['name'];
?> 
<section class="my-5">
<div class="py-5">
<h2> Thank you for filling form <?php echo $user ?></h2>
</div>    
</section>

</body>
</html>