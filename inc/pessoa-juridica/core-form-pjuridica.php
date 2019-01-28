<?php


function complete_registration_juridica() {
  global $reg_errors,
  $username,
  $email,
  $password,
  $first_name,
  $user_url,
  $responsavel_nome_completo_do_responsavel,
  $responsavel_email_do_responsavel,
  $responsavel_celular_do_responsavel,
  $responsavel_telefone_fixo_do_responsavel,
  $responsavel_substituto_nome_completo_do_responsavel,
  $responsavel_substituto_email_do_responsavel,
  $responsavel_substituto_celular_do_responsavel,
  $responsavel_substituto_telefone_fixo_do_responsavel,
  $cnpj,
  $cep,
  $logradouro,
  $numero,
  $bairro,
  $cidade,
  $estado,
  $tipo_de_instituicao,
  $tamanho_da_empresa,
  $perfil_institucional,
  $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao,
  $temas_de_interesse_,
  $li_e_aceito_o_termo_de_adesao;

  if ( 1 > count( $reg_errors->get_error_messages() ) ) {
      $userdata = array(
      'user_login'    =>   $username,
      'user_email'    =>   $email,
      'user_pass'     =>   $password,
      'first_name'    =>   $first_name,
      'user_url' => $user_url,
      'role' => 'editor'
      );
      $user = wp_insert_user( $userdata );

      save_usermeta_juridica(
        $user,
        $responsavel_nome_completo_do_responsavel,
        $responsavel_email_do_responsavel,
        $responsavel_celular_do_responsavel,
        $responsavel_telefone_fixo_do_responsavel,
        $responsavel_substituto_nome_completo_do_responsavel,
        $responsavel_substituto_email_do_responsavel,
        $responsavel_substituto_celular_do_responsavel,
        $responsavel_substituto_telefone_fixo_do_responsavel,
        $cnpj,
        $cep,
        $logradouro,
        $numero,
        $bairro,
        $cidade,
        $estado,
        $tipo_de_instituicao,
        $tamanho_da_empresa,
        $perfil_institucional,
        $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao,
        $temas_de_interesse_,
        $li_e_aceito_o_termo_de_adesao
  );      
  }
}

