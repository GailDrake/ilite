/**
 * Created by Mar on 11/5/15.
 */
Package.describe({

    summary:'Cyber'

});

var both = ['server', 'web'];

Package.onUse(function(api) {

    api.use([

        'jquery',
        'less',
        'routes',
        'session',
        'style',
        'templating',
        'tracker'
        ], 'client');

    api.use([
        //'mongo'
    ],both);

    api.addFiles([
        'robotics.html',
        'robotics.less',
        'robotics_client.js'
    ],'web');

});