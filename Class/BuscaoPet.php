<?php

    require_once 'Conexao.php';

    class BuscaoPet extends Conexao{
        public function CadastrarPet($tipo_pet, $porte_pet, $img_pet, $data_hora, $info){
            if($tipo_pet == '' || $porte_pet == '' || $data_hora == '' || $info == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $injet_sql = 'insert into tb_pet(tipo_pet, porte_pet, img_pet, data_hora, descricao) values(?, ?, ?, ?, ?)';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($injet_sql);

                $sql->bindValue(1, $tipo_pet);
                $sql->bindValue(2, $porte_pet);
                $sql->bindValue(3, $img_pet);
                $sql->bindValue(4, $data_hora);
                $sql->bindValue(5, $info);

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function ConsultarPet(){
            $conexao = parent::retornarConexao();

            $injet_sql = 'select id_pet, tipo_pet, porte_pet, img_pet, data_hora, descricao from tb_pet';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($injet_sql);

            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();

            return $sql->fetchAll();
        }
    }