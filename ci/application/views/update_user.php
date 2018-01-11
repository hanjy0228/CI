<?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2018/1/11
 * Time: 10:35
 */
?>
<head>
    <base href="<?php echo site_url(); ?>">
</head>
<meta charset="utf-8">
<form action="user/update/<?php echo $user->id ?>" method="post">
    name:<input type="text" name="username" value="<?php echo $user->name?>">
    <input type="submit" name="sub" > 
</form>
