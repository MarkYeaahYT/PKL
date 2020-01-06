$(document).ready(function () {

    /** 
     * Automatic system
    */

    
    function romawi(num) { 
        var res;
        if(num == 01){
            res = "I";
        }else if(num == 02){
            res = "II";
        }else if(num == 03){
            res = "III";
        }else if(num == 04){
            res = "IV";
        }else if(num == 05){
            res = "V";
        }else if(num == 06){
            res = "VI";
        }else if(num == 07){
            res = "VII";
        }else if(num == 08){
            res = "VIII";
        }else if(num == 09){
            res = "IX";
        }else if(num == 10){
            res = "X";
        }else if(num == 11){
            res = "XI";
        }else if(num == 12){
            res = "XII";
        }
        return res;
    }
    
    
    var cat = "";
    var nama = "";
    var bln = "";
    var thn = "";
    var no_urut = 0;
    $.ajax({
        type: "GET",
        url: "/alfabank/inventory/incNO",
        data: "",
        dataType: "JSON",
        success: function (r) {
            no_urut = parseInt(r);
            no_urut += 1;
            no_urut = String(no_urut).padStart(4, 0);
            // console.log(no_urut);
        }
    });
    var no_invent = 'ALF-YK/'+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
    
    // cat
    $('#cat > option[value="NE"]').on('click', function () {
        cat = $(this).val();
        no_invent = 'ALF-YK/'+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        // console.log(no_invent);
        $('#no_inventaris').val(no_invent);
        
    });
    $('#cat > option[value="EL"]').on('click', function () {
        cat = $(this).val();
        no_invent = 'ALF-YK/'+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        // console.log(no_invent);
        $('#no_inventaris').val(no_invent);
    });
    
    // nama
    $('#nama').keyup(function (e) { 
        nama = $(this).val();
        no_invent = 'ALF-YK/'+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        // console.log(no_invent);
        $('#no_inventaris').val(no_invent);
    });
    
    
    // handle date
    $('#tanggalbeli').change(function(){
        var date = "";
        date += $(this).val();
        var spl = date.split("-")
        thn = spl[0];
        bln = romawi(spl[1]);
        
        no_invent = 'ALF-YK/'+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        console.log(no_invent);
        $('#no_inventaris').val(no_invent);
    })

});