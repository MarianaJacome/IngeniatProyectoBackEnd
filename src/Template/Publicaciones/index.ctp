<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicacione[]|\Cake\Collection\CollectionInterface $publicaciones
 */
?>

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Publicaciones</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)"></a>Perfil</li>
    </ol>
    </div>
    <!-- row -->
    <div class="row">
    <div class="col-lg-12">
        <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
                <div class="photo-content">
                    <div class="cover-photo rounded"></div>
                </div>
                <div class="profile-info">
                    <div class="profile-photo">
                    <img class="img-fluid rounded-circle" style="width:100px; height:100px; object-fit:cover"src="<?= $userData["imagen"] ? $this->Url->Image('/files/userfiles/'.$userData["id"].'/picture/200.jpg') : $this->Url->Image('/files/default/defaultpic.jpg') ?>" alt="" >
                        <!-- <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt=""> -->
                    </div>
                    <div class="profile-details">
                        <div class="profile-name px-3 pt-2">
                            <h4 class="text-primary mb-0"><?= $userData["nombrecompleto"] ?></h4>
                            <p>Desarrolladora de Software</p>
                        </div>
                        <div class="profile-email px-2 pt-2">
                            <h4 class="text-muted mb-0"><?= $userData["correo"] ?></h4>
                            <p>Email</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-xl-12">
        <div class="card" style="height:auto !important">
            <div class="card-body">
                <div class="profile-tab">
                    <div class="custom-tab-1">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab" class="nav-link active show">Todas las publicaciones</a>
                            </li>
                            <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link">Mis publicaciones</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="my-posts" class="tab-pane fade active show">
                                <div class="my-post-content pt-3">
                                    <div class="post-input">
                                    <?php if( $userData["rolid"] == "b7181c04-c9a9-414c-9033-a733786c62b4" ){ ?>
                                        <?php } else{?>
                                            <span type="button" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#postModal"  class="btn btn-outline-primary col-md-12  " style="text-align:left" >??Qu?? est??s pensando?
                                            <a >
                                            </a>
                                        </span>
                                        <?php } ?>
                                        <!-- Modal -->
                                        <div class="modal fade" id="postModal">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Crear Publicacion</h5>
                                                        <button type="button" id="cerrarModal" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <input type="text" id="titulo"  name="" class="form-control " placeholder="Titulo">
                                                            <textarea name="textarea" id="descripcion"  rows="15" style="height:150px" class="form-control bg-transparent" placeholder="??Qu?? est??s pensando?"></textarea>
                                                            <!-- <a href="javascript:void(0);" class="btn btn-primary light me-1 px-3" data-bs-toggle="modal" data-bs-target="#cameraModal"><i class="fa fa-camera m-0"></i> </a> -->
                                                            <a class="btn btn-primary btn-rounded" id="publicar" href="javascript:void(0)">Publicar</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="todaslaspublicaciones"></div>
                                    
                                </div>
                            </div>
                            <div id="about-me" class="tab-pane fade">
                                <br>
                            <div id="mispublicaciones"></div>
                        </div>
                    </div>
                    <!-- Modal -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>

    $('#publicar').click(function(){
        $('#cerrarModal').click();
    var titulo = $('#titulo').val();
    var descripcion = $('#descripcion').val();



    $.ajax({
        headers: {
            'X-CSRF-Token': csrfToken
        },    
        type: "POST",
        data: { titulo : titulo , descripcion : descripcion },
        url: "<?= $this->Url->build(["controller" => "publicaciones","action" => "publicacion"]);?>",
        success:function(data){
            todasPublicaciones();
            misPublicaciones();
            $('#titulo').val("");
            $('#descripcion').val("");
        }
    })
})

