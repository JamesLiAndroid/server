<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"E:\WWW\project\tp5\bike\public/../application/admin\view\article\showlist.html";i:1510566036;s:75:"E:\WWW\project\tp5\bike\public/../application/admin\view\public\header.html";i:1510383902;s:73:"E:\WWW\project\tp5\bike\public/../application/admin\view\public\left.html";i:1510312538;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>文章管理</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__ADMIN__/style/bootstrap.css" rel="stylesheet">
    <link href="__ADMIN__/style/font-awesome.css" rel="stylesheet">
    <link href="__ADMIN__/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__ADMIN__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__ADMIN__/style/demo.css" rel="stylesheet">
    <link href="__ADMIN__/style/typicons.css" rel="stylesheet">
    <link href="__ADMIN__/style/animate.css" rel="stylesheet">
    
</head>
<body>
	<!-- 头部 -->
    <div class="navbar"  id='top'>
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__ADMIN__/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__ADMIN__/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><?php echo \think\Request::instance()->session('admin_name'); ?></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('admin_id'))); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			<!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <?php if(is_array($rules_left) || $rules_left instanceof \think\Collection || $rules_left instanceof \think\Paginator): if( count($rules_left)==0 ) : echo "" ;else: foreach($rules_left as $key=>$v1): ?>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-<?php echo $v1['name']; ?>"></i>
                <span class="menu-text"><?php echo $v1['title']; ?></span>
                <i class="menu-expand"></i>
            </a>
            <?php if(isset($v1['child'])): if(is_array($v1['child']) || $v1['child'] instanceof \think\Collection || $v1['child'] instanceof \think\Paginator): if( count($v1['child'])==0 ) : echo "" ;else: foreach($v1['child'] as $key=>$v2): ?>
            <ul class="submenu">
                <li>
                    <a href='<?php echo url($v2['name']); ?>'>
                        <span class="menu-text"><?php echo $v2['title']; ?></span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>                
    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <a href="<?php echo url('index/index'); ?>">系统</a>
                        </li>
                        <li class="active">文章管理</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加文章" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
<form action="" method="post">
    <table class="table table-bordered table-hover">
        <thead class="">
            <tr>
                <th class="text-center" width="10%">ID</th>
                <th class="text-center">标题</th>
                <th class="text-center" width="20%">缩略图</th>
                <th class="text-center" width="10%">作者</th>
                <th class="text-center" width="10%">推荐</th>
                <th class="text-center" width="10%">所属栏目</th>
                <th class="text-center" width="20%">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($arts) || $arts instanceof \think\Collection || $arts instanceof \think\Paginator): $i = 0; $__LIST__ = $arts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <tr>
                <td align="center" style="vertical-align:middle"><?php echo $v['id']; ?></td>
                <td align="center" style="vertical-align:middle"><?php echo $v['title']; ?></td>
                <td align="center" style="vertical-align:middle">
                    <?php if($v['thumb']==''): ?>
                    暂无缩略图
                    <?php else: ?>
                    <img width="100" height="60" src="PUBLIC/uploads/<?php echo $v['thumb']; ?>" >
                    <?php endif; ?>
                </td>
                <td align="center" style="vertical-align:middle"><?php echo $v['author']; ?></td>
                <td align="center" style="vertical-align:middle"><?php if($v['rec'] == 1): ?>不推荐<?php else: ?>推荐<?php endif; ?></td>
                <td align="center" style="vertical-align:middle"><?php echo $v['catename']; ?></td>
                <td align="center" style="vertical-align:middle">
                    <a href="<?php echo url('edit',['id'=>$v['id']]); ?>" class="btn btn-primary btn-sm shiny">
                        <i class="fa fa-edit"></i> 编辑
                    </a>
                    <a href="#" onClick="warning('确认删除吗?', '<?php echo url('del',['id'=>$v['id']]); ?>')" class="btn btn-danger btn-sm shiny">
                        <i class="fa fa-trash-o"></i> 删除
                    </a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</form>
                </div>
                <div style="padding-top:10px;text-align: center;">
                <?php echo $arts->render(); ?>
                </div>
                <div>
                
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="__ADMIN__/style/jquery_002.js"></script>
    <script src="__ADMIN__/style/bootstrap.js"></script>
    <script src="__ADMIN__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__ADMIN__/style/beyond.js"></script>
    


</body></html>