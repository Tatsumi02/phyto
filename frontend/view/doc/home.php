<?php $title = 'Documentation' ?>
<style>
    body{
        background:green;
    }
</style>
<?php ob_start() ?>
    <h1 style="color:white">Documentation (PHYTO)</h1>
    <center>
        <img src="frontend/public/img/Green.PNG" alt="" style="height400px; width:400px; box-shadow:0px 0px 3px white;"/>
        <hr>
        <a href="?action=doc-installation" class="btn btn-success btn-lg col-md-12">START DOC</a>
    </center>
<?php $content = ob_get_clean() ?>

<?php 
    require 'frontend/template/tmp/doc.php';
?>