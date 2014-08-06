Quotes.panel.Main = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,cls: 'container'
        ,items: [{
            html: '<h2>'+_('quotes.management')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
          ,items: [{
                title: _('quotes.quotes')
                ,defaults: { autoHeight: true }
                ,items: [{
                    xtype: 'quotes-grid-quotes'
                    ,cls: 'main-wrapper'
                    ,preventRender: true
                }]
            }]
        }]
    });
    Quotes.panel.Main.superclass.constructor.call(this,config);
};
Ext.extend(Quotes.panel.Main,MODx.Panel);
Ext.reg('quotes-panel-main',Quotes.panel.Main);

