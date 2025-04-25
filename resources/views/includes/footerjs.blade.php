<!-- Include JavaScript resources -->
<script src="{{asset('assets/js/jquery.1.8.3.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.zoomslider.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/featherlight.min.js')}}"></script>
<script src="{{asset('assets/js/featherlight.gallery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.enllax.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<!-- <script src="js/jquery.stickyNavbar.min.js"></script> -->
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/images-loaded.min.js')}}"></script>
<!-- <script src="js/lightbox.min.js"></script> -->
<script src="{{asset('assets/js/site.js')}}"></script>
<script>
    const popupContainer = document.getElementById('popupContainer');
    const popupContent =
        document.getElementById('popupContent');
        popupContainer.addEventListener
            ('mouseover', function () {
                popupContent.style.display = 'block';
            });
        popupContainer.addEventListener
            ('mouseout', function () {
                popupContent.style.display = 'none';
        });
</script>
