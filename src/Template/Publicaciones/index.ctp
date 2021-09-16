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
    <div class="row">
    <div class="col-xl-4">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-statistics">
                            <div class="text-center">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="m-b-0">150</h3><span>Publicadas</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">140</h3><span>Papelera</span>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">45</h3><span>Eliminadas</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="sendMessageModal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Send Message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="comment-form">
                                                <div class="row"> 
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="text-black font-w600 form-label">Name <span class="required">*</span></label>
                                                            <input type="text" class="form-control" value="Author" name="Author" placeholder="Author">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="text-black font-w600 form-label">Email <span class="required">*</span></label>
                                                            <input type="text" class="form-control" value="Email" placeholder="Email" name="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label class="text-black font-w600 form-label">Comment</label>
                                                            <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3 mb-0">
                                                            <input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-news">
                            <h5 class="text-primary d-inline">Our Latest News</h5>
                            <div class="media pt-3 pb-3">
                                <img src="images/profile/5.jpg" alt="image" class="me-3 rounded" width="75">
                                <div class="media-body">
                                    <h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
                                    <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                </div>
                            </div>
                            <div class="media pt-3 pb-3">
                                <img src="images/profile/6.jpg" alt="image" class="me-3 rounded" width="75">
                                <div class="media-body">
                                    <h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
                                    <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                </div>
                            </div>
                            <div class="media pt-3 pb-3">
                                <img src="images/profile/7.jpg" alt="image" class="me-3 rounded" width="75">
                                <div class="media-body">
                                    <h5 class="m-b-5"><a href="post-details.html" class="text-black">Collection of textile samples</a></h5>
                                    <p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
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
                                        
                                        <span type="button" href="javascript:void(0);"  data-bs-toggle="modal" data-bs-target="#postModal"  class="btn btn-outline-primary col-md-12  " style="text-align:left" >¿Qué estás pensando?
                                            <a >
                                            </a>
                                        </span>
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
                                                            <textarea name="textarea" id="descripcion"  rows="15" style="height:150px" class="form-control bg-transparent" placeholder="¿Qué estás pensando?"></textarea>
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

                                            $('#todaslaspublicaciones').append('<div class="profile-uoloaded-post border-bottom-1 ">'+
                                                    '<div class="media ">'+
                                                        '<img src="<?= $this->Url->Image('/files/userfiles/') ?>'+data[indice]['usuario']['id']+'/picture/200.jpg" alt="image" class="me-3 rounded" width="75" >'+
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
                                                        '<a class="dropdown-item" href="#">Editar</a>'+
                                                        '<a class="dropdown-item" href="#">Archivar</a>'+
                                                        '<a class="dropdown-item" href="#">Borrar</a>'+
                                                    '</div>'+
                                                    '</div>'+
                                                    '</div>'+
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

                                            $('#mispublicaciones').append('<div class="profile-uoloaded-post border-bottom-1 ">'+
                                                    '<div class="media ">'+
                                                        '<img src="<?= $this->Url->Image('/files/userfiles/') ?>'+data[indice]['usuario']['id']+'/picture/200.jpg" alt="image" class="me-3 rounded" width="75" >'+
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
                                                        '<a class="dropdown-item" href="#">Editar</a>'+
                                                        '<a class="dropdown-item" href="#">Archivar</a>'+
                                                        '<a class="dropdown-item" href="#">Borrar</a>'+
                                                    '</div>'+
                                                    '</div>'+
                                                    '</div>'+
                                                    '</div>'+
                                                    '</div>');                
                })
            }
        })
    }

</script>
