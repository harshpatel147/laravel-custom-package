<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class ValidationMessage extends Component
{
    /**
     * The message type. Bootstrap Alert class type
     *
     * @var string
     */
    public $alertType;

    /**
     * message.
     *
     * @var string
     */
    public $message;
    
    /**
     * wants to display or not
     * 
     * if $isHidden = true then it will hidden at page on load time, [default value ($isHidden = false)]
     *
     * @var bool
     */
    public $isHidden;
    
    /**
     * Create a new component instance.
     *
     * @param string $alertType // className of bootstrap for ex: alert-success, alert-danger, alert-warning etc.
     * @param string $message // alert message
     * @param bool $isHidden // wants to display or not...  (optional) default value: false , if true then it will be hidden
     * 
     * @return void
     */
    public function __construct($alertType, $message, $isHidden = false)
    {
        $this->alertType = $alertType;
        $this->message = $message;
        $this->isHidden = $isHidden;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.validation-message');
    }
}
