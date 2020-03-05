$(document).ready(function () {
    /**
     * set app Name and logo
     * this is direct because after reload it will execute
     * direcly
     */
    $.ajax({
        type: "GET",
        url: "/alfabank/profile/dataprofile",
        data: "",
        dataType: "JSON",
        success: function (response) {
            /**
             * Set Inventory
             */
            $(".inventory").find("h5").text(response[0].app);
            $(".inventory").find("img").attr("src", "/alfabank/uploads/"+response[0].logo);
            $(".inventory").find("p").text(response[0].title);
            
            /**
             * Set Data ALumni
             */
            $(".dataalumni").find("h5").text(response[1].app);
            $(".dataalumni").find("img").attr("src", "/alfabank/uploads/"+response[1].logo);
            $(".dataalumni").find("p").text(response[1].title);
            
            /**
             * Set Anggaran
             */
            $(".anggaran").find("h5").text(response[2].app);
            $(".anggaran").find("img").attr("src", "/alfabank/uploads/"+response[2].logo);
            $(".anggaran").find("p").text(response[2].title);
            
            /**
             * Set Marketing
             */
            $(".marketing").find("h5").text(response[3].app);
            $(".marketing").find("img").attr("src", "/alfabank/uploads/"+response[3].logo);
            $(".marketing").find("p").text(response[3].title);
        }
    });

    ///////////////////////////////////

    /**
     * Set title and alamat, tlp
     */
    $.ajax({
        type: "GET",
        url: "/alfabank/profile/dataprofile",
        data: {
            ishome: true
        },
        dataType: "JSON",
        success: function (response) {
            $(".title").text(response[0].title);
            $(".alamat").text("Alamat: "+response[0].alamat);
            $(".tlp").text("Tlp: "+response[0].tlp);
            $(".alficon").attr("src", "/alfabank/uploads/"+response[0].logo);
        }
    });
});