<?php 
    /*
        面向过程的方式，先访问数据库，获取数据。
        再显示到网页上。
        网页代码整体上大致呈现逻辑和显示的分离。
     */
    $conn = mysql_connect("localhost",'root','root');
    mysql_select_db('jytxl',$conn);
    $resultset = mysql_query("select * from member");

    //将结果集资源转换成二维数组，方便下面遍历
    while ($row = mysql_fetch_assoc($resultset)) {
        $arr[] = $row;
    }
    mysql_free_result($resultset);
    mysql_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>简易通讯录</title>
</head>
<body>
<table border="1" width="400">
    <?php foreach ($arr as $one): ?>
        
            <tr>
                <td><?=$one['name']?></td>
                <td><?=$one['telephone']?></td>
                <td><a href="lookinfo.php?id=<?=$one['id']?>">查看详情</a></td>
            </tr>        
    <?php endforeach ?>
</table>
</body>
</html>