<?php 
    /*
        获取数据的功能
     */
    function getMemberList()
    {
        $conn = mysql_connect("localhost",'root','root');
        mysql_select_db('jytxl',$conn);
        $resultset = mysql_query("select * from member");

        //将结果集资源转换成二维数组，方便下面遍历
        while ($row = mysql_fetch_assoc($resultset)) {
            $arr[] = $row;
        }
        mysql_free_result($resultset);
        mysql_close();
        return $arr;
    }

    
?>