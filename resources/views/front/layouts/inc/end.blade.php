<!-- Vendor scripts plugins -->
<!-- build:js js/plugins.js -->
<script src="/its-client/vendor/jquery/dist/jquery.js"></script>
<script src="/its-client/vendor/svg4everybody/dist/svg4everybody.min.js"></script>
<script src="/its-client/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/its-client/vendor/swiper/dist/js/swiper.min.js"></script>
<script src="/its-client/vendor/jquery.countdown/dist/jquery.countdown.js"></script>
<!-- endbuild -->
<!-- Scripts application -->
<script src="/its-client/js/script.js" inline></script>

@if(! config('visual-editable.available'))
<script>
    $('.csrf-form').append('<input type="hidden" name="_token" value="'+$('meta[name="csrf-token"]').attr('content')+'">')
    $('.csrf-form').append('<input type="hidden" name="locale" value="'+$('html').attr('lang')+'">')
</script>
@endif

@stack('scripts')
</body>
</html>