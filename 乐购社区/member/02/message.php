<?$nav = 'message'; ?><!DOCTYPE html><html lang="en"><head>    <meta charset="utf-8">    <title>平台短信-<?=$site_name?>    </title><meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="shortcut icon" href="<?=$site_ico?>"/>         <link href="http://assets.yilep.com/ylsq/assets/admin/css/animate.min.css" rel="stylesheet">    <link href="http://assets.yilep.com/ylsq/assets/admin/css/vendor-styles.css" rel="stylesheet"> <link rel="stylesheet" href="http://assets.yilep.com/ylsq/assets/layui/css/layui.mobile.css"> <link rel="stylesheet" href="http://assets.yilep.com/ylsq/assets/admin/css/styles.css"> <link href="http://assets.yilep.com/ylsq/css/admin/main.css?v=3.0.9" rel="stylesheet">           <style>        th {            text-align: center;        }        td {            text-align: center;        }	
	.table-bordered th{font-size:13px;}
.table-bordered td{font-size:13px;}
	
    </style>
     <style>
        th {
            text-align: center;
        }
        td {
            text-align: center;
        }
.table-bordered th{font-size:13px;}
.table-bordered td{font-size:13px;}
		
		
    </style>
    
</head>
<body class="overflow"  >
<div class="wrapper ">
    <? require_once('m_head.php');?>
 
 <div class="an-content-body" style="padding: 8px" id="pjax-container">
                    <div id="vue">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading bg-gradient-vine">
                        平台短信
                    </div>
                    
                    <div class="smart-widget-body table-responsive" style="overflow-y: hidden;">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>短信标题</th>
                            <th>发布时间</th>
                            <th>操作</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
//无任何条件搜索 
 if (  $_GET['date1']=='' and  $_GET['date2']==''    and  $_GET['key']==''   )	 
{	  $sql = 'select * from '.flag.'message   where zid = '.$zhu_id.'  order by norder desc , ID desc';}
//时间+搜索
elseif (   $_GET['date1']!='' and  $_GET['date2']!=''    and  $_GET['key']!=''   )	 
{	  $sql = 'select * from '.flag.'message  where   date >= "'.$_GET['date1'].'"   and  date <= "'.$_GET['date2'].'"  and  n_content like "%'.$_GET['key'].'%"   and zid = '.$zhu_id.'  order by norder desc , ID desc';}
 //只看时间
elseif (   $_GET['date1']!='' and  $_GET['date2']!=''    and  $_GET['key']==''   )	 
{	  $sql = 'select * from '.flag.'message  where   date >= "'.$_GET['date1'].'"   and  date <= "'.$_GET['date2'].'"   and zid = '.$zhu_id.'    order by norder desc , ID desc';}
 //只看搜索
elseif (   $_GET['date1']=='' and  $_GET['date2']==''    and  $_GET['key']!=''   )	 
{	  $sql = 'select * from '.flag.'message  where content like "%'.$_GET['key'].'%"    and zid = '.$zhu_id.'  order by norder desc , ID desc';}
 
 								$pager = page_handle('page',20,mysql_num_rows(mysql_query($sql)));
								$result = mysql_query($sql.' limit '.$pager[0].','.$pager[1].'');
							while($row= mysql_fetch_array($result)){
						
 						  	 $content=str_replace($_GET['key'],"<font color=red> ".$_GET['key']."</font>",$row['content']);
 							?>
                          <tr>
                            <td><a data-toggle="modal" data-target="#modal-sort" class="btn-xs btn-primary">
                              <?=$row['ID']?>
                            </a></td>
                             <td> <?=$row['name']?></td>
                            <td><?=$row['date']?></td>
                            <td> 
                               <a class="btn-xs btn-success"  href="javascript:void(0);" onclick="loadMessage(' <?=$row['ID']?>               ','<?=$row['content']?>                                      ','<?=$row['date']?>');">查看</a> 
 
</td>
              
                          </tr>
                          <? }?>
                        </tbody>
                      </table>
                    </div> 
                  <div class="smart-widget-footer text-center"><nav class="text-center"><ul class="pagination" style="display: -webkit-inline-box;">
                   <?php echo xiaoyewl_pape($pager[2],$pager[3],$pager[4],2);?> 
                 
                    
                    </ul></nav></div> </div> </div>  
                       
                       
        </div>
                    <div class="smart-widget-footer text-center">
                        <pagination ref="pagination" :total="total" :current_page="search.page"
                                    :page_size="search.pageSize"
                                    @page-phange="pageChange"></pagination>
                    </div>
          </div>
      </div>
  </div>
