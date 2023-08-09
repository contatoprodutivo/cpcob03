{extends file="$tpl_admin_layout"}

{block name="content"}

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{$_L['Add Contact']}</h5>

                        <a href="{$_url}contacts/import_csv/" class="btn btn-xs btn-primary btn-rounded pull-right"><i class="fa fa-bars"></i> Import Contacts</a>
                    </div>

                    <div class="ibox-content" id="ibox_form">
                        <div class="alert alert-danger" id="emsg">
                            <span id="emsgbody"></span>
                        </div>

                        <form class="form-horizontal" id="rform">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <!-- Campo de nome completo -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="account">{$_L['Full Name']}<small class="red">*</small> </label>
                                        <div class="col-lg-8">
                                            <input type="text" id="account" name="account" class="form-control" autofocus>
                                        </div>
                                    </div>
                               
                                
                                    <!-- Campo CPF -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="cpf_titular">{$_L['cpf']}<small class="red">*</small> </label>
                                        <div class="col-lg-8">
                                            <input type="text" id="cpf_titular" name="cpf_titular" class="form-control" autofocus>
                                        </div>
                                    </div>
                                      
                           <!-- Campo Data de Nascimento -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="data_nascimento">{$_L['data_nascimento']}<small class="red">*</small></label>
                                <div class="col-lg-8">
                                    <input type="date" id="data_nascimento" name="data_nascimento" class="form-control">
                                </div>
                            </div>

                            <!-- Campo Código do Usuário-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cod_usuario">{$_L['cod_usuario']}</label>
                                <div class="col-lg-8">
                                    <input type="text" id="cod_usuario" readonly="true" name="cod_usuario" class="form-control" autofocus>
                                </div>
                            </div>

                            <!-- Campo Tipo do Usuário-->
                                <div class="form-group">
                                        <label class="col-md-4 control-label" for="tipo_usuario">{$_L['tipo_usuario']}</label>
                                        <div class="col-lg-8">
                                            <select id="tipo_usuario" name="tipo_usuario" class="form-control">
                                                <option value="">Nenhum</option>
                                                {foreach $tiposUsuarios as $tipoUsuario}
                                                    <option value="{$tipoUsuario['tipo_usuario']}">{$tipoUsuario['tipo_usuario']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>


                                    <!-- Campo de empresa -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="cid">{$_L['Company']}</label>
                                        <div class="col-lg-8">
                                            <select id="cid" name="cid" class="form-control">
                                                <option value="0">{$_L['None']}</option>
                                                {foreach $companies as $company}
                                                    <option value="{$company['id']}" {if $c_selected_id eq ($company['id'])}selected{/if}>{$company['company_name']}</option>
                                                {/foreach}
                                            </select>
                                            <!-- <span class="help-block"><a href="#" class="add_company"><i class="fa fa-plus"></i> {$_L['New Company']}</a></span> -->
                                        </div>
                                    </div>

                                    <!-- Campo Data de Início -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="data_inicio">{$_L['data_inicio']}</label>
                                <div class="col-lg-8">
                                    <input type="date" id="data_inicio" name="data_inicio" class="form-control">
                                </div>
                            </div>

                    <!-- Aqui começa os campos da fatura -->
                        <hr>
                        <!-- Campo valor da fatura -->
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="valor_fatura">Vlr. Fatura</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <span class="input-group-addon">R$</span>
                                <select class="form-control" id="valor_fatura" name="valor_fatura" required>
                                    <option value="0.00">Selecione um valor</option>
                                    {foreach $plans as $plan}
                                        <option value="{$plan['sales_price']}">{$plan['sales_price']}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Campo vencimento da fatura -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="vencimento_fatura">{$_L['vencimento_fatura']}</label>
                                <div class="col-lg-8">
                                    <input type="number" filter="date" id="vencimento_fatura" name="vencimento" class="form-control" min="1" max="31">
                                </div>
                            </div>
                    <!-- fim campos da fatura -->
                            <hr>
                                    <!-- Campo de grupo -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="group">{$_L['Group']}</label>
                                        <div class="col-lg-8">
                                            <select class="form-control" name="group" id="group">
                                                <option value="0">{$_L['None']}</option>
                                                {foreach $gs as $g}
                                                    <option value="{$g['id']}" {if $g_selected_id eq ($g['id'])}selected{/if}>{$g['gname']}</option>
                                                {/foreach}
                                            </select>
                                          <!--  <span class="help-block"><a href="#" id="add_new_group">{$_L['Add New Group']}</a></span> -->
                                        </div>
                                    </div>

                                    <!-- Campo de tags -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tags">{$_L['Tags']}</label>
                                        <div class="col-lg-8">
                                            <select name="tags[]" id="tags" class="form-control" multiple="multiple">
                                                {foreach $tags as $tag}
                                                    <option value="{$tag['text']}">{$tag['text']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                    
                                    {* Executa um loop para os campos personalizados *}

                                    {foreach $fs as $f}
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="cf{$f['id']}">{$f['fieldname']}</label>
                                            {if ($f['fieldtype']) eq 'text'}
                                                <div class="col-lg-8">
                                                    <input type="text" id="cf{$f['id']}" name="cf{$f['id']}" class="form-control">
                                                    {if ($f['description']) neq ''}
                                                        <span class="help-block">{$f['description']}</span>
                                                    {/if}
                                                </div>
                                            {elseif ($f['fieldtype']) eq 'password'}
                                                <div class="col-lg-8">
                                                    <input type="password" id="cf{$f['id']}" name="cf{$f['id']}" class="form-control">
                                                    {if ($f['description']) neq ''}
                                                        <span class="help-block">{$f['description']}</span>
                                                    {/if}
                                                </div>
                                            {elseif ($f['fieldtype']) eq 'dropdown'}
                                                <div class="col-lg-8">
                                                    <select id="cf{$f['id']}" name="cf{$f['id']}" class="form-control">
                                                        {foreach explode(',',$f['fieldoptions']) as $fo}
                                                            <option value="{$fo}">{$fo}</option>
                                                        {/foreach}
                                                    </select>
                                                    {if ($f['description']) neq ''}
                                                        <span class="help-block">{$f['description']}</span>
                                                    {/if}
                                                </div>
                                            {elseif ($f['fieldtype']) eq 'textarea'}
                                                <div class="col-lg-8">
                                                    <textarea id="cf{$f['id']}" name="cf{$f['id']}" class="form-control" rows="3"></textarea>
                                                    {if ($f['description']) neq ''}
                                                        <span class="help-block">{$f['description']}</span>
                                                    {/if}
                                                </div>
                                            {else}
                                            {/if}
                                        </div>
                                    {/foreach}

                                <div class="col-md-6 col-sm-12">

                                <!-- Campo de e-mail 1-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="email">{$_L['Email']}</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>

                                     <!-- Campo de e-mail 2-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="second_email">{$_L['second_email']}</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="second_email" name="second_email" class="form-control">
                                        </div>
                                    </div>

                                     <!-- Campo de telefone-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="phone">{$_L['Phone']}</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="phone" name="phone" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <!-- Campo de telefone 2-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="second_phone">{$_L['second_phone']}</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="second_phone" name="phone" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Campo de endereço -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="address">{$_L['Address']}</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="address" name="address" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Campo de Nº -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="numero_res">{$_L['numero_res']}</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="numero_res" name="numero_res" class="form-control">
                                        </div>
                                    </div>

                                         <!-- Campo Bairro -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="bairro">{$_L['bairro']}</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="bairro" name="bairro" class="form-control">
                                        </div>
                                    </div>


                                    <!-- Campo de cidade -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="city">{$_L['City']}</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="city" name="city" class="form-control">
                                        </div>
                                    </div>

                               <!-- Campo de estado/região -->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="state">{$_L['State Region']}</label>
                                <div class="col-lg-8">
                                    <input type="text" id="state" name="state" class="form-control">
                                </div>
                                </div>


                                    <!-- Campo de código postal -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="zip">{$_L['ZIP Postal Code']}</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="zip" name="zip" class="form-control">
                                        </div>
                                    </div>

                                    
                                <!-- Campos desabilitados -->
                                    <!--
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="country">{$_L['Country']}</label>
                                        <div class="col-lg-8">
                                            <select name="country" id="country" class="form-control">
                                                <option value="">{$_L['Select Country']}</option>
                                                {$countries}
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="currency">{$_L['Currency']}</label>
                                        <div class="col-lg-8">
                                            <select id="currency" name="currency" class="form-control">
                                                {foreach $currencies as $currency}
                                                    <option value="{$currency['id']}" {if $_c['home_currency'] eq ($currency['cname'])}selected="selected" {/if}>{$currency['cname']}</option>
                                                {foreachelse}
                                                    <option value="0">{$_c['home_currency']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>

                          

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="password">{$_L['Password']}</label>
                                        <div class="col-lg-8">
                                            <input type="password" id="password" name="password" class="form-control">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="cpassword">{$_L['Confirm Password']}</label>
                                        <div class="col-lg-8">
                                            <input type="password" id="cpassword" name="cpassword" class="form-control">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="send_client_signup_email">{$_L['Welcome Email']}</label>
                                        <div class="col-lg-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-size="small" data-on="{$_L['Yes']}" data-off="{$_L['No']}" id="send_client_signup_email" name="send_client_signup_email" value="Yes">
                                            <span class="help-block">{$_L['Send Client Signup Email']}</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                       <div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-lg-8 col-lg-offset-4">
                <!-- Botão para salvar o contato -->
                <button class="md-btn md-btn-primary waves-effect waves-light" type="submit" id="submit"><i class="fa fa-check"></i> {$_L['Save']}</button> | <a href="{$_url}contacts/list/">{$_L['Or Cancel']}</a>
            </div>
        </div>
    </div>
</div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="_msg_add_new_group" id="_msg_add_new_group" value="{$_L['Add New Group']}">
    <input type="hidden" name="_msg_group_name" id="_msg_group_name" value="{$_L['Group Name']}">

{/block}
