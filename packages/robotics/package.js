/**
 * Created by Mar on 11/5/15.
 */
Package.describe({

    summary:'Robotics'

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
        'robotics.html',
        'robotics.less',
        'robotics_client.js'
    ],'web');

});