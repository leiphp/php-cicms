<?php $this->load->view('head')?>
<!--End  头部-->
<div id="ea_ba">
  <div id="xn_ba_js_1_banner" class="xn_ba_js_1_banner">
  <?php $nn=1; foreach($this->p->get_poster(29) as $v){?>
    <div class="xn_ba_js_1_element" frameindex="<?=$nn?>">
      <div class="xn_ba_js_1_bigImg"><a href="<?=$v['url']?>" target="_blank"><img src="<?=$v['image']?>"></a>
      </div>
    </div>
  <?php $nn++;}?>
    <ul class="xn_ba_js_1_btn">
    </ul>

  </div>
</div>
<!--End  banner-->

  <div id="ea_c">
    <div class="index_cnt">
      <div class="index_cnt_m">

        <div class="xn_c_index_275_wrap" id="xn_c_index_275_wrap">

          <div class="xn_c_index_275_topbox revealOnScroll fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
            <div class="xn_c_index_275_tb1">
              <span name="_index_275_tb1">产品中心</span>
            </div>
            <div class="xn_c_index_275_tb2">
              <span name="_index_275_tb2">Anti-fake label</span>
            </div>
          </div>
          <div class="xn_c_index_275_main">
            <div class="xn_c_index_275_tWrap">
              <ul class="xn_c_index_275_tUl revealOnScroll fadeInBottom" id="xn_c_index_275_tUl">
              <?php foreach ($cat[87]['child'] as $v){?>
                <li class="xn_c_index_275_tLi">
                  <div class="xn_c_index_275_tWrap1">
                    <a class="xn_c_index_275_tName1" target="_blank" href="<?=$v['url']?>"><?=$v['catname']?></a>
                  </div>                                    
                </li>
              <?php }?>
              </ul> 
            </div>
            <div class="xn_c_index_275_cWrap" id="xn_c_index_275_cWrap">
              <ul class="xn_c_index_275_cUl" id="xn_c_index_275_cUl">

                <li class="xn_c_index_275_cLi">
                  <ul class="xn_c_index_275_cMain">
                  <?php foreach($this->p->get_list(6,'product') as $v){ ?>
                    <li class="xn_c_index_275_items revealOnScroll fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
                      <div class="xn_c_index_275_cImg">
                        <a href="product/show/<?=$v['id']?>.html" target="_blank">
                          <img src="<?=$v['image']?>" alt="<?=$v['title']?>">
                        </a>
                      </div>                            
                      <div class="xn_c_index_275_cCont">
                        <a href="product/show/<?=$v['id']?>.html" target="_blank">
                          <span class="xn_c_index_275_cTitle">
                            <?=$v['title']?>
                          </span>
                        </a>
                      </div>  
                      <div class="clear"></div>                                 
                    </li>
                  <?php }?>
                  </ul>
                </li>                                 

              </ul>
            </div>
          </div>

        </div>
        <!--End  产品展示-->


        <div id="xn_c_index_48_wrap" class="xn_c_index_48_wrap">

          <div class="xn_c_index_48_wbox">
            <div class="xn_c_index_48_topbox revealOnScroll fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
              <div class="xn_c_index_48_sol_t1">
                <span name="_index_48_sol_t1">解决方案</span>
              </div> 
              <div class="xn_c_index_48_sol_t2"> 
                <span name="_index_48_sol_t2">Solution</span>
              </div>
            </div>
            <div class="xn_c_index_48_bigbox">
            <?php foreach($this->p->get_position(10,5) as $v){ ?>
              <div class="xn_c_index_48_nrbox revealOnScroll fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
                <div class="xn_c_index_48_title">
                  <a target="_blank" href="solution/show/<?=$v['id']?>.html"><?=$v['title']?> </a> 
                  <em></em>
                </div>
                <div class="xn_c_index_48_lftbox">
                  <a target="_blank" href="solution/show/<?=$v['id']?>.html"><img src="<?=$v['image']?>" /></a> 
                </div>
                <div class="xn_c_index_48_cont">
                  <span><?=$v['des']?></span>
                </div>
                <div class="xn_c_index_48_more">
                  <a target="_blank" href="solution/show/<?=$v['id']?>.html"></a>
                </div>
              </div>
            <?php }?>
            </div>
          </div>
        </div>
        <!--End  解决方案-->
        <div id="xn_c_index_507_wrap" class="xn_c_index_507_wrap">
                    
                    <div class="xn_c_index_507_topbox revealOnScroll fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
                        <div class="xn_c_index_507_cnName">
                            
                            <span name="_index_507_cnName">经典案例</span>
                            
                        </div>
                        <div class="xn_c_index_507_online">
                            
                            <span name="_index_507_online">Case</span>
                            
                        </div>
                    </div>
                    <div class="xn_c_index_507_inner revealOnScroll fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
                        <em class="xn_c_index_507_prev"></em>
                        <div class="xn_c_index_507_cbox">
                            <ul class="xn_c_index_507_ul">
                              <?php foreach($this->p->get_list(5,'anli') as $v){ ?>
                                <li class="xn_c_index_507_li">
                                  <div class="xn_c_index_507_img">
                                      <a target="_blank" href='anli/show/<?=$v['id']?>.html'>
                                           <img  src="<?=$v['image']?>" alt='<?=$v['title']?>' title='<?=$v['title']?>' />
                                      </a>
                                  </div>
                                  <div class="xn_c_index_507_title">
                                      <a target="_blank" href='anli/show/<?=$v['id']?>.html'>
                                          <span class="xn_c_index_507_title_wrap">
                                              <span class="xn_c_index_507_title_01">
                                              <?=$v['title']?>
                                              </span>
                                              <span class="xn_c_index_507_title_02" ej="edit_span">
                                                  <span id='xn_c_index_507_Data_ctl00_xn_c_index_507_Text4'><?=$v['des']?></span>
                                              </span>
                                          </span>
                                      </a>
                                  </div>
                                </li>
                              <?php }?>
                            </ul>
                        </div>
                        <em class="xn_c_index_507_next"></em>
                        <div id="xn_c_index_507_nums" class="xn_c_index_507_nums"></div>
                    </div>
                    <div class="xn_c_index_507_bottom"></div>
                    
                    
                </div>
        <!--End   经典案例-->
        <div id="xn_c_index_163_wrap" class="xn_c_index_163_wrap">

          <div class="xn_c_index_163_bigbox">
            <div class="xn_c_index_163_topbox revealOnScroll fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
              <div class="xn_c_index_163_cnName">
                <span name="_index_163_cnName">新闻中心</span>
              </div>
              <div class="xn_c_index_163_onLine">
                <span name="_index_163_onLine">News</span>
              </div>
            </div>
            <div class="xn_c_index_39_nrbox revealOnScroll fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
              <?php foreach($this->p->get_position(11,1) as $v){ ?>
                <div class="xn_c_index_39_nrboxsmall">
                  <div class="xn_c_index_39_lftbox revealOnScroll fadeInLeft" data-animation="fadeInLeft" data-timeout="300">
                     <a rel="nofollow" href="news/show/<?=$v['id']?>.html" target="_blank">
                      <img src="<?=$v['image']?>" alt="<?=$v['title']?>" title="<?=$v['title']?>" />
                    </a>
                  </div>
                  <div class="xn_c_index_39_ritbox revealOnScroll fadeInRight" data-animation="fadeInRight" data-timeout="300">
                    <div class="xn_c_index_39_title">
                      <a rel="nofollow" href="news/show/<?=$v['id']?>.html" target="_blank" title="<?=$v['title']?>"><?=$v['title']?></a>
                    </div>
                    <div class="xn_c_index_39_time">
                      <span class="xn_c_index_39_date1"><?=date('Y-m-d',$v['uptime'])?></span>
                    </div>
                    <div class="xn_c_index_39_coent" ej="edit_span">
                      <span><?=$v['des']?></span>
                    </div>
                    <div class="xn_c_index_39_more">
                      <a rel="nofollow" href="news/show/<?=$v['id']?>.html" target="_blank">
                      点击详情
                      </a>
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              <?php }?>
            </div>
            <div class="xn_c_index_163_contbox revealOnScroll fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
            <?php foreach($this->p->get_list(4,'news') as $v){ ?>
              <div class="xn_c_index_163_xhbox1">
                <div class="xn_c_index_163_ritbox">
                  <div class="xn_c_index_163_time">
                    <span class="xn_c_index_163_indYear"><?=date('Y',$v['uptime'])?></span>
                    <span class="xn_c_index_163_indMonth"><?=date('m-d',$v['uptime'])?></span>
                  </div>
                  <div class="xn_c_index_163_title">
                    <a rel="nofollow" href="news/show/<?=$v['id']?>.html" target="_blank" title="<?=$v['title']?>"><?=$v['title']?></a>
                  </div>
                  <div class="xn_c_index_163_more">
                    <a rel="nofollow" title="<?=$v['title']?>" href="news/show/<?=$v['id']?>.html" target="_blank"></a>
                  </div>
                </div>
              </div>
            <?php }?>
            <p class="clear"></p>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <!--End  新闻中心-->
        <div id="index_cnt_m_about" class="index_cnt_m_about">
          <div class="index_about_f">
            <div class="index_cnt_m_about_t fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
              <div class="i_about_t1">
                <span>爱搜客智能家居</span> 
              </div>
              <span class="i_about_t2">
                <span>About us</span>
              </span>
            </div>
            </div>
            <div class="index_cnt_m_about_cnt fadeInBottom" data-animation="fadeInBottom" data-timeout="300">

              <div class="i_about_img_pic revealOnScroll fadeInLeft" data-animation="fadeInLeft" data-timeout="300">
                <img class="i_about_img" src="upload/<?=$cat[71]['child'][82]['image']?>">
                <p>引 领 万 物 互 联 创 造 智 慧 未 来</p>
                <span>为 全 球 ⽤ 户 创 造 智 能 化 的 、 可 持 续 发 展 的 ⽣ 态 环 境 ⽽ 努 ⼒ 。</span>
              </div>

              <div class="i_about_cnt_wrap revealOnScroll fadeInRight" data-animation="fadeInRight" data-timeout="300">
                <div class="i_about_cnt">
                  <p><?=$cat[71]['child'][82]['content']?></p>
                </div>
                <div class="index_cnt_m_about_more"><a href="<?=base_url();?>article/71.html">点击详情</a></div>

              </div>
            </div>
          </div>
        <!--End  爱搜客智能家居-->
      </div>

      <div id="xn_c_index_266_wrap" class="xn_c_index_266_wrap">

         <div class="xn_c_index_266_topbox fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
         
          <div class="xn_c_index_266_cnname">
            <span name="_index_266_cnname">资质<br />荣誉</span>
          </div>
          <div class="xn_c_index_266_online">
            <span name="_index_266_online">Honor</span>
          </div>
          
        </div>
        <div id="xn_c_index_266_nrbox" class="xn_c_index_266_nrbox fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
          <div class="xn_c_index_266_cfInner">
            <ul id="xn_c_index_266_cfmain" class="xn_c_index_266_cfmain">
            <?php foreach($this->p->get_poster(34) as $v){?>
              <li class="xn_c_index_266_cfItem">
                <div class="xn_c_index_266_cfImg">
                  <img src="<?=$v['image']?>" alt="<?=$v['name']?>" title="<?=$v['name']?>" />
                </div>
              </li>
            <?php }?>
            </ul>
            <div class="clear"></div>
          </div>
        </div>
        <div class="xn_c_index_266_more fadeInBottom" data-animation="fadeInBottom" data-timeout="300">
          <a href="about.html" target="_blank"></a>
        </div>
      </div>
      <!--End  资质荣誉-->
</div>
    </div> 
<!--End  banner-->

<div id="ea_b">
  <div id="xn_c_69_wrap" class="xn_c_69_wrap">
    <div class="xn_c_69_wrap_jia">
      <div class="xn_c_69_topbox">

        <span name="_c_69_cnname|">友情链接：</span>

      </div>
      <div class="xn_c_69_nrbox">
      <?php foreach($this->p->get_links() as $v){?>
          <div class="xn_c_69_xhbox">
            <a  href="<?=$v['url']?>" target="_blank"><?=$v['name']?></a>
          </div>
      <?php }?>
      </div>
    </div>
  </div>
<?php $this->load->view('foot')?>
