<?php
//ADDS CONFIGURE TO ALL VIEWS
class_alias('Cake\Core\Configure', 'Configure');

//CUSTOM VALUES
Configure::write('FRONT_URL', 'http://localhost:8765');
Configure::write('ADMIN_URL', 'http://localhost:8765/admin');
Configure::write('APP_NAME', 'CakePhp3 AF');


setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

