<?php
if(!defined('IN_GAME')) exit('Access Denied'); 
$tutorialsetting = Array(
	10 => Array(
		'tips' => '“能听到我说话吗？我是红杀菁英——<span class="yellow">芙蓉</span>。看起来你是个新手，如果你不想在这个虚拟世界中悲惨地死去，就给我好好听着。”<br>',
		'object' => 'continue',
		'obj2' => Array(
			'addnpc' => 91,
			'asub' => 0,
		),
		'pulse' => 'continue',
		'next' => 20
	),
	20 => Array(
		'tips' => '“画面上方是你的<span class="yellow">基本数据</span>；其中的<span class="yellow">人形状态条</span>代表你的<span class="yellow">SP和HP</span>。SP过低时你将无法进行一些行动，而HP归零即意味着你的<span class="red">死亡</span>。”<br>',
		'object' => 'continue',
		'pulse' => 'profile',
		'next' => 30
	),
	30 => Array(
		'tips' => '“画面下方是你目前的<span class="yellow">装备</span>和包裹里的<span class="yellow">道具</span>。它们对你能否在游戏中存活和获胜有重要的意义。”<br>',
		'object' => 'continue',
		'pulse' => 'packs',
		'next' => 40
	),
	40 => Array(
		'tips' => '“画面最下方是<span class="yellow">聊天框</span>。你可以在这里看到一些游戏状况提示，NPC的遗言，以及跟其他玩家互动交流。”<br>',
		'object' => 'continue',
		'pulse' => 'chat',
		'next' => 50
	),
	50 => Array(
		'tips' => '“而这里是<span class="yellow">操作框</span>，你会在这里发出大部分指令，并得到指令的反馈。”<br>',
		'object' => 'continue',
		'pulse' => 'cmd',
		'next' => 55
	),
	55 => Array(
		'tips' => '“进入游戏要做的第一件事，就是选择一个<span class="yellow">【内定称号】</span>。<br>大逃杀有24个内定称号，其中有……呃拿错台词了。不同的<span class="yellow">【内定称号】</span>对应着不同的技能、特色和发展方向，作为初学者，你暂时理解成某种<span class="yellow">‘专长’</span>就好。<br>现在点击<span class="yellow">【内定称号】</span>下拉列表，任选1个称号吧。”<br>',
		'object' => 'clubsel',
		'pulse' => 'clubsel',
		'next' => 60
	),
	60 => Array(
		'tips' => '“熟悉了游戏界面，也选好了称号，现在让我们迈出第一步。请点击<span class="yellow">【移动】</span>下拉列表，然后选择别的区域。”<br>',
		'object' => 'move',
		'obj2' => Array('leave'),
		'pulse' => 'moveto',
		'next' => 70		
	),
	70 => Array(
		'tips' => '“很好。移动需要消耗体力，所以请确保你体力充足。移动之后也可能遇到<span class="yellow">突发事件</span>甚至<span class="red">敌人</span>，不过这次没事。<br>除了移动之外，你还可以原地搜寻。请点击<span class="yellow">【搜寻】</span>按钮。”<br>',
		'object' => 'search',
		'obj2' => Array(
			'itm' => '充能手套',
			'itmk' => 'DA',
			'itme' => 45,
			'itms' => 15,
			'itmsk' => 'e'
		),
		'pulse' => 'zz',
		'next' => 80
	),
	80 => Array(
		'tips' => '“有时候会捡到不需要的道具，那种情况丢掉就好。不过你的腕部正缺防护，把这个手套<span class="yellow">捡起来</span>吧。”<br>',
		'object' => 'itemget',
		'obj2' => Array(
			'itm' => '电磁充能手套',
			'itmk' => 'DA',
			'itme' => 45,
			'itms' => 15,
			'itmsk' => 'E'
		),
		'prog' => '“如果你不小心丢弃了物品，在原地<span class="yellow">搜寻</span>有概率重新捡到。”<br>',
		'pulse' => 'z',
		'next' => 90
	),
	90 => Array(
		'tips' => '“搜寻是获得有用的装备或道具的重要方式之一。现在请再次点击<span class="yellow">【搜寻】</span>按钮。”<br>',
		'object' => 'search',
		'obj2' => Array(
			'meetnpc' => 91, 'meetsub' => 0,'active' => 0,'inf' => 'f','ex_inf' => 'p','always_hit' => 1
		),
		'pulse' => 'zz',
		'next' => 100
	),
	100 => Array(
		'tips' => '“哎呀，看来这次运气不好，你在探索时遭遇了一次袭击。”<br>',
		'object' => 'any',
		'obj2' => Array(
			'meetnpc' => 91, 'meetsub' => 0,'active' => 0,'inf' => 'f','ex_inf' => 'p'
		),
		'pulse' => 'z',
		'next' => 110
	),
	110 => Array(
		'tips' => '“嘛，在战场上难免遭遇敌人并受伤。如果不及时回复HP，情况就会很危险。<br>HP伤害需要使用<span class="yellow">【HP回复】</span>道具。首先点击<span class="yellow">【面包】</span>以使用之。”<br>',
		'object' => 'itm1',
		'obj2' => Array(
			'itmk' => Array('HH','HB'),
		),
		'pulse' => 'aa',
		'next' => 120
	),
	120 => Array(
		'tips' => '“然后直接点击人形状态条的<span class="red">【受伤部位】</span>进行<span class="yellow">包扎</span>。包扎需要消耗体力，请确保你的体力充足。”<br>',
		'object' => 'inff',
		'pulse' => 'inff',
		'prog' => '“如果已经包扎完了，请点击<span class="red">【强行继续】</span>”<br>',
		'next' => 130
	),
	130 => Array(
		'tips' => '“<span class="purple">【中毒】</span>属于异常状态，需要用对应的药剂进行处理。幸好你随身携带了万用的药剂。点击<span class="yellow">【紧急药剂】</span>以使用之。<br>除了紧急药剂以外，还有对应单个异常状态生效的药剂，实战时注意鉴别和收集，当然也可以在商店中买到。”<br>',
		'object' => 'itm3',
		'obj2' => Array(
			'itmk' => Array('Ca','Cp'),
		),
		'pulse' => 'dd',
		'prog' => '“如果已经处理完了，请点击<span class="red">【强行继续】</span>”<br>',
		'next' => 140
	),
	140 => Array(
		'tips' => '“很好，现在你从受伤状态完全恢复了。<br>除了使用道具之外，消耗<span class="lime">【技能点数】</span>或者<span class="lime">【静养】</span>一定时间也可以解除异常状态。<br>敌人还在当前地点，让我们去还击吧。点击<span class="yellow">【探索】</span>”<br>',
		'object' => 'search',
		'obj2' => Array(
			'meetnpc' => 91, 'meetsub' => 0,'active' => 1,'changehp' => 1,'always_hit' => 1
		),
		'pulse' => 'zz',
		'next' => 150
	),
	150 => Array(
		'tips' => '“这次你应该能够先手了。找到敌人的话，就点击具体的<span class="yellow">【攻击方式】</span>按钮。”<br>',
		'object' => 'kill',
		'obj2' => Array(
			'meetnpc' => 91, 'meetsub' => 0,'active' => 1,'changehp' => 1,'always_hit' => 1
		),
		'pulse' => 'z',		
		'prog' => '“错过攻击机会也没有关系，在原地<span class="yellow">搜寻</span>仍有机会发现同一个敌人。”<br>',
		'next' => 160
	),
	160 => Array(
		'tips' => '“不错，你干掉了这个陪练对象。<br>击杀敌方后，可以<span class="yellow">捡取</span>敌方尸体上的<span class="yellow">装备、道具或者金钱</span>。1次只能捡取<span class="yellow">1件</span>东西，其他东西则需要再次找到尸体才能捡。<br>请选择<span class="yellow">【金钱（具体钱数）】</span>然后<span class="yellow">【提交】</span>。”<br>',
		'object' => 'money',
		'pulse' => 'amoney',
		'prog' => '“拿了别的东西？没关系，在原地<span class="yellow">搜寻</span>仍有机会发现那具尸体。<br>不过，游戏进入<span class="red">【连斗】</span>阶段或者其他玩家将尸体销毁后，就没法再发现尸体了。<br>',
		'next' => 170
	),
	170 => Array(
		'tips' => '“获得金钱后，可以去<span class="yellow">【商店】</span>添置装备道具。<br>商店并非哪里都有，它只位于特定的两个地点。请先<span class="yellow">【移动】</span>到<span class="lime">【光阪高校】</span>或者<span class="lime">【花菱商厦】</span>。”<br>',
		'object' => 'move',
		'obj2' => Array('shop'),
		'pulse' => 'moveto',
		'next' => 180		
	),
	180 => Array(
		'tips' => '“然后点击<span class="yellow">【商店】</span>按钮。”<br>',
		'object' => 'sp_shop',
		'pulse' => 'c',
		'next' => 190		
	),
	190 => Array(
		'tips' => '“之后选择<span class="yellow">【锐器】</span>类别并<span class="yellow">【提交】</span>。”<br>',
		'object' => 'shop4',
		'pulse' => 'ashop4',
		'next' => 200		
	),
	200 => Array(
		'tips' => '“之后选择<span class="red">【红杀铁剑】</span>并购买吧。”<br>',
		'object' => 'itembuy',
		'obj2' => Array(
			'item' => '【红杀铁剑】'
		),
		'pulse' => 'a31',
		'next' => 202		
	),
	202 => Array(
		'tips' => '“这把剑显然比你的初始武器好多了，它不仅攻击力高，还附带有属性伤害的效果。<br><span class="lime">商店购买</span>、<span class="lime">地图探索</span>，或者拾取<span class="lime">战利品</span>，都有可能给你带来更好的武器，如何尽快获得高级武器是一门学问。”<br>',
		'object' => 'continue',
		'obj2' => Array(
			'addchat' => Array(
				Array(
					'type' => 5,
					'cname' => '',
					'crecv' => 'pid',
					'ccont' => '警告，以下区域即将成为禁区：pls'
				),
			),
		),
		'pulse' => 'continue',
		'next' => 204
	),
	204 => Array(
		'tips' => '“<span class="lime">聊天框</span>提示你所在的位置马上就要成为禁区了。如果禁区时间到时，你没有离开禁区所在地点，那么你会被<span class="red">【禁区杀】</span>。<br>马上点击<span class="yellow">【移动】</span>并离开这个区域！”<br>',
		'object' => 'move',
		'obj2' => Array(
			'leave',
			'addchat' => Array(
				Array(
					'type' => 5,
					'cname' => '',
					'crecv' => 'pid',
					'ccont' => '增加禁区：pls'
				),
				Array(
					'type' => 5,
					'cname' => '',
					'crecv' => 'pid',
					'ccont' => '游戏进入连斗阶段！'
				)
			),
		),
		'prog' => '“不要磨蹭，立刻离开这个区域！”<br>',
		'pulse' => 'moveto',
		'next' => 206
	),	
	206 => Array(
		'tips' => '“你及时躲过了禁区，干得好。此外，根据聊天框的讯息，游戏进入了<span class="yellow">【连斗阶段】</span>。<br><span class="yellow">【连斗】</span>之后，还存活的玩家必须厮杀到<span class="yellow">只剩1人幸存</span>为止，而那个幸存者将获得这场大逃杀的胜利。而且连斗后，除了击杀玩家或NPC那一刻之外，不能再遭遇尸体。”<br>',
		'object' => 'continue',
		'obj2' => Array(
			'addchat' => Array(
				Array(
					'type' => 3,
					'cname' => '各路党派 AC搬运职人',
					'crecv' => 'rpls',
					'ccont' => '我觉得我还可以抢救一下……'
				),
				Array(
					'type' => 3,
					'cname' => '各路党派 AC字幕职人',
					'crecv' => 'rpls',
					'ccont' => '我觉得我还可以抢救一下……'
				),
				Array(
					'type' => 3,
					'cname' => '各路党派 AC翻唱职人',
					'crecv' => 'pls',
					'ccont' => '我觉得我还可以抢救一下……'
				)
			),
		),
		'pulse' => 'continue',
		'next' => 210
	),
	210 => Array(
		'tips' => '“现在……等等，那是什么声音？”<br>',
		'object' => 'continue',
		'obj2' => Array(
			'addnpc' => 8,
			'asub' => 0,
		),
		'pulse' => 'continue',
		'next' => 220	
	),
	220 => Array(
		'tips' => '“<span class="yellow">【聊天记录】</span>会显示死去玩家和NPC的<span class="red">遗言</span>，看起来有另一个玩家开始屠杀NPC了，请务必小心行事。”<br>',
		'object' => 'search',
		'obj2' => Array(
			'meetnpc' => 8, 'meetsub' => 0,'active' => 0,'always_hit' => 1
		),
		'pulse' => 'chat',
		'next' => 230	
	),
	230 => Array(
		'tips' => '“他直接找到你了！战场上这很常见，高手玩家多半会使用生命探测器来判断你的位置。而且，看起来你们之间的实力差距相当之大。”<br>',
		'object' => 'any',
		'pulse' => 'z',
		'next' => 240	
	),
	240 => Array(
		'tips' => '“你受了很大伤害，<span class="red">原地不动容易遭到补刀！</span><br>点击<span class="yellow">【移动】</span>离开这个区域，然后伺机回复HP吧。”<br>',
		'object' => 'move',
		'obj2' => Array('leave'),
		'pulse' => 'moveto',
		'next' => 250	
	),
	250 => Array(
		'tips' => '“你受了很大伤害，<span class="red">原地不动容易遭到补刀！</span><br>点击<span class="yellow">【移动】</span>离开这个区域，然后伺机回复HP吧。”<br>',
		'object' => 'move',
		'obj2' => Array('leave'),
		'pulse' => 'moveto',
		'next' => 250	
	),
);
?>