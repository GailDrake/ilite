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
        'session',
        'templating',
        'tracker'
        ], 'client');

    api.use([
        //'mongo'
    ],both);

    api.addFiles([
        'cyber.html',
        'cyber.less',
        'cyber_client.js'
    ],'web');

});