<?php
$pageTitle = "Hygie Technologies";
$retour = isset($_GET['retour']) ? 'yes' : 'no';
include 'init.php';
include 'includes/languages/french.php';
// include $tpl . "navbar.php";
// include $tpl . "sidebar.php";
?>

<!-- start logo  -->
<div class="slide-logo" style="display:<?php if(strcmp($retour,'yes')==0) echo 'none;'?>">
    <img src="data/images/Welcome-page.gif" alt="">
</div>
<!-- end logo  -->

<!-- start slide presentation  -->
<div class="slide-presentation home-sb" id="home" style="display:<?php if(strcmp($retour,'yes')==0) echo 'flex;'?>">
    <div class="logo">
        <img src="data/images/logo header.png" alt="">
    </div>
    <div class="text">
        <h6 id="titre"><?php echo lang('bienvenue1')?></h6>
        <p id="descp"><?php echo lang('bienvenue2')?></p>
    </div>
    <div class="btn">
        <form action="">
            <input type="button" value="Francais" class="fr btn-lang">
            <img src="data/images/checkmark.gif" alt="" class="f-b-lang">
            <input type="button" value="العربية" class="ar btn-lang">
            <!-- <img src="data/images/checkmark.gif" alt="" class="a-b-lang"> -->
        </form>
    </div>
    <div class="besoin1">
        <img src="data/images/taxi.png" alt="" class="taxi" id="taxi">
    </div>
    <div class="besoin2">
        <img src="data/images/hopital.png" alt="" class="hopital" id="hopital">
    </div>
    <div class="besoin3">
        <img src="data/images/3.png" alt="" class="hopital" id="covid">
    </div>
    <div class="besoin4">
        <img src="data/images/4.png" alt="" class="hopital" id="pharmacy">
    </div>
    <div class="logo-mult">
        <img src="data/images/logo multi.png" alt="">
    </div>
    <div class="hopital">
    </div>
</div>
<!-- end slide presentation  -->

<script>
    var tour = true;
    setInterval(function() {
        var descp = document.getElementById('titre').innerHTML;
        var descp = document.getElementById('descp').innerHTML;
        if(tour){
            document.getElementById('titre').innerHTML = "مرحبا بكم";
            document.getElementById('descp').innerHTML = "اختر اللغة المفضلة";
            tour = false;
        }
        else {
            document.getElementById('titre').innerHTML = "bienvenue!";
            document.getElementById('descp').innerHTML = "choisissez votre langue préferée";
            tour = true;
        }
    }, 2000);
</script>
<?php
include $tpl . 'footer.php';
?>