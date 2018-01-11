<?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2018/1/11
 * Time: 14:05
 */?>
<meta charset="UTF-8">
<ul>
<?php  foreach ($list as $user){?>
    <li><?php echo $user->id.",".$user->name ?></li>

    <?php }?>
</ul>