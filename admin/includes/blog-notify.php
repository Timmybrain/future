<?php
function notify()
{
    foreach ($_COOKIE as $key => $value) {
        if(!empty($value)) {
            switch ($key) {
                case 'success':
                    echo "<div class='notifier success'> $value </div>";
                    break;

                case 'warning':
                    echo "<div class='notifier warning'> $value </div>";
                    break;

                case 'danger':
                    echo "<div class='notifier danger'> $value </div>";
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }
}


notify();
