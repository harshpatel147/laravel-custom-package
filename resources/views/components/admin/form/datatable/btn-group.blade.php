<?php 
    // $btnGroupActions = [ array('urlMethod' => "get", 'plainTxt' => "<span class=\"d-inline-flex align-items-center\"><i class=\"far fa-edit text-primary\"></i> Edit</span>", 'urlRoute' => "user.materials.edit", 'urlRouteParam' => "1", 'id' => "testId", 'class' => "btn btn-default"), array('urlMethod' => "get", 'plainTxt' => "Create", 'urlRoute' => "user.materials.create"), array('urlMethod' => "get", 'plainTxt' => "<span class=\"d-inline-flex align-items-center\"><i class=\"far fa-trash-alt text-danger\"></i> Delete</span>", 'urlRoute' => "#", 'id' => "delete1", 'class' => "btn btn-default deleteRecord", 'dataAttribute' => array('data-test' => "test", 'data-test1' => "test1")) ]; // pass it as a json Array
    if(is_string($btnGroupActions) && is_array(json_decode($btnGroupActions, true)) && (json_last_error() == JSON_ERROR_NONE)){
        $btnGroupActions = json_decode($btnGroupActions, true);
    }
?>
<div class="btn-group">
    @foreach($btnGroupActions as $val)
        @if(isset($val['urlMethod']) && !empty($val['urlMethod']) && strtolower($val['urlMethod']) === "get")
            <?php
                // $plainTxt = htmlentities($val['plainTxt']);
                
                if(isset($val['urlRoute']) && !empty($val['urlRoute']) && $val['urlRoute'] !== "#"){ 
                    $urlRoute = (isset($val['urlRouteParam']) && !empty($val['urlRouteParam'])) ? route($val['urlRoute'], $val['urlRouteParam']) : route($val['urlRoute']); // if $val['urlRouteParam'] exists then create url with param 
                }else{ 
                    $urlRoute = "#"; 
                }

                $class = (isset($val['class']) && !empty($val['class'])) ? $val['class'] : $val['class'] = "btn btn-default"; 
                
            ?>
            <a href="{{ $urlRoute }}" class="{{ $class }}" @if(isset($val['id'])) id="{{ $val['id'] }}" @endif
                @if(isset($val['dataAttribute']) && is_array($val['dataAttribute']))
                    @foreach($val['dataAttribute'] as $key => $value)
                        {{ " ". $key."=".$value }}
                    @endforeach
                @endif
            > {!! $val['plainTxt'] !!}</a>
        @endif
    @endforeach
</div>