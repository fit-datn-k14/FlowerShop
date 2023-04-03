function updateAjax1(id){
    swal({
        title: "Bạn đã muốn xác nhận hoàn thành đơn hàng?",
        text: "Bạn đã xem thông tin và quyết định hoàn thành đơn đặt hàng!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((isConfirm) => {
        if (isConfirm) {
            $.ajax({
                type:'post',
                url:'models/update_hoa_don1.php',
                data:{update_id:id},
                success:function(data){
                    swal({
                        title: "Xử lý hoàn tất!",
                        text: "Đơn hàng đã hoàn thành!",
                        type: "success"
                    }).then(function () {
                    location.reload();
                    });
                }
            })
        }
    });
}
