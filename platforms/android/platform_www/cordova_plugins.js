cordova.define('cordova/plugin_list', function(require, exports, module) {
module.exports = [
    {
        "id": "cordova-plugin-geolocation.geolocation",
        "file": "plugins/cordova-plugin-geolocation/www/android/geolocation.js",
        "pluginId": "cordova-plugin-geolocation",
        "clobbers": [
            "navigator.geolocation"
        ]
    },
    {
        "id": "cordova-plugin-geolocation.PositionError",
        "file": "plugins/cordova-plugin-geolocation/www/PositionError.js",
        "pluginId": "cordova-plugin-geolocation",
        "runs": true
    },
    {
        "id": "org.flybuy.cordova.background-location-services.BackgroundLocationServices",
        "file": "plugins/org.flybuy.cordova.background-location-services/www/BackgroundLocationServices.js",
        "pluginId": "org.flybuy.cordova.background-location-services",
        "clobbers": [
            "plugins.backgroundLocationServices"
        ]
    },
    {
        "id": "cordova-plugin-dialogs.notification",
        "file": "plugins/cordova-plugin-dialogs/www/notification.js",
        "pluginId": "cordova-plugin-dialogs",
        "merges": [
            "navigator.notification"
        ]
    },
    {
        "id": "cordova-plugin-dialogs.notification_android",
        "file": "plugins/cordova-plugin-dialogs/www/android/notification.js",
        "pluginId": "cordova-plugin-dialogs",
        "merges": [
            "navigator.notification"
        ]
    },
    {
        "id": "cordova-plugin-background-fetch.BackgroundFetch",
        "file": "plugins/cordova-plugin-background-fetch/www/BackgroundFetch.js",
        "pluginId": "cordova-plugin-background-fetch",
        "clobbers": [
            "window.BackgroundFetch"
        ]
    },
    {
        "id": "com.transistorsoft.cordova.background-geolocation.BackgroundGeolocation",
        "file": "plugins/com.transistorsoft.cordova.background-geolocation/www/BackgroundGeolocation.js",
        "pluginId": "com.transistorsoft.cordova.background-geolocation",
        "clobbers": [
            "window.BackgroundGeolocation"
        ]
    }
];
module.exports.metadata = 
// TOP OF METADATA
{
    "cordova-plugin-whitelist": "1.3.0",
    "cordova-plugin-compat": "1.1.0",
    "cordova-plugin-geolocation": "2.4.0",
    "org.flybuy.cordova.background-location-services": "1.0.4",
    "cordova-plugin-dialogs": "1.3.0",
    "cordova-plugin-background-fetch": "4.0.0",
    "com.transistorsoft.cordova.background-geolocation": "2.2.0"
};
// BOTTOM OF METADATA
});