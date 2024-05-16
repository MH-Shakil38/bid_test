<script src="{{asset('/')}}/js/lightbox-plus-jquery.min.js"></script>
<script src="{{asset('/')}}/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/')}}/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="{{asset('/')}}/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="{{asset('/')}}/dist/js/app.min.js"></script>
<script src="{{asset('/')}}/dist/js/app.init.dark.js"></script>
<script src="{{asset('/')}}/dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('/')}}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{asset('/')}}/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="{{asset('/')}}/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{asset('/')}}/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{asset('/')}}/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{asset('/')}}/assets/libs/chartist/dist/chartist.min.js"></script>
<script src="{{asset('/')}}/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<!--c3 charts -->
<script src="{{asset('/')}}/assets/extra-libs/c3/d3.min.js"></script>
<script src="{{asset('/')}}/assets/extra-libs/c3/c3.min.js"></script>
<!--chartjs -->
<script src="{{asset('/')}}/assets/libs/raphael/raphael.min.js"></script>
<script src="{{asset('/')}}/assets/libs/morris.js/morris.min.js"></script>
<script src="{{asset('/')}}/dist/js/pages/c3-chart/data/c3-category-data.js"></script>
<script src="{{asset('/')}}/dist/js/pages/dashboards/dashboard1.js"></script>



<script src="{{asset('/')}}/js/bootstrap-select.min.js.js"></script>
<!--Custom JavaScript -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script src="{{asset('/')}}/assets/libs/ckeditor/ckeditor.js"></script>
<script src="{{asset('/')}}/assets/libs/ckeditor/samples/js/sample.js"></script>
<script>
    //default
    initSample();

    //inline editor
    // We need to turn off the automatic editor creation first.
    CKEDITOR.disableAutoInline = true;

    CKEDITOR.inline('editor2', {
        extraPlugins: 'sourcedialog',
        removePlugins: 'sourcearea'
    });

    var editor1 = CKEDITOR.replace('editor1', {
        extraAllowedContent: 'div',
        height: 460
    });
    editor1.on('instanceReady', function () {
        // Output self-closing tags the HTML4 way, like <br>.
        this.dataProcessor.writer.selfClosingEnd = '>';

        // Use line breaks for block elements, tables, and lists.
        var dtd = CKEDITOR.dtd;
        for (var e in CKEDITOR.tools.extend({}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent)) {
            this.dataProcessor.writer.setRules(e, {
                indent: true,
                breakBeforeOpen: true,
                breakAfterOpen: true,
                breakBeforeClose: true,
                breakAfterClose: true
            });
        }
        // Start in source mode.
        this.setMode('source');
    });
</script>
<script data-sample="1">
    CKEDITOR.replace('testedit', {
        height: 150
    });
</script>
<script data-sample="2">
    CKEDITOR.replace('testedit1', {
        height: 400
    });
</script>
<script data-sample="3">
    CKEDITOR.replace('testedit2', {
        height: 400
    });
</script>
<script data-sample="4">
    CKEDITOR.replace('tool-location', {
        toolbarLocation: 'bottom',
        // Remove some plugins that would conflict with the bottom
        // toolbar position.
        removePlugins: 'elementspath,resize'
    });
</script>



