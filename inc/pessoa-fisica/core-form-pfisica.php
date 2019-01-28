<?php


function complete_registration_fisica() {
  global $reg_errors, 
  $username, 
  $password, 
  $email, 
  $first_name, 
  $last_name,
  $cpf,
  $data_de_nascimento,
  $pais_de_nascimento,
  $celular_,
  $telefone_fixo,
  $url_lattes,
  $pais_de_residencia,
  $cep,
  $logradouro,
  $numero,
  $bairro,
  $cidade,
  $estado,
  $vinculo_institucional,
  $departamento,
  $cargofuncao,
  $telefone,
  $ramal,
  $formacao_academica,
  $formacao_tipo,
  $areas_do_conhecimento,
  $temas_de_interesse_,
  $li_e_aceito_o_termo_de_adesao;

  if ( 1 > count( $reg_errors->get_error_messages() ) ) {
      $userdata = array(
      'user_login'    =>   $username,
      'user_email'    =>   $email,
      'user_pass'     =>   $password,
      'first_name'    =>   $first_name,
      'last_name'     =>   $last_name,
      'role' => 'contributor'
      );
      $user = wp_insert_user( $userdata );

      save_usermeta($user,
      $cpf,
      $data_de_nascimento,
      $pais_de_nascimento,
      $celular_,
      $telefone_fixo,
      $url_lattes,
      $pais_de_residencia,
      $cep,
      $logradouro,
      $numero,
      $bairro,
      $cidade,
      $estado,
      $vinculo_institucional,
      $departamento,
      $cargofuncao,
      $telefone,
      $ramal,
      $formacao_academica,
      $formacao_tipo,
      $areas_do_conhecimento,
      $temas_de_interesse_,
      $li_e_aceito_o_termo_de_adesao
  );
      
  }
}

