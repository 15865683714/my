<?php
#递归方法实现无限极分类
function getTree($list,$id=1,$level=0) {
    static $tree = array();
    foreach($list as $row) {
        if($row['parentid']==$id) {
            $row['level'] = $level;
            $tree[] = $row;
            getTree($list, $row['id'], $level + 1);
        }
    }
    return $tree;
}

