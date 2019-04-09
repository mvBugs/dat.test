<!-- Vendor scripts plugins -->
<!-- build:js js/plugins.js -->

<script src="/its-client/vendor/jquery/dist/jquery.js"></script>
<script src="/its-client/vendor/svg4everybody/dist/svg4everybody.min.js"></script>
<script src="/its-client/vendor/fullpage.js/dist/fullpage.min.js"></script>
<script src="/its-client/vendor/wow/dist/wow.min.js"></script>
<script src="/its-client/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="/its-client/vendor/swiper/dist/js/swiper.min.js"></script>
<script src="/its-client/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/its-client/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>

<!-- endbuild -->
<!-- Scripts application -->
<script src="/its-client/js/script.js" inline></script>
<script src="/js/common.js"></script>
</div>
@if(!config('visual-editable.available'))
    <script>
        $('.csrf-form').append('<input type="hidden" name="_token" value="'+$('meta[name="csrf-token"]').attr('content')+'">')
        $('.csrf-form').append('<input type="hidden" name="locale" value="'+$('html').attr('lang')+'">')
    </script>
@endif

@stack('scripts')
</body>
</html>