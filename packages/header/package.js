/**
 * Created by Mar on 11/5/15.
 */
Package.describe({

    summary:'Header'

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
        'header.html',
        'header.less',
        'header_client.js'
    ],'web');

});