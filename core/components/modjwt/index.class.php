<?php
abstract class modJWTBaseManagerController extends modExtraManagerController {
    /** @var \modJWT\modJWT $modjwt */
    public $modjwt;

    public function initialize(): void
    {
        $this->modjwt = $this->modx->services->get('modjwt');

        $this->addCss($this->modjwt->getOption('cssUrl') . 'mgr.css');
        $this->addJavascript($this->modjwt->getOption('jsUrl') . 'mgr/modjwt.js');

        $this->addHtml('
            <script type="text/javascript">
                Ext.onReady(function() {
                    modjwt.config = '.$this->modx->toJSON($this->modjwt->config).';
                });
            </script>
        ');

        parent::initialize();
    }

    public function getLanguageTopics(): array
    {
        return array('modjwt:default');
    }

    public function checkPermissions(): bool
    {
        return true;
    }
}
