modjwt.page.Manage = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [
            {
                xtype: 'modjwt-panel-manage',
                renderTo: 'modjwt-panel-manage-div'
            }
        ]
    });
    modjwt.page.Manage.superclass.constructor.call(this, config);
};
Ext.extend(modjwt.page.Manage, MODx.Component);
Ext.reg('modjwt-page-manage', modjwt.page.Manage);
