<?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2018/1/11
 * Time: 14:05
 */?>
<head>
    <base href="<?php echo site_url(); ?>">
</head>
<meta charset="UTF-8">
<ul>
<?php  foreach ($list as $user){?>
    <li><?php echo $user->id.",".$user->name ?>
        <a href="user/del_user?id=<?php echo $user->id?>">删除</a>|
        <a href="user/updata_user?id=<?php echo $user->id?>">修改</a>
    </li>

    <?php }?>
</ul>