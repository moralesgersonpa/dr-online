<div class="modal inmodal fade" id="new" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="pre-biopsia" method="post" id="formdatabiopsia">
     <div class="modal-dialog modal-lg">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Nuevo pre registro de biopsia</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-12 form-group">
                    <label>Titulo (*)</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="" required autocomplete="off">
                </div>
                
                <div class="col-md-6 form-group">
                    <label>Hallazgo Macro (*)</label>
                    <textarea name="hallazgomacro" class="form-control" required></textarea>
                </div>
                
                <div class="col-md-6 form-group">
                    <label>Hallazgo Micro (*)</label>
                    <textarea name="hallazgomicro" class="form-control" required></textarea>
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Conclusion (*)</label>
                    <textarea name="conclusion" class="form-control" required></textarea>
                </div>
                
                
                <p>(*) Campos requeridos</p>
                
            </div>
            
            <div class="modal-footer">
                
                <input type="hidden" name="insert" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="newPreBiopsia" class="btn btn-success" value="Guardar Cambios">
            </div>
            
        </div>
    </div>
</form>
</div>

<?php 

foreach($execute as $valoresmodal){
      
      echo'
<div class="modal inmodal fade" id="edit'.$valoresmodal[id_databiopsia].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="pre-biopsia" method="post" id="formdatabiopsia'.$valoresmodal[id_databiopsia].'">
     <div class="modal-dialog modal-lg">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-edit modal-icon"></i>
                <h4 class="modal-title">Editar pre biopsia</h4>
                <small class="font-bold">Esta editando '.$valoresmodal[titulo].'.
                </small>
            </div>
            
             <div class="modal-body">
                              
               <div class="col-md-12 form-group">
                    <label>Titulo (*)</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="'.$valoresmodal[titulo].'" required autocomplete="off">
                </div>
                
                <div class="col-md-6 form-group">
                    <label>Hallazgo Macro (*)</label>
                    <textarea name="hallazgomacro" class="form-control" required>'.$valoresmodal[hallazgomacro].'</textarea>
                </div>
                
                <div class="col-md-6 form-group">
                    <label>Hallazgo Micro (*)</label>
                    <textarea name="hallazgomicro" class="form-control" required>'.$valoresmodal[hallazgomicro].'</textarea>
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Conclusion (*)</label>
                    <textarea name="conclusion" class="form-control" required>'.$valoresmodal[conclusion].'</textarea>
                </div>
                
                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
            
                <input type="hidden" name="id_databiopsia" value="'.$valoresmodal[id_databiopsia].'">
                <input type="hidden" name="update" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="changePreBiopsia" class="btn btn-primary" value="Guardar Cambios">
                
            </div>
            
        </div>
    </div>
</form>
</div>


<div class="modal inmodal fade" id="delete'.$valoresmodal[id_databiopsia].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="pre-biopsia" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-warning modal-icon"></i>
                <h4 class="modal-title">Eliminar pre biopsia</h4>
                <small class="font-bold">Eliminación de '.$valoresmodal[titulo].'.
                </small>
            </div>
            
            <div class="modal-body">
            
               <h3>Esta seguro que desea eliminar '.$valoresmodal[titulo].'. </h3>
                              
                
            </div>
            
            <div class="modal-footer">
                
            <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                
                <input type="hidden" name="id_databiopsia" value="'.$valoresmodal[id_databiopsia].'">
                <input type="hidden" name="titulo" value="'.$valoresmodal[titulo].'">
                <input type="hidden" name="delete" value="valor">
            
            <input type="submit" name="deletePreBiopsia" class="btn btn-danger" value="Eliminar">
            </div>
            
        </div>
    </div>
</form>
</div>
      
      ';
      
      
  }

?>