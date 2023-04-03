<div id="menu2" class="tab-pane fade in">
    <div class="category-products">
        <ul class="products-grid row aos-all" id="aos-demo">
        <?php 
        foreach ($doc_hoa_ban_chay as $hoa_ban_chay) {
            echo '<li class="item hoa " data-aos="fade-up-right">
            <div class="category-products-grid">
                <div class="images-container">
                    <div class="product-hover">
                        <a href="chi_tiet_hoa.php?id='.$hoa_ban_chay["MaHoa"].'" title="'.$hoa_ban_chay["TenHoa"].'" class="product-image">
                            <img class="img-responsive hinh_hoa" src="public/images/hoa/'.$hoa_ban_chay["Hinh"].'"  alt="'.$hoa_ban_chay["TenHoa"].'">
                        </a>
                    </div>
                    <h2 class="product-name">
                    <a href="chi_tiet_hoa.php?id='.$hoa_ban_chay["MaHoa"].'" title="'.$hoa_ban_chay["TenHoa"].'">'.$hoa_ban_chay["TenHoa"].'</a>
                    </h2>
                    <div class="actions-no hover-box">
                        <div class="actions">
                            <div class="price-box">
                                <a class="minimal-price-link">
                                    <span class="mua_online">Mua online:</span>
                                    <span class="price" id="product-minimal-price-2678">'.number_format($hoa_ban_chay["GiaKhuyenMai"]).' ₫</span>
                                </a>
                            </div>
                        </div>';
                        if ($hoa_ban_chay["SoLuongSP"] > 0)
                            echo '<div class="notify-dat-hang">
                            <button onclick="addToCart('.$hoa_ban_chay["MaHoa"].',1)">Thêm vào giỏ hàng</button>
                            </div>';
                        else
                            echo '<div class="notify">
                                <button>Đã hết hàng</button>
                            </div>';
                    echo '</div>
                  </div>
              </div>
        </li>';
        }
        ?>
        </ul>
        <div class="cta">
            <button onclick="location.href='hoa.php'">Xem thêm hoa <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
