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
                    <img class="img-fluid rounded-circle"  alt="" src="<?= $this->Url->Image('profile/profile.png') ?>">
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
        <div class="card">
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
                                        <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="¿Qué estás pensando?"></textarea>

                                        <!-- Modal -->
                                        
                                        <a href="javascript:void(0);" class="btn btn-primary light me-1 px-3" data-bs-toggle="modal" data-bs-target="#cameraModal"><i class="fa fa-camera m-0"></i> </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="cameraModal">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Upload images</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Upload</span>
                                                            <div class="form-file">
                                                                <input type="file" class="form-file-input form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#postModal">Publicar</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="postModal">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Mis Publicaciones</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <textarea name="textarea" id="textarea2" cols="30" rows="5" class="form-control bg-transparent" placeholder="¿Qué estás pensando?"></textarea>
                                                            <a class="btn btn-primary btn-rounded" href="javascript:void(0)">Publicar</a>																		 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                        <div class="media pt-5 pb-5">
                                          
                                            <img alt="image" class="me-3 rounded" width="75" src="<?= $this->Url->Image('profile/5.jpg') ?>">
												<div class="media-body">
													<h5 class="m-b-5"><a href="post-details.html" class="text-black">Mariana Fernanda Jacome Ruiz</a></h5>
													<p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
												</div>
										</div>
                                        <img alt="" class="img-fluid w-100 rounded" src="<?= $this->Url->Image('profile/8.jpg') ?>"> 
                                    </div>
                                </div>
                            </div>
                            <div id="about-me" class="tab-pane fade">
                            <div class="my-post-content pt-3">
                                    <div class="post-input">
                                        <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea>

                                        <!-- Modal -->
                                        
                                        <a href="javascript:void(0);" class="btn btn-primary light me-1 px-3" data-bs-toggle="modal" data-bs-target="#cameraModal"><i class="fa fa-camera m-0"></i> </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="cameraModal">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Upload images</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Upload</span>
                                                            <div class="form-file">
                                                                <input type="file" class="form-file-input form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#postModal">Publicar</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="postModal">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Mis Publicaciones</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <textarea name="textarea" id="textarea2" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea>
                                                            <a class="btn btn-primary btn-rounded" href="javascript:void(0)">Publicar</a>																		 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                        <div class="media pt-5 pb-5">
                                          
                                            <img alt="image" class="me-3 rounded" width="75" src="<?= $this->Url->Image('profile/5.jpg') ?>">
												<div class="media-body">
													<h5 class="m-b-5"><a href="post-details.html" class="text-black">Mariana Fernanda Jacome Ruiz</a></h5>
													<p class="mb-0">I shared this on my fb wall a few months back, and I thought.</p>
												</div>
										</div>
                                        <img alt="" class="img-fluid w-100 rounded" src="<?= $this->Url->Image('profile/8.jpg') ?>"> 
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="replyModal">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Post Reply</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <textarea class="form-control" rows="4">Message</textarea>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">btn-close</button>
                                    <button type="button" class="btn btn-primary">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Publicacione'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cat Estatus'), ['controller' => 'CatEstatus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cat Estatus'), ['controller' => 'CatEstatus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="publicaciones index large-9 medium-8 columns content">
    <h3><?= __('Publicaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cat_estatu_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($publicaciones as $publicacione): ?>
            <tr>
                <td><?= h($publicacione->id) ?></td>
                <td></td>
                <td><?= $publicacione->has('cat_estatus') ? $this->Html->link($publicacione->cat_estatus->id, ['controller' => 'CatEstatus', 'action' => 'view', $publicacione->cat_estatus->id]) : '' ?></td>
                <td><?= h($publicacione->titulo) ?></td>
                <td><?= h($publicacione->created) ?></td>
                <td><?= h($publicacione->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $publicacione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publicacione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicacione->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div> -->
