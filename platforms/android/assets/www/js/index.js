/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
var app = {
    // Application Constructor
    initialize: function() {
        this.bindEvents();
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
        document.addEventListener("deviceready", this.onDeviceReady, false);
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
      navigator.geolocation.getCurrentPosition(geolocationSuccess,
                                         [geolocationError],
                                         [geolocationOptions]);
      var lat = position.coords.latitude;
      var lang = position.coords.longitude;
      var onSuccess = function(position) {
        console.log(lat, lang);
        
    };
 
    // onError Callback receives a PositionError object 
    // 
    function onError(error) {
      console.log(error.code + error.message);
    }
 
    navigator.geolocation.getCurrentPosition(onSuccess, onError);

    
        // Get a reference to the plugin.
        var bgGeo = window.BackgroundGeolocation;

        //This callback will be executed every time a geolocation is recorded in the background.
        var callbackFn = function(location, taskId) {
            var coords = location.coords;
            var lat = coords.latitude;
            var lng = coords.longitude;
            // console.log('- Location: ', JSON.stringify(location));
              jQuery.post(url, JSON.stringify(location)); 
            // Must signal completion of your callbackFn.
            bgGeo.finish(taskId);
        };

        // This callback will be executed if a location-error occurs.  Eg: this will be called if user disables location-services.
        var failureFn = function(errorCode) {
            console.warn('- BackgroundGeoLocation error: ', errorCode);
        }

        // Listen to location events & errors.
        bgGeo.on('location', callbackFn, failureFn);

        // Fired whenever state changes from moving->stationary or vice-versa.
        bgGeo.on('motionchange', function(isMoving) {
            console.log('- onMotionChange: ', isMoving);
        });

        // BackgroundGeoLocation is highly configurable.
        bgGeo.configure({
            // Geolocation config
            desiredAccuracy: 0,
            distanceFilter: 10,
            stationaryRadius: 50,
            locationUpdateInterval: 1000,
            fastestLocationUpdateInterval: 5000,

            // Activity Recognition config
            activityType: 'AutomotiveNavigation',
            activityRecognitionInterval: 5000,
            stopTimeout: 5,

            // Application config
            debug: true,
            stopOnTerminate: false,
            startOnBoot: true,

            // HTTP / SQLite config
            url: 'http://mevoro.com/clienti/hrchain/receiver.php',
            method: 'POST',
            autoSync: true,
            maxDaysToPersist: 1,
            headers: {
                "X-FOO": "bar"
            },
            notificationTitle: 'Background tracking', // <-- android only, customize the title of the notification
            notificationText: 'ENABLED', // <-- android only, customize the text of the notification
            params: {
                "auth_token": "maybe_your_server_authenticates_via_token_YES?"
            }
        }, function(state) {
            // This callback is executed when the plugin is ready to use.
            console.log('BackgroundGeolocation ready: ', state);
            if (!state.enabled) {
                bgGeo.start();
            }
        });

        // The plugin is typically toggled with some button on your UI.
        function onToggleEnabled(value) {
            if (value) {
                bgGeo.start();
            } else {
                bgGeo.stop();
            }
        }
    },
    
};

app.initialize();


