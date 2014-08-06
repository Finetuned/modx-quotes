Quotes.grid.Quotes = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'quotes-grid-quotes'
        ,url: Quotes.config.connectorUrl
        ,baseParams: { action: 'mgr/quote/getList' }
        ,fields: ['id','quote','author']
        ,paging: true
        ,remoteSort: true
        ,anchor: '97%'
        ,autoExpandColumn: 'quote'
        ,save_action: 'mgr/quote/updateFromGrid'
		,autosave: true
        ,columns: [{
            header: _('quotes.quote')
            ,dataIndex: 'quote'
            ,sortable: true
            ,width: 30
            ,editor: { xtype: 'textarea' }
            ,renderer: function(quote){
            		return '<h3 style="padding:0;margin:0;">'+quote+'</h3>';
            	}
        },{
            header: _('quotes.author')
            ,dataIndex: 'author'
            ,sortable: true
            ,width: 100
            ,editor: { xtype: 'textfield' }
        }]
        ,tbar:[{
			xtype: 'textfield'
			,id: 'quotes-search-filter'
			,emptyText: _('quotes.search...')
			,listeners: {
				'change': {fn:this.search,scope:this}
				,'render': {fn: function(cmp) {
				    new Ext.KeyMap(cmp.getEl(), {
				        key: Ext.EventObject.ENTER
				        ,fn: function() {
				            this.fireEvent('change',this);
				            this.blur();
				            return true;
				        }
				        ,scope: cmp
				    });
				},scope:this}
			}
		},'->',{
		   text: _('quotes.quote_create')
		   ,handler: { 
		   		 xtype: 'quotes-window-quote-create' 
		   		,blankValues: true
		   		,saveBtnText: _('quotes.quote_create')
		   		,cancelBtnText: _('quotes.cancel')
		   	 }
		}]
    });
    Quotes.grid.Quotes.superclass.constructor.call(this,config)
};
Ext.extend(Quotes.grid.Quotes,MODx.grid.Grid,{
    search: function(tf,nv,ov) {
        var s = this.getStore();
        s.baseParams.query = tf.getValue();
        this.getBottomToolbar().changePage(1);
        this.refresh();
    }
    ,removeDoodle: function() {
		MODx.msg.confirm({
		    title: _('quotes.quote_remove')
		    ,text: _('quotes.quote_remove_confirm')
		    ,url: this.config.url
		    ,params: {
		        action: 'mgr/quote/remove'
		        ,id: this.menu.record.id
		    }
		    ,listeners: {
		        'success': {fn:this.refresh,scope:this}
		    }
		});
	}
	,getMenu: function() {
		return [{
		    text: _('quotes.quote_remove')
		    ,handler: this.removeDoodle
		}];
	}

    
    
    
});
Ext.reg('quotes-grid-quotes',Quotes.grid.Quotes);
