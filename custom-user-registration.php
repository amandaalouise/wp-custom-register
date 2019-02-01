<?php
/*
  Plugin Name: Custom User Registration
  Description: Cadastro de usuário personalizado.
  Version: 1.1
  Author: Amanda Louise Acosta Morais
 */

//Variables
require_once plugin_dir_path(__FILE__). '/globals/variables.php';

//Classes
require_once plugin_dir_path(__FILE__). '/classes/pessoa-fisica.php';
require_once plugin_dir_path(__FILE__). '/classes/pessoa-juridica.php';

//Funções cadastro de pessoa física
require_once plugin_dir_path(__FILE__). '/inc/pessoa-fisica/validators/form-validation.php';

require_once plugin_dir_path(__FILE__). '/inc/pessoa-fisica/core-form-pfisica.php';

require_once plugin_dir_path(__FILE__). '/inc/pessoa-fisica/validators/cpf-validation.php';

//Funções cadastro de pessoa Juridica
require_once plugin_dir_path(__FILE__). '/inc/pessoa-juridica/validators/form-validation.php';

require_once plugin_dir_path(__FILE__). '/inc/pessoa-juridica/core-form-pjuridica.php';

require_once plugin_dir_path(__FILE__). '/inc/pessoa-juridica/validators/cnpj-validation.php';


//Funções Gerais do Plugin
require_once plugin_dir_path(__FILE__). '/inc/storage-functions.php';

require_once plugin_dir_path(__FILE__). '/inc/dashboard-functions.php';

require_once plugin_dir_path(__FILE__). '/plugin-styles.php';