<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Menu</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <h5 class="ml-3">Anggaran App</h5>
            <ul class="nav navbar-nav ml-auto power">
                <li class="nav-item active">
                    <a id="shutdown" href="javascript:void(0)"><img src="<?php echo base_url('assets/icon/power.png'); ?>" width="25" height="25" alt="" srcset=""></a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#content').css('width', '100%');

            /**
                ShutDown END Session
             */
            $('#shutdown').on('click', function () {
                $.ajax({
                    type: "GET",
                    url: "/alfabank/anggaran/shutdown",
                    data: "",
                    dataType: "JSON",
                    success: function (response) {
                        window.location.href = "/alfabank"
                    }
                });
            });
        });
    </script>
</nav>