<?php
class Contacts
{
    // Função responsável por retornar as opções de contatos
    public static function options($selected = '')
    {
        // Realiza uma consulta ao banco de dados para obter os registros da tabela 'crm_accounts'
        $c = ORM::for_table('crm_accounts')
            ->select('id')
            ->select('account')
            ->find_many();
        $options = '';
        if ($c) {
            // Itera sobre os registros retornados da consulta
            foreach ($c as $cs) {
                $s = '';
                // Verifica se o ID do registro é igual ao valor selecionado
                if ($cs['id'] == $selected) {
                    $s = 'selected';
                }
                // Constrói a opção do select com base nos dados do registro
                $options .=
                    '<option value="' .
                    $cs['id'] .
                    '" ' .
                    $s .
                    '>' .
                    $cs['account'] .
                    '</option>';
            }
        }

        return $options;
    }

    // Função responsável por adicionar um novo contato
    public static function add($data = [])
    {
        // Verifica se o nome da conta está presente nos dados enviados
        if (isset($data['account'])) {
            $account = trim($data['account']);

            // Verifica se o nome da conta está vazio
            if ($account == '') {
                return 'Account Name is Required';
            }

            // Inicializa variáveis para armazenar os dados do contato
            $email = '';
            $phone = '';
            $address = '';
            $city = '';
            $zip = '';
            $state = '';
            $country = '';
            $tags = '';
            $company = '';
            $password = '';
            $img = '';

            $d = ORM::for_table('crm_accounts')->create();

            // Atribui o nome da conta aos dados do contato
            $d->account = $data['account'];

            // Verifica se o e-mail está presente e é válido
            if (isset($data['email']) && trim($data['email']) != '') {
                if (Validator::Email($data['email']) == false) {
                    return 'Invalid Email';
                }
                // Verifica se o e-mail já existe no banco de dados
                $f = ORM::for_table('crm_accounts')
                    ->where('email', $data['email'])
                    ->find_one();

                if ($f) {
                    return 'Email already exist';
                }

                $email = $data['email'];
            }

            // Verifica se o telefone está presente
            if (isset($data['phone'])) {
                $phone = $data['phone'];
            }

            // Verifica se o endereço está presente
            if (isset($data['address'])) {
                $address = $data['address'];
            }

            // Verifica se a cidade está presente
            if (isset($data['city'])) {
                $city = $data['city'];
            }

            // Verifica se o código postal está presente
            if (isset($data['zip'])) {
                $zip = $data['zip'];
            }

            // Verifica se o estado está presente
            if (isset($data['state'])) {
                $state = $data['state'];
            }

            // Verifica se o país está presente
            if (isset($data['country'])) {
                $country = $data['country'];
            }

            // Verifica se as tags estão presentes
            if (isset($data['tags'])) {
                $tags = $data['tags'];
            }

            // Verifica se a imagem está presente
            if (isset($data['img'])) {
                $img = $data['img'];
            }

            // Atribui os demais dados do contato aos dados do registro
            $d->email = $email;
            $d->phone = $phone;
            $d->address = $address;
            $d->city = $city;
            $d->zip = $zip;
            $d->state = $state;
            $d->country = $country;
            $d->tags = $tags;

            // Atribui outros valores aos dados do registro
            $d->fname = '';
            $d->lname = '';
            $d->company = $company;
            $d->jobtitle = '';
            $d->cid = '0';
            $d->o = '0';
            $d->balance = '0.00';
            $d->status = 'Active';
            $d->notes = '';
            $d->password = $password;
            $d->token = '';
            $d->ts = '';
            $d->img = $img;
            $d->web = '';
            $d->facebook = '';
            $d->google = '';
            $d->linkedin = '';

            // Salva o registro no banco de dados
            $d->save();
            $cid = $d->id();

            return $cid;
        } else {
            return 'Invalid Data Posted or Data is Null';
        }
    }

    // Função responsável por realizar o login do usuário
    public static function login($email, $password)
    {
        // Busca o registro do usuário com base no e-mail fornecido
        $d = ORM::for_table('crm_accounts')
            ->where('email', $email)
            ->find_one();
        if ($d) {
            $db_password = $d['password'];

            // Verifica se a senha fornecida é válida
            if (Password::_verify($password, $db_password) == true) {
                $auth_key = Ib_Str::random_string(20) . md5(time());

                // Gera um token de autenticação único para o usuário
                $d->token = $auth_key;

                $d->save();

                return $auth_key;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // Função responsável por realizar o logout do usuário com base no token de autenticação
    public static function logout_using_token($token)
    {
        // Busca o registro do usuário com base no token de autenticação
        $d = ORM::for_table('crm_accounts')
            ->where('token', $token)
            ->find_one();
        if ($d) {
            // Remove o token de autenticação do usuário
            $d->token = '';

            $d->save();

            return true;
        } else {
            return false;
        }
    }

    // Função responsável por obter os detalhes do usuário autenticado
    public static function details()
    {
        $d = false;

        // Verifica se o token de autenticação está presente nos cookies ou na sessão
        if (isset($_COOKIE['ib_ct'])) {
            $ib_ct = $_COOKIE['ib_ct'];
        } elseif (isset($_SESSION['ib_ct'])) {
            $ib_ct = $_SESSION['ib_ct'];
        } else {
            // Se o token de autenticação não estiver presente, exibe uma mensagem de logout
            exit(
                'You have logged out. <a href="' .
                    U .
                    'client/login/">Click Here to Login.</a>'
            );
        }

        // Busca o registro do usuário com base no token de autenticação
        $d = ORM::for_table('crm_accounts')
            ->where('token', $ib_ct)
            ->find_one();

        if (!$d) {
            // Se o registro do usuário não for encontrado, exibe uma mensagem de logout
            exit(
                'You have logged out. <a href="' .
                    U .
                    'client/login/">Click Here to Login.</a>'
            );
        } else {
            return $d;
        }
    }

    // Função responsável por verificar se o usuário está autenticado
    public static function isLogged()
    {
        // Verifica se o token de autenticação está presente nos cookies ou na sessão
        if (isset($_COOKIE['ib_ct'])) {
            $ib_ct = $_COOKIE['ib_ct'];
        } elseif (isset($_SESSION['ib_ct'])) {
            $ib_ct = $_SESSION['ib_ct'];
        } else {
            return;
        }

        // Busca o registro do usuário com base no token de autenticação
        $d = ORM::for_table('crm_accounts')
            ->where('token', $ib_ct)
            ->find_one();

        if ($d) {
            // Redireciona para a página do painel do usuário se estiver autenticado
            r2(U . 'client/dashboard/');
        }
    }

    // Função responsável por retornar todos os contatos
    public static function all()
    {
        // Realiza uma consulta ao banco de dados para obter todos os registros da tabela 'crm_accounts'
        $d = ORM::for_table('crm_accounts')
            ->order_by_desc('id')
            ->find_array();

        return $d;
    }

    // Função responsável por retornar os IDs dos contatos associados a uma empresa específica
    public static function findByCompany($company_id)
    {
        // Realiza uma consulta ao banco de dados para obter os registros da tabela 'crm_accounts' com o ID da empresa correspondente
        $companies = ORM::for_table('crm_accounts')
            ->select('id')
            ->where('cid', $company_id)
            ->find_array();
        $cids = [];
        foreach ($companies as $company) {
            array_push($cids, $company['id']);
        }

        // Verifica se há IDs de contatos associados à empresa
        if (count($cids) == 0) {
            return false;
        }

        return $cids;
    }
}
