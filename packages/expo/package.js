/**
 * Created by Mar on 11/5/15.
 */
Package.describe({

    summary:'Expo'

});

var both = ['server', 'web'];

Package.onUse(function(api) {

    api.use([

        'jquery',
        'less',
        'session',
        'templating',
        'tracker'
        ], 'client');

    api.use([
        //'mongo'
    ],both);

    api.addFiles([
        'expo.html',
        'expo.less',
        'expo_client.js'
    ],'web');

});