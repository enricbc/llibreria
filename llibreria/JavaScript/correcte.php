<!doctype html>
<html lang="es">
<?php include("../php/navbar.php") ?>
  <body style="background-color: #F5EC9A;">
    <!-- Modal -->
    <div class="modal hide fade" style="top:40%" id="myModal">
      <div class="modal-dialog bg-success" role="document">
        <div class="modal-content ">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Succes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bg-success progress-bar-striped progress-bar-animated">
            S'ha realitzat l'acció satisfactoriament
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Tancar</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(window).on('load',function(){
        $('#myModal').modal('show');
      });
    </script>
  </body>
</html>
