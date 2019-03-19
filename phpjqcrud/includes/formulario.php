<?php
defined('WEBSITEPATH') OR exit('No direct script access allowed');
?>
<form class="form-horizontal" method="post" action="<?php  echo WEBSITEPATH.'?pg=ejecutar';?>" onsubmit="return confirm('Esta acci&oacute;n registrar&aacute; los datos de este formulario. Desea proceder?')">
		                    <fieldset>
		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-user-circle  bigicon"></i></span>
		                            <div class="col-md-8">
		                                <input id="fname" name="name" type="text" placeholder="Nombre / m&aacute;x 30 caracteres" class="form-control" maxlength="30" required="required">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-user-circle bigicon"></i></span>
		                            <div class="col-md-8">
		                                <input id="lname" name="lastname" type="text" placeholder="Apellido / m&aacute;x 30 caracteres" class="form-control" maxlength="30" required="required">
		                            </div>
		                        </div>

		                         <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-id-card bigicon"></i></span>
		                            <div class="col-md-8">
		                                <input id="document" name="document" type="number" placeholder="Identificaci&oacute;n / m&aacute;x 10 digitos" min="1" max="9999999999" class="form-control" required="required">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-envelope-square bigicon"></i></span>
		                            <div class="col-md-8">
		                                <input id="email" name="email" type="email" placeholder="Correo Electr&oacute;nico / m&aacute;x 40 caracteres" class="form-control" maxlength="40" required="required">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-globe-americas"></i></span>
		                            <div class="col-md-8">
		                                <select name="pais" id="pais" placeholder="pais" class="form-control" required="required">
		                                	<option value="">Seleccione un Pa&iacute;s</option><?php
				                                $countries = new controllerCountries();
				                                $result2 = $countries->listCountries();
				                                foreach ($result2 as $row2){
				                                	echo '<option value="'.$row2['id_country'].'">'.$row2['name_country'].'</option>';
				                            	}
			                                	unset($result2);
		                                ?></select>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-globe-americas"></i></span>
		                            <div class="col-md-8">
		                                <select  id = "estado" name = "estado"  class = "form-control" disabled = "disabled" required = "required">
											<option value = "">Seleccione un Estado</option>
										</select>
		                            </div>
		                        </div>

								<div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-globe-americas"></i></span>
		                            <div class="col-md-8">
		                                <select  id = "municipio" name = "municipio"  class = "form-control" disabled = "disabled" required = "required">
											<option value = "">Seleccione un Municipio</option>
										</select>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-globe-americas"></i></span>
		                            <div class="col-md-8">
		                                <select  id = "parroquia" name = "parroquia"  class = "form-control" disabled = "disabled" required = "required">
											<option value = "">Seleccione una Parroquia</option>
										</select>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
		                            <div class="col-md-8">
		                                <input id="phone" name="telf" type="number" min="1" max="9999999999" placeholder="Tel&eacute;fono / m&aacute;x 10 digitos" class="form-control" required="required">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-center"><i class="far fa-file-alt bigicon"></i></span>
		                            <div class="col-md-8">
		                                <textarea class="form-control" id="message" name="message" placeholder="Escriba su mensaje" rows="7" required="required"></textarea>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="col-md-12 text-center">
		                            	<input type="submit" name="accion" value="Registrar" class="btn btn-primary btn-lg" >
		                            </div>
		                        </div>

		                    </fieldset>
		                </form>