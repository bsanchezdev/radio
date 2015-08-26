<div class="row">
        <?php
        $CI=&get_instance();
        $CI->load->model("Tandas");
        
          $pagination = 8;
    $config['base_url'] = base_url("Busqueda/b_/");
   
    $config['per_page'] = $pagination;
    $config['num_links'] = 24;
    $config['next_link'] = 'Siguiente »';
    $config['prev_link'] = '« Anterior';
    $config['full_tag_open'] = '<ul class="tsc_pagination tsc_paginationA tsc_paginationA01">';
$config['full_tag_close'] = '</ul>';
$config['prev_link'] = '&lt;';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';
$config['next_link'] = '&gt;';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="current"><a href="#">';
$config['cur_tag_close'] = '</a></li>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
 
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';
 
$config['first_link'] = '&lt;&lt;';
$config['last_link'] = '&gt;&gt;';
    
     $listado=    $CI->Tandas->front_data($pagination,$paginacion);
    $config['total_rows'] = $CI->Tandas->filas_front();
    $this->pagination->initialize($config);
        ?>
    
    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" id="check-all" class="flat">
                                                </th>
                                                <th class="column-title">Archivo </th>
                                                <th class="column-title">Ruta </th>
                                                <th class="column-title">Ver Contenido</th>
                                                <th class="column-title no-link last"><span class="nobr">Descargar</span>
                                                </th>
                                                <th class="bulk-actions" colspan="7">
                                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                            </th>
                                            </tr>
                                        </thead>

                            <tbody class="lista_deudores">
                                    <?php
                                        foreach ($listado as $key => $value):
                                            ?>
                                <tr class="even pointer">
                                    <td class="a-center "><input type="checkbox" class="flat" name="table_records" ></td>
                                    <td class=" "><a class="info_deudor" href="#" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" identificador="<?= $value->archivo ?>"><?= $value->archivo ?></a></td>
                                    <td class=" "><?= $value->tanda ?></td>
                                    <td class=" "><?= $value->archivo ?></td>
                                  
                                    <td class=" last"><a class="registrar_atencion btn btn-info" href="#" data-toggle="modal" data-target=".bs-registrar-modal-lg" rut="" deuda_id="" operacion=""><i class="fa fa-edit"></i> </a></td>
                                    <td class=" last"><a class="ver_documento btn btn-default" href="#" data-toggle="modal" data-target=".bs-ver-documento-modal-lg" rut=""><i class="fa fa-eye"></i> </a></td>
                               </tr>
                                
                                            <?php
                                        endforeach;
                                            ?>
                            </tbody>
                                    </table>
    <div>Total de registros: <?= $config['total_rows']?></div>
    <div id="pagination"><?=$this->pagination->create_links(); ?></div>
</div>