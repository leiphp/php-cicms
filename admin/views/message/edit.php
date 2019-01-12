<?php $this->load->view('head');?>


<div class="pad-10">


<div class="cate_top">
    <a href="<?=base_url();?>index.php/message/" class="on text"><i></i>内容管理</a>
</div>
<div class="nav10"></div>
<table width="100%" class="table_form ">

<tr>
	<td colspan="2">留言者信息</td>
</tr>	  
      <tr>
        <th width="100">留言标题：</th>
		<td><?=$data['res']['title']?></td>
      </tr>
	  <tr>
        <th>联系人：</th>
        <td> <?=$data['res']['name']?></td>
      </tr>
      <tr>
        <th>IP地址：</th>
        <td> <?=$data['res']['ip']?></td>
      </tr>
	 <tr>
        <th>电话：</th>
        <td> <?=$data['res']['tel']?></td>
      </tr>
	  <tr>
        <th>地址：</th>
        <td> <?=$data['res']['address']?></td>
      </tr>
	 <tr>
        <th>留言内容：</th>
        <td> <?=$data['res']['content']?></td>
      </tr>
</table>

</div>
</body>
</html>





