<div class="kingster-header-container  kingster-container">
    <div class="kingster-header-container-inner clearfix">
        <div class="kingster-logo  kingster-item-pdlr">
            <div class="kingster-logo-inner" style="width: 40%; height:50%;">
                <a class="" href="index.html">
                <img src="{{ ('/') }}landing/asset/images/download (3).png" alt="" /></a>
            </div>
        </div>
        <div class="kingster-navigation kingster-item-pdlr clearfix ">
            <div class="kingster-main-menu" id="kingster-main-menu">
                <ul id="menu-main-navigation-1" class="sf-menu">
                    <li class="menu-item menu-item-home current-menu-item menu-item-has-children kingster-normal-menu"><a href="index.html" class="sf-with-ul-pre">Perajin</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-home"><a href="{{route('product')}}">Produk kami</a></li>
                            <li class="menu-item menu-item-home"><a href="{{route('anggota')}}">Anggota Kami</a></li>
                            <li class="menu-item menu-item-home"><a href="{{route('tata_cara')}}">Tata Cara Menjadi Anggota</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item menu-item-has-children kingster-mega-menu"><a href="{{route('kegiatan')}}" class="sf-with-ul-pre">Berita & Kegiatan</a>
                        
                    </li>
                    <li class="menu-item menu-item-has-children kingster-normal-menu"><a href="{{route('detail')}}" class="sf-with-ul-pre">Tentang Kami</a>
                        <ul class="sub-menu">
                            <li class="menu-item" data-size="60"><a href="{{route('detail')}}">Profil</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="{{route('kontak')}}" class="sf-with-ul-pre">Kontak</a>
    
                    </li>
                </ul>
                <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
            </div>
            <div class="kingster-main-menu-right-wrap clearfix ">
                <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i></div>
                <div class="kingster-top-search-wrap">
                    <div class="kingster-top-search-close"></div>
                    <div class="kingster-top-search-row">
                        <div class="kingster-top-search-cell">
                            <form role="search" method="get" class="search-form" action="#">
                                <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="s">
                                <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                <input type="submit" class="search-submit" value="Search">
                                <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>