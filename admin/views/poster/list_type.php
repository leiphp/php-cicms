<?php $this->load->view('head');?>
<div class="pad-10">

<div class="cate_top">
     <a href="<?=base_url();?>index.php/poster/list_type" class="on text"><i></i>内容管理</a>
     <span>|</span><a href="<?=base_url();?>index.php/poster/add_type" class="on add_to"><i></i>添加广告位</a> 
  </div>

<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%">
        <thead>
            <tr>
			  
               <th width="70">广告位ID</th>
			   <th width="150">广告位名称</th>
			   <th width="150">广告数目</th>
			    <th width="150">备注</th>
			  <th width="250">管理操作</th>
            </tr>
        </thead>
<tbody>     
<?php 

$this->load->model("Publicm");//加载公共模型
$this->p=$this->Publicm;//重命名公共模型
if(!empty($data['list'])){ foreach ($data['list'] as $v){?>
    <tr>
         <td align='center' ><?=$v['id']?></td>
		<td align='center' ><?=$v['name']?></td>
		<td align='center' ><?=$this->p->get_type_count($v['id'],$v['model'])?></td>
		<td align='center' ><?=$v['des']?></td>
		<td align='center' class="icon">
			<a class="list" href="<?=base_url();?>index.php/poster/lists/?catid=<?=$v['id']?>"><i></i>广告列表</a>
			<a class="modify" href="<?=base_url();?>index.php/poster/edit_type/<?=$v['id']?>"><i></i>修改</a>
			<a class="delete" onclick="return ConfirmDel();"  href="<?=base_url();?>index.php/poster/del_type/<?=$v['id']?>"><i></i>删除</a>
			<a class="add_to" href="<?=base_url();?>index.php/poster/add/<?=$v['id']?>"><i></i>添加广告</a>
		</td>
	</tr>

 <?php }}else{?>
				<tr>
					<td colspan="3">暂无数据！</td>
				</tr>	
	<?php } ?> 
    


     </tbody>
     </table>
     <div class="btn">

	</div>
            
        <div class="pages"><?=$pages?></div>
</div>
</form>
</div>
</body>
</html>
