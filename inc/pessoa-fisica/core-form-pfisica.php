<?php

function registration_form_fisica( 
    $pessoaFisica) {
    $instituicoes_query = get_users(array('role' => 'editor'));

    $instituicoes = [];
    foreach ($instituicoes_query as $i) {
        array_push($instituicoes, $i->display_name);
    }
    array_unshift($instituicoes, 'Não Possui');


    $paises = $GLOBALS['paises'];
    $escolaridade = $GLOBALS['escolaridade'];
    $areas_conhecimento = $GLOBALS['areas_conhecimento'];

    include('templates/pessoa-fisica-form.php');
}
    
function complete_registration_fisica() {
  global $reg_errors, 
  $pessoaFisica;

  if ( 1 > count( $reg_errors->get_error_messages() ) ) {
      $userdata = array(
      'user_login'    =>   $pessoaFisica->username,
      'user_email'    =>   $pessoaFisica->email,
      'user_pass'     =>   $pessoaFisica->password,
      'first_name'    =>   $pessoaFisica->first_name,
      'last_name'     =>   $pessoaFisica->last_name,
      'role' => 'contributor'
      );
      $user = wp_insert_user( $userdata );

      save_usermeta($user,
      $pessoaFisica
  );
      
  }
}

function save_usermeta(
  $user,
  $pessoaFisica
) {
    /**
     * 
     * Salva user meta customizado de pessoa física
     */
    update_user_meta( absint($user), 'cpf', wp_kses_post($pessoaFisica->cpf));
    update_user_meta( absint($user), 'data_de_nascimento', $pessoaFisica->data_de_nascimento);
    update_user_meta( absint($user), 'pais_de_nascimento', $pessoaFisica->pais_de_nascimento);
    update_user_meta( absint($user), 'celular_', $pessoaFisica->celular_);
    update_user_meta( absint($user), 'telefone_fixo', $pessoaFisica->telefone_fixo);
    update_user_meta( absint($user), 'url_lattes', $pessoaFisica->url_lattes);
    update_user_meta( absint($user), 'pais_de_residencia', $pessoaFisica->pais_de_residencia);
    update_user_meta( absint($user), 'cep', $pessoaFisica->cep);
    update_user_meta( absint($user), 'logradouro', $pessoaFisica->logradouro);
    update_user_meta( absint($user), 'numero', $pessoaFisica->numero);
    update_user_meta( absint($user), 'bairro', $pessoaFisica->bairro);
    update_user_meta( absint($user), 'cidade', $pessoaFisica->cidade);
    update_user_meta( absint($user), 'estado', $pessoaFisica->estado);
    update_user_meta( absint($user), 'vinculo_institucional', $pessoaFisica->vinculo_institucional);
    update_user_meta( absint($user), 'departamento', $pessoaFisica->departamento);
    update_user_meta( absint($user), 'cargofuncao', $pessoaFisica->cargofuncao);
    update_user_meta( absint($user), 'ramal', $pessoaFisica->ramal);
    update_user_meta( absint($user), 'formacao_academica', $pessoaFisica->formacao_academica);
    update_user_meta( absint($user), 'formacao_tipo', $pessoaFisica->formacao_tipo);
    update_user_meta( absint($user), 'areas_do_conhecimento', $pessoaFisica->areas_do_conhecimento);
    update_user_meta( absint($user), 'temas_de_interesse_', $pessoaFisica->temas_de_interesse_);
    update_user_meta( absint($user), 'li_e_aceito_o_termo_de_adesao', $pessoaFisica->li_e_aceito_o_termo_de_adesao);

    echo '<div class="container">';
        echo '<div class="row">';
            echo '<div class="col-md-12">';
                echo '<div class="alert alert-success" role="alert">Registro completo!.';
                echo 'Vá para a <a href="' . get_site_url() . '/wp-login.php">página de login</a></div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';

}

