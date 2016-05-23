<!DOCTYPE html>
    
<?php include("template/menu.php"); ?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>-->
<!--<script type="text/javascript">-->
<!---->
<!---->
<!--    $('a[href^="#"]').click(function(){-->
<!--        var the_id = $(this).attr("href");-->
<!---->
<!--        $('html, body').animate({-->
<!--            scrollTop:$(the_id).offset().top-->
<!--        }, 'slow');-->
<!--        return false;-->
<!--    });-->
<!--</script>-->


<html>
<header>
    <?php include("template/head.php"); ?>
</header>
<body>
    <nav class="cvnav">
        <ul>
            <li>
                <a href=#cv_simon>Simon</a>
            </li>
            <li>
                <a href=#cv_darian>Darian</a>
            </li>
            <li>
                <a href=#cv_atime>Atime</a>
            </li>
            <li>
                <a href=#cv_anas>Anas</a>
            </li>
        </ul>
    </nav>

    <div id="cv_simon">
        <?php include("cv_sim.php"); ?>
    </div>
    <div id="cv_darian">
        <?php include("cv_sim.php"); ?>
    </div>
    <div id="cv_atime">
        <?php include("cv_sim.php"); ?>
    </div>
    <div id="cv_anas">
        <?php include("cv_sim.php"); ?>
    </div>

</body>
</html>