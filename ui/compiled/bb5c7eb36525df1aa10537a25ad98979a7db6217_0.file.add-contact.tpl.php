<?php
/* Smarty version 3.1.39, created on 2023-08-09 15:51:50
  from 'C:\xampp\htdocs\cpcob03\ui\theme\ibilling\add-contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_64d3e046064fb5_96461131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5c7eb36525df1aa10537a25ad98979a7db6217' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cpcob03\\ui\\theme\\ibilling\\add-contact.tpl',
      1 => 1691607106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d3e046064fb5_96461131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57401080764d3e045a6d595_45161381', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_57401080764d3e045a6d595_45161381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_57401080764d3e045a6d595_45161381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-md-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Contact'];?>
</h5>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/import_csv/" class="btn btn-xs btn-primary btn-rounded pull-right"><i class="fa fa-bars"></i> Import Contacts</a>
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
                                        <label class="col-md-4 control-label" for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
<small class="red">*</small> </label>
                                        <div class="col-lg-8">
                                            <input type="text" id="account" name="account" class="form-control" autofocus>
                                        </div>
                                    </div>
                               
                                
                                    <!-- Campo CPF -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="cpf_titular"><?php echo $_smarty_tpl->tpl_vars['_L']->value['cpf'];?>
<small class="red">*</small> </label>
                                        <div class="col-lg-8">
                                            <input type="text" id="cpf_titular" name="cpf_titular" class="form-control" autofocus>
                                        </div>
                                    </div>
                                      
                           <!-- Campo Data de Nascimento -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="data_nascimento"><?php echo $_smarty_tpl->tpl_vars['_L']->value['data_nascimento'];?>
<small class="red">*</small></label>
                                <div class="col-lg-8">
                                    <input type="date" id="data_nascimento" name="data_nascimento" class="form-control">
                                </div>
                            </div>

                            <!-- Campo Código do Usuário-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cod_usuario"><?php echo $_smarty_tpl->tpl_vars['_L']->value['cod_usuario'];?>
</label>
                                <div class="col-lg-8">
                                    <input type="text" id="cod_usuario" readonly="true" name="cod_usuario" class="form-control" autofocus>
                                </div>
                            </div>

                            <!-- Campo Tipo do Usuário-->
                                <div class="form-group">
                                        <label class="col-md-4 control-label" for="tipo_usuario"><?php echo $_smarty_tpl->tpl_vars['_L']->value['tipo_usuario'];?>
</label>
                                        <div class="col-lg-8">
                                            <select id="tipo_usuario" name="tipo_usuario" class="form-control">
                                                <option value="">Nenhum</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tiposUsuarios']->value, 'tipoUsuario');
$_smarty_tpl->tpl_vars['tipoUsuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tipoUsuario']->value) {
$_smarty_tpl->tpl_vars['tipoUsuario']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tipoUsuario']->value['tipo_usuario'];?>
"><?php echo $_smarty_tpl->tpl_vars['tipoUsuario']->value['tipo_usuario'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>


                                    <!-- Campo de empresa -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="cid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</label>
                                        <div class="col-lg-8">
                                            <select id="cid" name="cid" class="form-control">
                                                <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c_selected_id']->value == ($_smarty_tpl->tpl_vars['company']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                            <!-- <span class="help-block"><a href="#" class="add_company"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Company'];?>
</a></span> -->
                                        </div>
                                    </div>

                                    <!-- Campo Data de Início -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="data_inicio"><?php echo $_smarty_tpl->tpl_vars['_L']->value['data_inicio'];?>
</label>
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
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['plan']->value['sales_price'];?>
"><?php echo $_smarty_tpl->tpl_vars['plan']->value['sales_price'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Campo vencimento da fatura -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="vencimento_fatura"><?php echo $_smarty_tpl->tpl_vars['_L']->value['vencimento_fatura'];?>
</label>
                                <div class="col-lg-8">
                                    <input type="number" filter="date" id="vencimento_fatura" name="vencimento" class="form-control" min="1" max="31">
                                </div>
                            </div>
                    <!-- fim campos da fatura -->
                            <hr>
                                    <!-- Campo de grupo -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="group"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
</label>
                                        <div class="col-lg-8">
                                            <select class="form-control" name="group" id="group">
                                                <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['g_selected_id']->value == ($_smarty_tpl->tpl_vars['g']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                          <!--  <span class="help-block"><a href="#" id="add_new_group"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
</a></span> -->
                                        </div>
                                    </div>

                                    <!-- Campo de tags -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tags"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</label>
                                        <div class="col-lg-8">
                                            <select name="tags[]" id="tags" class="form-control" multiple="multiple">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                    
                                    
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fs']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['fieldname'];?>
</label>
                                            <?php if (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'text') {?>
                                                <div class="col-lg-8">
                                                    <input type="text" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                                                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                                                    <?php }?>
                                                </div>
                                            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'password') {?>
                                                <div class="col-lg-8">
                                                    <input type="password" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                                                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                                                    <?php }?>
                                                </div>
                                            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'dropdown') {?>
                                                <div class="col-lg-8">
                                                    <select id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(',',$_smarty_tpl->tpl_vars['f']->value['fieldoptions']), 'fo');
$_smarty_tpl->tpl_vars['fo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fo']->value) {
$_smarty_tpl->tpl_vars['fo']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                                                    <?php }?>
                                                </div>
                                            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'textarea') {?>
                                                <div class="col-lg-8">
                                                    <textarea id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" rows="3"></textarea>
                                                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                                                    <?php }?>
                                                </div>
                                            <?php } else { ?>
                                            <?php }?>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <div class="col-md-6 col-sm-12">

                                <!-- Campo de e-mail 1-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="email" name="email" class="form-control">
                                        </div>
                                    </div>

                                     <!-- Campo de e-mail 2-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="second_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['second_email'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="second_email" name="second_email" class="form-control">
                                        </div>
                                    </div>

                                     <!-- Campo de telefone-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="phone" name="phone" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <!-- Campo de telefone 2-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="second_phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['second_phone'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="second_phone" name="phone" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Campo de endereço -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="address"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="address" name="address" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Campo de Nº -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="numero_res"><?php echo $_smarty_tpl->tpl_vars['_L']->value['numero_res'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="numero_res" name="numero_res" class="form-control">
                                        </div>
                                    </div>

                                         <!-- Campo Bairro -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="bairro"><?php echo $_smarty_tpl->tpl_vars['_L']->value['bairro'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="bairro" name="bairro" class="form-control">
                                        </div>
                                    </div>


                                    <!-- Campo de cidade -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="city"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="city" name="city" class="form-control">
                                        </div>
                                    </div>

                               <!-- Campo de estado/região -->
                                <div class="form-group">
                                <label class="col-md-4 control-label" for="state"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>
                                <div class="col-lg-8">
                                    <input type="text" id="state" name="state" class="form-control">
                                </div>
                                </div>


                                    <!-- Campo de código postal -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="zip" name="zip" class="form-control">
                                        </div>
                                    </div>

                                    
                                <!-- Campos desabilitados -->
                                    <!--
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="country"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>
                                        <div class="col-lg-8">
                                            <select name="country" id="country" class="form-control">
                                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                                                <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="currency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</label>
                                        <div class="col-lg-8">
                                            <select id="currency" name="currency" class="form-control">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['_c']->value['home_currency'] == ($_smarty_tpl->tpl_vars['currency']->value['cname'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
</option>
                                                <?php
}
if ($_smarty_tpl->tpl_vars['currency']->do_else) {
?>
                                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_c']->value['home_currency'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>

                          

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="password" id="password" name="password" class="form-control">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="cpassword"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm Password'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="password" id="cpassword" name="cpassword" class="form-control">
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="send_client_signup_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome Email'];?>
</label>
                                        <div class="col-lg-8">
                                            <input type="checkbox" checked data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="send_client_signup_email" name="send_client_signup_email" value="Yes">
                                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Client Signup Email'];?>
</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                       <div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-lg-8 col-lg-offset-4">
                <!-- Botão para salvar o contato -->
                <button class="md-btn md-btn-primary waves-effect waves-light" type="submit" id="submit"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button> | <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Cancel'];?>
</a>
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

    <input type="hidden" name="_msg_add_new_group" id="_msg_add_new_group" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
">
    <input type="hidden" name="_msg_group_name" id="_msg_group_name" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
">

<?php
}
}
/* {/block "content"} */
}
