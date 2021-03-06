<style>
    .form-group {
        margin-top: 10px;
    }

    strong {
        color: red;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="username">Nome de Usuário <strong>*</strong></label>
                            <input type="text" name="username" class="form-control" value="<?php isset( $_POST['username'] ) ? $username : null ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">E-mail <strong>*</strong></label>
                            <input type="text" name="email" class="form-control" value="<?php isset( $_POST['email']) ? $email : null ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password">Senha <strong>*</strong></label>
                            <input type="password" class="form-control" name="password" value="<?php isset( $_POST['password'] ) ? $password : null ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="first_name">Nome Fantasia <strong>*</strong></label>
                            <input type="text" name="first_name" class="form-control" value="<?php isset( $_POST['first_name']) ? $first_name : null ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="cnpj">CNPJ <strong>*</strong></label>
                            <input type="text" name="cnpj" class="form-control" value="<?php isset( $_POST['cnpj']) ? $cnpj : null ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="user_url">Website</label>
                            <input type="url" name="user_url" class="form-control" value="<?php isset( $_POST['user_url']) ? $user_url : null ?>">
                        </div>
                    </div>

                    <div class="col-md-12 mt-3 mb-3">
                        <div class="card">
                            <div class="card-header">
                                Responsável <strong>*</strong>
                            </div>
                            <ul class="list-group list-group-flush p-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="responsavel_nome_completo_do_responsavel">Nome Completo do
                                                Responsável</label>
                                            <input type="text" name="responsavel_nome_completo_do_responsavel" class="form-control"
                                                value="<?php isset( $_POST['responsavel_nome_completo_do_responsavel']) ? $responsavel_nome_completo_do_responsavel : null ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="responsavel_email_do_responsavel">Email do Responsável</label>
                                            <input type="text" name="responsavel_email_do_responsavel" class="form-control"
                                                value="<?php isset( $_POST['responsavel_email_do_responsavel']) ? $responsavel_email_do_responsavel : null ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_celular_do_responsavel">Celular do Responsável</label>
                                            <input type="text" name="responsavel_celular_do_responsavel" class="form-control"
                                                value="<?php isset( $_POST['responsavel_celular_do_responsavel']) ? $responsavel_celular_do_responsavel : null ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_telefone_fixo_do_responsavel">Telefone Fixo do
                                                Responsável</label>
                                            <input type="text" name="responsavel_telefone_fixo_do_responsavel" class="form-control"
                                                value="<?php isset( $_POST['responsavel_telefone_fixo_do_responsavel']) ? $responsavel_telefone_fixo_do_responsavel : null ?>">
                                        </div>
                                    </div>

                                </div>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3 mb-3">
                        <div class="card">
                            <div class="card-header">
                                Responsável Substituto <strong>*</strong>
                            </div>
                            <ul class="list-group list-group-flush p-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="responsavel_substituto_nome_completo_do_responsavel">Nome
                                                Completo do Responsável Substituto</label>
                                            <input type="text" name="responsavel_substituto_nome_completo_do_responsavel"
                                                class="form-control" value="<?php isset( $_POST['responsavel_substituto_nome_completo_do_responsavel']) ? $responsavel_substituto_nome_completo_do_responsavel : null ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="responsavel_substituto_email_do_responsavel">Email do
                                                Responsável Substituto</label>
                                            <input type="text" name="responsavel_substituto_email_do_responsavel" class="form-control"
                                                value="<?php isset( $_POST['responsavel_substituto_email_do_responsavel']) ? $responsavel_substituto_email_do_responsavel : null ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_substituto_celular_do_responsavel">Celular do
                                                Responsável Substituto</label>
                                            <input type="text" name="responsavel_substituto_celular_do_responsavel"
                                                class="form-control" value="<?php isset( $_POST['responsavel_substituto_celular_do_responsavel']) ? $responsavel_substituto_celular_do_responsavel : null ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_substituto_telefone_fixo_do_responsavel">Telefone
                                                Fixo do Responsável Substituto</label>
                                            <input type="text" name="responsavel_substituto_telefone_fixo_do_responsavel"
                                                class="form-control" value="<?php isset( $_POST['responsavel_substituto_telefone_fixo_do_responsavel']) ? $responsavel_substituto_telefone_fixo_do_responsavel : null ?>">
                                        </div>
                                    </div>

                                </div>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="cep">CEP <strong>*</strong></label>
                            <input type="text" class="form-control" id="cep" name="cep" value="<?php isset( $_POST['cep']) ? $cep : null ?>">
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="logradouro">Logradouro <strong>*</strong></label>
                            <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?php isset( $_POST['logradouro']) ? $logradouro : null ?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numero">Número <strong>*</strong></label>
                            <input type="text" class="form-control" id="numero" name="numero" value="<?php isset( $_POST['numero']) ? $numero : null ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bairro">Bairro <strong>*</strong></label>
                            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php isset( $_POST['bairro']) ? $bairro : null ?>">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="cidade">Cidade <strong>*</strong></label>
                            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php isset( $_POST['cidade']) ? $cidade : null ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="estado">Estado <strong>*</strong></label>
                            <input type="text" class="form-control" id="estado" name="estado" value="<?php isset( $_POST['estado']) ? $estado : null ?>">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tipo_de_instituicao">Tipo de instituição <strong>*</strong></label>
                            <select class="chosen-select form-control chosen-select" name="tipo_de_instituicao" id="tipo_de_instituicao">
                                <?php
                                if(isset( $_POST['tipo_de_instituicao'])) {
                                $tipo_de_instituicao = $_POST['tipo_de_instituicao'];
                                }

                                foreach($GLOBALS['tipo_instituicao'] as $te) {
                                    echo '<option value="' .$te. '"';
                                if($tipo_de_instituicao == $te) {
                                    echo 'selected'; 
                                } 
                                
                                    echo '>' .$te. '</option>';

                                } 
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tamanho_da_empresa">Tamanho da empresa <strong>*</strong></label>
                            <select name="tamanho_da_empresa" class="form-control chosen-select" id="tamanho_da_empresa">
                                <?php 
                                if(isset( $_POST['tamanho_da_empresa'])) {
                                $tamanho_da_empresa=$_POST['tamanho_da_empresa'];
                                } 
                                
                                foreach($GLOBALS['tamanho_empresa'] as $te) { echo '<option value="' .$te. '"' ;
                                    if($tamanho_da_empresa==$te) {
                                    echo 'selected'; 
                                } 
                                echo '>' .$te. '</option>'; 
                                } 
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="perfil_institucional">Perfil Institucional <strong>*</strong></label>
                            <select name="perfil_institucional" class="form-control chosen-select" id="perfil_institucional">
                                <?php 
                                    if(isset( $_POST['perfil_institucional'])) {
                                        $perfil_institucional=$_POST['perfil_institucional'];
                                    } 
                                    
                                    foreach($GLOBALS['p_institucional'] as $te) {
                                         echo '<option value="' .$te. '"' ;
                                    if($perfil_institucional==$te) {
                                        echo 'selected'; 
                                    } 
                                    
                                    echo '>' .$te. '</option>'; 
                                    
                                    }
                                    ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao">Possui ambientes ou
                                grupos voltados à pesquisa e inovação? <strong>*</strong></label>
                            <?php 
                            if(isset( $_POST['possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao'])) {
                            $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao=$_POST['possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao'];
                            } 
                            
                            foreach( $GLOBALS['ambientes'] as $amb ) {
                                echo '<div class="form-check">'; 
                                echo '<input class="form-check-input" type="checkbox" name="possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao[]"
                                    value="' . $amb .'"'; 
                                    
                                    if (in_array($amb, $possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao)) {
                                        echo 'checked'; 
                                    } 
                                    echo '><label class="form-check-label" for="possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao">'; 
                                    
                                    echo $amb; 
                                    echo '</label>'; 
                                    echo '</div>'; 
                                } 
                            ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="temas_de_interesse_">Temas de Interesse <strong>*</strong></label>
                            <div style="max-height: 240px; overflow-x: auto;">
                                <?php 
                                
                                $terms=get_terms(array( 'taxonomy'=> 'category',
                                'hide_empty' => false,
                                ));
                                $names = wp_list_pluck( $terms, 'name' );
                                $slug = wp_list_pluck( $terms, 'slug' );

                                if(isset( $_POST['temas_de_interesse_'])) {
                                    $temas_de_interesse_ = $_POST['temas_de_interesse_'];
                                }

                                foreach( $names as $v ) {
                                echo '<div class="form-check">';
                                    echo '<input class="form-check-input" type="checkbox" name="temas_de_interesse_[]"
                                        value="'. $v .'"';
                                if (in_array($v, $temas_de_interesse_)) {
                                    echo 'checked'; 
                                } echo '><label class="form-check-label" for="temas_de_interesse_">'; 
                                    echo $v; 
                                    echo '</label>'; 
                                    echo '</div>'; 
                                } 
                                ?>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="li_e_aceito_o_termo_de_adesao"
                                    value="true" 
                                    
                                    <?php 
                                        if(isset( $_POST['li_e_aceito_o_termo_de_adesao'])) {
                                        echo 'checked'; 
                                        } 
                                    ?>
                                
                                ><label for="li_e_aceito_o_termo_de_adesao">Li e aceito o <strong><a target="_blank"
                                            href="<?php site_url() .'/institucional/termo-de-adesao/'?>">termo de
                                            adesão</a> *</strong> </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" value="Registrar" />
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>