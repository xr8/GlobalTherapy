    <?php $js = explode(",",$js);$jsCount = count($js);for($i = 1; $i <= $jsCount; $i++){echo "<script src=".CDN_URL."js/".$js[$i-1].".js></script>";}?>
    <!--Google Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVyNXoXHkqAwBKJaouZWhHPCP5vg7N0HQ&callback=initMap" async defer></script>