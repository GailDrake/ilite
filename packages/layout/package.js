/**
 * Created by Mar on 11/5/15.
 */
Package.describe({

    summary:'Root layout'

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
        'layout.html',
        'layout.less',
        'layout_client.js'
    ],'web');

});