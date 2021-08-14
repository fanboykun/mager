<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script>
    mapboxgl.accessToken = '{{env("MAPBOX_KEY")}}';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [98.78251659386517, 3.538593997145626],
    zoom: 11.15,
    attributionControl: false
    });
    map.addControl(new mapboxgl.AttributionControl(), 'top-left');
    var marker1 = new mapboxgl.Marker()
    .setLngLat([98.78251659386517, 3.538593997145626])
    .addTo(map);
</script>
