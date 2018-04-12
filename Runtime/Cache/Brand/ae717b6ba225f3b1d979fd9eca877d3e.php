<?php if (!defined('THINK_PATH')) exit();?>	<?php if(is_array($mediaList)): foreach($mediaList as $key=>$media): ?><li>
                                <a href="#"><img src="/ftms/<?php echo ($media['thumb_img']); ?>" alt=""></a>
                                <p><?php echo ($media['title']); ?></p>
                                <span style="display: block"><?php echo ($media['date']); ?></span>
                            </li><?php endforeach; endif; ?>