function positioning() {
    var TL = document.getElementById('titleLayer');//������
    var GB = document.getElementById('galleryBox');//ͼƬչʾ��
    var Main = document.getElementById('main');//������
    var BL = document.getElementById('bottomLayer');//�������Layer
    if (window.innerWidth < 1000) {
        TL.style.width = "1000px";
        GB.style.width = "1000px";
        Main.style.position = "absolute";
        Main.style.left = "0";
        BL.style.position = "absolute";
        BL.style.left = "0";
        BL.style.top = "830px";
    }
    else {
        TL.style.width = "100%";
        GB.style.width = "100%";
        Main.style.position = "relative";
        Main.style.left = "";
        BL.style.position = "relative";
        BL.style.left = "";
        BL.style.top = "";
    }
}