Quotes.window.CreateQuote = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        title: _('quotes.quote_create_long')
        ,url: Quotes.config.connectorUrl
        ,config: {
        	saveBtnText: _('quotes.create')
        }
        ,baseParams: {
            action: 'mgr/quote/create'
        }
        ,fields: [{
            xtype: 'textarea'
            ,fieldLabel: _('quotes.quote')
            ,name: 'quote'
            ,anchor: '100%'
        },{
            xtype: 'textfield'
            ,fieldLabel: _('quotes.author')
            ,name: 'author'
            ,anchor: '100%'
        }]
        
    });
    Quotes.window.CreateQuote.superclass.constructor.call(this,config);
};
Ext.extend(Quotes.window.CreateQuote,MODx.Window);
Ext.reg('quotes-window-quote-create',Quotes.window.CreateQuote);
