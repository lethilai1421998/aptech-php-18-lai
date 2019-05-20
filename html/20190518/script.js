//setInterval(chuyenslied, 2000);
//var lai = setTimeout(chuyenslied, 2000);

function chuyenslied() {
    var hinh1 = document.getElementById('hinh-1');
    var hinh2 = document.getElementById('hinh-2');
    var hinh3 = document.getElementById('hinh-3');
    //document.getElementById('hinh-1').style.display = 'none';
    //document.getElementById('hinh-2').style.display = 'block';
    if (hinh1.style.display == "block") {
        hinh1.style.display = 'none';
        hinh2.style.display = 'block';
        hinh3.style.display = 'none';
    } else if (hinh2.style.display == "block") {
        hinh1.style.display = 'none';
        hinh2.style.display = 'none';
        hinh3.style.display = 'block';
    } else {
        hinh1.style.display = 'block';
        hinh2.style.display = 'none';
        hinh3.style.display = 'none';

    }
    //clearTimeout(lai);
    setTimeout(chuyenslied, 2000);
}
setTimeout(chuyenslied, 2000);