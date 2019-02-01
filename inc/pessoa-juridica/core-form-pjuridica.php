<?php


function registration_form_juridica( 
    $pessoaJuridica
    ) {

    include('templates/pessoa-juridica-form.php');
}


function complete_registration_juridica() {
  global $reg_errors,
  $pessoaJuridica;

  if ( 1 > count( $reg_errors->get_error_messages() ) ) {
      $userdata = array(
      'user_login'    =>   $pessoaJuridica->username,
      'user_email'    =>   $pessoaJuridica->email,
      'user_pass'     =>   $pessoaJuridica->password,
      'first_name'    =>   $pessoaJuridica->first_name,
      'user_url' => $pessoaJuridica->user_url,
      'role' => 'editor'
      );
      $user = wp_insert_user( $userdata );

      save_usermeta_juridica(
        $user,
        $pessoaJuridica);      
  }
}

/**
 * 
 * Salva user meta customizado de pessoa juridica
 */
function save_usermeta_juridica(
    $user,
    $pessoaJuridica
) {
    update_user_meta( absint($user), 'responsavel_nome_completo_do_responsavel', wp_kses_post($pessoaJuridica->responsavel_nome_completo_do_responsavel));
    update_user_meta( absint($user), 'responsavel_email_do_responsavel', $pessoaJuridica->responsavel_email_do_responsavel);
    update_user_meta( absint($user), 'responsavel_celular_do_responsavel', $pessoaJuridica->responsavel_celular_do_responsavel);
    update_user_meta( absint($user), 'responsavel_telefone_fixo_do_responsavel', $pessoaJuridica->responsavel_telefone_fixo_do_responsavel);
    update_user_meta( absint($user), 'responsavel_substituto_nome_completo_do_responsavel', $pessoaJuridica->responsavel_substituto_nome_completo_do_responsavel);
    update_user_meta( absint($user), 'responsavel_substituto_email_do_responsavel', $pessoaJuridica->responsavel_substituto_email_do_responsavel);
    update_user_meta( absint($user), 'responsavel_substituto_celular_do_responsavel', $pessoaJuridica->responsavel_substituto_celular_do_responsavel);
    update_user_meta( absint($user), 'responsavel_substituto_telefone_fixo_do_responsavel', $pessoaJuridica->responsavel_substituto_telefone_fixo_do_responsavel);
    update_user_meta( absint($user), 'nome_fantasia', get_userdata($user->id)->first_name);
    update_user_meta( absint($user), 'cnpj', $pessoaJuridica->cnpj);
    update_user_meta( absint($user), 'cep', $pessoaJuridica->cep);
    update_user_meta( absint($user), 'logradouro', $pessoaJuridica->logradouro);
    update_user_meta( absint($user), 'numero', $pessoaJuridica->numero);
    update_user_meta( absint($user), 'bairro', $pessoaJuridica->bairro);
    update_user_meta( absint($user), 'cidade', $pessoaJuridica->cidade);
    update_user_meta( absint($user), 'estado', $pessoaJuridica->estado);
    update_user_meta( absint($user), 'tipo_de_instituicao', $pessoaJuridica->tipo_de_instituicao);
    update_user_meta( absint($user), 'tamanho_da_empresa', $pessoaJuridica->tamanho_da_empresa);
    update_user_meta( absint($user), 'perfil_institucional', $pessoaJuridica->perfil_institucional);
    update_user_meta( absint($user), 'possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao', $pessoaJuridica->possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao);
    update_user_meta( absint($user), 'temas_de_interesse_', $pessoaJuridica->temas_de_interesse_);
    update_user_meta( absint($user), 'li_e_aceito_o_termo_de_adesao', $pessoaJuridica->li_e_aceito_o_termo_de_adesao);

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

    $pessoaJuridica = new PessoaJuridica();

    $pessoaJuridica->username = $_POST['username'];
    $pessoaJuridica->email = $_POST['email'];
    $pessoaJuridica->password = $_POST['password'];
    $pessoaJuridica->first_name = $_POST['first_name'];
    $pessoaJuridica->user_url = $_POST['user_url'];
    $pessoaJuridica->responsavel_nome_completo_do_responsavel = $_POST['responsavel_nome_completo_do_responsavel'];
    $pessoaJuridica->responsavel_email_do_responsavel = $_POST['responsavel_email_do_responsavel'];
    $pessoaJuridica->responsavel_celular_do_responsavel = $_POST['responsavel_celular_do_responsavel'];
    $pessoaJuridica->responsavel_telefone_fixo_do_responsavel = $_POST['responsavel_telefone_fixo_do_responsavel'];
    $pessoaJuridica->responsavel_substituto_nome_completo_do_responsavel = $_POST['responsavel_substituto_nome_completo_do_responsavel'];
    $pessoaJuridica->responsavel_substituto_email_do_responsavel = $_POST['responsavel_substituto_email_do_responsavel'];
    $pessoaJuridica->responsavel_substituto_celular_do_responsavel = $_POST['responsavel_substituto_celular_do_responsavel'];
    $pessoaJuridica->responsavel_substituto_telefone_fixo_do_responsavel = $_POST['responsavel_substituto_telefone_fixo_do_responsavel'];
    $pessoaJuridica->cnpj = $_POST['cnpj'];
    $pessoaJuridica->cep = $_POST['cep'];
    $pessoaJuridica->logradouro = $_POST['logradouro'];
    $pessoaJuridica->numero = $_POST['numero'];
    $pessoaJuridica->bairro = $_POST['bairro'];
    $pessoaJuridica->cidade = $_POST['cidade'];
    $pessoaJuridica->estado = $_POST['estado'];
    $pessoaJuridica->tipo_de_instituicao = $_POST['tipo_de_instituicao'];
    $pessoaJuridica->tamanho_da_empresa = $_POST['tamanho_da_empresa'];
    $pessoaJuridica->perfil_institucional = $_POST['perfil_institucional'];
    $pessoaJuridica->possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao = $_POST['possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao'];
    $pessoaJuridica->temas_de_interesse_ = $_POST['temas_de_interesse_'];
    $pessoaJuridica->li_e_aceito_o_termo_de_adesao = $_POST['li_e_aceito_o_termo_de_adesao'];
        

  if ( isset($_POST['submit'] ) ) {
      registration_validation_juridica (
        $pessoaJuridica
      );
       
      // sanitize user form input
      global $pessoaJuridica;

      $pessoaJuridica->username = sanitize_user( $_POST['username'] );
      $pessoaJuridica->email = sanitize_email( $_POST['email'] );
      $pessoaJuridica->password = esc_attr( $_POST['password'] );
      $pessoaJuridica->first_name = sanitize_text_field( $_POST['first_name'] );
      $pessoaJuridica->user_url = sanitize_text_field( $_POST['user_url']);
      $pessoaJuridica->responsavel_nome_completo_do_responsavel = $_POST['responsavel_nome_completo_do_responsavel'];
      $pessoaJuridica->responsavel_email_do_responsavel = $_POST['responsavel_email_do_responsavel'];
      $pessoaJuridica->responsavel_celular_do_responsavel = $_POST['responsavel_celular_do_responsavel'];
      $pessoaJuridica->responsavel_telefone_fixo_do_responsavel = $_POST['responsavel_telefone_fixo_do_responsavel'];
      $pessoaJuridica->responsavel_substituto_nome_completo_do_responsavel = $_POST['responsavel_substituto_nome_completo_do_responsavel'];
      $pessoaJuridica->responsavel_substituto_email_do_responsavel = $_POST['responsavel_substituto_email_do_responsavel'];
      $pessoaJuridica->responsavel_substituto_celular_do_responsavel = $_POST['responsavel_substituto_celular_do_responsavel'];
      $pessoaJuridica->responsavel_substituto_telefone_fixo_do_responsavel = $_POST['responsavel_substituto_telefone_fixo_do_responsavel'];
      $pessoaJuridica->cnpj = $_POST['cnpj'];
      $pessoaJuridica->cep = $_POST['cep'];
      $pessoaJuridica->logradouro = $_POST['logradouro'];
      $pessoaJuridica->numero = $_POST['numero'];
      $pessoaJuridica->bairro = $_POST['bairro'];
      $pessoaJuridica->cidade = $_POST['cidade'];
      $pessoaJuridica->estado = $_POST['estado'];
      $pessoaJuridica->tipo_de_instituicao = $_POST['tipo_de_instituicao'];
      $pessoaJuridica->tamanho_da_empresa = $_POST['tamanho_da_empresa'];
      $pessoaJuridica->perfil_institucional = $_POST['perfil_institucional'];
      $pessoaJuridica->possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao = $_POST['possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao'];
      $pessoaJuridica->temas_de_interesse_ = $_POST['temas_de_interesse_'];
      $pessoaJuridica->li_e_aceito_o_termo_de_adesao = $_POST['li_e_aceito_o_termo_de_adesao'];      

      // call @function complete_registration_juridica to create the user
      // only when no WP_error is found
      complete_registration_juridica(
      $pessoaJuridica
      );
  }

  registration_form_juridica(
    $pessoaJuridica
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