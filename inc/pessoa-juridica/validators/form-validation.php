<?php 

function registration_validation_juridica(
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
    )  {

    global $reg_errors;
    $reg_errors = new WP_Error;

if ( 
    empty($username) ||
    empty($password) || 
    empty($email) || 
    empty($first_name) || 
    empty($responsavel_nome_completo_do_responsavel) || 
    empty($responsavel_email_do_responsavel) ||
    empty($responsavel_celular_do_responsavel) ||
    empty($responsavel_telefone_fixo_do_responsavel) ||
    empty($responsavel_substituto_nome_completo_do_responsavel) ||
    empty($responsavel_substituto_email_do_responsavel) ||
    empty($responsavel_substituto_celular_do_responsavel) ||
    empty($responsavel_substituto_telefone_fixo_do_responsavel) || 
    empty($cnpj) || 
    empty($cep) ||
    empty($logradouro) ||
    empty($numero) || 
    empty($bairro) || 
    empty($cidade) || 
    empty($estado) ||
    empty($tipo_de_instituicao) || 
    empty($perfil_institucional) || 
    empty($tamanho_da_empresa) ||
    empty($possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao) || 
    empty($temas_de_interesse_) ||
    empty($li_e_aceito_o_termo_de_adesao)
    )  
    {
    
    $reg_errors->add( 'field', 'Campo obrigatório, favor preencher.' );
}

if(!validaCNPJ($cnpj)) {
    $reg_errors->add( 'cpf', 'Desculpe, o CNPJ preenchido é inválido.' );
}

if(in_array($cnpj, get_meta_values('cnpj'))) {
    $reg_errors->add( 'cnpj', 'Desculpe, o CNPJ preenchido já existe.' );
}

if ( 4 > strlen( $username ) ) {
    $reg_errors->add( 'username_length', 'Nome de usuário deve conter pelo menos 5 caracteres.' );
}

if ( username_exists( $username ) ) {
    $reg_errors->add('user_name', 'Desculpe, este nome de usuário já existe!');
    
}

if ( ! validate_username( $username ) ) {
    $reg_errors->add( 'username_invalid', 'Desculpe, o nome de usuário preenchido é inválido.' );
}

if ( 5 > strlen( $password ) ) {
    $reg_errors->add( 'password', 'A senha deve conter mais de 5 caracteres.' );
}

if ( !is_email( $email ) ) {
    $reg_errors->add( 'email_invalid', 'E-mail inválido.' );
}

if ( email_exists( $email ) ) {
    $reg_errors->add( 'email', 'Este e-mail já está sendo usado.' );
}

// if (! empty($website)) {
//     if (! filter_var($website, FILTER_VALIDATE_URL)) {
//         $reg_errors->add('website', 'Website is not a valid URL');
//     }
// }

if ( is_wp_error( $reg_errors ) ) {
 
    foreach ( $reg_errors->get_error_messages() as $error ) {

    echo '<div class="container">';
        echo '<div class="row">';
            echo '<div class="col-md-12">';
                echo '<div class="alert alert-danger" role="alert"> ' . $error . '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    
    }
}

}