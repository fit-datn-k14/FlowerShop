<?php
session_start();
class C_index
{
    public function hien_thi_trang_index()
    {
        include("c_data_contact.php");

        //Model
        include("./models/m_index.php");
        $m_index = new M_index();
        $doc_hoa = $m_index->doc_tat_ca_hoa();
        $doc_hoa_khuyen_mai=$m_index->doc_hoa_giam_gia();
        $doc_hoa_moi=$m_index->doc_hoa_moi();
        $doc_hoa_ban_chay=$m_index->doc_hoa_ban_chay();
        $san_pham_giam_gia=$m_index->san_pham_giam_gia();
        $san_pham_noi_bat=$m_index->san_pham_noi_bat();
        $san_pham_re_nhat=$m_index->san_pham_re_nhat();
        $doc_slider=$m_index->doc_slider();
        $doc_thong_tin=$m_index->doc_thong_tin();
        include("./models/m_tin_tuc.php");
        $m_tin_tuc=new M_tin_tuc();
        $tin_tuc=$m_tin_tuc->doc_tat_ca_su_kien();

        $view = "./views/v_index.php";
        $title = "Trang chủ";

        require_once "./views/layout.php";
    }
}
