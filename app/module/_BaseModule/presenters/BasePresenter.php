<?php

namespace App\BaseModule\Presenters;

use Nette;

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

    /** @var \WebLoader\LoaderFactory @inject */
    public $webLoader;

    protected function beforeRender()
    {
        $this->template->viewName = $this->view;
        $this->template->root = isset($_SERVER['SCRIPT_FILENAME']) ? realpath(dirname(dirname($_SERVER['SCRIPT_FILENAME']))) : NULL;

        $a = strrpos($this->name, ':');
        if ($a === FALSE) {
            $this->template->moduleName = '';
            $this->template->presenterName = $this->name;
        } else {
            $this->template->moduleName = substr($this->name, 0, $a + 1);
            $this->template->presenterName = substr($this->name, $a + 1);
        }
    }

    /** @return CssLoader */
    protected function createComponentCss()
    {
        $css = $this->webLoader->createCssLoader('default')
                ->setMedia('screen,projection,tv')
                ->setType(null);
        return $css;
    }

    /** @return CssLoader */
    protected function createComponentCssGrido()
    {
        $css = $this->webLoader->createCssLoader('grido')
                ->setMedia('screen,projection,tv')
                ->setType(null);
        return $css;
    }

    /** @return JavaScriptLoader */
    protected function createComponentJs()
    {
        return $this->webLoader->createJavaScriptLoader('default');
    }

    /** @return JavaScriptLoader */
    protected function createComponentJsGrido()
    {
        return $this->webLoader->createJavaScriptLoader('grido');
    }

}
