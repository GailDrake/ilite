/**
 * Created by Mar on 11/5/15.
 */
Package.describe({

    summary:'sustainability'

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
        'sustainability.html',
        'sustainability.less',
        'sustainability_client.js'
    ],'web');

});