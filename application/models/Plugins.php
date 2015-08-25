<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Plugins
 *
 * @author nocturnus
 */
class Plugins extends CI_Model{
   function __construct()
    {
        parent::__construct();
    }
    
    function obtener($flag=true)
    {
        $this -> db -> select('*');
        $this -> db -> from('plugins');
        $this -> db -> where('activo', $flag);

        $query = $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    
    function obtener_grupos_principales()
    {
        $this -> db -> select('grupo_menu, grupo_padre')
                -> from('plugins')
                -> distinct()
                -> where('grupo_padre', "0");
        
        $query = $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
        
    }
    
    function obtener_grupos_hijos()
    {
        $this -> db -> select('grupo_menu, grupo_padre')
                -> from('plugins')
                -> distinct()
                -> not_like('grupo_padre', "0");
        
        $query = $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
        
    }
    
    public function _grupos($grupo)
    {
       $this -> db -> select('*')
                -> from('plugins')
                -> where('grupo_menu', $grupo);
        
        $query = $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }  
    }
    
    public function _iconos($grupo)
    {
        /*SELECT distinct
`plugins`.icono,
`plugins`.grupo_menu,
`plugins`.nombre,
`plugins`.grupo_padre
FROM
`plugins`

where grupo_menu = "principal"
GROUP BY icono
order by id
limit 1*/
                $this -> db -> select('*')
                -> from('plugins')
                -> where('grupo_menu', $grupo)
                -> group_by("icono")
                -> order_by("id")
                ->limit("1");
        
        $query = $this -> db -> get();
        if($query -> num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }  
                
    }
    
}
