var slideIndex = 0;
showSlides();

function showSlides(){
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length){slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000);
}


function inputan(){
    // var tanggal = new Date();
    var satu= document.getElementById("nama").value;
    var dua= document.getElementById("email").value;
    var tiga= document.getElementById("subyekPesan").value;
    var empat= document.getElementById("isiPesan").value;

    
    
    if (satu == ""|dua == ""|tiga == ""|empat == ""){
        // jika ada salah satu saja data kosong, maka keluar popup harus melengkapi data
        alert("Mohon Lengkapi Data")
    }else{
        // var tabel = document.getElementById("tabelInputan");
        // var row = tabel.insertRow(1);
        // var cell1 = row.insertCell(0);
        // var cell2 = row.insertCell(1);
        // var cell3 = row.insertCell(2);
        // var cell4 = row.insertCell(3);
        // var cell5 = row.insertCell(4);

        // cell1.innerHTML = tanggal;
        // cell2.innerHTML = satu;
        // cell3.innerHTML = dua;
        // cell4.innerHTML = tiga;
        // cell5.innerHTML = empat;
        alert("Feedback terkirim, terimakasih. Kami akan berusaha lebih baik lagi")

    }
    
}


function sidebar_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("mainblur").style.display = "block";
}
  
function sidebar_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("mainblur").style.display = "none";
}
