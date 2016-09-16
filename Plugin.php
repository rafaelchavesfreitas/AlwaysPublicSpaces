<?php

namespace AlwaysPublicSpaces;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin {
    public function _init() {
        $app = App::i();
        $app->hook('entity(Space).insert:before', function(){
            $this->public = true;
        });

        $app->hook('view.partial(singles/space-public).params', function(&$params, &$template_name){
            $template_name = '_empty';
        });

    }

    public function register() { }
}
