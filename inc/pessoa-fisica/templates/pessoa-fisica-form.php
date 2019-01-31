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

            <p style="margin-right: 15px; font-size: 14px; text-align: right"><strong>*</strong>
                <i style="color: #999">Campos obrigatórios</i>
            </p>

            <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="username">Nome de Usuário <strong>*</strong></label>
                            <input type="text" name="username" class="form-control" value=" <?php isset( $_POST['username'] ) ? $username : null ?>">
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

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">Nome <strong>*</strong></label>
                            <input type="text" name="fname" class="form-control" value="<?php isset( $_POST['fname']) ? $first_name : null ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname">Sobrenome <strong>*</strong></label>
                            <input type="text" name="lname" class="form-control" value="<?php isset( $_POST['lname']) ? $last_name : null ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="CPF">CPF <strong>*</strong></label>
                            <input type="text" name="cpf" class="form-control" value="<?php isset( $_POST['cpf']) ? $cpf : null ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="data_de_nascimento">Data de Nascimento <strong>*</strong></label>
                            <input type="date" name="data_de_nascimento" class="form-control" value="<?php isset( $_POST['data_de_nascimento']) ? $data_de_nascimento : null ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="pais_de_nascimento">País de Nascimento <strong>*</strong></label>
                            <select class="form-control" name="pais_de_nascimento" id="pais_de_nascimento">';

                                <?php if(isset( $_POST['pais_de_nascimento'])) {
                                $pais_de_nascimento = $_POST['pais_de_nascimento'];
                                }

                                foreach($paises as $c) {
                                    echo '<option value="' .$c. '"';
                                if($pais_de_nascimento == $c) {
                                    echo 'selected'; 
                                } 
                                
                                echo '>' .$c. '</option>'; 

                                } 

                                ?>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="celular_">Celular <strong>*</strong></label>
                            <input type="tel" name="celular_" class="form-control" value="<?php isset( $_POST['celular_']) ? $celular_ : null ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telefone_fixo">Telefone Fixo <strong>*</strong></label>
                            <input type="tel" name="telefone_fixo" class="form-control" value="<?php isset( $_POST['telefone_fixo']) ? $telefone_fixo : null ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="url_lattes">Url Lattes</label>
                            <input type="url" name="url_lattes" class="form-control" value="<?php isset( $_POST['url_lattes']) ? $url_lattes : null ?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="pais_de_residencia">País de Residencia <strong>*</strong></label>
                            <select class="form-control" name="pais_de_residencia" id="pais_de_residencia">

                                <?php 
                                
                                if(isset( $_POST['pais_de_residencia'])) {

                                $pais_de_residencia=$_POST['pais_de_residencia'];

                                } 
                                
                                foreach($paises as $c) { 
                                    echo '<option value="' .$c. '"' ;
                                    if($pais_de_residencia==$c) {                                     
                                        echo 'selected'; 
                                    } echo '>' .$c. '</option>'; 
                                }
                                
                                ?>
                            </select>
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
                            <input type="text" class="form-control" name="numero" value="<?php isset( $_POST['numero']) ? $numero : null ?>">
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

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="vinculo_institucional">Vínculo Institucional <strong>*</strong></label>
                            <select data-placeholder="Selecione uma instituição" name="vinculo_institucional" class="chosen-select form-control"
                                id="vinculo_institucional">

                                <?php 
                                
                                if(isset( $_POST['vinculo_institucional'])) {
                                $vinculo_institucional=$_POST['vinculo_institucional'];
                                } 
                                
                                foreach($instituicoes as $user) { 
                                    
                                    echo '<option value="' .$user. '"';
                                    if($vinculo_institucional==$user) { 
                                        echo 'selected'; 
                                    } 
                                    
                                    echo '>' .$user. '</option>'; 
                                }
                                    
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <input type="text" class="form-control" name="departamento" value="<?php isset( $_POST['departamento']) ? $departamento : null ?>">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cargofuncao">Cargo / Função</label>
                            <input type="text" class="form-control" name="cargofuncao" value="<?php isset( $_POST['cargofuncao']) ? $cargofuncao : null ?>">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" name="telefone" value="<?php isset( $_POST['telefone']) ? $telefone : null ?>">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="ramal">Ramal</label>
                            <input type="text" class="form-control" name="ramal" value="<?php isset( $_POST['ramal']) ? $ramal : null ?>">
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="formacao_academica">Formação Academica <strong>*</strong></label>
                            <select name="formacao_academica" class="form-control" id="formacao_academica">

                                <?php
                            
                                if(isset( $_POST['formacao_academica'])) {
                                    $formacao_academica=$_POST['formacao_academica'];
                                } 
                                
                                foreach($escolaridade as $e) { 
                                    
                                    echo '<option value="' .$e. '"' ;
                                    if($formacao_academica==$e) {
                                         echo '
                                    selected'; 
                                } echo '>' .$e. '</option>'; 
                            } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 align-self-md-end">
                        <div class="form-group">
                            <?php
                            
                            if(isset( $_POST['formacao_tipo'])) {
                                 $formacao_tipo=$_POST['formacao_tipo']; 
                            }
                            
                            ?>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="formacao_tipo" id="Incompleto" value="Incompleto"
                                    <?php if($formacao_tipo=='Incompleto' ) { echo 'checked' ; } ?>
                                ><label class="form-check-label" for="Incompleto">Incompleto</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="formacao_tipo" id="Completo" value="Completo"
                                    <?php if($formacao_tipo=='Completo' ) { echo 'checked' ; } ?>
                                ><label class="form-check-label" for="Completo">Completo</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="areas_do_conhecimento">Áreas do Conhecimento <strong>*</strong></label>
                            <div style="max-height: 240px; overflow-x: auto;">
                                <?php 
                                
                                if(isset( $_POST['areas_do_conhecimento'])) {

                                $areas_do_conhecimento=$_POST['areas_do_conhecimento'];
                                }
                                
                                foreach( $areas_conhecimento as $a ) {
                                     echo '<div class="form-check">';
                                     echo '<input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]"
                                        value="'. $a .'"'; 
                                        
                                        if (in_array($a, $areas_do_conhecimento)) {
                                             echo 'checked'; 
                                        } 
                                        echo
                                        '><label class="form-check-label" for="areas_do_conhecimento">'; 
                                        echo $a; 

                                        ?>
                                </label>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="temas_de_interesse_">Temas de Interesse <strong>*</strong></label>
                        <div style="max-height: 240px; overflow-x: auto;">
                            <?php
                                
                                $terms=get_terms(array( 
                                    'taxonomy'=> 'category',
                                    'hide_empty' => false,
                                ));
                                $names = wp_list_pluck( $terms, 'name' );
                                $slug = wp_list_pluck( $terms, 'slug' );

                                if(isset( $_POST['temas_de_interesse_'])) {
                                $temas_de_interesse_ = $_POST['temas_de_interesse_'];
                                }

                                foreach( $names as $v )
                                {

                                ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="temas_de_interesse_[]" value="<?php echo $v ?>"
                                    <?php if (in_array($v, $temas_de_interesse_)) { echo 'checked' ; } ?>><label class="form-check-label"
                                    for="temas_de_interesse_">
                                    <?php echo $v ?></label>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="li_e_aceito_o_termo_de_adesao" value="true"
                                <?php if(isset( $_POST['li_e_aceito_o_termo_de_adesao'])) { echo 'checked' ; } ?>><label
                                for="li_e_aceito_o_termo_de_adesao">Li e aceito o <strong><a target="_blank" href="<?php echo site_url() .'/institucional/termo-de-adesao/'?>">termo
                                        de adesão</a> *</strong> </label>
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