</div>
     <script language="javascript">
  
    
   
 function loadMessage($gname,$gcontent,$gdate) {
      
                 if ($gname != '') {
 			   document.getElementById("msg_bt").value = $gname;				
			   document.getElementById("msg_time").value = $gdate;				
			   document.getElementById("msg_info").value = $gcontent;				
 			   document.getElementById("modal-msg").style.display = "block";				
                   } 
				   else {
                 alert('查看失败:公告不存在!');
					  window.location.href = '/index/home/message/id/<?=$row['ID']?>.html';
                 }
            
	
 }
  function closemsg() 
  {document.getElementById("modal-msg").style.display = "none"; }
  
 </script>
 
 
 
 <div class="modal" id="modal-msg">
    <div class="modal-dialog">
        <div class="modal-content animated flipInX">
            <div class="modal-header">
                <button type="button" class="close" onClick="closemsg()"  data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <div class="modal-title"><h4>平台短信</h4></div>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="addForm">
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">发件人</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="1" style="resize:none" readonly id="msg_user">平台管理员</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">标题</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="1" style="resize:none" readonly id="msg_bt"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right">发送时间</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="1" style="resize:none" readonly id="msg_time"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">内容</label>
                        <div class="col-lg-9">
                            <textarea class="form-control" rows="8" style="resize:none" readonly id="msg_info"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white"   onClick="closemsg()"  data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
 <? require_once('m_footer.php');?>
  <? 
				  function xiaoyewl_pape($t0, $t1, $t2, $t3) {
	$page_sum = $t0;
	$page_current = $t1;
	$page_parameter = $t2;
	$page_len = $t3;
	$page_start = '';
	$page_end = '';
	$page_start = $page_current - $page_len;
	if ($page_start <= 0) {
		$page_start = 1;
		$page_end = $page_start + $page_end;
	}
	$page_end = $page_current + $page_len;
	if ($page_end > $page_sum) {
		$page_end = $page_sum;
	}
	$page_link = $_SERVER['REQUEST_URI'];
	$tmp_arr = parse_url($page_link);
	if (isset($tmp_arr['query'])){
		$url = $tmp_arr['path'];
		$query = $tmp_arr['query'];
		parse_str($query, $arr);
		unset($arr[$page_parameter]);
		if (count($arr) != 0){
			$page_link = $url.'?'.http_build_query($arr).'&';
		}else{
			$page_link = $url.'?';
		}
	}else{
		$page_link = $page_link.'?';
	}
	$page_back = '';
	$page_home = '';
	$page_list = '';
	$page_last = '';
	$page_next = '';
	$tmp = '';
	if ($page_current > $page_len + 1) {
		$page_home = ' <li class="disabled page-item"><a class="page-link" href="'.$page_link.$page_parameter.'=1" title="首页">首页</a></li>';
	}
	if ($page_current == 1) {
		$page_back = '';
	} else {
		$page_back = '<li class="page-item"><a class="page-link" href="'.$page_link.$page_parameter.'='.($page_current - 1).'" title="上一页">上一页</a></LI>';
	}
	for ($i = $page_start; $i <= $page_end; $i++) {
		if ($i == $page_current) {
			$page_list = $page_list.' <li class="active page-item"><a href="javascript:;" class="page-link">'.$i.'</a></li>';
		} else {
			$page_list = $page_list.'<li class="page-item"><a href="'.$page_link.$page_parameter.'='.$i.'" title="第'.$i.'页" class="page-link"> '.$i.'</a></LI>';
		}
	}
	if ($page_current < $page_sum - $page_len) {
		$page_last = '<li class="page-item"><a href="'.$page_link.$page_parameter.'='.$page_sum.'"  class="page-link" title="尾页">...'.$page_sum.'</a></li>';
	}
	if ($page_current == $page_sum) {
		$page_next = '';
	} else {
		$page_next = ' <li class="page-item"><a href="'.$page_link.$page_parameter.'='.($page_current + 1).'" title="下一页"  class="page-link">下一页</a></LI>';
	}
	$tmp = $tmp.$page_back.$page_home.$page_list.$page_last.$page_next.'';
	return $tmp;
}
?> 
 </body>
</html>