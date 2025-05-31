<?php
require_once dirname(dirname(__FILE__)) . '/index.class.php';

class modJWTManageManagerController extends modJWTBaseManagerController
{

    public function process(array $scriptProperties = []): void
    {
    }

    public function getPageTitle(): string
    {
        return $this->modx->lexicon('modjwt');
    }

    public function loadCustomCssJs(): void
    {
        $this->addLastJavascript($this->modjwt->getOption('jsUrl') . 'mgr/widgets/manage.panel.js');
        $this->addLastJavascript($this->modjwt->getOption('jsUrl') . 'mgr/sections/manage.js');

        $this->addHtml(
            '
            <script type="text/javascript">
                Ext.onReady(function() {
                    MODx.load({ xtype: "modjwt-page-manage"});
                });
            </script>
        '
        );
    }

    public function getTemplateFile(): string
    {
        return $this->modjwt->getOption('templatesPath') . 'manage.tpl';
    }

}
