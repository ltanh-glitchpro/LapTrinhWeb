function KiemTra() {
    // Cách 1: Lấy thông tin từ form (cách cũ, không an toàn)
    // var tdn = document.f.txtTDN.value;
    // var mk = document.f.txtMK.value;
    // var xnmk = document.f.txtXNMK.value;

    // Lấy thông tin từ form (dùng một cách an toàn)
    var tdn = document.getElementsByName("txtTDN")[0].value;
    var mk = document.getElementsByName("txtMK")[0].value;
    var xnmk = document.getElementsByName("txtXNMK")[0].value;
    // Kiểm tra
    if (tdn == "" || mk == "" || xnmk == "") {
        alert("Vui lòng nhập đầy đủ thông tin");
        return false;
    }
    if (tdn.length < 6) {
        alert("Tên đăng nhập phải có ít nhất 6 ký tự");
        return false;
    }
    if (mk!=xnmk) {
        alert("Mật khẩu xác nhận không khớp");
        return false;
    }
    return true;
}