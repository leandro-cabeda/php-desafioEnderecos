<?php

require_once('../db_conexao/dbconect.php');

class Enderecos
{
    private $sql;
    private $res;
    private $db;

    public function __construct()
    {
        $this->db = new Conecta();
        $this->db = $this->db->getDb();
    }

    public function listaEnderecos()
    {
        $this->sql = 'select * from enderecos';
        $this->res = $this->db->query($this->sql) or die("Erro na consulta: $this->sql" . $this->db->error);
        $data = array("data" => array());
        while ($row = $this->res->fetch_assoc()) {
            $linha = [];
            $linha[] = $row['id'];
            $linha[] = $row["cep"];
            $linha[] = $row["unidade"];
            $linha[] = $row['ibge'];
            $linha[] = $row['complemento'];
            $linha[] = $row['logradouro'];
            $linha[] = $row['bairro'];
            $linha[] =
                '<p>Cidade: ' .
                $row["localidade"] . '</p>' .
                '<p>Estado: ' .
                $row["uf"] . '</p>';
            $linha[] = $row['gia'];
            $data['data'][] = $linha;
        }

        return json_encode($data);
    }

    public function addEnderecos($data)
    {
        $this->sql = 'insert into enderecos (cep,localidade,uf,unidade,';
        $this->sql .= 'ibge,complemento,bairro,logradouro,gia)';
        $this->sql .= " values ('" . $data['cep'] . "','" . $data['localidade'] . "','" . $data['uf'] . "',";
        $this->sql .= " '" . $data['unidade'] . "','" . $data['ibge'] . "','" . $data['complemento'] . "',";
        $this->sql .= " '" . $data['bairro'] . "','" . $data['logradouro'] . "','" . $data['gia'] . "')";
        $this->res = $this->db->query($this->sql);

        if (!$this->res) {
            return 'Erro ao cadastrar o endereço no banco de dados!!';
        } else {
            return 'Adicionado endereço com sucesso no banco de dados!!!';
        }
    }


    public function getCep($cep)
    {
        if (!$this->verificaCepDuplicado($cep)) {

            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => 'https://viacep.com.br/ws/' . $cep . '/xml',
            ]);

            $data = curl_exec($curl);

            curl_close($curl);

            return $data;
        }

        return true;
    }

    public function verificaCepDuplicado($cep)
    {
        $this->sql = "select * from enderecos where cep='$cep'";
        $this->res = $this->db->query($this->sql);

        if ($this->res->num_rows > 0) {
            return true;
        }

        return false;
    }
}
