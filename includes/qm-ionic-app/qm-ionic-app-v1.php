<?php

wp_enqueue_style("bootstrap", plugins_url('../../', __FILE__) . "css/bootstrap.min.css");
wp_enqueue_style("qm-ionic-styles", plugins_url('../../', __FILE__) . "css/qm-ionic-app.css");

wp_enqueue_script("jquery", true);
wp_enqueue_script("qm-ionic-app",
    plugins_url('../../', __FILE__) . "js/qm-ionic-app.js", "jquery", false, true);
wp_enqueue_script("quantimodo-js-sdk", plugins_url('../../', __FILE__) . "js/libs/quantimodo-sdk-javascript/quantimodo-api.js", array('jquery'));
wp_enqueue_script("quantimodo-intercom", plugins_url('../../', __FILE__) . "js/intercom.js", array('jquery', 'quantimodo-js-sdk'));

?>

<!--<p>Hello from ionic app</p>-->

<div>
    <div id="qm-ionic-button-holder">
        <img id="qm-ionic-app-show-hide" src="<?php echo plugins_url('../../', __FILE__) . "images/quantimodo.png" ?>">
        </img>
    </div>
    <div id="ionic-app-holder">
        <iframe id="ionic-app-frame" src="https://app.quantimo.do/ionic/Modo/www/index.html#" frameborder="0"></iframe>
    </div>
</div>