function save_usermeta_juridica(
    $user,
    $responsavel_nome_completo_do_responsavel,
    $responsavel_email_do_responsavel,
    $responsavel_celular_do_responsavel,
    $responsavel_telefone_fixo_do_responsavel,
    $responsavel_substituto_nome_completo_do_responsavel,
    $responsavel_substituto_email_do_responsavel,
    $responsavel_substituto_celular_do_responsavel,
    $responsavel_substituto_telefone_fixo_do_responsavel,
    $cnpj,
    $cep,
    $logradouro,
    $numero,
    $bairro,
    $cidade,
    $estado,
    $tipo_de_instituicao,
    $tamanho_da_empresa,
    $perfil_institucional,
    $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao,
    $temas_de_interesse_,
    $li_e_aceito_o_termo_de_adesao
) {
    update_user_meta( absint($user), 'responsavel_nome_completo_do_responsavel', wp_kses_post($responsavel_nome_completo_do_responsavel));
    update_user_meta( absint($user), 'responsavel_email_do_responsavel', $responsavel_email_do_responsavel);
    update_user_meta( absint($user), 'responsavel_celular_do_responsavel', $responsavel_celular_do_responsavel);
    update_user_meta( absint($user), 'responsavel_telefone_fixo_do_responsavel', $responsavel_telefone_fixo_do_responsavel);
    update_user_meta( absint($user), 'responsavel_substituto_nome_completo_do_responsavel', $responsavel_substituto_nome_completo_do_responsavel);
    update_user_meta( absint($user), 'responsavel_substituto_email_do_responsavel', $responsavel_substituto_email_do_responsavel);
    update_user_meta( absint($user), 'responsavel_substituto_celular_do_responsavel', $responsavel_substituto_celular_do_responsavel);
    update_user_meta( absint($user), 'responsavel_substituto_telefone_fixo_do_responsavel', $responsavel_substituto_telefone_fixo_do_responsavel);
    update_user_meta( absint($user), 'nome_fantasia', get_userdata($user->id)->first_name);
    update_user_meta( absint($user), 'cnpj', $cnpj);
    update_user_meta( absint($user), 'cep', $cep);
    update_user_meta( absint($user), 'logradouro', $logradouro);
    update_user_meta( absint($user), 'numero', $numero);
    update_user_meta( absint($user), 'bairro', $bairro);
    update_user_meta( absint($user), 'cidade', $cidade);
    update_user_meta( absint($user), 'estado', $estado);
    update_user_meta( absint($user), 'tipo_de_instituicao', $tipo_de_instituicao);
    update_user_meta( absint($user), 'tamanho_da_empresa', $tamanho_da_empresa);
    update_user_meta( absint($user), 'perfil_institucional', $perfil_institucional);
    update_user_meta( absint($user), 'possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao', $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao);
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

function custom_registration_function_juridica() {

  if ( isset($_POST['submit'] ) ) {
      registration_validation_juridica (
        $_POST['username'],
        $_POST['email'],
        $_POST['password'],
        $_POST['first_name'],
        $_POST['user_url'],
        $_POST['responsavel_nome_completo_do_responsavel'],
        $_POST['responsavel_email_do_responsavel'],
        $_POST['responsavel_celular_do_responsavel'],
        $_POST['responsavel_telefone_fixo_do_responsavel'],
        $_POST['responsavel_substituto_nome_completo_do_responsavel'],
        $_POST['responsavel_substituto_email_do_responsavel'],
        $_POST['responsavel_substituto_celular_do_responsavel'],
        $_POST['responsavel_substituto_telefone_fixo_do_responsavel'],
        $_POST['cnpj'],
        $_POST['cep'],
        $_POST['logradouro'],
        $_POST['numero'],
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['estado'],
        $_POST['tipo_de_instituicao'],
        $_POST['tamanho_da_empresa'],
        $_POST['perfil_institucional'],
        $_POST['possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao'],
        $_POST['temas_de_interesse_'],
        $_POST['li_e_aceito_o_termo_de_adesao']
      );
       
      // sanitize user form input
      global $username,
      $email,
      $password,
      $first_name,
      $user_url,
      $responsavel_nome_completo_do_responsavel,
      $responsavel_email_do_responsavel,
      $responsavel_celular_do_responsavel,
      $responsavel_telefone_fixo_do_responsavel,
      $responsavel_substituto_nome_completo_do_responsavel,
      $responsavel_substituto_email_do_responsavel,
      $responsavel_substituto_celular_do_responsavel,
      $responsavel_substituto_telefone_fixo_do_responsavel,
      $cnpj,
      $cep,
      $logradouro,
      $numero,
      $bairro,
      $cidade,
      $estado,
      $tipo_de_instituicao,
      $tamanho_da_empresa,
      $perfil_institucional,
      $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao,
      $temas_de_interesse_,
      $li_e_aceito_o_termo_de_adesao;

      $username = sanitize_user( $_POST['username'] );
      $email = sanitize_email( $_POST['email'] );
      $password = esc_attr( $_POST['password'] );
      $first_name = sanitize_text_field( $_POST['first_name'] );
      $user_url = sanitize_text_field( $_POST['user_url']);
      $responsavel_nome_completo_do_responsavel = $_POST['responsavel_nome_completo_do_responsavel'];
      $responsavel_email_do_responsavel = $_POST['responsavel_email_do_responsavel'];
      $responsavel_celular_do_responsavel = $_POST['responsavel_celular_do_responsavel'];
      $responsavel_telefone_fixo_do_responsavel = $_POST['responsavel_telefone_fixo_do_responsavel'];
      $responsavel_substituto_nome_completo_do_responsavel = $_POST['responsavel_substituto_nome_completo_do_responsavel'];
      $responsavel_substituto_email_do_responsavel = $_POST['responsavel_substituto_email_do_responsavel'];
      $responsavel_substituto_celular_do_responsavel = $_POST['responsavel_substituto_celular_do_responsavel'];
      $responsavel_substituto_telefone_fixo_do_responsavel = $_POST['responsavel_substituto_telefone_fixo_do_responsavel'];
      $cnpj = $_POST['cnpj'];
      $cep = $_POST['cep'];
      $logradouro = $_POST['logradouro'];
      $numero = $_POST['numero'];
      $bairro = $_POST['bairro'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];
      $tipo_de_instituicao = $_POST['tipo_de_instituicao'];
      $tamanho_da_empresa = $_POST['tamanho_da_empresa'];
      $perfil_institucional = $_POST['perfil_institucional'];
      $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao = $_POST['possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao'];
      $temas_de_interesse_ = $_POST['temas_de_interesse_'];
      $li_e_aceito_o_termo_de_adesao = $_POST['li_e_aceito_o_termo_de_adesao'];
      

      // call @function complete_registration_juridica to create the user
      // only when no WP_error is found
      complete_registration_juridica(
      $username,
      $email,
      $password,
      $first_name,
      $user_url,
      $responsavel_nome_completo_do_responsavel,
      $responsavel_email_do_responsavel,
      $responsavel_celular_do_responsavel,
      $responsavel_telefone_fixo_do_responsavel,
      $responsavel_substituto_nome_completo_do_responsavel,
      $responsavel_substituto_email_do_responsavel,
      $responsavel_substituto_celular_do_responsavel,
      $responsavel_substituto_telefone_fixo_do_responsavel,
      $cnpj,
      $cep,
      $logradouro,
      $numero,
      $bairro,
      $cidade,
      $estado,
      $tipo_de_instituicao,
      $tamanho_da_empresa,
      $perfil_institucional,
      $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao,
      $temas_de_interesse_,
      $li_e_aceito_o_termo_de_adesao
      );
  }

  registration_form_juridica(
    $username,
    $email,
    $password,
    $first_name,
    $user_url,
    $responsavel_nome_completo_do_responsavel,
    $responsavel_email_do_responsavel,
    $responsavel_celular_do_responsavel,
    $responsavel_telefone_fixo_do_responsavel,
    $responsavel_substituto_nome_completo_do_responsavel,
    $responsavel_substituto_email_do_responsavel,
    $responsavel_substituto_celular_do_responsavel,
    $responsavel_substituto_telefone_fixo_do_responsavel,
    $cnpj,
    $cep,
    $logradouro,
    $numero,
    $bairro,
    $cidade,
    $estado,
    $tipo_de_instituicao,
    $tamanho_da_empresa,
    $perfil_institucional,
    $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao,
    $temas_de_interesse_,
    $li_e_aceito_o_termo_de_adesao
      );
}

// Register a new shortcode: [cr_custom_registration]
add_shortcode( 'cur_pessoa_juridica', 'custom_registration_shortcode_juridica' );
 
// The callback function that will replace [book]
function custom_registration_shortcode_juridica() {
    ob_start();
    custom_registration_function_juridica();
    return ob_get_clean();
}