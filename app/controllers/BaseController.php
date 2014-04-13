<?php

class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

    protected function pageRedirect(Page $page, $tab = 'content')
    {
        $params = array('page' => $page->slug);
        if (!is_null($tab)){
            $params['tab'] = $tab;
        }
        return Redirect::route($page->type->url_prefix, $params);
    }

    protected function pageRoute(Page $page, $tab = null)
    {
        $params = array('page' => $page->slug);
        if (!is_null($tab)){
            $params['tab'] = $tab;
        }
        return route($page->type->url_prefix, $params);
    }

}