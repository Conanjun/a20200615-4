<?php /* -- enphp : https://git.oschina.net/mz/mzphp2 */ error_reporting(E_ALL^E_NOTICE);define('���', '�');��捎������Ϫ�����������������������ؔ����ќʡ����������������ú��׷���ٯ��ڼ̀��;$_GET[���] = explode('|||', gzinflate(substr('�      �VOo5?��H�m�Y��DI��(I���
2[���<���$M4�-���n�J���_�I��W�?��$9�������=OBS&hR�(�*o������.=,�6���T�x^��g��#Ow���u�7����b,�h!�]�j)5�T�r(��8.�d"���y���v�����ǲ@B��A�R�l��R��R9��� xHNhJ
n���k�A�3@�L�ʣ��v���#"NN�!Sw�����r4%p��5�����/�}��~����ˋ?yv�ůo~��?�>{��_?�x��ϋo:����˳߿����"�>���P�➆�h�,6@)5�HsrD���/ц�]�5R� ͉�~\'HN�QXќ����Fry<�#�l��l�(H0���#�Cb	��I��u�/)(�mj�HcΨ0K&�:�G6 �dB�fgQ�`W�����nS�m�\\=�L�#9�X��a!#F��.e�r��(��b`S{��6_>)��ae���:�FF��Wf0K\\��6�4�J�X�|���(���̔�&�7��sJ���*J�F��9˘�2���@T��Q:݃���3A�*St2^+��y����Z��v��1�\\�yf��eF����H�=�ؽ	%�n�YfGNBͤE��O��zX<$��~��f,yP��}�o�kNi~ž�N�wb������(#��+�ƒ)θ$��Sz�j,�b��(-� lOH$3՛��xک� a�r���ƌ�jn@+�N�I��"�ˤo����v��Y�]~fb�L�W�:k�6��l{{c޳�����;�cx��`�ḯ{m�Ef����_�(O��	I2&B��=�F+.&�у��n/��,�vT�d��]��G�[�{{�t��h�M
1>����(��[��[a���<�H;�r�V����5h{.�$`BuM4H�}���A�i��rۑ��W;�D8J�s�J�E��K��x�r��e;dkg�$e+l�^���
�DO(�U��K����+\\�ŨB���x�4At���$5+G��E;J�)�t�?{x�<O9��[ǝ.0�U��h9J�����2� g�x�-ֲP�g��w��յ-[�[�=4�/���.
  ',0x0a, -8)));�ӕ�����ߢҸق��������ڎ�Ő�����٧��̐��;
 if(!$_GET{���}[0]($_GET{���}{0x001})){exit($_GET{���}[0x0002]);}class db{private static $links=array();private static $configs=array();private static $link_name='default';private static $cur_link=null;private static $query_count=0;private static $log_slow_query=true;private static $log_slow_time=0.05;private static $cur_result=null;private static $results=array();public static $safe_test=true;public static $rps=array('/*','--','union','sleep','benchmark','load_file','outfile');public static $rpt=array('/×','——','ｕｎｉｏｎ','ｓｌｅｅｐ','ｂｅｎｃｈｍａｒｋ','ｌｏａｄ_ｆｉｌｅ','ｏｕｔｆｉｌｅ');public static $sql='';public static function set_connect($ӝ���,$�=array()){$��=&$_GET{���};$��{0x00003}($��[0x000004],URL,$��);self::$link_name=$ӝ���;if(!empty($�)){self::$configs[self::$link_name]=$�;}else{if(empty(self::$configs[self::$link_name])){throw new Exception($��{0x05});}}}public static function set_connect_default($���=''){$����=&$_GET{���};if(empty($���)){$���=self::$����[0x006]();}self::$����{0x0007}($����[0x00008],$���);}private static function _get_default_config(){$��=&$_GET{���};if(empty(self::$configs[$��[0x00008]])){if(!$��{0x000009}($GLOBALS[$��[0x0a]][$��{0x00b}])){$��[0x000c]($��{0x0000d},$��[0x00000e] .util::$��{0x0f}());}self::$configs[$��[0x00008]]=$GLOBALS[$��[0x0a]][$��{0x00b}];}return self::$configs[$��[0x00008]];���;}private static function _init_mysql($��=false){$��Ϲ=&$_GET{���};$���=self::$link_name==$��Ϲ[0x00008] ?self::$��Ϲ[0x006]():self::$configs[self::$link_name];if($��===!0){$�����=$��Ϲ[0x0010];$���=$��Ϲ{0x00011}($���[$��Ϲ[0x000012]][$��Ϲ{0x0000013}]);$��=$���[$��Ϲ[0x000012]][$��Ϲ{0x0000013}][$���];}else{$�����=$��Ϲ[0x014];$��=$GLOBALS[$��Ϲ[0x0a]][$��Ϲ{0x00b}][$��Ϲ[0x000012]][$��Ϲ{0x0015}];}if(empty(self::$links[self::$link_name][$�����])){try{self::$links[self::$link_name][$�����]=$��Ϲ[0x00016]($��,$���[$��Ϲ{0x000017}],$���[$��Ϲ[0x0000018]],$���[$��Ϲ{0x019}]);if(empty(self::$links[self::$link_name][$�����])){throw new Exception(mysqli_error());}else{$��=$��Ϲ[0x001a]($��Ϲ{0x0001b},$��Ϲ[0x00001c],$��Ϲ{0x000001d}($���[$��Ϲ[0x01e]]));$դ���=$��Ϲ{0x001f}(self::$links[self::$link_name][$�����],$��Ϲ[0x00020] .$��.$��Ϲ{0x000021} .$��.$��Ϲ[0x0000022]);}}catch(Exception$�����){$��Ϲ[0x000c]($��Ϲ{0x023},$�����->$��Ϲ[0x0024]().$��Ϲ{0x00025} .util::$��Ϲ{0x0f}());�����Ϲ�����܉����Ė���Ý���ݕ��������������ޚ�ߕ���Ɖ�䗤�����ܠ��鐡�;}}self::$cur_link=self::$links[self::$link_name][$�����];�Ĳ��ǫ����ֽ�³��đ;return self::$links[self::$link_name][$�����];}private static function _get_rsid($���=''){$��=&$_GET{���};$���=$��[0x000026]($���);�ϝ̫􋫷����;return $���==$��[0x00001c] ?self::$cur_result:self::$results[$���];������̝����ǐ��ݾ���;}public static function query($��,$�=false){$�����=&$_GET{���};$�=$�����{0x0000027}(!0);�ü���͏䕟����;if($��!=$�����[0x00001c]){self::$sql=$��;}$��=$�����[0x028]($��);if(self::$safe_test==!0){$��=self::$�����{0x0029}($��);}if($�===!0){self::$cur_link=self::$�����[0x0002a](!1);}else{if($�����{0x00002b}($�����{0x000001d}($��),0,0x001)===$�����[0x000002c]){self::$cur_link=self::$�����[0x0002a](!1);}else{self::$cur_link=self::$�����[0x0002a](!0);}}try{self::$cur_result=$�����{0x001f}(self::$cur_link,$��);���⿼�רի�ž���٤���;$�=$�����[0x000026](self::$cur_result);���َ����;self::$results[$�]=self::$cur_result;if(self::$log_slow_query){$���=$�����{0x0000027}(!0)-$�;if($���>self::$log_slow_time){self::$�����{0x02d}($��,$���);}}if(self::$cur_result===!1){throw new Exception(mysqli_error());return !1;}else{self::$query_count++;return self::$cur_result;}}catch(Exception$�ۇ){$�����[0x000c]($�����[0x002e],$�ۇ->$�����[0x0024]().$�����{0x0002f} .$��.$�����[0x000030] .util::$�����{0x0f}());���������ְ���������������Эӫ��ߐ������������埆ᇀ�������������������݊;}}public static function query_over($�){$���=&$_GET{���};self::$cur_link=self::$���[0x0002a](!1);if(self::$safe_test==!0){$�=self::$���{0x0029}($�);}$�=@$���{0x001f}(self::$cur_link,$�);return $�;}public static function insert_id(){return $_GET{���}{0x0000031}(self::$cur_link);}public static function affected_rows(){return $_GET{���}[0x032](self::$cur_link);}public static function num_rows($״���=''){$ß�=&$_GET{���};$״���=self::$ß�{0x0033}($״���);return $ß�[0x00034]($״���);�����ȁ��♳�����;}public static function fetch_one($Ԯ='',$��=MYSQLI_ASSOC){$��=&$_GET{���};$Ԯ=self::$��{0x0033}($Ԯ);$�=$��{0x000035}($Ԯ,$��);$�=self::$��[0x0000036]($�);@$��{0x037}($Ԯ);���雸�ϼ��ҷ��׽���㬣�֓��Ƒ�Óҭ����Ȇț�Բ������Ƿ�����Ä�񲮣�������������������̾;return $�;}public static function get_one($���,$�=MYSQLI_ASSOC){$���=&$_GET{���};if(!$���{0x00003}($���[0x0038],$���)&& !$���{0x00003}($���{0x00039},$���)){$���=$���[0x00003a]($���{0x000003b},$���[0x00001c],$���[0x028]($���)).$���[0x03c];}$�����=self::$cur_result;$���=self::$���{0x003d}($���,!1);��������ꅜ�đҳ�К;$ʔ���=$���{0x000035}($���,$�);��կ����̴��ԃ����ο�髕�ªԄ�;if(!empty($�����)){self::$cur_result=$�����;}$ʔ���=self::$���[0x0000036]($ʔ���);$���{0x037}($���);����ꁍ��������೩�����ޟ��К������ֿ��;return $ʔ���;}public static function querylist($�⊱){$�=&$_GET{���};$��=self::$�{0x003d}($�⊱);return self::$�[0x0003e]($��);}public static function queryone($���ʻ){$�ѝ��=&$_GET{���};$ᰥ�=self::$�ѝ��{0x003d}($���ʻ);$��=self::$�ѝ��{0x00003f}($ᰥ�);����碗����̌����ܙ�;return $��;}public static function query_f($�����){$�=&$_GET{���};$����=self::$�{0x003d}($�����);$��=self::$�{0x00003f}($����);���֒�񽛽������ꠏ���耓����������蝸����񫵤��;return $��;��������ߑ��眕й���ů��䊳�υݓܟ�ǈ���ِ����;}public static function fetch_all($��=''){$����=&$_GET{���};$��=self::$����{0x0033}($��);�ӡɈ�����ꦇ��Ϣ��������Ƿ;$�=$�=array();����ƃ��������ć������ࠩ��´���Ҧ���ɐ����������״�ɖ�򃴶���ծ��ɷ�����;while($�=$����{0x000035}($��,MYSQLI_ASSOC)){$�[]=$�;}$�=self::$����[0x0000036]($�);�ה���;$����{0x037}($��);�������Ռ���ƨ�����Һ�罃�������ΐ������������ݲ�ׅ���׮�諯�������ĭ��;return empty($�)?!1:$�;}public static function get_all($���){$�=&$_GET{���};$��=self::$�{0x003d}($���);$�=self::$�[0x0003e]($��);return empty($�)?!1:$�;�����پ��͛����٦�����;}private static function _filter_sql($З���){$��=&$_GET{���};$̄�=$�=$��[0x00001c];$�Ȇ��=0;��ǵԽ��;$����=-0x001;$���=util::$��[0x0000040]();������ߩ����ܘ���Ԭ����֚ʃ�Ȼ��;$����=util::$��{0x0f}();���˩��������̅�����ʖ�����������������몔����Ǘ���ΐ���؉�ט���;while(!0){$����=$��{0x041}($З���,$��[0x0042],$����+0x001);if($����===!1){break;}$̄�.= $��{0x00002b}($З���,$�Ȇ��,$����-$�Ȇ��);while(!0){$���=$��{0x041}($З���,$��[0x0042],$����+0x001);$���=$��{0x041}($З���,$��{0x00043},$����+0x001);��������ܖ굯�����������ޟ������������̀�����Ħ����莟����ِ������������񲍱;if($���===!1){break;}elseif($���==!1|| $���>$���){$����=$���;break;}$����=$���+0x001;}$̄�.= $��[0x000044];�܁�����;$�Ȇ��=$����+0x001;���������������ς������؅õؿ�ˋɷ�̄�;}$̄�.= $��{0x00002b}($З���,$�Ȇ��);���م�܏���Ց���Ǵ���ྻ�Ȉ���Ї���þ;$̄�=$��[0x028]($��{0x000001d}($��[0x00003a](array($��{0x0000045}),array($��[0x046]),$̄�)));$�=!1;��������瓙���Ʉ�����������������������ּ���;if($��{0x041}($̄�,$��{0x0047})>0x0002|| $��{0x041}($̄�,$��[0x00048])!==!1|| $��{0x041}($̄�,$��{0x000049})!==!1){$�=!0;$�=$��[0x000004a];}else{if($��{0x041}($̄�,$��{0x04b})!==!1&& $��{0x00003}($��[0x004c],$̄�)!=0){$�=!0;$�=$��{0x0004d};}elseif($��{0x041}($̄�,$��[0x00004e])!==!1&& $��{0x00003}($��{0x000004f},$̄�)!=0){$�=!0;$�=$��[0x050];}elseif($��{0x041}($̄�,$��{0x0051})!==!1&& $��{0x00003}($��[0x00052],$̄�)!=0){$�=!0;$�=$��[0x050];}elseif($��{0x041}($̄�,$��{0x000053})!==!1&& $��{0x00003}($��[0x0000054],$̄�)!=0){$�=!0;$�=$��{0x055};}elseif($��{0x041}($̄�,$��[0x0056])!==!1&& $��{0x00003}($��{0x00057},$̄�)!=0){$�=!0;$�=$��{0x055};}}if($�===!0){$З���=$��[0x000058](self::$rps,self::$rpt,$З���);return $З���;}else{return $З���;}}public static function revert($ٸ��){$ٸ��=$_GET{���}[0x000058](self::$rpt,self::$rps,$ٸ��);����񓞸�ΰ�缍��Ə������퉼�������┉����זƞ�����������������Ќ�����듚é���;return $ٸ��;}private static function _slow_query_log($����,$���){$À�=&$_GET{���};$����=$À�{0x0000059}(util::$À�{0x0f}());$�="Time: {$���} -- ".$À�[0x05a]($À�{0x005b},$À�[0x0005c]())." -- {$����}<br>\n".$À�{0x0000059}($����).$À�{0x00005d};log::$À�[0x000005e]($À�{0x05f},$�);�୨��������������Қ�˵�暓�����������������;}public static function autocommit($ҙ�=false){$��=&$_GET{���};self::$cur_link=self::$��[0x0002a](!0);$����=$ҙ�?0x001:0;return @$��{0x001f}(self::$cur_link,"SET autocommit={$����}");}public static function begin_tran(){$�����=&$_GET{���};self::$cur_link=self::$�����[0x0002a](!0);return @$�����{0x001f}(self::$cur_link,$�����[0x0060]);}public static function commit(){$��=&$_GET{���};return @$��{0x001f}(self::$cur_link,$��{0x00061});}public static function rollback(){$�����=&$_GET{���};return @$�����{0x001f}(self::$cur_link,$�����[0x000062]);�����˟���Ʒ��Ҿ�Ź��;}public static function update($�='',$��=NULL,$�����=NULL,$����=FALSE){$��=&$_GET{���};$��=self::$��{0x0000063}($��);if(empty($�����)|| $�����===!0){exit($��[0x064]);}$��=self::$��{0x0065}($�,$��);$����="UPDATE `{$�}` SET ";if(isset($��[$��[0x00066]])){unset($��[$��[0x00066]]);}foreach($�� as $��=>$�){if($��{0x000067}($��,array($��[0x0000068]))){$����.= "`{$��}` = {$�},";�������������;}else{$����.= "`{$��}` = \"{$�}\",";��톯❿����ԛ�;}}if(!$��{0x000009}($�����)){$�����=array($�����);}foreach($����� as $��=>$�){if(empty($�)){unset($�����[$��]);}}$�����=empty($�����)?$��[0x00001c] :$��{0x069} .$��[0x006a]($��{0x0006b},$�����);$����=$��{0x00002b}($����,0,-0x001).$�����;if($����){exit($����);}return self::$��{0x003d}($����);}public static function up($Ň='',$���=NULL,$����=NULL,$����=FALSE){$�����=&$_GET{���};$���=self::$�����{0x0000063}($���);���׵��ח����ɇֺՍ�ל��گ;if(empty($����)|| $����===!0){exit($�����[0x064]);}$���=self::$�����{0x0065}($Ň,$���);$�="UPDATE `{$Ň}` SET ";if(isset($���[$�����[0x00066]])){unset($���[$�����[0x00066]]);}foreach($��� as $���=>$����){if($�����{0x000067}($���,array($�����[0x0000068]))){$�.= "`{$���}` = {$����},";���鷂����嫾Ǉ��;}else{$�.= "`{$���}` = \"{$����}\",";�����;}}if(!$�����{0x000009}($����)){$����=array($����);}foreach($���� as $���=>$����){if(empty($����)){unset($����[$���]);}}$����=empty($����)?$�����[0x00001c] :$�����{0x069} .$�����[0x006a]($�����{0x0006b},$����);$�=$�����{0x00002b}($�,0,-0x001).$����;if($����){exit($�);}return self::$�����{0x003d}($�);}public static function insert($����='',$�ڧ£=NULL,$��=FALSE){$��=&$_GET{���};$�ڧ£=self::$��{0x0000063}($�ڧ£);$�ڧ£=self::$��{0x0065}($����,$�ڧ£);���;$�����=$��=$��[0x00001c];�����ǃ��Ƽ��������������㎸��Զ���؍��ɾ���ֻ���ج���ƨ�������ְ;foreach($�ڧ£ as $�Ѹ��=>$���){$�����.= "`{$�Ѹ��}`,";�������������ʔ���ʚ��ҕ��������µ��ɻ�����ܱ�����և������˖������;$��.= "\"{$���}\",";}$��="INSERT INTO `{$����}` (".$��{0x00002b}($�����,0,-0x001).$��[0x00006c] .$��{0x00002b}($��,0,-0x001).$��{0x000006d};if($��){exit($��);}if(self::$��{0x003d}($��)){$��=self::$��[0x06e]();if($��){return $��;}else{return !0;}}else{return !1;��Ս�ܜ�ܵ��������������������Ψ�;}}public static function ins($�='',$�=NULL,$��=FALSE){$��=&$_GET{���};$�=self::$��{0x0000063}($�);�����������ί�����ؕ蹞�۩�ۖ𜀓���셂��䨖�����ȴ��ے����Ԩ��Ĺ�ɼ����Ɠ�;$�=self::$��{0x0065}($�,$�);$���=$����=$��[0x00001c];foreach($� as $��=>$���){$���.= "`{$��}`,";������;$����.= "\"{$���}\",";��҃��Ӌ�����횝;}$����="INSERT INTO `{$�}` (".$��{0x00002b}($���,0,-0x001).$��[0x00006c] .$��{0x00002b}($����,0,-0x001).$��{0x000006d};if($��){exit($����);}if(self::$��{0x003d}($����)){$��=self::$��[0x06e]();if($��){return $��;}else{return !0;}}else{return !1;���������ʹ���쀉�����򖳢�;}}public static function get_fields($�,$���){$�=&$_GET{���};$���=array();��������䥼��ޗ��ԃ����������Ο�������˒�����������í;foreach($��� as $�ځ��=>$�����){$���[]=$�ځ��;����Ɔ֭����مٝ�������Ʉ�;}$��="DESC `{$�}`";self::$�{0x003d}($��);���;$����=self::$�[0x0003e]();$܍�=array();foreach($���� as $�ځ��=>$�����){if($�����[$�{0x006f}]!=$�[0x00070]){$܍�[$�����[$�{0x000071}]]=$�����[$�[0x0000072]]===NULL?$�[0x00001c] :$�����[$�[0x0000072]];}}$͝��=array();foreach($܍� as $�ځ��=>$�����){$͝��[]=$�ځ��;��̒�ڧ��;}$�����=$�{0x073}($���,$͝��);$���=array();foreach($����� as $�����){$���[$�����]=!isset($���[$�����])?$܍�[$�����]:$���[$�����];���;}return $���;��⑲���������䢏�ڷ������ڿ�ť��ם�廃�;}public static function strsafe($���){$��=&$_GET{���};$���=array();���׿��;if($��{0x000009}($���)===!0){foreach($��� as $�=>$ܮ�){if($��{0x000009}($ܮ�)===!0){$���[$�]=self::$��{0x0000063}($ܮ�);}else{$ܮ�=$��[0x0074]($ܮ�);$ܮ�=$��{0x00075}($ܮ�);$���[$�]=$ܮ�;}}return $���;����ț;}else{$���=$��[0x0074]($���);��퉆�������Ŏ�����Ɗ��������Ƭ�в�ۅ��;$���=$��{0x00075}($���);return $���;���ϵ�����;}}public static function strclear($����){$��=&$_GET{���};if($��{0x000009}($����)===!0){foreach($���� as $�=>$�){if($��{0x000009}($�)===!0){$����[$�]=self::$��[0x0000036]($�);}else{$�=$��[0x0074]($�);$����[$�]=$�;}}}elseif($��[0x000076]($����)){$����=$��[0x0074]($����);}return $����;}public static function get_table($�ɾ){$��=&$_GET{���};$��{0x00003}($��{0x0000077} .$��[0x078] .$��{0x0002f} .$��{0x0079} .$��{0x0002f} .$��[0x0007a] .$��{0x0002f} .$��{0x00007b} .$��{0x0002f} .$��[0x000007c] .$��{0x0002f} .$��{0x07d} .$��[0x007e],$�ɾ,$�);if($�){foreach($� as $����=>$��){if(!empty($��)&& $��{0x000067}($����,array($��{0x0007f},$��[0x000080],$��{0x0000081},$��[0x082],$��{0x0083},$��[0x00084]),!0)){$���=$��;break;}}if(empty($���)){}if($��{0x00003}($��{0x000085},$���,$݊)){$݊=$݊[$��[0x0000086]];$�=$��[0x001a]($��{0x087} .$݊,$��[0x00001c],$���);}else{$݊=!1;$�=$���;}return array($��[0x0088] =>$���,$��{0x00089} =>$�,$��[0x0000086] =>$݊);}return !1;}public static function get_last_sql(){return self::$sql;����̐�����֧���������咏ܢӭ�ᬚ���������ğ;}public static function table_exists($�Ӻ�){$�=&$_GET{���};$���=$�[0x00008a] .$�Ӻ�.$�[0x0042];db::$�{0x003d}($���);$�����=db::$�[0x0003e]();return empty($�����)?!1:!0;}}