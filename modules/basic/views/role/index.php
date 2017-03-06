<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search"
                           id="top-search">
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a7.jpg">
                            </a>
                            <div>
                                <small class="pull-right">46h ago</small>
                                <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a4.jpg">
                            </a>
                            <div>
                                <small class="pull-right text-navy">5h ago</small>
                                <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>.
                                <br>
                                <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/profile.jpg">
                            </a>
                            <div>
                                <small class="pull-right">23h ago</small>
                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="mailbox.html">
                                <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="mailbox.html">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="grid_options.html">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="notifications.html">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>


            <li>
                <a href="login.html">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
            <li>
                <a class="right-sidebar-toggle">
                    <i class="fa fa-tasks"></i>
                </a>
            </li>
        </ul>

    </nav>
</div>


<div class="row control-tit wrapper border-bottom white-bg">
    <span>角色管理</span>
    <a class="addRole" href="/basic/role/add">添加角色</a>
</div>
<table class="tb1 col-lg-10">
    <thead>
    <tr>
        <th>序号</th>
        <th>角色管理</th>
        <th>操作</th>
        <th>权限</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>管理员</td>
        <td class="handle">
            <a href="#" class="alter">修改</a><a href="#">删除</a>
        </td>
        <td><a href="#">角色权限</a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>老师</td>
        <td class="handle">
            <a href="#" class="alter">修改</a><a href="#">删除</a>
        </td>
        <td><a href="#">角色权限</a></td>
    </tr>
    </tbody>
</table>

<!--        <ul>-->
<!--            --><?php //if (isset($role)) {
//                foreach ($role as $v) { ?>
<!--                    <li>--><?php //echo $v['id'] ?><!------------------------><?php //echo $v['name'] ?><!--------------------<a-->
<!--                            href="/basic/role/update?id=--><?php //echo $v['id'] ?><!--">修改</a>--<a-->
<!--                            href="/basic/role/delete?id=--><?php //echo $v['id'] ?><!--">删除</a></li>-->
<!--                    --><?php
//                }
//            } else { ?>
<!--                <li><a href="/basic/role/add">添加角色</a></li>-->
<!--                --><?php
//            }
//            ?>
<!--        </ul>-->


<div class="wrapper wrapper-content">
    <div><span>角色管理</span>------- <span><a href="/basic/role/add">添加角色</a></span></div>
    <div>
        <ul>
        <?php if(isset($role)){
            foreach($role as $v){ ?>
                <li><?php echo $v['id']?>--------------------<?php echo $v['name']?>------------------<a href="/basic/role/update?id=<?php echo $v['id']?>">修改</a>--<a href="/basic/role/delete?id=<?php echo $v['id']?>">删除</a>---<a href="/basic/role/limit?id=<?php echo $v['id']?>">角色权限</a></li>
               <?php
            }
        } else { ?>
            <li><a href="/basic/role/add">添加角色</a></li>
            <?php
        }
        ?>
        </ul>
    </div>

</div>

