<?php
defined('WEBSITEPATH') OR exit('No direct script access allowed');
?>
						<table id="blogtable" class="display" cellspacing="0" width="100%" style="font-size:10px">
							 <thead>
								 <tr>
								 	 <th style="text-align: center" width="">Id</th>
									 <th style="text-align: center" width="">Nombre</th>
									 <th style="text-align: center" width="">Apellido</th>
									 <th style="text-align: center" width="">Identificador</th>
									 <th style="text-align: center" width="">Email</th>
									 <th style="text-align: center" width="">Pa&iacute;s</th>
									 <th style="text-align: center" width="">Tel&eacute;fono</th>
									 <th style="text-align: center" width="">Mensaje</th>
								 </tr>
							 </thead>
							 <tbody>
					            <?php 
					            	$user = new controllerUsers();
					            	$result = $user->listUsers();
					            	if ($result != 0){
						            	foreach ($result as $row){
						            		echo '
						            		<tr>
							            		<td><a href="'.WEBSITEPATH.'/index.php?pg=modificar&id='.$row['id_user'].'">'.$row['id_user'].'</a></td>
							            		<td><a href="'.WEBSITEPATH.'/index.php?pg=modificar&id='.$row['id_user'].'">'.$row['name_user'].'</a></td>
							            		<td><a href="'.WEBSITEPATH.'/index.php?pg=modificar&id='.$row['id_user'].'">'.$row['lastname_user'].'</a></td>
							            		<td><a href="'.WEBSITEPATH.'/index.php?pg=modificar&id='.$row['id_user'].'">'.$row['document_user'].'</a></td>
							            		<td><a href="'.WEBSITEPATH.'/index.php?pg=modificar&id='.$row['id_user'].'">'.$row['email_user'].'</a></td>
							            		<td><a href="'.WEBSITEPATH.'/index.php?pg=modificar&id='.$row['id_user'].'">'.$row['name_country'].'</a></td>
							            		<td><a href="'.WEBSITEPATH.'/index.php?pg=modificar&id='.$row['id_user'].'">'.$row['phone_user'].'</a></td>
							            		<td>'.substr($row['message_user'], 0, 200).'... </td>
						            		</tr>';
						            	}
						            }
					            ?>
						 	</tbody>
						</table>