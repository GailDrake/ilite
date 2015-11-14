/**
 * Created by Mar on 11/5/15.
 */
Package.describe({

    summary:'Footer'

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
        'footer.html',
        'footer.less',
        'footer_client.js'
    ],'web');

});