<?php if (!defined('THINK_PATH')) exit(); if(is_array($newsList)): foreach($newsList as $key=>$news): ?><li>
                            <a href="zuixindongtai.html"><img src="/ftms/<?php echo ($news['thumb_img']); ?>" alt=""></a>
                            <p><?php echo ($news['title']); ?></p>
                            <span style="display: block"><?php echo ($news['date']); ?></span>
						</li><?php endforeach; endif; ?>