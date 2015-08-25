<?php
$CI=&get_instance();
$CI->load->model("tandas");
@$cartera=$this->session->userdata('logged_in')["usuario"]->USU_CARTERA;

    $pagination = 10;
    $config['base_url'] = base_url('modu/load/'.$ruta_pm);
    $config['total_rows'] = $CI->tandas->filas_();
    $config['per_page'] = $pagination;
    $config['num_links'] = 20;
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
/*
 * <div class="btn-group">
                                                <button class="btn btn-info" type="button">1</button>
                                                <button class="btn btn-info active" type="button">2</button>
                                                <button class="btn btn-info" type="button">3</button>
                                                <button class="btn btn-info" type="button">4</button>
                                            </div>
 */
    $this->pagination->initialize($config);
   // $listado=array("campaña"=>"asdsadsad","radio"=>"asdsadsad","tanda"=>"dasdasdasd","Datos"=>"asdklasld");
   $listado=$CI->tandas->listado($pagination, $paginacion);
    ?>
<!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">John Doe
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
<!-- /top navigation -->
<div class="right_col" role="main">
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Form Elements</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
                                <div class="x_title">
                                    <h2>Table design <small>Custom design</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content table-responsive">

                                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

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
                                    <td class=" "><?= $value->ruta ?></td>
                                    
                                  
                                    <td class=" last"><a class="registrar_atencion btn btn-info" href="#" data-toggle="modal" data-target=".bs-registrar-modal-lg" rut="" deuda_id="" operacion=""><i class="fa fa-edit"></i> </a></td>
                                    <td class=" last"><a class="ver_documento btn btn-default" href="#" data-toggle="modal" data-target=".bs-ver-documento-modal-lg" rut=""><i class="fa fa-eye"></i> </a></td>
                               </tr>
                                
                                            <?php
                                        endforeach;
                                            ?>
                            </tbody>
                                    </table>
                                </div>
                            </div>
<?php
 //   var_dump($listado);
    ?>
<div id="pagination"><?=$this->pagination->create_links(); ?></div>
                        </div>
                    
                    
                    <!-- Modal Info Deudor -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Información del deudor</h4>
                                            </div>
                                            <div class="modal-body info-deudor-body">
                                               Cargando...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>  
                        <!-- Modal Registrar Atencion-->
                        <div class="modal fade bs-registrar-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Registrar Atención</h4>
                                            </div><form method="post" action="<?= base_url("/info/data/guardar_atencion/deudas/index/$paginacion") ?>">
                                            <div class="modal-body info-deudor-body">
                                               Cargando...
                                            </div>
                                            <div class="modal-footer">
                                               <!-- <button type="button" class="btn btn-success" >Guardar</button> -->
                                               &nbsp;
                                               <button type="submit" class="btn btn-primary guardar-atencion" style="margin-bottom: 0px;"><i class="fa fa-save"></i> Guardar</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            </div>
                                            </form>

                                        </div>
                                    </div>
                                </div> 
                        <!-- modal ver doc-->
                        <div class="modal fade bs-ver-documento-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Ver Documento</h4>
                                            </div>
                                            <div class="modal-body info-deudor-body">
                                               Cargando...
                                            </div>
                                            <div class="modal-footer">
                                                
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div> 
                    </div>
                    
                 
                    
                    
                    <script>
                        $(".info_deudor").click(function()
                        {
                            //alert($(this).attr("rut"));
                            var jqxhr = $.post( "<?= base_url("/info/data/deudor/");?>/"+$(this).attr("rut"), function(data) {
//alert( "success" );
$(".info-deudor-body").html(data);
//alert(data);
})
.done(function() {
//alert( "second success" );
})
.fail(function() {
alert( "error" );
})
.always(function() {
//alert( "finished" );
});
// Perform other work here ...
// Set another completion function for the request above
jqxhr.always(function() {
//alert( "second finished" );
});
                        });
                        
                        
                        $(".registrar_atencion").click(function()
                        {
                            var jqxhr = $.post( "<?= base_url("/info/data/info_deuda/");?>/"+$(this).attr("rut")+"/"+$(this).attr("deuda_id")+"/"+$(this).attr("operacion")+"/<?= $paginacion?>", function(data) {
//alert( "success" );
$(".info-deudor-body").html(data);
//alert(data);
})
.done(function() {
//alert( "second success" );
})
.fail(function() {
alert( "error" );
})
.always(function() {
//alert( "finished" );
});
// Perform other work here ...
// Set another completion function for the request above
jqxhr.always(function() {
//alert( "second finished" );
});
                        });
                        
                        $(".guardar-atencionc").click(function()
                        {
$.post( "<?= base_url("/info/data/guardar_atencion/");?>/"+$(this).attr("rut")+"/"+$(this).attr("deuda_id")+"/"+$(this).attr("operacion"), function(data) {
//alert( "success" );
$(".info-deudor-body").html(data);
//alert(data);
})
.done(function() {
//alert( "second success" );
})
.fail(function() {
alert( "error" );
})
.always(function() {
//alert( "finished" );
});
                        });
                     </script>
                     