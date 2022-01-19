var tombolCari = document.getElementById('tombol_cari');
var container = document.getElementById('container');

/*
tombolCari.addEventListener('mouseover',function()){
    alert('berhasil!');
});*/
keyword.addEventListener('keyup', function() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert('ajax berhasil!');
            //container.innerHTML = xhr.responseText
        }
    }

    xhr.open('GET', 'ajax/coba.txt', true);
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    //xhr.open('GET','ajax/tampilxml.php',true);
    xhr.send();
});