todasPublicaciones();
misPublicaciones();
function todasPublicaciones(){
        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },    
            type: "GET",
            url: "<?= $this->Url->build(["controller" => "publicaciones","action" => "getPublicaciones"]);?>",
            success:function(data){
                $('#todaslaspublicaciones').empty();
                $(data).each(function(indice,registro){        
                    var fechaFormat = "";
                    var fechasyhoras = data[indice]['created'].split("T");
                    var fecha = fechasyhoras[0].split("-");
                    var mes = "";
                    if( fecha[1] == "01"){ mes = "Enero";}
                    if( fecha[1] == "02"){ mes = "Febrero";}
                    if( fecha[1] == "03"){ mes = "Marzo";}
                    if( fecha[1] == "04"){ mes = "Abril";}
                    if( fecha[1] == "05"){ mes = "Mayo";}
                    if( fecha[1] == "06"){ mes = "Junio";}
                    if( fecha[1] == "07"){ mes = "Julio";}
                    if( fecha[1] == "08"){ mes = "Agosto";}
                    if( fecha[1] == "09"){ mes = "Septiembre";}
                    if( fecha[1] == "10"){ mes = "Octubre";}
                    if( fecha[1] == "11"){ mes = "Noviembre";}
                    if( fecha[1] == "12"){ mes = "Diciembre";}
                    var horas = fechasyhoras[1].split("-");
                    var horaB = horas[0].split(":");
                    var hora = horaB[0] + ":" + horaB[1];

                    fechaFormat = fecha[2] + " de " + mes + " del " + fecha[0] + " a las " + hora;
                    var pic = "";

                                    $.ajax({
                                        url : '<?= $this->Url->Image('/files/userfiles/') ?>'+data[indice]['usuario']['id']+'/picture/200.jpg',
                                        type : "get",
                                        async: false,
                                        success : function(userStatus) {
                                        pic = '<?= $this->Url->Image('/files/userfiles/') ?>'+data[indice]['usuario']['id']+'/picture/200.jpg';
                                        },
                                        error: function() {
                                            pic = "<?= $this->Url->Image('/files/default/defaultpic.jpg') ?>"
                                        }
                                    });

                                            $('#todaslaspublicaciones').append('<div class="profile-uoloaded-post border-bottom-1 ">'+
                                                    '<div class="media ">'+
                                                        '<img src="'+pic+'" alt="image" class="me-3 rounded" width="75" >'+
                                                            '<div class="media-body">'+
                                                                ' <span style="font-size:20px"><a href="post-details.html" class="text-black">'+ data[indice]['titulo'] +'</a></span><br>'+
                                                            ' <small>'+ data[indice]['usuario']['nombre'] + " " + data[indice]['usuario']['apellido'] + " | " + fechaFormat +'</small><br>'+
                                                            ' <p class="mb-0">'+ data[indice]['descripcion'] +'</p>'+
                                                                '</div>'+
                                                                '<div class="col-xl-3">'+
                                                            '<div class="dropdown custom-dropdown" style="float:right">'+
                                                            '<div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">'+
                                                        ' <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>'+
                                                        '</div>' +
                                                        '<div class="dropdown-menu dropdown-menu-end">' + 
                                                        <?php if( $userData["rolid"] == "94819f1d-9ec2-4210-8df8-c14a6851a48f" ){ ?>
                                                            '<a data-bs-toggle="modal" data-bs-target="#edit1'+data[indice]['id']+'" class="dropdown-item" href="#">Editar</a>'+
                                                        <?php } else{?>
                                                            '<a data-bs-toggle="modal" data-bs-target="#edit1'+data[indice]['id']+'" class="dropdown-item" href="#">Editar</a>'+
                                                            '<a data-bs-toggle="modal" data-bs-target="#delete1'+data[indice]['id']+'" class="dropdown-item" href="#">Borrar</a>'+
                                                        <?php } ?>
                                                        
                                                       
                                                    '</div>'+
                                                    '</div>'+
                                                    '</div>'+
                                                    '</div>'+
                                                    '<div class="modal fade" id="edit1'+data[indice]['id']+'">'+
                                                        ' <div class="modal-dialog modal-dialog-centered" role="document">'+
                                                            '  <div class="modal-content">'+
                                                                '  <div class="modal-header">'+
                                                                    '  <h5 class="modal-title">Crear Publicacion</h5>'+
                                                                    '  <button type="button" id="cerrarModal" class="btn-close" data-bs-dismiss="modal">'+
                                                                    ' </button>'+
                                                                    '</div>'+
                                                                    '   <div class="modal-body">'+
                                                                        '    <input type="text"  id="titulo'+data[indice]['id']+'" class="form-control" placeholder="Titulo" value="'+ data[indice]['titulo']+'">'+
                                                                        '<textarea name="textarea" id="descripcion'+data[indice]['id']+'"  rows="15" style="height:150px" class="form-control bg-transparent" placeholder="??Qu?? est??s pensando?">'+ data[indice]['descripcion']+'</textarea>'+
                                                                        '<a class="btn btn-primary btn-rounded" data-bs-dismiss="modal" id="'+data[indice]['id']+'" href="javascript:void(0)" onclick="editarPublicacion(this);">Publicar</a>'+
                                                                        '</div>'+
                                                                        '</div>'+
                                                                        ' </div>'+
                                                                        '  </div>'+
                                                    '<div class="modal fade text-left" id="delete1'+data[indice]['id']+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6" aria-hidden="true">'+
                                                    '   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">'+
                                                    '       <div class="modal-content">'+
                                                    '           <div class="modal-header">'+
                                                    '               <h4 class="modal-title" id="myModalLabel6">Eliminando '+ data[indice]['titulo']+'</h4>'+
                                                    '               <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">'+
                                                    '                   <span aria-hidden="true">&times;</span>'+
                                                    '               </button>'+
                                                    '           </div>'+
                                                    '           <div class="modal-body">'+
                                                    '               <p>'+
                                                    '                  ??Realmente desea eliminar de manera permanente este registro del sistema?'+
                                                    '               </p>'+
                                                    '              <div class="alert alert-danger" role="alert">'+
                                                    '                   Se eliminar?? la publicaci??n de la secci??n de publicaciones.'+
                                                    '               </div>'+
                                                    '           </div>'+
                                                    '           <div class="modal-footer">'+
                                                    '               <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancelar</button>'+
                                                    '               <button id="'+data[indice]['id']+'" type="button" class="btn btn-primary"  data-bs-dismiss="modal" onclick="eliminarPublicacion(this);">Aceptar</button>'+
                                                    '           </div>'+
                                                    '       </div>'+
                                                    '   </div>'+
                                                    '</div>'+
                                                    '</div>');                
                })
            }
        })
    }

    function misPublicaciones(){
        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },    
            type: "GET",
            url: "<?= $this->Url->build(["controller" => "publicaciones","action" => "getMispublicaciones"]);?>",
            success:function(data){
                $('#mispublicaciones').empty();
                $(data).each(function(indice,registro){        
                    var fechaFormat = "";
                    var fechasyhoras = data[indice]['created'].split("T");
                    var fecha = fechasyhoras[0].split("-");
                    var mes = "";
                    if( fecha[1] == "01"){ mes = "Enero";}
                    if( fecha[1] == "02"){ mes = "Febrero";}
                    if( fecha[1] == "03"){ mes = "Marzo";}
                    if( fecha[1] == "04"){ mes = "Abril";}
                    if( fecha[1] == "05"){ mes = "Mayo";}
                    if( fecha[1] == "06"){ mes = "Junio";}
                    if( fecha[1] == "07"){ mes = "Julio";}
                    if( fecha[1] == "08"){ mes = "Agosto";}
                    if( fecha[1] == "09"){ mes = "Septiembre";}
                    if( fecha[1] == "10"){ mes = "Octubre";}
                    if( fecha[1] == "11"){ mes = "Noviembre";}
                    if( fecha[1] == "12"){ mes = "Diciembre";}
                    var horas = fechasyhoras[1].split("-");
                    var horaB = horas[0].split(":");
                    var hora = horaB[0] + ":" + horaB[1];

                    fechaFormat = fecha[2] + " de " + mes + " del " + fecha[0] + " a las " + hora;
                    $.ajax({
                                        url : '<?= $this->Url->Image('/files/userfiles/') ?>'+data[indice]['usuario']['id']+'/picture/200.jpg',
                                        type : "get",
                                        async: false,
                                        success : function(userStatus) {
                                        pic = '<?= $this->Url->Image('/files/userfiles/') ?>'+data[indice]['usuario']['id']+'/picture/200.jpg';
                                        },
                                        error: function() {
                                            pic = "<?= $this->Url->Image('/files/default/defaultpic.jpg') ?>"
                                        }
                                    });
                                            $('#mispublicaciones').append('<div class="profile-uoloaded-post border-bottom-1 ">'+
                                                    '<div class="media ">'+
                                                        '<img src="'+pic+'" alt="image" class="me-3 rounded" width="75" >'+
                                                            '<div class="media-body">'+
                                                                ' <span style="font-size:20px"><a href="post-details.html" class="text-black">'+ data[indice]['titulo'] +'</a></span><br>'+
                                                            ' <small>'+ data[indice]['usuario']['nombre'] + " " + data[indice]['usuario']['apellido'] + " | " + fechaFormat +'</small><br>'+
                                                            ' <p class="mb-0">'+ data[indice]['descripcion'] +'</p>'+
                                                                '</div>'+
                                                                '<div class="col-xl-3">'+
                                                            '<div class="dropdown custom-dropdown" style="float:right">'+
                                                            '<div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">'+
                                                        ' <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="12" cy="5" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="12" cy="19" r="2"/></g></svg>'+
                                                        '</div>' +
                                                        '<div class="dropdown-menu dropdown-menu-end">' + 
                                                        <?php if( $userData["rolid"] == "94819f1d-9ec2-4210-8df8-c14a6851a48f" ){ ?>
                                                            '<a data-bs-toggle="modal" data-bs-target="#edit1'+data[indice]['id']+'" class="dropdown-item" href="#">Editar</a>'+
                                                        <?php } else{?>
                                                            '<a data-bs-toggle="modal" data-bs-target="#edit1'+data[indice]['id']+'" class="dropdown-item" href="#">Editar</a>'+
                                                            '<a data-bs-toggle="modal" data-bs-target="#delete1'+data[indice]['id']+'" class="dropdown-item" href="#">Borrar</a>'+
                                                        <?php } ?>
                                                    '</div>'+
                                                    '</div>'+
                                                    '</div>'+
                                                    '</div>'+
                                                    '<div class="modal fade" id="edit2'+data[indice]['id']+'">'+
                                                        ' <div class="modal-dialog modal-dialog-centered" role="document">'+
                                                            '  <div class="modal-content">'+
                                                                '  <div class="modal-header">'+
                                                                    '  <h5 class="modal-title">Crear Publicacion</h5>'+
                                                                    '  <button type="button" id="cerrarModal" class="btn-close" data-bs-dismiss="modal">'+
                                                                    ' </button>'+
                                                                    '</div>'+
                                                                    '   <div class="modal-body">'+
                                                                        '    <input type="text"  id="titulo'+data[indice]['id']+'" class="form-control" placeholder="Titulo" value="'+ data[indice]['titulo']+'">'+
                                                                        '<textarea name="textarea" id="descripcion'+data[indice]['id']+'"  rows="15" style="height:150px" class="form-control bg-transparent" placeholder="??Qu?? est??s pensando?">'+ data[indice]['descripcion']+'</textarea>'+
                                                                        '<a class="btn btn-primary btn-rounded" data-bs-dismiss="modal" id="'+data[indice]['id']+'" href="javascript:void(0)" onclick="editarPublicacion(this);">Publicar</a>'+
                                                                        '</div>'+
                                                                        '</div>'+
                                                                        ' </div>'+
                                                                        '  </div>'+
                                                    '<div class="modal fade text-left" id="delete2'+data[indice]['id']+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6" aria-hidden="true">'+
                                                    '   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">'+
                                                    '       <div class="modal-content">'+
                                                    '           <div class="modal-header">'+
                                                    '               <h4 class="modal-title" id="myModalLabel6">Eliminando '+ data[indice]['titulo']+'</h4>'+
                                                    '               <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">'+
                                                    '                   <span aria-hidden="true">&times;</span>'+
                                                    '               </button>'+
                                                    '           </div>'+
                                                    '           <div class="modal-body">'+
                                                    '               <p>'+
                                                    '                  ??Realmente desea eliminar de manera permanente este registro del sistema?'+
                                                    '               </p>'+
                                                    '              <div class="alert alert-danger" role="alert">'+
                                                    '                   Se eliminar?? la publicaci??n de la secci??n de publicaciones.'+
                                                    '               </div>'+
                                                    '           </div>'+
                                                    '           <div class="modal-footer">'+
                                                    '               <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancelar</button>'+
                                                    '               <button id="'+data[indice]['id']+'" type="button" class="btn btn-primary"  data-bs-dismiss="modal" onclick="eliminarPublicacion(this);">Aceptar</button>'+
                                                    '           </div>'+
                                                    '       </div>'+
                                                    '   </div>'+
                                                    '</div>'+
                                                    '</div>');                
                })
            }
        })
    }
//Funcion para actualizar el post
function editarPublicacion(e){
        var id = e.id;
        var titulo = $('#titulo' + id).val();
        var descripcion = $('#descripcion' + id).val();

        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },
            type: "PUT",
            data: { titulo : titulo , descripcion : descripcion },
            url: "<?= $this->Url->build(["controller" => "publicaciones","action" => "edit" ]);?>/"+id,
            success:function(data){

                todasPublicaciones();
                misPublicaciones();

            }
        })
    }

    function eliminarPublicacion(e){
        var id = e.id;

        $.ajax({
            headers: {
                'X-CSRF-Token': csrfToken
            },
            type: "DELETE",
            url: "<?= $this->Url->build(["controller" => "publicaciones","action" => "delete" ]);?>/"+id,
            success:function(data){

                todasPublicaciones();
                misPublicaciones();

            }
        })
    }
                                    
</script>
