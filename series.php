<!--preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_REQUEST["model"])))-->
<div class="container mb-5">
    <div class="container-fluid">
        <div class="d-flex series-main">
            <?php 
$seriesBrand = explode('-',$_GET['brand']);
$seriesBrand = $seriesBrand[1];
$sqlSeries = "SELECT DISTINCT series from model where brand = '$seriesBrand'  and series != '' and category = 'mobile'";
$querySeries = mysqli_query($connect,$sqlSeries);
while($resSeries = mysqli_fetch_array($querySeries)){
    $seriesName = $resSeries['series'];
    $seriesUrl = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($seriesName)));
?>
        <div class="series-section shadow-sm border">
            <a href="https://cashkar.in/select-mobile-series/<?php echo strtolower($seriesUrl);?>" class="text-decoration-none series-txt"><?php echo $seriesName;?></a>
        </div>
        <?php 
        // echo $seriesUrl = preg_replace('/[^a-z0-9]+/i', ' ', trim(strtolower($seriesUrl)));
        ?>
        <?php } ?>
    </div>
    </div>
</div>
<style>
    .series-section{
        display:block;
        /*border:1px solid black;*/
        padding:5px 18px;
        margin-bottom:10px;
        width:max-content;
        margin-right:10px;
    }
    .series-main{
        display:flex;
        align-items:center;
        justify-content:center;
        flex-wrap: wrap;
    }
    .series-txt{
        color:var(--black);
    }
</style>