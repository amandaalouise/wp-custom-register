<?php 

function registration_validation_fisica(
    $pessoaFisica
    )  {

    print_r($pessoaFisica);


    global $reg_errors;
    $reg_errors = new WP_Error;

    if (empty( $pessoaFisica->username )) {    
        $reg_errors->add( 'field', 'Nome de Usuário: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->password)) {
        $reg_errors->add( 'field', 'Senha: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->email)) {
        $reg_errors->add( 'field', 'Email: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->first_name)) {
        $reg_errors->add( 'field', 'Nome: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->last_name)) {
        $reg_errors->add( 'field', 'Sobrenome: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->cpf)) {
        $reg_errors->add( 'field', 'CPF: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->data_de_nascimento)) {
        $reg_errors->add( 'field', 'Data de Nascimento: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->celular_)) {
        $reg_errors->add( 'field', 'Celular: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->telefone_fixo)) {
        $reg_errors->add( 'field', 'Telefone Fixo: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->cep)) {
        $reg_errors->add( 'field', 'CEP: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->logradouro)) {
        $reg_errors->add( 'field', 'Logradouro: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->numero)) {
        $reg_errors->add( 'field', 'Número: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->bairro)) {
        $reg_errors->add( 'field', 'Bairro: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->cidade)) {
        $reg_errors->add( 'field', 'Cidade: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->estado)) {
        $reg_errors->add( 'field', 'Estado / UF: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->formacao_tipo)) {
        $reg_errors->add( 'field', 'Formação: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->areas_do_conhecimento)) {
        $reg_errors->add( 'field', 'Áreas do conhecimento: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->temas_de_interesse_)) {
        $reg_errors->add( 'field', 'Temas de Interesse: Campo obrigatório, favor preencher.' );
    }

    if(empty($pessoaFisica->li_e_aceito_o_termo_de_adesao)) {
        $reg_errors->add( 'field', 'Favor aceitar o termo de adesão.' );
    }


    if(!validaCPF($pessoaFisica->cpf)) {
        $reg_errors->add( 'cpf', 'Desculpe, o CPF preenchido é inválido.' );
    }

    if(in_array($pessoaFisica->cpf, get_meta_values('cpf'))) {
        $reg_errors->add( 'cpf', 'Desculpe, o CPF preenchido já existe.' );
    }

    if ( 4 > strlen( $pessoaFisica->username ) ) {
        $reg_errors->add( 'username_length', 'Nome de usuário deve conter pelo menos 5 caracteres.' );
    }

    if ( username_exists( $pessoaFisica->username ) ) {
        $reg_errors->add('user_name', 'Desculpe, este nome de usuário já existe!');
        
    }

    if ( ! validate_username( $pessoaFisica->username ) ) {
        $reg_errors->add( 'username_invalid', 'Desculpe, o nome de usuário preenchido é inválido.' );
    }

    if ( 5 > strlen( $pessoaFisica->password ) ) {
        $reg_errors->add( 'password', 'A senha deve conter mais de 5 caracteres.' );
    }

    if ( !is_email( $pessoaFisica->email ) ) {
        $reg_errors->add( 'email_invalid', 'E-mail inválido.' );
    }

    if ( email_exists( $pessoaFisica->email ) ) {
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