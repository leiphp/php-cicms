 <?php if($this->member_info['groupid']==1){?>
<div style="margin-top:20px;" class="sys_notice">
    您当前是普通会员，成为VIP会员即可享受我们的优惠，详情请联系我们的客服
</div>
<?php } ?>
 <?php if($this->member_info['groupid']==2 and $this->member_info['overdate']<time()){?>
<div style="margin-top:20px;" class="sys_notice">
     您的VIP账号已过期，为了您的正常使用，请您续费
</div>
<?php } ?>