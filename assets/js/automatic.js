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

    /**
     * Get Inventory Code
     */
    var iicode = "";
    $.ajax({
        type: "GET",
        url: "/alfabank/profile/geticode",
        data: "",
        dataType: "JSON",
        success: function (response) {
            iicode = response[0].code;
        }
    });
    
    
    var cat = "";
    var nama = "";
    var bln = "";
    var thn = "";
    var no_urut = 0;

    function realtime() {
        $.ajax({
            type: "GET",
            url: "/alfabank/inventory/incNO",
            data: "",
            cache: false,
            dataType: "JSON",
            success: function (r) {
                no_urut = parseInt(r);
                no_urut += 1;
                no_urut = String(no_urut).padStart(4, 0);
                // console.log(no_urut);
            }
        });
    }

    var no_invent = iicode+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
    
    // cat
    $('#cat > option[value="NE"]').on('click', function () {
        cat = $(this).val();
        realtime()
        no_invent = iicode+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        // console.log(no_invent);
        $('#no_inventaris').val(no_invent);
        
    });
    $('#cat > option[value="EL"]').on('click', function () {
        cat = $(this).val();
        realtime()
        no_invent = iicode+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        // console.log(no_invent);
        $('#no_inventaris').val(no_invent);
    });
    
    // nama
    $('#nama').keyup(function (e) { 
        nama = $(this).val();
        realtime()
        no_invent = iicode+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        // console.log(no_invent);
        $('#no_inventaris').val(no_invent);
    });
    
    
    // handle date
    $('#tanggalbeli').change(function(){
        var date = "";
        date += $(this).val();
        var spl = date.split("-");
        thn = spl[0];
        bln = romawi(spl[1]);
        realtime()
        
        no_invent = iicode+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        // console.log(no_invent);
        $('#no_inventaris').val(no_invent);
    })

    // make keep realtime when inputting
    $('#kondisi').change(function (e) { 
        e.preventDefault();
        realtime();
        no_invent = iicode+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        $('#no_inventaris').val(no_invent);
    });
    
    $('#harga').keyup(function (e) { 
        realtime();
        no_invent = iicode+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        $('#no_inventaris').val(no_invent);
    });
    
    $('#status').change(function (e) { 
        e.preventDefault();
        realtime();
        no_invent = iicode+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        $('#no_inventaris').val(no_invent);
    });
    
    $('#ruang').change(function (e) { 
        e.preventDefault();
        realtime();
        no_invent = iicode+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        $('#no_inventaris').val(no_invent);
    });

    /**
     * Handle suggestion
     * 
     */
    var dataauto;

    // keyup #nama
    $('#nama').keyup(function (e) { 
        var namasuggestion = $(this).val();
        $.ajax({
            type: "POST",
            url: "/alfabank/inventory/suggestion",
            data: {
                namasuggestion: namasuggestion
            },
            dataType: "JSON",
            success: function (response) {
                if(response.length > 0){
                    $('#nama').addClass('is-valid');
                    dataauto = response;   
                }

                if(response == "empty"){
                    $('#nama').removeClass('is-valid');
                }
            }
        });
    });

    // change element suggestion to pointer
    $('.autocomplete').css('cursor', 'pointer');

    // handle click .autocomplete
    $('.autocomplete').on('click', function () {
        dataauto.forEach(element => {
            $('#cat').val(element.cat);
            $('#kondisi').val(element.kondisi);
            $('#tanggalbeli').val(element.tanggal_beli);
            $('#harga').val(element.harga);
            $('#status').val(element.status);
            $('#ruang').val(element.ruang);
        });
        cat = dataauto[0].cat;
        var date = "";
        date += dataauto[0].tanggal_beli;
        var spl = date.split("-");
        thn = spl[0];
        bln = romawi(spl[1]);
        realtime();
        no_invent = iicode+cat+'/'+nama+'/'+bln+'/'+thn+'/'+no_urut;
        $('#no_inventaris').val(no_invent);

    });

});