<?php if(!isset($home)):?>
    <?= berkaPhp\helpers\Element::load("Footer")?>
<?php endif?>


<script type="text/javascript" src="/Views/Default/Layout/js/bootstrap.min.js"></script>
<!-- JS Plugins -->
<script src="/Views/Default/Layout/js/plugins.js"></script>
<!-- JS Core -->
<script src="/Views/Default/Layout/js/core.js"></script>

<script src="//lightwidget.com/widgets/lightwidget.js"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
    $app.initBerkaPhp();
    zibonel.initLiveProgram();
    zibonel.initRadio();
</script>

</body>
</html>
