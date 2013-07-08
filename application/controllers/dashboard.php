<?php

class Dashboard_Controller extends Base_Controller {    

	public function action_index()
    {
    	$data = array(

    		'title' =>	'Panel de control de Muntex'

    		);
    	
    	return	View::make('dashboard.index', $data);
    }    

	public function action_logout()
    {

    	URL::to_route('/');

    }

}