<!DOCTYPE html>
    
<?php include("template/menu.php"); ?>

<?php
$path = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$cvcurrent = basename ($path);
?>

<html>
<header>
    <?php include("template/head.php"); ?>
</header>
<body>
    <nav class="cvnav">
        <ul>
            <li>
                <a href=#cv_anas>Anas</a>
            </li>
            <li>
                <a href=#cv_atime>Atime</a>
            </li>
            <li>
                <a href=#cv_darian>Darian</a>
            </li>
            <li>
                <a href=#cv_simon>Simon</a>
            </li>
        </ul>
    </nav>

<!--    <div id="cv">-->
<!--        --><?php //include("cv_sim.php"); ?>
<!--    </div>-->
<!--    <div id="cv_atime">-->
<!--        --><?php //include("cv_sim.php"); ?>
<!--    </div>-->
<!--    <div id="cv_darian">-->
<!--        --><?php //include("cv_sim.php"); ?>
<!--    </div>-->
<!--    <div id="cv_simon">-->
<!--        --><?php //include("cv_sim.php"); ?>
<!--    </div>-->

</body>
</html>

<div id="contenu-un">
    <?php $name=""; ?>
</div>

<div id="contenu-deux" style="display:none">
    Wouhouuu ça marche !
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var t = window.location.hash.split(#);

        if (t[1] == 'cv_anas') {
            $('#contenu-un').css({'display':'block'});
            $('#contenu-deux').css({'display':'none'});
        }

        if (t[1] == 'cv_atime') {
            $('#contenu-un').css({'display':'none'});
            $('#contenu-deux').css({'display':'block'});
        }
    });

</script>
