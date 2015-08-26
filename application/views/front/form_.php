<form class="form-horizontal form-label-left input_mask">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input class="form-control has-feedback-left" id="camp" name="camp" placeholder="Campaña" type="text">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input class="form-control" id="radio" name="radio" placeholder="Radio" type="text">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="fini" placeholder="Fecha Inicio" aria-describedby="inputSuccess2Status">
                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status" class="sr-only">(success)</span>                                            
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left" id="fterm" placeholder="Fecha Termino" aria-describedby="inputSuccess2Status">
                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <button type="submit" class="btn btn-primary form-control">Cancel</button>
                                                <button type="submit" class="btn btn-success form-control">Submit</button>
                                            </div>
                                        </div>
<?php $this->load->view("front/grid_");?>
                                    </form>