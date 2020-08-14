<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="background-color: #beb8af !important ;
    background-image: linear-gradient(180deg, #ff0aad 10%, #00ffee 100%) !important;" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/index.php" ?>">
    <div class="sidebar-brand-icon rotate-n-7">
    <i class="fas fa-store"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Mağazam</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/index.php" ?>">
    <i class="fas fa-home"></i>
        <span>Anasayfa</span></a>
</li>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-user"></i>
        <span>Kullanıcılar</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kullanıcılar:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kullanici/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kullanici/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/kullanici/sil.php"?>">Sil</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-undo-alt"></i>
        <span>İade Alınan Ürünler</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">İade Alınan  Ürünler:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/iadeurun/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/iadeurun/sil.php"?>">Sil</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Stok" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas  fa-cart-plus"></i>
        <span>Satılan Ürünler</span>
    </a>
    <div id="Stok" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Satılan Ürünler:</h6>
            <a class="collapse-item" href=<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/urunsatma/ekle.php"?>>Ekle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/urunsatma/sil.php"?>>Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sulama" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas  fa-memory"></i>
        <span>Ürün Ekle</span>
    </a>
    <div id="sulama" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ürün Ekle:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/urun/ekle.php"?>">Ürün ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/urun/duzen.php"?>">Ürün duzenle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/urun/sil.php"?>">Ürün sil</a>
        
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Firma" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas  fa-cubes"></i>
        <span>Stok Beklenen Ürünler</span>
    </a>
    <div id="Firma" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Stok Beklenen Ürünler:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/stokgel/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/stokgel/sil.php"?>">Sil</a>

        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#İade" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas  fa-users"></i>
        <span>Müsteriler</span>
    </a>
    <div id="İade" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Müsteriler:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/uye/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/uye/sil.php"?>">Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-book"></i>
        <span>Kategori/Altkategori </span>
    </a>
    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kategori/AltKategori:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/ozel/kekle.php"?>">Kategori ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/ozel/ksil.php"?>">Kategori Sil</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/ozel/tekle.php"?>">Alt Kategori ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/projeler/veritabani4/ozel/tsil.php"?>">Alt Kategori Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo"http://$_SERVER[HTTP_HOST]/projeler/veritabani4/cari.php"?>"  aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-book"></i> 
        <span>Ürünler</span>
        </a>
</li>
<!-- Divider -->



</ul>