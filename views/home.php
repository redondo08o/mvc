<?php
$section = <<<HTML
<div class="row">
    <div class="col">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
            Registrar Usuarios
        </button>

        <!-- Modal -->
        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Registrar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="reg_user" method="post" id='form_reg'>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">nombre</label>
                                <input type="text" id="nameBasic" name='nombre' class="form-control" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">apellido</label>
                                <input type="text" id="nameBasic" name='apellido' class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">cc</label>
                                <input type="text" id="nameBasic" name='cc' class="form-control" >
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">cancelar</button>
                            <button type="submit" class="btn btn-primary">registrar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>
    .swal2-container {
  z-index: 1099 !important;
}
    </style>
<script>


$( "#form_reg" ).on( "submit", function( event ) {
    var dt = $(this).serialize();
    var url = $(this).attr("action");
    $.ajax({
        url: url,
        type: 'POST',
        data: dt,
        dataType: 'json',
        success: function (response) {
            console.log(response.message)
            Swal.fire(
                response.message,
                ' ',
                response.icon
            )
            
            $("#frm_acc").trigger("reset");
        }
  
})
event.preventDefault();
})



</script>

    


HTML;
include(__DIR__ . '/layout.php')

?>


