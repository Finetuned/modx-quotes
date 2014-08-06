Ext.onReady(function() {
    MODx.load({ xtype: 'quotes-page-home'});
});
 
Quotes.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: 'quotes-panel-main'
            ,renderTo: 'quotes-panel-main'
        }]
    });
    Quotes.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(Quotes.page.Home,MODx.Component);
Ext.reg('quotes-page-home',Quotes.page.Home);
