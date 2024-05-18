<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('/')}}/js/jquery.min.js"></script>
<script src="{{asset('/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}/js/lightbox-plus-jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/')}}/assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<link rel="stylesheet" type="text/css" href="{{asset('/')}}/assets/libs/ckeditor/samples/css/samples.css">

<script src="{{asset('/')}}/assets/libs/ckeditor/ckeditor.js"></script>
<script src="{{asset('/')}}/assets/libs/ckeditor/samples/js/sample.js"></script>

{{--toaster notfication--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
