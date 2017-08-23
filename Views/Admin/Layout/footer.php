

<script src="/Views/Admin/Layout/js/jquery-2.1.1.js"></script>
<script src="/berkaPhp/template/Utility/Javascript/app.js"></script>
<!-- JS Plugins -->
<script src="/Views/Admin/Layout/js/bootstrap.min.js"></script>
<script src="/Views/Admin/Layout/js/wysihtml5-0.3.0.js"></script>
<script src="/Views/Admin/Layout/js/bootstrap3-wysihtml5.js"></script>
<script src="/Views/Admin/Layout/js/custom.js"></script>
<script src="/Views/Admin/Layout/js/fileupload.js"></script>
<script src="/Views/Admin/Layout/js/bootstrap-imageupload.js"></script>
<script src="/Views/Admin/Layout/js/zibonel.js"></script>

<script>
    $app.initBerkaPhp();

    $('#contents').wysihtml5();
    $('#mission').wysihtml5();
    $('#vision').wysihtml5();
    $('#description').wysihtml5();
   // $('#subtitle').wysihtml5();
    $app.initForm();
    zibonel.initNews();

</script>

<script>
    var $imageupload = $('.imageupload');
    $imageupload.imageupload();
</script>

</body>
</html>                                                                                                                                           