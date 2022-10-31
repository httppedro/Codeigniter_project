<?php

class Gerenciador_model extends CI_Model {

    public function index()
    {
        return $this->db->get("tb_font_size")->result_array();
    }
    

    // Retorna "size" do título
    public function titleSize($title_size) 
    {
        $query = $this->db->get_where('tb_font_size', array(
			"name" => 'title_size'
		))->row_array();
        return $query["size"];
    }


    // Criar ou atualizar linha de fonte-size do título
    public function insertTitleSize($title_size)
    {  
        if(empty($article))
        {
            return array();
        }      
        else
        {
            $this->db->insert("tb_font_size", $title_size);
        }           
        
    }

    public function updateTitleSize($title_size)
    {   
        if(empty($title_size))
        {
            return array();
        }      
        else
        {
            $this->db->where('name', 'title_size');
        return $this->db->update("tb_font_size", $title_size);
        }
    }



    // Retorna "content" do artigo
    public function articleText($article) 
    {
        $query = $this->db->get_where('tb_text', array(
			"name" => 'article'
		))->row_array();
        return $query["content"];
    }


    // Cria ou atualiza linha de texto do artigo
    public function insertArticle($article)
    {  
        if(empty($article))
        {
            return array();
        }      
        else
        {
            return $this->db->insert("tb_text", $article);
        }           
        
    }

    public function updateArticle($article)
    {   
        if(empty($article))
        {
            return array();
        }      
        else
        {
            $this->db->where('name', 'article');
            return $this->db->update("tb_text", $article);
        }
    }


    
    // Funções de votação


    // Retorna array com dados da caixa de votação
    public function voteArr($title_vote) 
    {
        $query = $this->db->get_where('tb_vote', array(
			"title_vote" => $title_vote
		))->row_array();
        return $query;
    }


    // Cria ou atualiza os dados da caixa de votação
    public function insertVote($vote)
    {  
        if(empty($vote))
        {
            return array();
        }      
        else
        {
            return $this->db->insert("tb_vote", $vote);
        }           
        
    }

    public function updateVote($id, $vote)
    {   
        if(empty($vote))
        {
            return array();
        }      
        else
        {
            $this->db->where('id', $id);
            return $this->db->update("tb_vote", $vote);
        }
    }

    
}