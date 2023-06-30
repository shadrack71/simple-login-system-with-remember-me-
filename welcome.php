<?php 

session_start();

?>


<style type="text/css">
.member-dashboard {

    padding: 40px;

    background: #25AAE1;

    color: #555;

    border-radius: 4px;

    display: inline-block;

}

.member-dashboard a {

    color: #09F;

    text-decoration: none;

}
</style>



<div align="center">
    <?php if(empty($_SESSION["userid"])) { 

header('location:index.php')

	?>



    <?php } else { ?>

    <div class="member-dashboard">You have Successfully logged in!. <a href="logout.php" style="color: #fff">Logout</a>
    </div>

    <?php } ?>

</div>