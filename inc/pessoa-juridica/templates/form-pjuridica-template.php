<?php 

function registration_form_juridica( 
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
    ) {

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

          <div class="col-md-12">
            <div class="form-group">
              <label for="first_name">Nome Fantasia <strong>*</strong></label>
              <input type="text" name="first_name" class="form-control" value="' . ( isset( $_POST['first_name']) ? $first_name : null ) . '">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="cnpj">CNPJ <strong>*</strong></label>
              <input type="text" name="cnpj" class="form-control" value="' . ( isset( $_POST['cnpj']) ? $cnpj : null ) . '">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="user_url">Website</label>
              <input type="url" name="user_url" class="form-control" value="' . ( isset( $_POST['user_url']) ? $user_url : null ) . '">
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
                      <label for="responsavel_nome_completo_do_responsavel">Nome Completo do Responsável</label>
                      <input type="text" name="responsavel_nome_completo_do_responsavel" class="form-control" value="' . ( isset( $_POST['responsavel_nome_completo_do_responsavel']) ? $responsavel_nome_completo_do_responsavel : null ) . '">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="responsavel_email_do_responsavel">Email do Responsável</label>
                      <input type="text" name="responsavel_email_do_responsavel" class="form-control" value="' . ( isset( $_POST['responsavel_email_do_responsavel']) ? $responsavel_email_do_responsavel : null ) . '">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="responsavel_celular_do_responsavel">Celular do Responsável</label>
                      <input type="text" name="responsavel_celular_do_responsavel" class="form-control" value="' . ( isset( $_POST['responsavel_celular_do_responsavel']) ? $responsavel_celular_do_responsavel : null ) . '">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="responsavel_telefone_fixo_do_responsavel">Telefone Fixo do Responsável</label>
                      <input type="text" name="responsavel_telefone_fixo_do_responsavel" class="form-control" value="' . ( isset( $_POST['responsavel_telefone_fixo_do_responsavel']) ? $responsavel_telefone_fixo_do_responsavel : null ) . '">
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
                      <label for="responsavel_substituto_nome_completo_do_responsavel">Nome Completo do Responsável Substituto</label>
                      <input type="text" name="responsavel_substituto_nome_completo_do_responsavel" class="form-control" value="' . ( isset( $_POST['responsavel_substituto_nome_completo_do_responsavel']) ? $responsavel_substituto_nome_completo_do_responsavel : null ) . '">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="responsavel_substituto_email_do_responsavel">Email do Responsável Substituto</label>
                      <input type="text" name="responsavel_substituto_email_do_responsavel" class="form-control" value="' . ( isset( $_POST['responsavel_substituto_email_do_responsavel']) ? $responsavel_substituto_email_do_responsavel : null ) . '">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="responsavel_substituto_celular_do_responsavel">Celular do Responsável Substituto</label>
                      <input type="text" name="responsavel_substituto_celular_do_responsavel" class="form-control" value="' . ( isset( $_POST['responsavel_substituto_celular_do_responsavel']) ? $responsavel_substituto_celular_do_responsavel : null ) . '">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="responsavel_substituto_telefone_fixo_do_responsavel">Telefone Fixo do Responsável Substituto</label>
                      <input type="text" name="responsavel_substituto_telefone_fixo_do_responsavel" class="form-control" value="' . ( isset( $_POST['responsavel_substituto_telefone_fixo_do_responsavel']) ? $responsavel_substituto_telefone_fixo_do_responsavel : null ) . '">
                    </div>
                  </div>

                </div>
              </ul>
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
              <input type="text" class="form-control" id="numero" name="numero" value="' . ( isset( $_POST['numero']) ? $numero : null ) . '">
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

          <div class="col-md-3">
            <div class="form-group">
              <label for="tipo_de_instituicao">Tipo de instituição <strong>*</strong></label>
              <select class="chosen-select form-control chosen-select" name="tipo_de_instituicao" id="tipo_de_instituicao">';

              foreach($GLOBALS['tipo_instituicao'] as $tp) {
                echo '<option value="' .$tp. '">' .$tp. '</option>';
              }
                
              echo '</select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="tamanho_da_empresa">Tamanho da empresa <strong>*</strong></label>
              <select name="tamanho_da_empresa" class="form-control chosen-select" id="tamanho_da_empresa">';

              foreach($GLOBALS['tamanho_empresa'] as $te) {
                echo '<option value="' .$te. '">' .$te. '</option>';
              }
                
              echo '</select>
              </select>
            </div>
          </div>

          <div class="col-md-5">
            <div class="form-group">
              <label for="perfil_institucional">Perfil Institucional <strong>*</strong></label>
              <select name="perfil_institucional" class="form-control" id="perfil_institucional">';
              
              foreach($GLOBALS['p_institucional'] as $te) {
                echo '<option value="' .$te. '">' .$te. '</option>';
              }
                
              echo '</select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao">Possui ambientes ou grupos voltados à pesquisa e inovação? <strong>*</strong></label>';

              foreach($GLOBALS['ambientes'] as $amb) {
                echo '<div class="form-check">';
                echo '<input class="form-check-input" type="checkbox" name="possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao[]"';
                echo 'value="' .$amb. '"';
                echo '<label class="form-check-label" for="possui_ambientes_ou_grupos_voltados_a_pesquisa_e_inovacao">';
                echo $amb;
                echo '</label>';
                echo '</div>';
              }
              
              echo '
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
    
                foreach( $names as $v )
                {
                    echo '<div class="form-check">';
                    echo '<input class="form-check-input" type="checkbox" name="temas_de_interesse_[]" value="'. $v .'">';
                    echo '<label class="form-check-label" for="temas_de_interesse_">';
                    echo $v;
                    echo '</label>';
                    echo '</div>';
    
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