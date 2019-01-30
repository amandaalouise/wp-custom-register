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

if (empty($password)) {    
    $reg_errors->add( 'field', 'Senha: Campo obrigatório, favor preencher.' );
}

if (empty( $username )) {    
    $reg_errors->add( 'field', 'Nome de Usuário: Campo obrigatório, favor preencher.' );
}

if (empty( $email )) {    
    $reg_errors->add( 'field', 'Email: Campo obrigatório, favor preencher.' );
}

if (empty( $first_name )) {    
    $reg_errors->add( 'field', 'Nome Fantasia: Campo obrigatório, favor preencher.' );
}

if (empty( $responsavel_nome_completo_do_responsavel )) {    
    $reg_errors->add( 'field', 'Nome do Responsável: Campo obrigatório, favor preencher.' );
}

if (empty( $responsavel_email_do_responsavel )) {    
    $reg_errors->add( 'field', 'Email do Responsável: Campo obrigatório, favor preencher.' );
}

if (empty( $responsavel_celular_do_responsavel )) {    
    $reg_errors->add( 'field', 'Celular do Responsável: Campo obrigatório, favor preencher.' );
}

if (empty( $responsavel_telefone_fixo_do_responsavel )) {    
    $reg_errors->add( 'field', 'Telefone do Responsável: Campo obrigatório, favor preencher.' );
}

if(empty($cep)) {
    $reg_errors->add( 'field', 'CEP: Campo obrigatório, favor preencher.' );
}

if(empty($logradouro)) {
    $reg_errors->add( 'field', 'Logradouro: Campo obrigatório, favor preencher.' );
}

if(empty($numero)) {
    $reg_errors->add( 'field', 'Número: Campo obrigatório, favor preencher.' );
}

if(empty($bairro)) {
    $reg_errors->add( 'field', 'Bairro: Campo obrigatório, favor preencher.' );
}

if(empty($cidade)) {
    $reg_errors->add( 'field', 'Cidade: Campo obrigatório, favor preencher.' );
}

if(empty($estado)) {
    $reg_errors->add( 'field', 'Estado / UF: Campo obrigatório, favor preencher.' );
}

if (empty( $responsavel_substituto_email_do_responsavel )) {    
    $reg_errors->add( 'field', 'Nome do Responsável Substituto: Campo obrigatório, favor preencher.' );
}

if (empty( $responsavel_substituto_email_do_responsavel )) {    
    $reg_errors->add( 'field', 'Email do Responsável Substituto: Campo obrigatório, favor preencher.' );
}

if (empty( $responsavel_substituto_celular_do_responsavel )) {    
    $reg_errors->add( 'field', 'Celular do Responsável Substituto: Campo obrigatório, favor preencher.' );
}

if (empty( $responsavel_substituto_telefone_fixo_do_responsavel )) {    
    $reg_errors->add( 'field', 'Telefone do Responsável Substituto: Campo obrigatório, favor preencher.' );
}

if (empty( $cnpj )) {    
    $reg_errors->add( 'field', 'CNPJ: Campo obrigatório, favor preencher.' );
}

if (empty( $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao )) {    
    $reg_errors->add( 'field', 'Possui ambientes ou grupos voltados a pesquisa e inovação: Campo obrigatório, favor preencher.' );
}

if (empty( $temas_de_interesse_ )) {    
    $reg_errors->add( 'field', 'Temas de Interesse: Campo obrigatório, favor preencher.' );
}

if (empty( $li_e_aceito_o_termo_de_adesao )) {    
    $reg_errors->add( 'field', 'Favor aceitar o termo de adesão.' );
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