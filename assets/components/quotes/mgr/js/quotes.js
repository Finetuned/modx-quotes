console.log('assets/components/quotes/mgr/js/console.js loaded');

var Quotes = function(config) {
    config = config || {};
    Quotes.superclass.constructor.call(this,config);
};
Ext.extend(Quotes,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {}
});
Ext.reg('Quotes',Quotes);
Quotes = new Quotes();
