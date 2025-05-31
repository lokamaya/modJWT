var modJWT = function (config) {
    config = config || {};
    modJWT.superclass.constructor.call(this, config);
};
Ext.extend(modJWT, Ext.Component, {

    page: {},
    window: {},
    grid: {},
    tree: {},
    panel: {},
    combo: {},
    field: {},
    config: {},

});
Ext.reg('modjwt', modJWT);
modjwt = new modJWT();
