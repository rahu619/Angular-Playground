{"filter":false,"title":"update.php","tooltip":"/api/heroes/update.php","undoManager":{"mark":30,"position":30,"stack":[[{"start":{"row":0,"column":0},"end":{"row":6,"column":27},"action":"insert","lines":["<?php","","","$filename = '../../data/heroes.json';","$id= $_GET['id'];","$heroes = json_decode(file_get_contents($filename),true);","$key = getKey($heroes,$id);"],"id":1}],[{"start":{"row":6,"column":27},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"insert","lines":["",""]},{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":9,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["if(isset($key)){","       unset($heroes['heroes'][$key]);","       file_put_contents($filename, json_encode($heroes));","       ","   }"],"id":3}],[{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"remove","lines":["   unset($heroes['heroes'][$key]);",""],"id":4}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "],"id":5}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "],"id":6}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":3},"action":"remove","lines":["   "],"id":7}],[{"start":{"row":12,"column":1},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":14,"column":0},"end":{"row":22,"column":1},"action":"insert","lines":["function getKey($heroesArr, $value)","{","   foreach($heroesArr['heroes'] as $key => $hero)","   {","      if ($hero['id'] == $value )","         return $key;","   }","   return false;","}"],"id":9}],[{"start":{"row":9,"column":16},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"insert","lines":["$"],"id":12},{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"insert","lines":["h"]},{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"insert","lines":["e"]},{"start":{"row":11,"column":7},"end":{"row":11,"column":8},"action":"insert","lines":["r"]},{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["o"]},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["e"]},{"start":{"row":11,"column":10},"end":{"row":11,"column":11},"action":"insert","lines":["s"]}],[{"start":{"row":11,"column":4},"end":{"row":11,"column":11},"action":"remove","lines":["$heroes"],"id":13},{"start":{"row":11,"column":4},"end":{"row":11,"column":27},"action":"insert","lines":["$heroes['heroes'][$key]"]}],[{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"insert","lines":["="],"id":14}],[{"start":{"row":4,"column":17},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":17},"action":"insert","lines":["$id= $_GET['id'];"],"id":16}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":3},"action":"remove","lines":["id"],"id":17},{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"insert","lines":["n"]},{"start":{"row":5,"column":2},"end":{"row":5,"column":3},"action":"insert","lines":["a"]},{"start":{"row":5,"column":3},"end":{"row":5,"column":4},"action":"insert","lines":["m"]},{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"insert","lines":["e"]}],[{"start":{"row":5,"column":14},"end":{"row":5,"column":16},"action":"remove","lines":["id"],"id":18},{"start":{"row":5,"column":14},"end":{"row":5,"column":15},"action":"insert","lines":["n"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["a"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["m"]},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":[" "],"id":19},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["&"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["&"]}],[{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":[" "],"id":20},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["u"]}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"remove","lines":["u"],"id":21}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["i"],"id":22},{"start":{"row":11,"column":19},"end":{"row":11,"column":20},"action":"insert","lines":["s"]},{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":["s"]},{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":["e"]}],[{"start":{"row":11,"column":18},"end":{"row":11,"column":22},"action":"remove","lines":["isse"],"id":23},{"start":{"row":11,"column":18},"end":{"row":11,"column":23},"action":"insert","lines":["isset"]}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":25},"action":"insert","lines":["()"],"id":24}],[{"start":{"row":11,"column":24},"end":{"row":11,"column":29},"action":"insert","lines":["$name"],"id":25}],[{"start":{"row":13,"column":28},"end":{"row":13,"column":33},"action":"insert","lines":["$name"],"id":26}],[{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":[";"],"id":27}],[{"start":{"row":11,"column":32},"end":{"row":12,"column":4},"action":"remove","lines":["","    "],"id":28}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"remove","lines":["    "],"id":29}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":[" "],"id":30},{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":[" "]},{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"insert","lines":[" "]}],[{"start":{"row":12,"column":27},"end":{"row":12,"column":32},"action":"remove","lines":["$name"],"id":31},{"start":{"row":12,"column":27},"end":{"row":12,"column":57},"action":"insert","lines":["array(\"id\"=>$id,\"name\"=>$name)"]}],[{"start":{"row":11,"column":9},"end":{"row":11,"column":13},"action":"remove","lines":["$key"],"id":32},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["c"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":1},"end":{"row":15,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1542226842515,"hash":"a5364dee780b1632f68c8f8f9252c028ea21cea9"}