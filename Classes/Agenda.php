<?php
class Agenda
{
    private $mysql;
    public function __construct(mysqli $mysql)
    {
        $this -> mysql = $mysql;
    }

    public function excluir(string $id): void
    {
        $removerArtigo = $this->mysql->prepare('DELETE FROM agenda WHERE id = ?');
        $removerArtigo->bind_param('s', $id);
        $removerArtigo->execute();
    }

    public function adicionar(string $horario, string $conteudo): void
    {
        $insereArtigo = $this->mysql->prepare('INSERT INTO agenda (horario, conteudo) VALUES(?,?);');
        $insereArtigo->bind_param('ss', $horario, $conteudo);
        $insereArtigo->execute();
    }

    public function exibirTodos(): array
    {
        $resultado = $this -> mysql -> query('SELECT id,horario,conteudo FROM agenda ORDER BY id');
        $artigos = $resultado -> fetch_all(MYSQLI_ASSOC);
        return $artigos;


    }
    
    public function exibirPorId(string $id): array
    {
        $selecionaArtigo = $this->mysql->prepare("SELECT id, horario, conteudo FROM agenda WHERE id = ?");
        $selecionaArtigo->bind_param('s', $id);
        $selecionaArtigo->execute();
        $artigo = $selecionaArtigo->get_result()->fetch_assoc();
        error_reporting(0);
        return $artigo;
    }

    public function agruparID(): array
    {
        $resultado = $this -> mysql -> query('SELECT id FROM agenda');
        $artigos = $resultado -> fetch_all(MYSQLI_ASSOC);
        return $artigos;
    }

    public function separar(array $r):array
    {
        foreach($r as $d){
            $o[]= $d['id'];
        }

        return $o;
    }


    public function editar(string $id, string $titulo, string $conteudo): void
    {
        $editaArtigo = $this->mysql->prepare('UPDATE agenda SET horario = ?, conteudo = ? WHERE id = ?');
        $editaArtigo->bind_param('sss', $titulo, $conteudo, $id);
        $editaArtigo->execute();
    }

    public function pesquisar(Agenda $id): int
    {
        $artigos = $this -> exibirPorId($_POST['id']);
        foreach($artigos as $art){
            if ($_POST['id']== $art){
                $art = null;
            }else{
                echo $art;
            }
        }
        return 1;
        
    }

}

