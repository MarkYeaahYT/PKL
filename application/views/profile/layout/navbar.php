<!-- Sidebar  -->
<nav id="sidebar">
    <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
    </div>

    <div class="sidebar-header pt-5">
        <img class="img-thumbnail mx-auto d-block" src="<?php echo base_url('assets/icon/alfabank.png'); ?>" alt="" srcset="">
        <div class="pb-3"></div>
        <img class="img-thumbnail mx-auto d-block" src="<?php echo base_url('assets/icon/profile.png'); ?>" alt="" srcset="">
        <div class="col m-auto pt-3">
            <h5 class="text-info">Admin Page</h5>
        </div>
    </div>

    <ul class="list-unstyled components">
        <li>
            <hr>
            <div class="container fluid">
                <a href="<?php echo base_url('profile/'); ?>">
                    <div class="row">
                        <div class="col-md-1">
                            <img src="<?php echo base_url('assets/icon/data.png'); ?>" width="20" height="20" alt="" srcset="">
                        </div>
                        <div class="col-md-1">
                            User
                        </div>
                    </div>
                </a>
            </div>
        </li>
        
    </ul>
</nav>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
