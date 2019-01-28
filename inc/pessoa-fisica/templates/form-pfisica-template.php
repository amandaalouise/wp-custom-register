<?php 


function registration_form_fisica( 
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
    $li_e_aceito_o_termo_de_adesao) {

    $instituicoes = get_users(array('role' => 'editor'));
    $paises = $GLOBALS['paises'];
    $escolaridade = $GLOBALS['escolaridade'];

     echo '
        <style>
            .form-group {
                margin-top: 10px;
            }

            strong {
                color: red;
            }
        </style>
     ';
 
    echo '
    <div class="container">
    <div class="row">
    <div class="col-md-12">

    <p style="margin-right: 15px; font-size: 14px; text-align: right"><strong>*</strong> <i style="color: #999">Campos obrigatórios</i></p>

      <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="username">Nome de Usuário <strong>*</strong></label>
              <input type="text" name="username" class="form-control" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="email">E-mail <strong>*</strong></label>
              <input type="text" name="email" class="form-control" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="password">Senha <strong>*</strong></label>
              <input type="password" class="form-control" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="firstname">Nome <strong>*</strong></label>
              <input type="text" name="fname" class="form-control" value="' . ( isset( $_POST['fname']) ? $first_name : null ) . '">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="lname">Sobrenome <strong>*</strong></label>
              <input type="text" name="lname" class="form-control" value="' . ( isset( $_POST['lname']) ? $last_name : null ) . '">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="CPF">CPF <strong>*</strong></label>
              <input type="text" name="cpf" class="form-control" value="' . ( isset( $_POST['cpf']) ? $cpf : null ) . '">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="data_de_nascimento">Data de Nascimento <strong>*</strong></label>
              <input type="date" name="data_de_nascimento" class="form-control" value="' . ( isset( $_POST['data_de_nascimento']) ? $cpf : null ) . '">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="pais_de_nascimento">País de Nascimento <strong>*</strong></label>
              <select class="form-control" name="pais_de_nascimento" id="pais_de_nascimento">
                <option value="Brasil" selected>Brasil</option>';

                foreach($paises as $c) {
                  if($c != 'Brasil') {
                    echo '<option value="' .$c. '">' .$c. '</option>';
                  }
                }

                echo '</select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="celular_">Celular <strong>*</strong></label>
              <input type="tel" name="celular_" class="form-control" value="' . ( isset( $_POST['celular_']) ? $celular_ : null ) . '">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="telefone_fixo">Telefone Fixo <strong>*</strong></label>
              <input type="tel" name="telefone_fixo" class="form-control" value="' . ( isset( $_POST['telefone_fixo']) ? $telefone_fixo : null ) . '">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="url_lattes">Url Lattes</label>
              <input type="url" name="url_lattes" class="form-control" value="' . ( isset( $_POST['url_lattes']) ? $url_lattes : null ) . '">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="pais_de_residencia">País de Residencia <strong>*</strong></label>
              <select class="form-control" name="pais_de_residencia" id="pais_de_residencia">
              <option value="Brasil" selected>Brasil</option>';

              foreach($paises as $c) {
                if($c != 'Brasil') {
                  echo '<option value="' .$c. '">' .$c. '</option>';
                }
              }

              echo '</select>
                  </select>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="cep">CEP <strong>*</strong></label>
              <input type="text" class="form-control" id="cep" name="cep" value="' . ( isset( $_POST['cep']) ? $cep : null ) . '">
            </div>
          </div>

          <div class="col-md-7">
            <div class="form-group">
              <label for="logradouro">Logradouro <strong>*</strong></label>
              <input type="text" class="form-control" id="logradouro" name="logradouro" value="' . ( isset( $_POST['logradouro']) ? $logradouro : null ) . '">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="numero">Número <strong>*</strong></label>
              <input type="text" class="form-control" name="numero" value="' . ( isset( $_POST['numero']) ? $numero : null ) . '">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="bairro">Bairro <strong>*</strong></label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="' . ( isset( $_POST['bairro']) ? $bairro : null ) . '">
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label for="cidade">Cidade <strong>*</strong></label>
              <input type="text" class="form-control" id="cidade" name="cidade" value="' . ( isset( $_POST['cidade']) ? $cidade : null ) . '">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="estado">Estado <strong>*</strong></label>
              <input type="text" class="form-control" id="estado" name="estado" value="' . ( isset( $_POST['estado']) ? $estado : null ) . '">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="vinculo_institucional">Vínculo Institucional <strong>*</strong></label>
              <select data-placeholder="Selecione uma instituição" name="vinculo_institucional" class="chosen-select form-control" id="vinculo_institucional">
              ';
              
              foreach($instituicoes as $user) {
                  echo '<option value="' .$user->display_name . '"> ' .$user->display_name . '</option>';
              }

              echo '
              </select>
              </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="departamento">Departamento <strong>*</strong></label>
              <input type="text" class="form-control" name="departamento" value="' . ( isset( $_POST['departamento']) ? $departamento : null ) . '">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="cargofuncao">Cargo / Função <strong>*</strong></label>
              <input type="text" class="form-control" name="cargofuncao" value="' . ( isset( $_POST['cargofuncao']) ? $cargofuncao : null ) . '">
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for="telefone">Telefone <strong>*</strong></label>
              <input type="text" class="form-control" name="telefone" value="' . ( isset( $_POST['telefone']) ? $telefone : null ) . '">
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label for="ramal">Ramal <strong>*</strong></label>
              <input type="text" class="form-control" name="ramal" value="' . ( isset( $_POST['ramal']) ? $ramal : null ) . '">
            </div>
          </div>

          <div class="col-md-9">
            <div class="form-group">
              <label for="formacao_academica">Formação Academica <strong>*</strong></label>
              <select name="formacao_academica" class="form-control" id="formacao_academica">';

              foreach($escolaridade as $e) {
                echo '<option value="' .$e. '">' .$e. '</option>';
              }
                
              echo '</select>
            </div>
          </div>
          <div class="col-md-3 align-self-md-end">
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="formacao_tipo" id="Incompleto" value="Incompleto">
                <label class="form-check-label" for="Incompleto">Incompleto</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="formacao_tipo" id="Completo" value="Completo">
                <label class="form-check-label" for="Completo">Completo</label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="areas_do_conhecimento">Áreas do conhecimento <strong>*</strong></label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]" value="Ciências Exatas e da Terra">
                <label class="form-check-label" for="areas_do_conhecimento">
                  Ciências Exatas e da Terra
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]" value="Ciências Biológicas">
                <label class="form-check-label" for="areas_do_conhecimento">
                  Ciências Biológicas
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]" value="Engenharias">
                <label class="form-check-label" for="areas_do_conhecimento">
                  Engenharias
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]" value="Ciências da Saúde">
                <label class="form-check-label" for="areas_do_conhecimento">
                  Ciências da Saúde
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]" value="Ciências Agrárias">
                <label class="form-check-label" for="areas_do_conhecimento">
                  Ciências Agrárias
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]" value="Ciências Sociais Aplicadas">
                <label class="form-check-label" for="areas_do_conhecimento">
                  Ciências Sociais Aplicadas
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]" value="Ciências Humanas">
                <label class="form-check-label" for="areas_do_conhecimento">
                  Ciências Humanas
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]" value="Linguística, Letras e Artes">
                <label class="form-check-label" for="areas_do_conhecimento">
                  Linguística, Letras e Artes
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]" value="Pós Graduação">
                <label class="form-check-label" for="areas_do_conhecimento">
                  Pós Graduação
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="areas_do_conhecimento[]" value="Outros">
                <label class="form-check-label" for="areas_do_conhecimento">
                  Outros
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="temas_de_interesse_">Temas de Interesse <strong>*</strong></label>
              <div style="max-height: 240px;
              overflow-x: auto;">';

              $terms = get_terms(array(
                'taxonomy' => 'category',
                'hide_empty' => false,
                ));
                $names = wp_list_pluck( $terms, 'name' );
                $slug = wp_list_pluck( $terms, 'slug' );
                $index = 0;
    
                foreach( $names as $v )
                {
                    echo '<div class="form-check">';
                    echo '<input class="form-check-input" type="checkbox" name="temas_de_interesse_[]" value="'. $v .'">';
                    echo '<label class="form-check-label" for="temas_de_interesse_">';
                    echo $v;
                    echo '</label>';
                    echo '</div>';
    
                    $index++;                    
                }
              
            echo '
            </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="li_e_aceito_o_termo_de_adesao" value="true">
                <label for="li_e_aceito_o_termo_de_adesao">Li e aceito o <strong><a target="_blank" href="'. site_url() .'/institucional/termo-de-adesao/">termo de adesão</a>  *</strong></label>
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
  </div>';
}