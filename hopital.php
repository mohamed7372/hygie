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

<div class="back"><a href="index.php?retour=yes"><i class="fas fa-long-arrow-alt-left"></i></a></div>
<div class="menu"><a href="index.php"><i class="fas fa-home"></i></a></div>

<!-- start slide presentation  -->
<div class="slide-hopital">
    <div class="text">
        <h6><?php echo lang('hopital1')?></h6>
        <p><?php echo lang('hopital2')?></p>
    </div>
    <div class="btn">
        <form action="service.php">
            <a href="service.php?lang=<?php echo $langg?>">
                <img src="data/images/stethoscope.png" alt="">
                <input type="button" value="<?php echo lang('ser1')?>">
            <a href="service.php?lang=<?php echo $langg?>">
                <img src="data/images/heart.png" alt="">
                <input type="button" value="<?php echo lang('ser2')?>">
            </a>
            <a href="service.php?lang=<?php echo $langg?>">
                <img src="data/images/fetus.png" alt="">
                <input type="button" value="<?php echo lang('ser3')?>">
            </a>
            <a href="service.php?lang=<?php echo $langg?>">
                <img src="data/images/xray.png" alt="">
                <input type="button" value="<?php echo lang('ser4')?>">
            </a>
            <a href="service.php?lang=<?php echo $langg?>">
                <img src="data/images/allergies.png" alt="">
                <input type="button" value="<?php echo lang('ser5')?>">
            </a>
            <a href="service.php?lang=<?php echo $langg?>">
                <img src="data/images/pediatric_surgery.png" alt="">
                <input type="button" value="<?php echo lang('ser6')?>">
            </a>
            <a href="service.php?lang=<?php echo $langg?>">
                <img src="data/images/hospital.png" alt="">
                <input type="button" value="<?php echo lang('ser7')?>" style="font-size:15px">
            </a>
            <a href="service.php?lang=<?php echo $langg?>">
                <img src="data/images/lungs.png" alt="">
                <input type="button" value="<?php echo lang('ser8')?>">
            </a>
            <a href="service.php?lang=<?php echo $langg?>">
                <img src="data/images/stomach.png" alt="">
                <input type="button" value="<?php echo lang('ser9')?>">
            </a>
        </form>
    </div>
</div>
<!-- end slide presentation  -->

<?php
include $tpl . 'footer.php';
?>