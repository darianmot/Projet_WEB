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
                <a class="<?php if ($cvcurrent == '#cv_anas'){ echo 'cvcurrent';} else{ echo'no_cvcurrent';}?>" href=#cv_anas>Anas</a>
            </li>
            <li>
                <a class="<?php if ($cvcurrent == '#cv_atime'){ echo 'cvcurrent';} else{ echo'no_cvcurrent';}?>" href=#cv_atime>Atime</a>
            </li>
            <li>
                <a class="<?php if ($cvcurrent == '#cv_darian'){ echo 'cvcurrent';} else{ echo'no_cvcurrent';}?>" href=#cv_darian>Darian</a>
            </li>
            <li>
                <a class="<?php if ($cvcurrent == '#cv_simon'){ echo 'cvcurrent';} else{ echo'no_cvcurrent';}?>" href=#cv_simon>Simon</a>
            </li>
        </ul>
    </nav>

    <div id="cv_anas" style="display: none;">
        <?php include("cv_sim.php"); ?>
    </div>
    <div id="cv_atime" style="display: none;">
        <?php include("cv_sim.php"); ?>
    </div>
    <div id="cv_darian" style="display: none;">
        <?php include("cv_sim.php"); ?>
    </div>
    <div id="cv_simon" style="display: none;">
        <?php include("cv_sim.php"); ?>
    </div>

</body>
</html>

<script type="text/javascript">
    $(function() {
        var anchorName = document.location.hash.substring(1);
        jQuery("#"+ anchorName).show();
    });
//    $(function() {
//        var anchorName = document.location.hash.substring(1);
//        if anchorName == "cv_anas"
//            $name = "Anas"
//    });
</script>

