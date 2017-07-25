
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="<?php echo e(route('admin.index')); ?>"><i class="glyphicon glyphicon-home"></i>
                    Menu</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Produit
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="<?php echo e(route('product.index')); ?>">Produits</a></li>
                    <li><a href="<?php echo e(route('product.create')); ?>">Ajouter un produit</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Catégorie
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="<?php echo e(route('category.index')); ?>">Ajouter une catégorie</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Commande
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="<?php echo e(url('admin/orders/pending')); ?>">Commandes en attente</a></li>
                    <li><a href="<?php echo e(url('admin/orders/delivered')); ?>">Commandes envoyés</a></li>
                    <li><a href="<?php echo e(url('admin/orders')); ?>">Toute les commandes</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->