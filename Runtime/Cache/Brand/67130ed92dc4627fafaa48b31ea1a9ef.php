<?php if (!defined('THINK_PATH')) exit(); if(is_array($infoList)): foreach($infoList as $key=>$list): ?><li>
								   <ul class="detail_list text_top">
									   <li class="font_style"><?php echo ($list['title']); ?></li>
									  <!--  <li class="font_style">-<?php echo ($list['summary']); ?></li> -->
									   <li class="date"><?php echo ($list['date']); ?></li>
									   <li><?php echo substr($list['text'],0,23)?>...</li>
									  <!--  <li>4300万的传奇销量...</li> -->
									   <li><a href="<?php echo U('detail?id='.$list['id']);?>"><button>查看详情</button></a></li>
								   </ul>
							   </li><?php endforeach; endif; ?>