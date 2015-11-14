/**
 * Created by Mar on 11/5/15.
 */
Package.describe({

    summary:'Base Style Package'

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
        'style.less',
    ],'web');

});