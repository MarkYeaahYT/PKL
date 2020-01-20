$(document).ready(function () {
    $('#program').change(function (e) { 
        e.preventDefault();
        
        var selected = $(this).val();
        if(selected == "1 Tahun"){
            console.log("A");
            
        }else if(selected == "Profesi 6 Bulan"){
            console.log("B");
            
            
        }else if(selected == "Intensif"){
            console.log("C");
            
            
        }else if(selected == "Privat"){
            console.log("D");

        }
    });
});