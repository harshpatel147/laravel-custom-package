<div class="sectionOfBsAlertClass">
    <div {{ $attributes->class(['alert', 'alert-'. $alertType, 'alert-dismissible', 'fade', 'show' => ($isHidden) ? false : true , 'd-none' => $isHidden])->merge([ 'role' => 'alert' ]) }} >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
        <h5><i class="icon fas fa-check"></i> Alert!</h5>
        <div class="BsAlertMsgDiv">
        <?php 
            if(is_string($message) && is_array(json_decode($message, true)) && (json_last_error() == JSON_ERROR_NONE)){
                $message = json_decode($message, true); 
        ?>
        
        <ul>
            @foreach ($message as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        
        <?php 
            }else{
                echo $message;
            }
        ?>
        </div>
    </div>
</div>