<?php

/**
 * 
 */
class Contar_model extends CI_Model 
{
	
	function __construct()
	{
		parent::__construct();
	}

	


  public function contar(){

   $filas=$this->db->count_all_results('usuarios');
    //var_dump($filas);
      $cfilas=[
                'filas'=>$filas
                      ];


     $this->session->set_userdata($cfilas);




     $filass=$this->db->count_all_results('departamento');
    //var_dump($filas);
      $cfilasD=[
                'filasD'=>$filass
                      ];


     $this->session->set_userdata($cfilasD);

     


      $filasss=$this->db->count_all_results('tipousuario');
    //var_dump($filas);
      $cfilasT=[
                'filasT'=>$filasss
                      ];


     $this->session->set_userdata($cfilasT);





       return true; 

  }




  public function contarD(){
  

   $filas=$this->db->count_all_results('departamento');
    //var_dump($filas);
      $cfilasD=[
                'filasD'=>$filas
                      ];


     $this->session->set_userdata($cfilasD);

       return true; 





  }
             
  
              

          public function contarT(){
  

   $filas=$this->db->count_all_results('tipousuario');
    //var_dump($filas);
      $cfilasT=[
                'filasT'=>$filas
                      ];


     $this->session->set_userdata($cfilasT);

       return true; 





  }


  
                 
       
     

  }


 