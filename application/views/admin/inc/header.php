<header class="navbar navbar-fixed-top" role="banner">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="<?= base_url() ?>admin" class="navbar-brand" style="color: white;padding: 10px" > <?= strtoupper(PROJECT_TITLE) ?> :: ADMIN </a>
        </div>
      <!--  <ul class="top_links">
            <li>
                <a href="tasks_summary.html"><span>23</span>Tasks</a>
            </li>
            <li>
                <a href="mail_inbox.html"><span>8</span>Mails</a>
            </li>
        </ul>-->
        <ul class="nav navbar-nav navbar-right">

            <li class="user_menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="navbar_el_icon ion-person"></span> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">

                    <li><a href="#" id="logout" data-for="" >Log Out</a></li>
                </ul>
            </li>
            <!--<li><a href="javascript:void(0)" class="slidebar-toggle"><span class="navbar_el_icon ion-navicon-round"></span></a></li>-->
        </ul>
    </div>
</header>