function save_usermeta(
  $user,
  $cpf,
  $data_de_nascimento,
  $pais_de_nascimento,
  $celular_,
  $telefone_fixo,
  $url_lattes,
  $pais_de_residencia,
  $cep,
  $logradouro,
  $numero,
  $bairro,
  $cidade,
  $estado,
  $vinculo_institucional,
  $departamento,
  $cargofuncao,
  $telefone,
  $ramal,
  $formacao_academica,
  $formacao_tipo,
  $areas_do_conhecimento,
  $temas_de_interesse_,
  $li_e_aceito_o_termo_de_adesao
) {
    update_user_meta( absint($user), 'cpf', wp_kses_post($cpf));
    update_user_meta( absint($user), 'data_de_nascimento', $data_de_nascimento);
    update_user_meta( absint($user), 'pais_de_nascimento', $pais_de_nascimento);
    update_user_meta( absint($user), 'celular_', $celular_);
    update_user_meta( absint($user), 'telefone_fixo', $telefone_fixo);
    update_user_meta( absint($user), 'url_lattes', $url_lattes);
    update_user_meta( absint($user), 'pais_de_residencia', $pais_de_residencia);
    update_user_meta( absint($user), 'cep', $cep);
    update_user_meta( absint($user), 'logradouro', $logradouro);
    update_user_meta( absint($user), 'numero', $numero);
    update_user_meta( absint($user), 'bairro', $bairro);
    update_user_meta( absint($user), 'cidade', $cidade);
    update_user_meta( absint($user), 'estado', $estado);
    update_user_meta( absint($user), 'vinculo_institucional', $vinculo_institucional);
    update_user_meta( absint($user), 'departamento', $departamento);
    update_user_meta( absint($user), 'cargofuncao', $cargofuncao);
    update_user_meta( absint($user), 'ramal', $ramal);
    update_user_meta( absint($user), 'formacao_academica', $formacao_academica);
    update_user_meta( absint($user), 'formacao_tipo', $formacao_tipo);
    update_user_meta( absint($user), 'areas_do_conhecimento', $areas_do_conhecimento);
    update_user_meta( absint($user), 'temas_de_interesse_', $temas_de_interesse_);
    update_user_meta( absint($user), 'li_e_aceito_o_termo_de_adesao', $li_e_aceito_o_termo_de_adesao);

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
      registration_validation_fisica (
      $_POST['username'],
      $_POST['password'],
      $_POST['email'],
      $_POST['fname'],
      $_POST['lname'],
      $_POST['cpf'],
      $_POST['data_de_nascimento'],
      $_POST['pais_de_nascimento'],
      $_POST['celular_'],
      $_POST['telefone_fixo'],
      $_POST['url_lattes'],
      $_POST['pais_de_residencia'],
      $_POST['cep'],
      $_POST['logradouro'],
      $_POST['numero'],
      $_POST['bairro'],
      $_POST['cidade'],
      $_POST['estado'],
      $_POST['vinculo_institucional'],
      $_POST['departamento'],
      $_POST['cargofuncao'],
      $_POST['telefone'],
      $_POST['ramal'],
      $_POST['formacao_academica'],
      $_POST['formacao_tipo'],
      $_POST['areas_do_conhecimento'],
      $_POST['temas_de_interesse_'],
      $_POST['li_e_aceito_o_termo_de_adesao']
      );
       
      // sanitize user form input
      global $username,
      $password,
      $email,
      $first_name,
      $last_name,
      $cpf,
      $data_de_nascimento,
      $pais_de_nascimento,
      $celular_,
      $telefone_fixo,
      $url_lattes,
      $pais_de_residencia,
      $cep,
      $logradouro,
      $numero,
      $bairro,
      $cidade,
      $estado,
      $vinculo_institucional,
      $departamento,
      $cargofuncao,
      $telefone,
      $ramal,
      $formacao_academica,
      $formacao_tipo,
      $areas_do_conhecimento,
      $temas_de_interesse_,
      $li_e_aceito_o_termo_de_adesao;

      $username = sanitize_user( $_POST['username'] );
      $password = esc_attr( $_POST['password'] );
      $email = sanitize_email( $_POST['email'] );
      $first_name = sanitize_text_field( $_POST['fname'] );
      $last_name = sanitize_text_field( $_POST['lname'] );
      $cpf = sanitize_text_field( $_POST['cpf']);
      $data_de_nascimento = $_POST['data_de_nascimento'];
      $pais_de_nascimento = sanitize_text_field( $_POST['pais_de_nascimento']);
      $celular_ = sanitize_text_field( $_POST['celular_']);
      $telefone_fixo = sanitize_text_field( $_POST['telefone_fixo']);
      $url_lattes = sanitize_text_field( $_POST['url_lattes']);
      $pais_de_residencia = sanitize_text_field( $_POST['pais_de_residencia']);
      $cep = sanitize_text_field( $_POST['cep']);
      $logradouro = sanitize_text_field( $_POST['logradouro']);
      $numero = sanitize_text_field( $_POST['numero']);
      $bairro = sanitize_text_field( $_POST['bairro']);
      $cidade = sanitize_text_field( $_POST['cidade']);
      $estado = sanitize_text_field( $_POST['estado']);
      $vinculo_institucional = sanitize_text_field( $_POST['vinculo_institucional']);
      $departamento = sanitize_text_field( $_POST['departamento']);
      $cargofuncao = sanitize_text_field( $_POST['cargofuncao']);
      $telefone = sanitize_text_field( $_POST['telefone']);
      $ramal = sanitize_text_field( $_POST['ramal']);
      $formacao_academica = sanitize_text_field( $_POST['formacao_academica']);
      $formacao_tipo = sanitize_text_field( $_POST['formacao_tipo']);
      $areas_do_conhecimento = $_POST['areas_do_conhecimento'];
      $temas_de_interesse_ = $_POST['temas_de_interesse_'];
      $li_e_aceito_o_termo_de_adesao = $_POST['li_e_aceito_o_termo_de_adesao'];
      

      // call @function complete_registration_fisica to create the user
      // only when no WP_error is found
      complete_registration_fisica(
      $username,
      $password,
      $email,
      $first_name,
      $last_name,
      $cpf,
      $data_de_nascimento,
      $pais_de_nascimento,
      $celular_,
      $telefone_fixo,
      $url_lattes,
      $pais_de_residencia,
      $cep,
      $logradouro,
      $numero,
      $bairro,
      $cidade,
      $estado,
      $vinculo_institucional,
      $departamento,
      $cargofuncao,
      $telefone,
      $ramal,
      $formacao_academica,
      $formacao_tipo,
      $areas_do_conhecimento,
      $temas_de_interesse_,
      $li_e_aceito_o_termo_de_adesao
      );
  }

  registration_form_fisica(
      $username,
      $password,
      $email,
      $first_name,
      $last_name,
      $cpf,
      $data_de_nascimento,
      $pais_de_nascimento,
      $celular_,
      $telefone_fixo,
      $url_lattes,
      $pais_de_residencia,
      $cep,
      $logradouro,
      $numero,
      $bairro,
      $cidade,
      $estado,
      $vinculo_institucional,
      $departamento,
      $cargofuncao,
      $telefone,
      $ramal,
      $formacao_academica,
      $formacao_tipo,
      $areas_do_conhecimento,
      $temas_de_interesse_,
      $li_e_aceito_o_termo_de_adesao
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