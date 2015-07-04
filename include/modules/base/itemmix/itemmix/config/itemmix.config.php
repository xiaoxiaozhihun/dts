<?php

namespace itemmix
{

$mixinfo = array
	( 
	array('class' => 'h', 'stuff' => array('杂炊','松茸'),'result' => array('松茸御饭','HS',120,2,),),
	array('class' => 'h', 'stuff' => array('咖喱','面包'),'result' => array('咖喱面包','HH',140,2,),),
	array('class' => 'h', 'stuff' => array('牛奶','立顿茶包','糯米丸子'),'result' => array('珍珠奶茶','HB',200,4,),),
	array('class' => 'h', 'stuff' => array('早苗面包','像围棋子一样的饼干','浓厚粘稠果汁','桔黄色的果酱'),'result' => array('KEY系儿童套餐','HB',333,9,),),
	array('class' => 'h', 'stuff' => array('针筒','疗伤药',),'result' => array('治疗针','HH',200,5,),),
	array('class' => 'h', 'stuff' => array('治疗针','体力回复药','蒸馏水'),'result' => array('特级恢复药','HB',120,2,),),	
	array('class' => 'h', 'stuff' => array('甜生姜','地雷酥糖'),'result' => array('曾经的荣光-橙黄','HB',50,1,),),
	array('class' => 'h', 'stuff' => array('曾经的荣光-橙黄','面包'),'result' => array('更改菜谱后的不甜酱包','HB',300,4,'Z'),),

	
	array('class' => 'wc', 'stuff' => array('汽油','空瓶'),'result' => array('☆火焰瓶☆','WC',80,50,'ud'),),	
	array('class' => 'wc', 'stuff' => array('幻之使魔','永恒之桶'),'result' => array('灵魂的结晶','WC',180,240,'rn'),),
	array('class' => 'wc', 'stuff' => array('幻符【杀人玩偶】','★时停怀表★','永恒飞刃'),'result' => array('幻葬『夜雾幻影杀人鬼』','WC',300,'∞','irnN'),),
	
	array('class' => 'wk', 'stuff' => array('针筒','毒药'),'result' => array('毒针','WK',32,20,'p'),),	
	array('class' => 'wk', 'stuff' => array('毒针','毒针'),'result' => array('D.毒针','WK',48,20,'p'),),
	array('class' => 'wk', 'stuff' => array('D.毒针','D.毒针','D.毒针'),'result' => array('D.D.D','WK',80,20,'pN'),),
	array('class' => 'wk', 'stuff' => array('西瓜','水果刀','磨刀石'),'result' => array('西瓜刀','WK',99,'∞','c'),),
	array('class' => 'wk', 'stuff' => array('白色的羽毛','白色的羽毛','白色的羽毛','白色的羽毛','白色的羽毛'),'result' => array('纯白片翼','WK',150,200,'ia'),),
	array('class' => 'hidden', 'stuff' => array('纯白片翼','纯白片翼'),'result' => array('纯白双翼','WK',150,200,'kb'),),
	array('class' => 'wk', 'stuff' => array('白色的羽毛','闪耀的羽毛','彩虹光芒的羽毛','翼人的羽毛'),'result' => array('悲叹片翼','WK',3200,200,'ai'),),
	array('class' => 'wk', 'stuff' => array('白色的羽毛','凤凰之羽','露琪亚之羽','绿宝石方块'),'result' => array('精灵片翼','WK',300,200,'uid'),),
	array('class' => 'wk', 'stuff' => array('『祝福宝石』','『风魔激光刃』'),'result' => array('Azurewrath','WK',122,122,'rci'),),
	array('class' => 'wk', 'stuff' => array('悲叹之种','Azurewrath'),'result' => array('憎恨裂片','WK',840,76,'rNce'),),
	array('class' => 'wk', 'stuff' => array('悲叹之种','☆碧藍怒火☆'),'result' => array('★憎恨裂片★','WK',1240,94,'ripe'),),
	array('class' => 'wk', 'stuff' => array('绿色方块','绿色方块'),'result' => array('沾满绿锈的铜刀','WK',52,52,'p'),),
	//直死属性尚未实现
	//array('class' => 'hidden', 'stuff' => array('沾满绿锈的铜刀','『祝福宝石』'),'result' => array('妖刀【飞叶】','WK',52,52,'Xrp'),),
	//array('class' => 'hidden', 'stuff' => array('妖刀【飞叶】','★全地图唯一的野生高伤阔剑地雷★'),'result' => array('影刀【秋岚】','WK',522,522,'Zrpd'),),
	array('class' => 'wk', 'stuff' => array('■DarthNote■','☆七星认证☆'),'result' => array('夜刀【月影】','WK',110,110,'r'),),
	array('class' => 'wk', 'stuff' => array('夜刀【月影】','悲叹之种'),'result' => array('疾风刀【里月影】','WK',570,240,'rd'),),
	array('class' => 'wk', 'stuff' => array('夜刀【月影】','《魔女的魔导书》'),'result' => array('破岩刀【焰】','WK',660,120,'Hd'),),
	array('class' => 'wk', 'stuff' => array('破岩刀【焰】','☆爆裂模式☆'),'result' => array('碎光之晓刀','WK',2000,3,'Hd'),),
	array('class' => 'wk', 'stuff' => array('夜刀【月影】','《曾伽·宗博尔特自传》'),'result' => array('七星刀【天权】','WK',777,777,'Nncr'),),
	//array('class' => 'wk', 'stuff' => array('飞龙刀【银】','悲叹之种','《曾伽·宗博尔特自传》'),'result' => array('氷刃【雪月花】','WK',1500,'∞','Znrik'),),
	array('class' => 'wk', 'stuff' => array('冰封的『Oathkeeper』','火把'),'result' => array('『Oathkeeper』','WK',300,10,'u'),),
	array('class' => 'wk', 'stuff' => array('冰封的『Oathkeeper』','解冻药水'),'result' => array('『Oathkeeper』','WK',300,10,'u'),),
	array('class' => 'wk', 'stuff' => array('冰封的『Oblivion』','火把'),'result' => array('『Oblivion』','WK',300,10,'i'),),
	array('class' => 'wk', 'stuff' => array('冰封的『Oblivion』','解冻药水'),'result' => array('『Oblivion』','WK',300,10,'i'),),
	array('class' => 'wk', 'stuff' => array('『Oathkeeper』','『Oblivion』'),'result' => array('『Two Become One』','WK',450,20,'ui'),),
	array('class' => 'wk', 'stuff' => array('悲叹之种','《曾伽·宗博尔特自传》','D.D.D','『Two Become One』'),'result' => array('『Last Remote』','WK',10000,1000,'ZNrfk'),),
	
	array('class' => 'wp', 'stuff' => array('电击鞭','原型武器P','实验装甲A','某种电子零件'),'result' => array('『T-LINK念动冲拳』','WP',180,50,'e'),),
	array('class' => 'wp', 'stuff' => array('☆电击器☆','原型武器P','实验装甲A','某种电子零件'),'result' => array('『T-LINK念动冲拳』','WP',240,50,'e'),),
	array('class' => 'wp', 'stuff' => array('『T-LINK念动冲拳』','某种机械设备','增幅设备'),'result' => array('『T-LINK天上天下念动连击拳』','WP',450,50,'erN'),),
	array('class' => 'wp', 'stuff' => array('冰沙','小棍棒','御神签'),'result' => array('冰棍棒','WP',19,29,'ir'),),
	array('class' => 'wp', 'stuff' => array('【北斗百裂拳】','《北斗神拳》'),'result' => array('【北斗有情破颜拳】','WP',390,100,'drn'),),
	array('class' => 'wp', 'stuff' => array('☆金属拳套☆','压缩气罐','★RPG-7★'),'result' => array('☆简易火箭飞拳☆','WP',160,'100','cd'),),
	array('class' => 'wp', 'stuff' => array('☆简易火箭飞拳☆','电磁发射装置'),'result' => array('★火箭飞拳★','WP',300,500,'cdN'),),
	array('class' => 'wp', 'stuff' => array('《哲♂学》','小棍棒','增幅设备'),'result' => array('森之妖精的棍棒','WP',200,60,'re'),),
	array('class' => 'wp', 'stuff' => array('『祝福宝石』','『心灵激光鞭』'),'result' => array('萨卡兰姆神圣棍棒','WP',150,140,'Nwc'),),
	array('class' => 'wp', 'stuff' => array('悲叹之种','萨卡兰姆神圣棍棒'),'result' => array('妖邪必败','WP',1540,200,'Nfc'),),
	array('class' => 'hidden', 'stuff' => array('悲叹之种','萨卡兰姆神圣钉棍棒'),'result' => array('妖邪必败','WP',1540,200,'Nfc'),),
	
	array('class' => 'wg', 'stuff' => array('『环形激光』','红宝石方块','原型武器G'),'result' => array('『红石光束炮』','WG',240,360,'ud'),),
	array('class' => 'wg', 'stuff' => array('老式火枪','原型武器G','某种电子零件'),'result' => array('★发条式突击步枪★','WG',150,100,'r'),),
	array('class' => 'wg', 'stuff' => array('『60mm火神炮』','鲨鱼鳍','原型武器G'),'result' => array('『迷你鲨』','WG',20,12,'r'),),
	array('class' => 'wg', 'stuff' => array('『120mm火神炮』','鲨鱼鳍','原型武器G'),'result' => array('『迷你鲨』','WG',30,12,'r'),),
	array('class' => 'wg', 'stuff' => array('『迷你鲨』','奇异甜食','某种电子零件'),'result' => array('『巨兽鲨』','WG',180,240,'rc'),),
	array('class' => 'wg', 'stuff' => array('『迷你鲨』','奇异甜食','非法枪械部件'),'result' => array('『加农鲨』','WG',1000,240,'dc'),),
	array('class' => 'wg', 'stuff' => array('喷雾器罐','打火机','汽油'),'result' => array('★简易火焰放射器★','WG',150,160,'uo'),),
	array('class' => 'wg', 'stuff' => array('★阔剑地雷★','电磁发射装置'),'result' => array('【定向阔剑发射器】','WG',810,1,'dNo'),),
	array('class' => 'wg', 'stuff' => array('★阔剑地雷★','【定向阔剑发射器】'),'result' => array('【定向阔剑发射器】','WG',810,1,'dNo'),),
	array('class' => 'wg', 'stuff' => array('★M-200狙击步枪★','电磁发射装置'),'result' => array('【磁轨狙击步枪】','WJ',240,6,'eno'),),
	array('class' => 'wg', 'stuff' => array('『高性能双重激光』','『高性能双重激光』','『高性能双重激光』'),'result' => array('☆金色闪光☆','WJ',700,1,'NS'),),
	array('class' => 'wg', 'stuff' => array('恐龙玩偶','天使玩偶','团子玩偶'),'result' => array('观铃的嘎哦嘎哦恐龙喷火分队','WG',333,10,'ufr'),),
	array('class' => 'wg', 'stuff' => array('水濑 名雪的半身像','立华 奏的半身像','冷冻光束枪'),'result' => array('佐佑理学姐的塑料水枪','WG',333,10,'ikr'),),
	array('class' => 'wg', 'stuff' => array('『高性能环形激光』','增幅设备','巨大透镜'),'result' => array('【质子撞击炮】','WG',450,300,'ud'),),
	array('class' => 'wg', 'stuff' => array('『高性能黑洞激光』','增幅设备','巨大透镜'),'result' => array('【重力冲击炮】','WG',450,300,'Nd'),),
	array('class' => 'wg', 'stuff' => array('『高性能双重激光』','增幅设备','巨大透镜'),'result' => array('【最终鬼畜兵器】','WG',640,300,'uNd'),),
	array('class' => 'wg', 'stuff' => array('【最终鬼畜兵器】','『奥丁巨核装备』','非法枪械部件'),'result' => array('【霜火协奏曲】','WG',1024,256,'rNuwde'),),
	//array('class' => 'wg', 'stuff' => array('诚实与魔法','忠诚与慷慨','善良与欢笑'),'result' => array('我剥光了小马才做出来的【彩虹光束炮】','WG',777,777,'uiwepd'),),
	
	array('class' => 'wd', 'stuff' => array('轻油','肥料'),'result' => array('火药','X',1,1,),),
	array('class' => 'wd', 'stuff' => array('信管','火药'),'result' => array('★炸药★','WD',160,60,'d'),),
	array('class' => 'wd', 'stuff' => array('导火线','火药'),'result' => array('★炸药★','WD',160,60,'d'),),
	array('class' => 'wd', 'stuff' => array('水','地雷'),'result' => array('水鸳鸯','WD',50,36,'d'),),
	array('class' => 'wd', 'stuff' => array('★炸药★','水鸳鸯'),'result' => array('★C4★','WD',250,20,'d'),),
	array('class' => 'wd', 'stuff' => array('探测器电池','打火机'),'result' => array('☆自爆电池☆','WD',140,32,'d'),),
	array('class' => 'wd', 'stuff' => array('☆自爆电池☆','电磁IED','脉冲防线'),'result' => array('脉冲蓄电池','WD',140,60,'ed'),),
	array('class' => 'wd', 'stuff' => array('☆自爆电池☆','辐射IED','★阔剑地雷★'),'result' => array('镭射蓄电池','WD',150,96,'ed'),),
	array('class' => 'wd', 'stuff' => array('伏特加','一杯八分满的啤酒'),'result' => array('深水炸弹『depth charge』','WD',133,45,'d'),),
	array('class' => 'wd', 'stuff' => array('深水炸弹『depth charge』','火药'),'result' => array('莫洛托夫鸡尾酒','WD',150,40,'ud'),),
	array('class' => 'wd', 'stuff' => array('咖啡酒','百利甜','伏特加'),'result' => array('奇怪的三色饮料','HB',133,2),),
	array('class' => 'wd', 'stuff' => array('奇怪的三色饮料','打火机','杯子'),'result' => array('B-52轰炸机','WD',160,35,'ud'),),
	array('class' => 'wd', 'stuff' => array('密封的酒瓶','★阔剑地雷★','莫洛托夫鸡尾酒'),'result' => array('烈焰风暴','WD',92,300,'urdZ'),),
	array('class' => 'wd', 'stuff' => array('密封的酒瓶','★阔剑地雷★','B-52轰炸机'),'result' => array('烈焰风暴','WD',92,250,'urdZ'),),
	array('class' => 'wd', 'stuff' => array('伏特加','柠檬汁','红石榴汁'),'result' => array('【烈焰红唇】','HB',233,2),),
	array('class' => 'wd', 'stuff' => array('【烈焰红唇】','密封的酒瓶'),'result' => array('★血腥玛丽★Bloody Mary','WD',310,150,'dw'),),
	array('class' => 'wd', 'stuff' => array('伏特加','牛肉汤','バカ⑨制冰块'),'result' => array('【燃烧的鸡尾酒】','HB',233,2),),
	array('class' => 'wd', 'stuff' => array('【燃烧的鸡尾酒】','密封的酒瓶'),'result' => array('★公牛子弹★Bull Shot','WD',210,300,'dr'),),
	array('class' => 'wd', 'stuff' => array('★血腥玛丽★Bloody Mary','★公牛子弹★Bull Shot','密封的酒瓶'),'result' => array('★血腥公牛★Bloody Bull','WD',520,450,'dwr'),),
	array('class' => 'wd', 'stuff' => array('☆自爆电池☆','★时停怀表★'),'result' => array('寒冰炸弹','WD',260,45,'i'),),
	array('class' => 'wd', 'stuff' => array('『祝福宝石』','★瓶装幽灵★','某种电子零件'),'result' => array('★幽灵冲击★','WD',320,200,'Nn'),),
	array('class' => 'wd', 'stuff' => array('★幽灵冲击★','《魔女的魔导书》','笔记本电脑'),'result' => array('奥术飞弹','WD',400,300,'Nnr'),),
	array('class' => 'wd', 'stuff' => array('寒冰炸弹','奥术飞弹','烈焰风暴'),'result' => array('★BIUBIUBIU★','WD',600,400,'ZnNdr'),),

	array('class' => 'w', 'stuff' => array('数据……碎片','电子马克笔','天然属性也是很可怕的！'),'result' => array('黑色夺魂曲','DB',57,77,'ZBb'),),
	array('class' => 'w', 'stuff' => array('『午夜钟声』','『午夜钟声』','『午夜钟声』'),'result' => array('电子马克笔','DA',53,75,'Z'),),
	
	array('class' => 'item', 'stuff' => array('生命探测器','增幅设备'),'result' => array('广域生命探测器','ER',1,1,2),),
	//array('class' => 'item', 'stuff' => array('☆自爆电池☆','☆★☆大打击☆★☆'),'result' => array('★捆绑式炸药★','Y',1,1,),),
	//array('class' => 'item', 'stuff' => array('早苗面包','仙贝面包','咖喱面包','红豆面包'),'result' => array('天然呆四面的奖赏','Z',1,1,'z'),),
	array('class' => 'item', 'stuff' => array('安雅人体冰雕','火把'),'result' => array('武器师安雅的奖赏','Y',1,1,),),
	array('class' => 'item', 'stuff' => array('安雅人体冰雕','解冻药水'),'result' => array('武器师安雅的奖赏','Y',1,1,),),
	array('class' => 'item', 'stuff' => array('手机','笔记本电脑'),'result' => array('移动PC','EE',1,1,),),
	array('class' => 'item', 'stuff' => array('原型武器G','原型武器C','某种电子零件'),'result' => array('电磁发射装置','X',1,1,''),),
	//array('class' => 'item', 'stuff' => array('风见 幽香的ID卡','坂持 金发的ID卡','御坂 美琴的ID卡'),'result' => array('游戏解除钥匙','Y',1,1,),),
	array('class' => 'item', 'stuff' => array('社员专用的ID卡','社员专用的ID卡','社员专用的ID卡'),'result' => array('游戏解除钥匙','Y',1,1,),),
	//array('class' => 'item', 'stuff' => array('古旧的ID卡','古旧的ID卡','古旧的ID卡','古旧的ID卡'),'result' => array('幻境配置终端','Y',1,1,),),
	//array('class' => 'item', 'stuff' => array('混乱的代码片段','混乱的代码片段','混乱的代码片段'),'result' => array('写着代码的小纸条','Y',1,1,),),
	//array('class' => 'item', 'stuff' => array('代码聚合体的ID卡','代码聚合体的ID卡'),'result' => array('幻境解离代码','Y',1,1,),),
	array('class' => 'item', 'stuff' => array('★荆棘式电子地雷★','★阔剑地雷★','★全图不唯一的野生巨大香蕉★'),'result' => array('★一发逆转神话★','TNc',1,1,'x'),),
	array('class' => 'item', 'stuff' => array('水','黑色雏菊','白色方块'),'result' => array('风祭河水','Y',1,1,'x'),),
	array('class' => 'item', 'stuff' => array('水','黑色方块','白色雏菊'),'result' => array('仪水镜','Y',1,1,'x'),),
	array('class' => 'item', 'stuff' => array('风祭河水','仪水镜','白色雏菊','黑色雏菊'),'result' => array('八咫镜','DH',1,1,'bx'),),
	
	array('class' => 'pokemon', 'stuff' => array('《小黄的草帽》','《小黄的钓鱼竿》','《小黄的行军靴》'),'result' => array('《小黄的精灵球》','WC',386,'∞','c',),),
	array('class' => 'pokemon', 'stuff' => array('《小黄的精灵球》','《小黄的收服特训》'),'result' => array('《小黄的超级球》','WC',233,'∞','Zir'),),
	array('class' => 'pokemon', 'stuff' => array('白色的羽毛','金色方块'),'result' => array('凤凰之羽','WK',20,200,'u'),),
	array('class' => 'pokemon', 'stuff' => array('白色的羽毛','银色方块'),'result' => array('露琪亚之羽','WK',50,200,'i'),),
	array('class' => 'pokemon', 'stuff' => array('《小黄的收服特训》','《小黄的超级球》','《小黄的常磐之力》'),'result' => array('《小黄的大师球》','WC',386,'∞','Zrd'),),
	//array('class' => 'pokemon', 'stuff' => array('凤凰之羽','《小黄的超级球》','《小黄的常磐之力》'),'result' => array('《小黄的大师球》','WC',386,'∞','ucrd'),),
	//array('class' => 'pokemon', 'stuff' => array('露琪亚之羽','《小黄的超级球》','《小黄的常磐之力》'),'result' => array('《小黄的大师球》','WC',386,'∞','icrd'),),
	array('class' => 'pokemon', 'stuff' => array('凤凰之羽','露琪亚之羽','《小黄的超级球》','《小黄的常磐之力》'),'result' => array('《小黄的大师球》','WC',386,'∞','Zcrd'),),
	
	array('class' => 'key', 'stuff' => array('月宫 亚由的半身像','神尾 观铃的半身像','古河 渚的半身像'),'result' => array('四季流转的咏叹调','WP',750,1,'N'),),
	array('class' => 'key', 'stuff' => array('天泽 郁末的半身像','长森 瑞佳的半身像','枣 铃的半身像'),'result' => array('旁观轮回的覆唱诗','WK',750,1,'n'),),
	array('class' => 'key', 'stuff' => array('神北 小毬的半身像','一之濑 琴美的半身像','SSS团长的半身像'),'result' => array('天然属性也是很可怕的！','WD',160,46,'zd'),),
	array('class' => 'key', 'stuff' => array('四季流转的咏叹调','旁观轮回的覆唱诗'),'result' => array('【KEY系催泪弹】','WD',3600,5,'zd'),),
	array('class' => 'key', 'stuff' => array('手机','二重战斗匕首','《ACFUN大逃杀攻略》','『寻星勇者』'),'result' => array('【KEY系未来弹】','WP',860,5,'zd'),),
	array('class' => 'key', 'stuff' => array('提示纸条K','提示纸条E','提示纸条Y','提示纸条D'),'result' => array('【KEY系生命弹】','WG',860,5,'zdr'),),
	array('class' => 'key', 'stuff' => array('水','黑色雏菊','白色雏菊','树叶'),'result' => array('生命之源','Z',1200,1,'z'),),
	array('class' => 'key', 'stuff' => array('生命之源','黑色方块','白色雏菊'),'result' => array('红色的丝带','DB',1200,1,'Aa'),),
	array('class' => 'key', 'stuff' => array('生命之源','黑色雏菊','白色方块'),'result' => array('红色的丝带','DA',1200,1,'Aa'),),
	array('class' => 'key', 'stuff' => array('生命之源','黑色方块','白色方块'),'result' => array('红色的丝带','WP',1200,1,'u'),),
	array('class' => 'key', 'stuff' => array('生命之源','黑色雏菊','白色雏菊'),'result' => array('红色的丝带','WK',1200,1,'N'),),
	array('class' => 'key', 'stuff' => array('红色的丝带','红色的丝带','生命之源'),'result' => array('【KEY系燃烧弹】','WF',4800,2,'Nuz'),),
	array('class' => 'key', 'stuff' => array('生命之源','对魔物用卵石'),'result' => array('舍身成就之羁绊','WCF',233,20,'Z'),),
	array('class' => 'key', 'stuff' => array('生命之源','二重战斗匕首'),'result' => array('微小日常之爱恋','WKG',233,20,'Z'),),
	array('class' => 'key', 'stuff' => array('生命之源','巨大路灯柱'),'result' => array('无尽散花之涅磐','WKP',233,20,'Z'),),
	array('class' => 'key', 'stuff' => array('生命之源','黑魔法-权利'),'result' => array('无法推卸的命运','WDG',233,20,'Z'),),
	array('class' => 'key', 'stuff' => array('生命之源','『9mm鲁格枪』'),'result' => array('破灭未来的残光','WKF',233,20,'Z'),),
	array('class' => 'key', 'stuff' => array('生命之源','红色的丝带'),'result' => array('来自未来的奇迹','WCP',233,20,'Z'),),
	array('class' => 'key', 'stuff' => array('生命之源','微小日常之爱恋'),'result' => array('该物品不存在！','ss',98,98,'Z'),),
	array('class' => 'key', 'stuff' => array('红色的丝带','红色的丝带','红色的丝带','红色的丝带','红色的丝带'),'result' => array('篝酱的奇迹☆丝带～刃','WK',4200,100,'cjN'),),

	
	array('class' => 'cube', 'stuff' => array('绿色方块','银色方块'),'result' => array('炙热的绶带','DH',180,80,),),
	array('class' => 'cube', 'stuff' => array('红色方块','黄色方块'),'result' => array('坚强戒指','DA',180,80,),),
	array('class' => 'cube', 'stuff' => array('金色方块','水晶方块'),'result' => array('活力之靴','DF',180,80,),),
	array('class' => 'cube', 'stuff' => array('红色方块','银色方块'),'result' => array('红宝石方块','X',1,1,),),
	array('class' => 'cube', 'stuff' => array('金色方块','绿色方块'),'result' => array('蓝宝石方块','X',1,1,),),
	array('class' => 'cube', 'stuff' => array('蓝色方块','黄色方块'),'result' => array('绿宝石方块','X',1,1,),),
	array('class' => 'cube', 'stuff' => array('红宝石方块','蓝宝石方块'),'result' => array('绿宝石方块','X',1,2,),),
	array('class' => 'cube', 'stuff' => array('绿宝石方块','黄色方块'),'result' => array('黄色的宝石枪','WG',240,180,'e'),),
	array('class' => 'cube', 'stuff' => array('绿宝石方块','红色方块'),'result' => array('红色的宝石刀','WK',240,180,'u'),),
	array('class' => 'cube', 'stuff' => array('绿宝石方块','蓝色方块'),'result' => array('蓝色的宝石锤','WP',240,180,'i'),),
	array('class' => 'cube', 'stuff' => array('绿宝石方块','绿色方块'),'result' => array('绿色的宝石镖','WC',240,180,'p'),),
	array('class' => 'cube', 'stuff' => array('绿宝石方块','金色方块'),'result' => array('金色的宝石炸弹','WD',240,180,'d'),),
	array('class' => 'cube', 'stuff' => array('绿宝石方块','银色方块'),'result' => array('银色的宝石符卡','WF',240,180,'w'),),
	array('class' => 'cube', 'stuff' => array('红色的宝石刀','悲叹之种'),'result' => array('★恐惧的黑色安息日★','WK',240,320,'rud'),),
	array('class' => 'cube', 'stuff' => array('银色的宝石符卡','悲叹之种'),'result' => array('★失落的银色镇魂歌★','WF',240,320,'rwd'),),
	array('class' => 'cube', 'stuff' => array('绿宝石方块','水晶方块'),'result' => array('水晶宝石盾','DA',240,180,'PC'),),
	array('class' => 'cube', 'stuff' => array('绿宝石方块','红宝石方块'),'result' => array('珍珠头盔','DH',360,180,'KDa'),),
	array('class' => 'cube', 'stuff' => array('绿宝石方块','蓝宝石方块'),'result' => array('钻石靴子','DF',360,180,'GFa'),),
	array('class' => 'cube', 'stuff' => array('红宝石方块','红色方块'),'result' => array('深红色的项链','A',240,180,'aM'),),
	array('class' => 'cube', 'stuff' => array('蓝宝石方块','蓝色方块'),'result' => array('蔚蓝色的项链','A',240,180,'Hc'),),
	array('class' => 'cube', 'stuff' => array('黄色方块','黄色方块','黄色方块'),'result' => array('★高压电击★','WD',122,251,'red'),),
	array('class' => 'cube', 'stuff' => array('红色方块','红色方块','红色方块'),'result' => array('★烈焰冲撞★','WP',122,122,'ru'),),
	array('class' => 'cube', 'stuff' => array('绿色方块','绿色方块','绿色方块'),'result' => array('★飞叶快刀★','WK',122,122,'Zrp'),),
	array('class' => 'cube', 'stuff' => array('蓝色方块','蓝色方块','蓝色方块'),'result' => array('★急冻光线★','WG',122,251,'ric'),),
	array('class' => 'cube', 'stuff' => array('金色方块','金色方块','金色方块'),'result' => array('★齿轮飞碟★','WC',122,386,'rd'),),
	array('class' => 'cube', 'stuff' => array('银色方块','银色方块','银色方块'),'result' => array('★精神破坏★','WF',122,122,'rw'),),
	array('class' => 'cube', 'stuff' => array('水晶方块','水晶方块','水晶方块'),'result' => array('★灭亡之歌★','TN',960,2,),),
	
	
	array('class' => 'wf', 'stuff' => array('空白符卡','☆博丽护符☆'),'result' => array('梦符『梦想妙珠』','WF',40,'∞','r'),),
	array('class' => 'wf', 'stuff' => array('空白符卡','☆山蘑菇粉☆'),'result' => array('星符『星尘狂欢』','WF',60,'∞','u'),),
	array('class' => 'wf', 'stuff' => array('空白符卡','☆守矢神签☆'),'result' => array('秘术『一子单传的弹幕』','WF',70,'∞','d'),),
	//array('class' => 'wf', 'stuff' => array('空白符卡','蘑菇','走失的猫咪'),'result' => array('萌符『菌菌喵』','WF',90,'∞','z'),),
	array('class' => 'wf', 'stuff' => array('空白符卡','★时停怀表★'),'result' => array('时符『Private Square』','WF',150,'∞','I'),),
	array('class' => 'wf', 'stuff' => array('空白符卡','★瓶装幽灵★'),'result' => array('幽鬼剑『妖童饿鬼之断食』','WF',150,'∞','c'),),
	array('class' => 'wf', 'stuff' => array('空白符卡','★伊吹瓢★'),'result' => array('鬼火『超高密度燐祸术』','WF',170,'∞','u'),),
	array('class' => 'wf', 'stuff' => array('空白符卡','《文文。新闻》'),'result' => array('风符『风神一扇』','WF',230,'∞','d'),),
	array('class' => 'wf', 'stuff' => array('空白符卡','★制御棒★','向日葵'),'result' => array('『地狱的人造太阳』','WF',522,'∞',),),
	array('class' => 'wf', 'stuff' => array('空白符卡','冰冻青蛙','バカ⑨制冰块'),'result' => array('冰符『Icicle Fall』','WF',9,'∞','ir'),),
	array('class' => 'wf', 'stuff' => array('冰符『Icicle Fall』','西瓜刀','冰棍棒'),'result' => array('曾经的荣光-深蓝','WF',99,'∞','cri'),),
	array('class' => 'wf', 'stuff' => array('空白符卡','【触手的萃取液】','《东方永夜抄》'),'result' => array('紫奥义『弹幕结界』','WF',320,'∞','rd'),),
	array('class' => 'wf', 'stuff' => array('时符『Private Square』','幻之刃','永恒飞刃','银色方块'),'result' => array('『咲夜的世界』','WF',150,'∞','irc'),),
	array('class' => 'wf', 'stuff' => array('『咲夜的世界』','鲜红的生血','灵魂的结晶'),'result' => array('『收缩的世界』','WF',450,'∞','irc'),),
	array('class' => 'wf', 'stuff' => array('幽鬼剑『妖童饿鬼之断食』','☆楼观剑☆','☆白楼剑☆'),'result' => array('空观剑『六根清净斩』','WF',360,'∞','rc'),),
	array('class' => 'wf', 'stuff' => array('蓝色方块','水','空白符卡'),'result' => array('水符「Princess Undine」','WF',30,'∞','iI'),),
	array('class' => 'wf', 'stuff' => array('红宝石方块','打火机','空白符卡'),'result' => array('火符「Agni Shine」','WF',40,'∞','uU'),),
	array('class' => 'wf', 'stuff' => array('绿宝石方块','空白符卡','树叶'),'result' => array('木符『Sylphy Horn』','WF',50,'∞','wWc'),),
	array('class' => 'wf', 'stuff' => array('蓝宝石方块','天然水','水符「Princess Undine」'),'result' => array('水符『Jerry Fish Princess』','WF',70,'∞','riI'),),
	array('class' => 'wf', 'stuff' => array('土符「Lazy Trilithon」','水符「Princess Undine」','空白符卡'),'result' => array('土&水符『Noachian Deluge』','WF',220,'50','ic'),),
	array('class' => 'wf', 'stuff' => array('黄色方块','岩石','空白符卡'),'result' => array('土符「Lazy Trilithon」','WF',100,'∞','c'),),
	array('class' => 'wf', 'stuff' => array('土符「Lazy Trilithon」','火符「Agni Shine」','岩石'),'result' => array('火&土符『Lava Cromlech』','WF',240,180,'d'),),
	array('class' => 'wf', 'stuff' => array('金色方块','电池','空白符卡'),'result' => array('金符「Metal Fatigue」','WF',130,'∞','eE'),),
	array('class' => 'wf', 'stuff' => array('水符「Princess Undine」','金符「Metal Fatigue」'),'result' => array('金&水符『Mercury Poison』','WF',94,'∞','paZ'),),
	array('class' => 'wf', 'stuff' => array('鲜红的生血','长矛','造雾设备'),'result' => array('神枪『Spear The Gungnir』 ','WF',5500,'1','c'),),
	array('class' => 'wf', 'stuff' => array('《东方幻想乡》','触手的力量','【触手的萃取液】'),'result' => array('梦幻『幻月』 ','WF',900,'∞','rdcm'),),
	array('class' => 'wf', 'stuff' => array('空白符卡','《魔女的魔导书》'),'result' => array('《魔导师速成攻略》','VF',233,'1',''),),
	array('class' => 'wf', 'stuff' => array('向日葵','☆残页的魔导书☆','空白符卡'),'result' => array('日符「Royal Flare」-劣','WF',80,'∞','dc'),),
	array('class' => 'wf', 'stuff' => array('月光碎片','☆残页的魔导书☆','空白符卡'),'result' => array('月符「Silent Serena」-劣','WF',40,'∞','rc'),),
	array('class' => 'wf', 'stuff' => array('日符「Royal Flare」-劣','《魔女的魔导书》'),'result' => array('日符「Royal Flare」','WF',270,'∞','udc'),),
	array('class' => 'wf', 'stuff' => array('月符「Silent Serena」-劣','《魔女的魔导书》'),'result' => array('月符「Silent Serena」','WF',120,'∞','irc'),),
	array('class' => 'wf', 'stuff' => array('月符「Silent Serena」','日符「Royal Flare」'),'result' => array('日&月符『Royal Diamond Ring』','WF',432,'∞','riud'),),
	array('class' => 'wf', 'stuff' => array('月符「Silent Serena」-劣','日符「Royal Flare」-劣'),'result' => array('日&月符『Royal Diamond Ring』-劣','WF',9,'9','rd'),),
	array('class' => 'wf', 'stuff' => array('金符「Metal Fatigue」','火符「Agni Shine」','《魔女的魔导书》'),'result' => array('火&金符『St. Elmo Pillar』','WF',330,'∞','ndfc'),),
	array('class' => 'wf', 'stuff' => array('水符『Jerry Fish Princess』','月符「Silent Serena」','消音器','天然水'),'result' => array('水&月符『Silent Deluge』','WF',233,'∞','kZz'),),
	array('class' => 'wf', 'stuff' => array('火符「Agni Shine」','水符「Princess Undine」','木符『Sylphy Horn』','金符「Metal Fatigue」','土符「Lazy Trilithon」'),'result' => array('火水木金土符『贤者之石』','WF',5000,'∞','uipwe'),),
	array('class' => 'wf', 'stuff' => array('月符「Silent Serena」','月符「Silent Serena」','火水木金土符『贤者之石』','金符「Metal Fatigue」'),'result' => array('月月火水木金金符『年中无休』（笑）','WF',65500,'∞','rd'),),
	array('class' => 'wf', 'stuff' => array('日&月符『Royal Diamond Ring』','梦幻『幻月』','神枪『Spear The Gungnir』','紫奥义『弹幕结界』'),'result' => array('模式『EX』','WF',72000,'∞','crdZ'),),
	//余辉尚未实现
	//array('class' => 'ocg', 'stuff' => array('八咫镜','★全图不唯一的野生巨大香蕉★'),'result' => array('【余晖】','WF',1,1,'x'),),
	
	array('class' => 'ocg', 'stuff' => array('「被封印的艾克佐迪亚」','「被封印者的左腕」','「被封印者的右腕」','「被封印者的左足」','「被封印者的右足」'),'result' => array('「被封印的黑暗大法师」','WC',8192,1,),),
	array('class' => 'ocg', 'stuff' => array('「被封印的黑暗大法师」','★神卡认证★'),'result' => array('『黑暗大法师』','WC12',8192,'∞','AaZ'),),
  array('class' => 'ocg', 'stuff' => array('「隼骑士」-仮','☆四星认证☆'),'result' => array('「隼骑士」','WC03',100,'∞','rj'),),
	array('class' => 'ocg', 'stuff' => array('「V-喷气虎」-仮','☆四星认证☆'),'result' => array('「V-喷气虎」','WC04',160,'180','p'),),
	array('class' => 'ocg', 'stuff' => array('「W-弹射飞翼」-仮','☆四星认证☆'),'result' => array('「W-弹射飞翼」','WC04',130,'150','u'),),
	array('class' => 'ocg', 'stuff' => array('「X-首领加农」-仮','☆四星认证☆'),'result' => array('「X-首领加农」','WC04',180,'150','i'),),
	array('class' => 'ocg', 'stuff' => array('「Y-龙头」-仮','☆四星认证☆'),'result' => array('「Y-龙头」','WC04',150,'160','e'),),
	array('class' => 'ocg', 'stuff' => array('「Z-金属履带」-仮','☆四星认证☆'),'result' => array('「Z-金属履带」','WC04',150,'130','w'),),
	array('class' => 'ocg', 'stuff' => array('「V-喷气虎」','「W-弹射飞翼」'),'result' => array('「VW-强击虎」','WC06',200,'∞','pu'),),
	array('class' => 'ocg', 'stuff' => array('「X-首领加农」','「Y-龙头」','「Z-金属履带」'),'result' => array('「XYZ-神龙炮」','WC08',280,'∞','iew'),),
	array('class' => 'ocg', 'stuff' => array('「VW-强击虎」','「XYZ-神龙炮」'),'result' => array('「VWXYZ-神龙强击炮」','WC08',320,'∞','puiew'),),
	array('class' => 'ocg', 'stuff' => array('「V-喷气虎」','「W-弹射飞翼」','「X-首领加农」','「Y-龙头」','「Z-金属履带」'),'result' => array('「VWXYZ-神龙强击炮」','WC08',450,'∞','puiew'),),
	array('class' => 'ocg', 'stuff' => array('「绝对防御将军」-仮','☆六星认证☆'),'result' => array('「绝对防御将军」','WC06',250,'∞','A'),),
	array('class' => 'ocg', 'stuff' => array('「人造人-念力震慑者」-仮','☆六星认证☆'),'result' => array('「人造人-念力震慑者」','WC06',240,'∞','NM'),),
	array('class' => 'ocg', 'stuff' => array('「恶魔召唤」-仮','☆六星认证☆'),'result' => array('「恶魔召唤」','WC06',250,'∞','c'),),
	array('class' => 'ocg', 'stuff' => array('「真紅眼黑龍」-仮','☆八星认证☆'),'result' => array('「真紅眼黑龍」','WC07',240,'∞','u'),),
	array('class' => 'ocg', 'stuff' => array('「真紅眼黑龍」','★神卡认证★'),'result' => array('「真紅眼闇龍」','WC09',2400,'∞','cruZ'),),
	array('class' => 'ocg', 'stuff' => array('「真紅眼黑龍」','「金属化·魔法反射装甲」'),'result' => array('「真紅眼黑龍鐵龍」','WC08',280,'∞','uA'),),
	array('class' => 'ocg', 'stuff' => array('「恶魔召唤」','「真紅眼黑龍」'),'result' => array('「暗黑魔龙」','WC09',320,'∞','cru'),),
	array('class' => 'ocg', 'stuff' => array('「左轮手枪龙」-仮','☆八星认证☆'),'result' => array('「左轮手枪龙」','WC07',260,'∞','r'),),
	array('class' => 'ocg', 'stuff' => array('「破龙剑士」-仮','☆八星认证☆'),'result' => array('「破龙剑士」','WC07',260,'∞','cC'),),
	array('class' => 'ocg', 'stuff' => array('「黑魔术师」-仮','☆八星认证☆'),'result' => array('「黑魔术师」','WC07',250,'∞','cC'),),
	array('class' => 'ocg', 'stuff' => array('「黑魔术师」','「破龙剑士」'),'result' => array('「超魔导剑士-黑暗帕拉丁」','WC08',300,'∞','crdZ'),),
	array('class' => 'ocg', 'stuff' => array('「青眼白龙」-仮','☆八星认证☆'),'result' => array('「青眼白龙」','WC08',300,'∞','d'),),
	array('class' => 'ocg', 'stuff' => array('「青眼白龙」','「青眼白龙」','【逆转的女神】'),'result' => array('「青眼究极龙」','WC10',450,'∞','crud'),),
	array('class' => 'ocg', 'stuff' => array('「奥西里斯之天空龙」-仮','★神卡认证★'),'result' => array('『奥西里斯之天空龙』','WC10',4000,'∞','AcreZ'),),
	array('class' => 'ocg', 'stuff' => array('「欧贝利斯克之巨神兵」-仮','★神卡认证★'),'result' => array('『欧贝利斯克之巨神兵』','WC10',4000,'∞','AcriZ'),),
	array('class' => 'ocg', 'stuff' => array('「太阳神之翼神龙」-仮','★神卡认证★'),'result' => array('『太阳神之翼神龙』','WC10',4000,'∞','AcruZ'),),
	array('class' => 'ocg', 'stuff' => array('『奥西里斯之天空龙』','『欧贝利斯克之巨神兵』','『太阳神之翼神龙』'),'result' => array('◎超次元机器人 银河破坏王◎','WC',65535,'∞','AcrdZ'),),
  array('class' => 'ocg', 'stuff' => array('「电子龙」-仮','☆五星认证☆'),'result' => array('「电子龙」 ★5','WC05',200,'∞','ej'),),
  array('class' => 'ocg', 'stuff' => array('「电子龙」 ★5','「电子龙」 ★5','「电子龙」 ★5'),'result' => array('「电子终结龙」','WC10',240,'∞','Nnrc'),),
  array('class' => 'ocg', 'stuff' => array('「电子终结龙」','「电子终结龙」','「电子终结龙」'),'result' => array('「电子天龙头」','WC10',1200,'∞','ZNnrc'),),
	array('class' => 'ocg', 'stuff' => array('「骷髅指挥」-仮','☆四星认证☆'),'result' => array('「骷髅指挥」 ★4','WC04',100,'∞','rj'),),
	array('class' => 'ocg', 'stuff' => array('「僵尸之主」-仮','☆四星认证☆'),'result' => array('「僵尸之主」 ★4','WC04',170,'90','pj'),),
	array('class' => 'ocg', 'stuff' => array('「死灵之颜」-仮','☆四星认证☆'),'result' => array('「死灵之颜」 ★4','WC04',170,'∞','ej'),),
	array('class' => 'ocg', 'stuff' => array('「吸血鬼领主」-仮','☆五星认证☆'),'result' => array('「吸血鬼领主」 ★5','WC05',200,'∞','Aaj'),),
	array('class' => 'ocg', 'stuff' => array('水灵使-艾莉娅 ★3','☆四星认证☆'),'result' => array('凭依装着-艾莉娅 ★4','WC04',160,'130','ij'),),
	array('class' => 'ocg', 'stuff' => array('火灵使-希塔 ★3','☆四星认证☆'),'result' => array('凭依装着-希塔 ★4','WC04',160,'160','uj'),),
	array('class' => 'ocg', 'stuff' => array('风灵使-薇茵 ★3','☆四星认证☆'),'result' => array('凭依装着-薇茵 ★4','WC04',160,'160','cj'),),
	array('class' => 'ocg', 'stuff' => array('暗灵使-达克 ★3','☆四星认证☆'),'result' => array('凭依装着-达克 ★4','WC04',160,'160','pj'),),
	array('class' => 'ocg', 'stuff' => array('地灵使-奥丝 ★3','☆四星认证☆'),'result' => array('凭依装着-奥丝 ★4','WC04',160,'160','wj'),),
	array('class' => 'ocg', 'stuff' => array('光灵使-莱娜 ★3','☆四星认证☆'),'result' => array('凭依装着-莱娜 ★4','WC04',160,'160','ej'),),
	array('class' => 'ocg', 'stuff' => array('凭依装着-达克 ★4','凭依装着-奥丝 ★4','凭依装着-莱娜 ★4'),'result' => array('友谊天使 ★4','WC04',100,'∞','pwe'),),
	array('class' => 'ocg', 'stuff' => array('凭依装着-艾莉娅 ★4','凭依装着-希塔 ★4','凭依装着-薇茵 ★4'),'result' => array('魔法幽灵 ★4','WC04',100,'∞','iuc'),),
	array('class' => 'hidden', 'stuff' => array('凭依装着-艾莉娅 ★4','凭依装着-希塔 ★4','凭依装着-薇茵 ★4','凭依装着-达克 ★4','凭依装着-奥丝 ★4','凭依装着-莱娜 ★4'),'result' => array('买力头破你~卖力头破你~','WC',450,'∞','uiewp'),),
	array('class' => 'ocg', 'stuff' => array('友谊天使 ★4','魔法幽灵 ★4'),'result' => array('卖力头破你','WC',233,'∞','uiewp'),),
	array('class' => 'ocg', 'stuff' => array('英豪冠军 草雉剑王','《曾伽·宗博尔特自传》'),'result' => array('英♂豪冠军 断♂肛♂剑♂王','WK',444,'∞','Znd'),),
	array('class' => 'ocg', 'stuff' => array('始祖守护者 提拉斯 ☆5 -仮','☆五星认证☆'),'result' => array('始祖守护者 提拉斯 ☆5','WC',222,'∞','fwi'),),
	array('class' => 'ocg', 'stuff' => array('流星龙 ★10 -仮','☆十星认证☆'),'result' => array('流星龙 ★10','WC10',700,'∞','crj'),),
	array('class' => 'ocg', 'stuff' => array('红莲魔龙 ★8 -仮','☆八星认证☆'),'result' => array('红莲魔龙 ★8','WC08',500,'25','cdu'),),
	array('class' => 'ocg', 'stuff' => array('红莲魔龙 ★8','☆爆裂模式☆'),'result' => array('真红魔龙/爆裂体 ★10','WC10',250,'∞','cdZ'),),
	array('class' => 'ocg', 'stuff' => array('星尘龙 ★8','☆爆裂模式☆'),'result' => array('星尘龙/爆裂体 ★10','WC10',627,'∞','mr'),),
	array('class' => 'ocg', 'stuff' => array('正义盟军 光明守望者 ★8 -仮','☆八星认证☆'),'result' => array('正义盟军 光明守望者 ★8','WC08',260,'∞','rZ'),),
	array('class' => 'ocg', 'stuff' => array('救世魔龙 -仮','☆十星认证☆'),'result' => array('「救世魔龙」 ★10','WC10',950,'∞','uf'),),
	array('class' => 'ocg', 'stuff' => array('救世星龙 -仮','☆十星认证☆','★神卡认证★'),'result' => array('『流天类星龙』 ★12','WC12',4000,'∞','mcrwZ'),),
	
	array('class' => 'hidden', 'stuff' => array('红宝石方块','蓝宝石方块','绿宝石方块','非法枪械部件'),'result' => array('『宝石光束炮-试作型』','WG',1800,144,'ndo'),),
	

	array('class' => 'hidden', 'stuff' => array('歌词卡片【海洋】','歌词卡片【大地】','歌词卡片【星空】'),'result' => array('破灭之诗','Y',1,1,95),),
	array('class' => 'hidden', 'stuff' => array('矿泉水','面包','女生校服'),'result' => array('Untainted Glory','A',1,1,'Z'),),
	array('class' => 'hidden', 'stuff' => array('矿泉水','面包','男生校服'),'result' => array('Untainted Glory','A',1,1,'Z'),),
	array('class' => 'hidden', 'stuff' => array('COCO☆酱','YES♂SIR','鼓舞士气的头带'),'result' => array('FFF团集体出动','WG',233,998,'BbdcN'),),
	array('class' => 'hidden', 'stuff' => array('武神之魂','琉璃血'),'result' => array('『C.H.A.O.S』','Y',1,1,),'karma1'=>'-500','karma2'=>'2000',),
	array('class' => 'hidden', 'stuff' => array('《黑熊语录》','琉璃血'),'result' => array('『C.H.A.O.S』','Y',1,1,),'karma1'=>'-500','karma2'=>'2000',),
	array('class' => 'hidden', 'stuff' => array('《董子语录》','琉璃血'),'result' => array('『C.H.A.O.S』','Y',1,1,),'karma1'=>'-500','karma2'=>'2000',),
	array('class' => 'hidden', 'stuff' => array('圣光啊!你有看到那个敌人吗！','琉璃血'),'result' => array('『C.H.A.O.S』','Y',1,1,),'karma1'=>'-500','karma2'=>'2000',),
	array('class' => 'hidden', 'stuff' => array('黑色碎片','十字发卡'),'result' => array('黑色发卡','X',1,1,),),
	array('class' => 'hidden', 'stuff' => array('『T.E.R.R.A』','『A.Q.U.A』','『V.E.N.T.U.S』'),'result' => array('『G.A.M.E.O.V.E.R』','Y',1,1,),),
	array('class' => 'hidden', 'stuff' => array('提示纸条K','提示纸条E'),'result' => array('提示纸条Y','WC',1,1,'zd'),),

	);
	
}

?>