function custom_registration_function_fisica() {

  if ( isset($_POST['submit'] ) ) {

    $pessoaFisica = new PessoaFisica();
    $pessoaFisica->username = $_POST['username'];
    $pessoaFisica->password = $_POST['password'];
    $pessoaFisica->email = $_POST['email'];
    $pessoaFisica->first_name = $_POST['fname'];
    $pessoaFisica->last_name = $_POST['lname'];
    $pessoaFisica->cpf = $_POST['cpf'];
    $pessoaFisica->data_de_nascimento = $_POST['data_de_nascimento'];
    $pessoaFisica->pais_de_nascimento = $_POST['pais_de_nascimento'];
    $pessoaFisica->celular_ = $_POST['celular_'];
    $pessoaFisica->telefone_fixo = $_POST['telefone_fixo'];
    $pessoaFisica->url_lattes = $_POST['url_lattes'];
    $pessoaFisica->pais_de_residencia = $_POST['pais_de_residencia'];
    $pessoaFisica->cep = $_POST['cep'];
    $pessoaFisica->logradouro = $_POST['logradouro'];
    $pessoaFisica->numero = $_POST['numero'];
    $pessoaFisica->bairro = $_POST['bairro'];
    $pessoaFisica->cidade = $_POST['cidade'];
    $pessoaFisica->estado = $_POST['estado'];
    $pessoaFisica->vinculo_institucional = $_POST['vinculo_institucional'];
    $pessoaFisica->departamento = $_POST['departamento'];
    $pessoaFisica->cargofuncao = $_POST['cargofuncao'];
    $pessoaFisica->telefone = $_POST['telefone'];
    $pessoaFisica->ramal = $_POST['ramal'];
    $pessoaFisica->formacao_academica = $_POST['formacao_academica'];
    $pessoaFisica->formacao_tipo = $_POST['formacao_tipo'];
    $pessoaFisica->areas_do_conhecimento = $_POST['areas_do_conhecimento'];
    $pessoaFisica->temas_de_interesse_ = $_POST['temas_de_interesse_'];
    $pessoaFisica->li_e_aceito_o_termo_de_adesao = $_POST['li_e_aceito_o_termo_de_adesao'];
    
      registration_validation_fisica (
        $pessoaFisica
      );
       
      // sanitize user form input
      global $pessoaFisica;

      $pessoaFisica->username = sanitize_user( $_POST['username'] );
      $pessoaFisica->password = esc_attr( $_POST['password'] );
      $pessoaFisica->email = sanitize_email( $_POST['email'] );
      $pessoaFisica->first_name = sanitize_text_field( $_POST['fname'] );
      $pessoaFisica->last_name = sanitize_text_field( $_POST['lname'] );
      $pessoaFisica->cpf = sanitize_text_field( $_POST['cpf']);
      $pessoaFisica->data_de_nascimento = $_POST['data_de_nascimento'];
      $pessoaFisica->pais_de_nascimento = sanitize_text_field( $_POST['pais_de_nascimento']);
      $pessoaFisica->celular_ = sanitize_text_field( $_POST['celular_']);
      $pessoaFisica->telefone_fixo = sanitize_text_field( $_POST['telefone_fixo']);
      $pessoaFisica->url_lattes = sanitize_text_field( $_POST['url_lattes']);
      $pessoaFisica->pais_de_residencia = sanitize_text_field( $_POST['pais_de_residencia']);
      $pessoaFisica->cep = sanitize_text_field( $_POST['cep']);
      $pessoaFisica->logradouro = sanitize_text_field( $_POST['logradouro']);
      $pessoaFisica->numero = sanitize_text_field( $_POST['numero']);
      $pessoaFisica->bairro = sanitize_text_field( $_POST['bairro']);
      $pessoaFisica->cidade = sanitize_text_field( $_POST['cidade']);
      $pessoaFisica->estado = sanitize_text_field( $_POST['estado']);
      $pessoaFisica->vinculo_institucional = sanitize_text_field( $_POST['vinculo_institucional']);
      $pessoaFisica->departamento = sanitize_text_field( $_POST['departamento']);
      $pessoaFisica->cargofuncao = sanitize_text_field( $_POST['cargofuncao']);
      $pessoaFisica->telefone = sanitize_text_field( $_POST['telefone']);
      $pessoaFisica->ramal = sanitize_text_field( $_POST['ramal']);
      $pessoaFisica->formacao_academica = sanitize_text_field( $_POST['formacao_academica']);
      $pessoaFisica->formacao_tipo = sanitize_text_field( $_POST['formacao_tipo']);
      $pessoaFisica->areas_do_conhecimento = $_POST['areas_do_conhecimento'];
      $pessoaFisica->temas_de_interesse_ = $_POST['temas_de_interesse_'];
      $pessoaFisica->li_e_aceito_o_termo_de_adesao = $_POST['li_e_aceito_o_termo_de_adesao'];
      

      // call @function complete_registration_fisica to create the user
      // only when no WP_error is found
      complete_registration_fisica(
      $pessoaFisica
      );
  }

  registration_form_fisica(
      $pessoaFisica
      );
}

// Register a new shortcode: [cr_custom_registration]
add_shortcode( 'cur_pessoa_fisica', 'custom_registration_shortcode_fisica' );
 
// The callback function that will replace [book]
function custom_registration_shortcode_fisica() {
    ob_start();
    custom_registration_function_fisica();
    return ob_get_clean();
}