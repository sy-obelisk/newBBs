<div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
        <li class="nav-header">
            <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                        </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="mailbox.html">Mailbox</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </div>
            <div class="logo-element">
                IN+
            </div>
        </li>
        <?php
        foreach($data as $v){
            ?>
            <li>
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label"><?php echo $v['name']?></span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <?php
                    if(isset($v['children'])){
                    foreach($v['children'] as $va) { ?>
                        <li class="active"><a href="<?php echo $va['path'] ?>"><?php echo $va['name'] ?></a></li>
                        <?php
                    }
                    }
                    ?>
                    <li class=""><a href="/basic/modular/index">模块管理</a></li>
                </ul>
            </li>
            <?php
        }
        ?>
    </ul>
 </div>

<!--<ul class="nav nav-tabs nav-stacked">-->
<!--    --><?php
//    foreach($data as $v) {
//        ?>
<!--    --><?php
//    if(in_array($v['id'],$blockArr)) {
//        ?>
<!--        <li class="--><?php //if ($v['value'] == $controller) echo 'active'?><!--">-->
<!--            <a href="--><?php //echo baseUrl?><!--/--><?php //echo $module?><!--/--><?php //echo $v['value']?><!--/index">--><?php //echo $v['name']?><!--</a>-->
<!--        </li>-->
<!--    --><?php
//    }
//        ?>
<!--    --><?php
//    }
//    ?>
<!--</ul>-->
