<?php 

function registration_validation_fisica(
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
    $li_e_aceito_o_termo_de_adesao )  {

    global $reg_errors;
    $reg_errors = new WP_Error;

if (empty( $username )) {    
    $reg_errors->add( 'field', 'Nome de Usuário: Campo obrigatório, favor preencher.' );
}

if(empty($password)) {
    $reg_errors->add( 'field', 'Senha: Campo obrigatório, favor preencher.' );
}

if(empty($email)) {
    $reg_errors->add( 'field', 'Email: Campo obrigatório, favor preencher.' );
}

if(empty($first_name)) {
    $reg_errors->add( 'field', 'Nome: Campo obrigatório, favor preencher.' );
}

if(empty($last_name)) {
    $reg_errors->add( 'field', 'Sobrenome: Campo obrigatório, favor preencher.' );
}

if(empty($cpf)) {
    $reg_errors->add( 'field', 'CPF: Campo obrigatório, favor preencher.' );
}

if(empty($data_de_nascimento)) {
    $reg_errors->add( 'field', 'Data de Nascimento: Campo obrigatório, favor preencher.' );
}

if(empty($celular_)) {
    $reg_errors->add( 'field', 'Celular: Campo obrigatório, favor preencher.' );
}

if(empty($telefone_fixo)) {
    $reg_errors->add( 'field', 'Telefone Fixo: Campo obrigatório, favor preencher.' );
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

if(empty($formacao_tipo)) {
    $reg_errors->add( 'field', 'Formação: Campo obrigatório, favor preencher.' );
}

if(empty($areas_do_conhecimento)) {
    $reg_errors->add( 'field', 'Áreas do conhecimento: Campo obrigatório, favor preencher.' );
}

if(empty($temas_de_interesse_)) {
    $reg_errors->add( 'field', 'Temas de Interesse: Campo obrigatório, favor preencher.' );
}

if(empty($li_e_aceito_o_termo_de_adesao)) {
    $reg_errors->add( 'field', 'Favor aceitar o termo de adesão.' );
}


if(!validaCPF($cpf)) {
    $reg_errors->add( 'cpf', 'Desculpe, o CPF preenchido é inválido.' );
}

if(in_array($cpf, get_meta_values('cpf'))) {
    $reg_errors->add( 'cpf', 'Desculpe, o CPF preenchido já existe.' );
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