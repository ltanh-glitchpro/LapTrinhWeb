function ThoiGian ()
{
    var hientai = new Date () ;
    var ngay = hientai.getDate();
    var thang = hientai.getMonth () + 1;
    var nam = hientai.getFullYear () ;

    var thu = hientai.getDay () ;

    switch (thu)
    {
        case 0: thu = "Chủ Nhat"; break;
        case 1: thu = "Thu Hai"; break;
        case 2: thu = "Thu Ba"; break;
        case 3: thu = "Thu Tu"; break;
        case 4: thu = "Thu Nam"; break;
        case 5: thu = "Thu Sau"; break;
        case 6: thu = "Thu Bay"; break;
    }
    document.write ("Hom nay la " + thu + " ngay "
    + ngay + " tháng " + thang + " năm " + nam) ;
}