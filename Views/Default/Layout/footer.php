<?php if(!isset($home)):?>
    <?= berkaPhp\helpers\Element::load("Footer")?>
<?php endif?>


<script type="text/javascript" src="/Views/Default/Layout/js/bootstrap.min.js"></script>
<!-- JS Plugins -->
<script src="/Views/Default/Layout/js/plugins.js"></script>
<!-- JS Core -->
<script src="/Views/Default/Layout/js/core.js"></script>

<script>
    $app.initBerkaPhp();
    zibonel.initLiveProgram();
</script>

</body>
</html>                                                                                                                                           