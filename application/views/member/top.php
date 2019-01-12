<div class="top">
   <div class="top_left">后台中心</div>
   <ul class="top_right">
   <?php if(empty($this->member_info['username'])){?>
      <li><a href=""> <i class="fa ico11"></i> 返回首页</a></li>
     <li><a href="member/login/"> <i class="fa ico1"></i> 登陆</a></li>
     <li><a href="member/register/"><i class="fa ico2"></i> 注册</a></li>
   <?php }else{?>
       <li><a href=""> <i class="fa ico11"></i> 返回首页</a></li>
       <li><a href="member/"> <i class="fa ico12"></i> <?=$this->member_info['nickname']?></a></li>
       <li><a href="member/out_login/"> <i class="fa ico1"></i> 退出</a></li>
   <?php }?>
   </ul>

</div>