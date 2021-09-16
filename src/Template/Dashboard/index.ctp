<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publicacione[]|\Cake\Collection\CollectionInterface $publicaciones
 */
?>

<div class="row page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Inicio</a></li>
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
</div>


