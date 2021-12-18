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

<div class="back" style="background-color:var(--main-color)"><a href="index.php?retour=yes"><i class="fas fa-long-arrow-alt-left" style="color:white"></i></a></div>
<div class="menu" style="background-color:var(--main-color)"><a href="index.php"><i class="fas fa-home" style="color:white"></i></a></div>

<!-- start slide presentation  -->
<div class="slide-taxi">
    <div class="text">
        <h6><?php echo lang('taxi1')?></h6>
    </div>
    <div class="btn">
        <form action="">
            <input type="text" name="" id="name-taxi" placeholder="<?php echo lang('inp1')?>" <?php if(strcmp($langg,'ar')==0) echo "dir='rtl'"?>>
            <i class="fas fa-user"></i>
            <input type="tel" name="" id="tel-taxi" placeholder="<?php echo lang('inp2')?>" <?php if(strcmp($langg,'ar')==0) echo "dir='rtl'"?>>
            <i class="fas fa-phone"></i>
            <input type="button" value="<?php echo lang('conf1')?>" <?php if(strcmp($langg,'ar')==0) echo "dir='rtl'"?> id="sub-res">
            <!-- <div class="circle" dragglable=true></div> -->
            <!-- <div class="rect"></div> -->
        </form>
    </div>
</div>
<div class="ticket-taxi">
    <div>
        <div class="close2"></div>
    </div>
</div>
<!-- end slide presentation  -->

<?php
include $tpl . 'footer.php';
?>