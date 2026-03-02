
function giai_pt_bac_nhat(a, b) {
    var a = eval(f.so_a.value);
    var b = eval(f.so_b.value);
    var c;
    if (a == 0) {
        if (b == 0) {
            c = "Phương trình có vô số nghiệm";
        } else {
            c = "Phương trình vô nghiệm";
        }
    } else {
        c = "Phương trình có nghiệm x = " + (-b / a);
    }
    f.kq.value = c;
}
