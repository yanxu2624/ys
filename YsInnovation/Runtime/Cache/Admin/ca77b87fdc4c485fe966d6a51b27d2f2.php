<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>以升后台管理</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo (SURL); ?>Public/Admin/Public/css/publicThr.css">
        <link rel="stylesheet" href="<?php echo (SURL); ?>Public/Admin/User/css/showUserList.css">
        <script type="text/javascript" src="<?php echo (SURL); ?>Public/Admin/Public/js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="<?php echo (SURL); ?>Public/jquery-easyui-1.3.6/jquery.easyui.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo (SURL); ?>Public/jquery-easyui-1.3.6/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo (SURL); ?>Public/jquery-easyui-1.3.6/themes/icon.css">
        <!--添加用户的跳转-->
        <script type="text/javascript">
            $(function(){
                $("#inputAddUser").click(function(){
                    window.location.href="/YsInnoCenter/YsInnovation/index.php/Admin/User/showAddUser";
                });
            });
        </script>
    </head>
    <body>
        <div id="divUserList">
            <div class="listHead">
                <strong>用户列表</strong>
            </div>
            <div class="listOper">
                <input id="btnSelectAll" type="button" value="全选" class="button button-small checkall">      
                <input id="inputAddUser" type="button" value="添加用户" class="button button-small border-green">  
                <input id="btnDelBatch" type="button" value="批量删除" class="button button-small border-yellow">
                <label style="margin-left: 10px;">所属实验室</label>
                <select id="operSelectCourseOrga">
                    <option value="all">全部</option>
                <?php if(is_array($org_name)): foreach($org_name as $key=>$valOrg): ?><option value="<?php echo ($valOrg["organization_id"]); ?>"><?php echo ($valOrg["organization_name"]); ?></option><?php endforeach; endif; ?>
                </select>
                <label style="margin-left: 10px;">用户类型</label>
                <select>
                    <option value="0">学生</option>
                    <option value="1">教师</option>
                </select>
            </div>
            <div class="listItemName">
                <div id="selected" class="itemName">选择</div>
                <div id="name" class="itemName">姓名</div>
                <div id="sex" class="itemName">性别</div>
                <div id="duty" class="itemName">职称</div>
                <div id="phone" class="itemName">联系电话</div>
                <div id="email" class="itemName">邮箱</div>
                <div id="organization" class="itemName">所属实验室</div>                
                <div id="operations" class="itemName">操作</div>
            </div>
            <div class="listItemData">
                         
            </div>
            <div id="semePageList" class="easyui-pagination"></div>
        </div>
    </body>
</html>