<?php
$pageTitle = "Hygie Technologies";
$langg = empty($_GET['lang'])? 'fr':$_GET['lang'];
include 'init.php';
if(strcmp($langg,'ar')==0)
    include 'includes/languages/arabe.php';
else if(strcmp($langg,'fr')==0)
    include 'includes/languages/french.php';
// include $tpl . "navbar.php";
// include $tpl . "sidebar.php";
?>

<div class="back"><a href="hopital.php"><i class="fas fa-long-arrow-alt-left"></i></a></div>
<div class="menu"><a href="index.php"><i class="fas fa-home"></i></a></div>

<!-- start slide presentation  -->
<div class="slide-service">
    <div class="text">
        <h6><?php echo lang('ser2')?></h6>
    </div>
    <div class="btn">
        <form action="">
        </form>
    </div>
    <div class="map">
        <img src="data/images/mapSVG.gif" alt="">
        <!-- <div class="cube c1"></div>
        <div class="cube c2"></div>
        <div class="cube c3"></div>
        <div class="cube c4"></div>
        <div class="cube c5"></div>
        <div class="cube c6"></div>
        <div class="cube c7"></div>
        <div class="cube c8"></div> -->
    </div>
    <div class="tooltip-info" style="display:none">
        <h3>ssersf</h3>
        <div>
            <p>bloc</p>
            <p>Q2</p>
        </div>
        <div>
            <p>etage</p>
            <p>3</p>
        </div>
        <div>
            <p>assensseur</p>
            <p>disponible</p>
        </div>
        <h6>details</h6>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis laudantium eligendi assumenda a voluptatum expedita, cum quam. Sed quia saepe totam earum, unde voluptates. Velit excepturi quos iste nesciunt minima?</p>
    </div>
    <?php 
        // $stm = $con->prepare("SELECT * 
        //                     from ticket 
        //                     where 
        //                     and Password = ?
        //                     and GroupID = 1
        //                     LIMIT 1");
        // $stm->execute(array($username, $hashedPass));
        // $row = $stm->fetch();
        // $count = $stm->rowCount();
        // // register session and go to dashboard if exist
        // if ($count > 0) {
        // $_SESSION['username'] = $username;
        // $_SESSION['userid'] = $row['UserID'];
        // header('Location: dashboard.php');
        // }
    ?>
    <div class="btn-opt">
        <form action="">
            <input type="button" value="<?php echo lang('opt1')?>" id="opt1">
            <input type="button" value="<?php echo lang('opt2')?>" id="opt2">
        </form>
    </div>
    <div class="popup-ticket">
        <div>
            <div class="close"></div>
        </div>
    </div>
    <div class="popup-ticket3">
        <div>
            <div class="close"></div>
        </div>
    </div>
</div>
<!-- end slide presentation  -->

<?php
include $tpl . 'footer.php';
?>