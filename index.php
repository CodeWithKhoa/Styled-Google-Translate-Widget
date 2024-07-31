<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Google Translate Integration</title>
    
    <!-- Custom CSS for Google Translate -->
    <style>
        div#\:0\.targetLanguage,
        a.VIpgJd-ZVi9od-l4eHX-hSRGPd {
            display: none;
        }
        .goog-logo-link {
            display: none !important;
        }
        .goog-te-gadget {
            color: transparent !important;
        }
        select.goog-te-combo {
            width: 100%;
            border: 1px solid #dcdcdc;
            padding: 8px;
        }
        .skiptranslate:not(.goog-te-gadget) {
            visibility: hidden !important;
        }
        .goog-te-banner-frame.skiptranslate,
        .VIpgJd-ZVi9od-aZ2wEe-wOHMyf.VIpgJd-ZVi9od-aZ2wEe-wOHMyf-ti6hGc {
            visibility: hidden !important;
        }
        body {
            top: 0 !important;
        }
        .skiptranslate .goog-te-gadget {
            display: inline;
        }
        #google_translate_element {
            display: inline-block;
            position: relative;
            top: 8px;
        }
        .nav-item {
            position: relative;
        }
        @media screen and (max-width: 380px) { 
            #google_translate_element { 
                display: none !important; 
            } 
        }
    </style>
</head>
<body>

    <!-- Google Translate Widget -->
    <div id="google_translate_element"></div>

    <!-- Google Translate Script -->
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'vi',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element');
        }
    </script>

</body>
</html>
