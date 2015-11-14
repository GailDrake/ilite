/**
 * Created by Mar on 11/5/15.
 */
Package.describe({

    summary:'Iroc'

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
        'iroc.html',
        'iroc.less',
        'iroc_client.js'
    ],'web');

});