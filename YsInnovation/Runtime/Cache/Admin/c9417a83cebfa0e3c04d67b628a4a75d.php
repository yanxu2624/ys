<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
待审核讲座列表的显示
-->
<html>
    <head>
        <title>以升后台管理</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo (SURL); ?>Public/Admin/Lecture/css/showExaminedList.css">
        <link rel="stylesheet" href="<?php echo (SURL); ?>Public/Admin/Public/css/publicThr.css">
        <script type="text/javascript" src="<?php echo (SURL); ?>Public/Admin/Public/js/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="<?php echo (SURL); ?>Public/jquery-easyui-1.3.6/jquery.easyui.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo (SURL); ?>Public/jquery-easyui-1.3.6/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="<?php echo (SURL); ?>Public/jquery-easyui-1.3.6/themes/icon.css"> 
        <!--得到讲座列表的js文件-->
        <script type="text/javascript" id="getLectureListScript" data="1&2" src="<?php echo (SURL); ?>Public/Admin/Lecture/js/getLectureList.js"></script>
    </head>
    <body>
        <div id="divLectureList">
            <div class="listHead">
                <strong>已审核内容列表</strong>
            </div>
            <div class="listOper">
                <input id="btnSelectAll" type="button" value="全选" class="button button-small checkall">      
                <input id="inputAddLecture" type="button" value="添加讲座" class="button button-small border-green">  
                <input id="btnDelBatch" type="button" value="批量删除" class="button button-small border-yellow">
                <label style="margin-left: 10px;">所属实验室</label>
                <select id="operSelectLectureOrga">
                    <option value="all">全部</option>
                <?php if(is_array($org_name)): foreach($org_name as $key=>$valOrg): ?><option value="<?php echo ($valOrg["organization_id"]); ?>"><?php echo ($valOrg["organization_name"]); ?></option><?php endforeach; endif; ?>
                </select>
            </div>
            <div class="listItemName">
                <div id="selected" class="itemName">选择</div>
                <div id="name" class="itemName">讲座名称</div>
                <div id="beginTime" class="itemName">开始时间</div>
                <div id="place" class="itemName">讲座地点</div>
                <div id="speaker" class="itemName">主讲人</div>
                <div id="scope" class="itemName">面向范围</div>
                <div id="organization" class="itemName">所属实验室</div>
                <div id="status" class="itemName">当前状态</div>
                <div id="operations" class="itemName">操作</div>
            </div>
            <div class="listItemData">
                         
            </div>
            <div id="semePageList" class="easyui-pagination"></div>
        </div>
    </body>
</html>