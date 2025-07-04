<!DOCTYPE html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html>
  <head>
    <title>Custom Controls</title>
    <link rel="stylesheet" href="map.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  </head>
  <body>
    <div id="map"></div>
    <script>
      /**
       * @license
       * Copyright 2019 Google LLC. All Rights Reserved.
       * SPDX-License-Identifier: Apache-2.0
       */
      let map;
      const chicago = { lat: 41.85, lng: -87.65 };

      /**
       * Creates a control that recenters the map on Chicago.
       */
      function createCenterControl(map) {
        const controlButton = document.createElement("button");

        // Set CSS for the control.
        controlButton.classList.add('buttonStyle');

        controlButton.textContent = "Center Map";
        controlButton.title = "Click to recenter the map";
        controlButton.type = "button";
        // Setup the click event listeners: simply set the map to Chicago.
        controlButton.addEventListener("click", () => {
          map.setCenter(chicago);
        });
        return controlButton;
      }

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: { lat: 49.496675, lng: -102.65625 },
        });

        var georssLayer = new google.maps.KmlLayer({
          url: "http://api.flickr.com/services/feeds/geo/?g=322338@N20&lang=en-us&format=feed-georss",
        });
        georssLayer.setMap(map);

        // Create the DIV to hold the control.
        const centerControlDiv = document.createElement("div");
        // Create the control.
        const centerControl = createCenterControl(map);

        // Append the control to the DIV.
        centerControlDiv.appendChild(centerControl);
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(
          centerControlDiv
        );
      }

      // Load the Google Maps JavaScript API script
      function loadMapScript() {
        const script = document.createElement("script");
        script.src =
          "https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly";
        script.defer = true;
        document.body.appendChild(script);
      }

      // Call the function to load the script
      loadMapScript();
    </script>
  </body>
</html>