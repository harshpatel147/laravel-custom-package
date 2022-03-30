<?php

namespace App\View\Components\Admin\Form\Datatable;

use Illuminate\View\Component;

class BtnGroup extends Component
{
    /**
     * The json array which contains : array ( urlMethod, plainTxt, urlRoute, class, id ) array key fields
     * 
     * for example: $btnGroupActions = [ array('urlMethod' => "get", 'plainTxt' => "<i class=\"far fa-edit text-primary\"></i> Edit", 'urlRoute' => "user.materials.edit", 'urlRouteParam' => "1", 'id' => "testId", 'class' => "btn btn-default"), array('urlMethod' => "get", 'plainTxt' => "Create", 'urlRoute' => "user.materials.create"), array('urlMethod' => "get", 'plainTxt' => "<i class=\"far fa-trash-alt text-danger\"></i> Delete", 'urlRoute' => "#", 'id' => "delete1", 'class' => "btn btn-default deleteRecord", 'dataAttribute' => array('data-test' => "test", 'data-test1' => "test1")) ];
     *
     * @var string
     */
    public $btnGroupActions;

    /**
     * Create a new component instance.
     * 
     * @param string $btnGroupActions // json array which contains : array ( urlMethod, plainTxt, urlRoute, class, id ) array key fields
     *
     * @return void
     */
    public function __construct(string $btnGroupActions)
    {
        $this->btnGroupActions = $btnGroupActions;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.form.datatable.btn-group');
    }
}
