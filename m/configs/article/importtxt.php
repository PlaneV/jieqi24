<?php
//瀵煎叆txt灏忚閰岖疆

//杩囨护html浠ｇ爜
$jieqiImporttxt['txtfilter'] = array('preg' => '/<([\x0A-\x3B\x3F-\x7F\x3D]|钬渱钬潀銆€)*>/', 'replace' => '');

//鍖归厤鍒嗗嵎鍚?
$jieqiImporttxt['volume'] = array('preg' => '/^\s*(绗?[0-9]|板秥涓€|浜寍涓垫锲泑浜攟鍏瓅涓亿鍏珅涔潀鍗?+鍗?*)$/', 'no' => 1, 'maxlen' => 60, 'tagmatch' => '/(绔爘鑺倈鍗穦璇?.*([0-9]|板秥涓€|浜寍涓垫锲泑浜攟鍏瓅涓亿鍏珅涔潀鍗?|([0-9]|板秥涓€|浜寍涓垫锲泑浜攟鍏瓅涓亿鍏珅涔潀鍗?.*(绔爘鑺倈鍗穦璇?/');

//鍖归厤绔犺妭鍚?
$jieqiImporttxt['chapter'] = array('preg' => '/^\s*(绗?[0-9]|板秥涓€|浜寍涓垫锲泑浜攟鍏瓅涓亿鍏珅涔潀鍗?+绔?*)$/', 'no' => 1, 'maxlen' => 60, 'tagmatch' => '/(绔爘鑺倈鍗穦璇?.*([0-9]|板秥涓€|浜寍涓垫锲泑浜攟鍏瓅涓亿鍏珅涔潀鍗?|([0-9]|板秥涓€|浜寍涓垫锲泑浜攟鍏瓅涓亿鍏珅涔潀鍗?.*(绔爘鑺倈鍗穦璇?/');


//杩囨护绔犺妭鍐呭涓殑骞垮憡鎴栨爣璁?
$jieqiImporttxt['chapterfilter'] = array();
?>