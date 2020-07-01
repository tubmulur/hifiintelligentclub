<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class Player
	{
	private $arr;
	private $strHTML;
	private $strAudio;
	public function __construct($_objKIIM, $_strAudio)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->strAudio=base64_encode($_strAudio);
				        unset($_strAudio);
		//$this->arr=$_arrData;
		if(!empty($this->strAudio))
			{
			$this->strHTML='
			<ifReady
				class="block cursor no-select"
				onclick="objPlayer.play(this,\''.$this->strAudio.'\');"
				style="
					width		:46px;
					height		:44px;
					text-align	:center;
					background-color:#dddbdb;
					"
				>
				<ifOverload
					style="
						display:none;
						"
					>
					<ifEN>
						<marquee>Station overloaded. Please try another or less bitrate Kbps, this stations
						  sounds with less quality but  this is situable for slower internet.</marquee>
					</ifEN>
					<ifRU>
						<marquee>Станция  перегружена. Попробуйте другую или вырырайте станцию с меньшим качеством КБит/сек, 
						но годной для более медленного интернета.</marquee>
					</ifRU>
				</ifOverload>
				<recordAudioData
					class="block no-select border"
					style="
						text-align	:center;
						width		:42px;
						height		:42px;
						margin-top	:1px;
						margin-left	:1px;
						"
					>
					<recordLabel
						class="block border"
						style="
							color		: #000;
							/*background-color: #282828;*/
							background-color: #FFF;
							/*border-radius	: 100%;*/
							width		: 38px;
							height		: 38px;
							text-align	: center;
							line-height	: 36px;
							margin		: auto;
							margin-top	: 1px;
							padding		: 0;
							"
						>
						<ifEN
							title="Play station"
							>▷
						</ifEN>
						<ifRU
							title="Нажмите чтобы начать слушать радио."
							>▷
						</ifRU>
					</recordLabel>
				</recordAudioData>
			</ifReady>
			<ifPlaying
				class="block cursor no-select"
				onclick="objPlayer.stop();"
				style="
					color		:#000;
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					background-color:#cbdff4;
					"
				>
				<recordAudioData
					class="block no-select border"
					style="
						text-align	:center;
						width		:42px;
						height		:42px;
						margin-top	:1px;
						margin-left	:1px;
						"
					>
					<recordLabel
						class="block border"
						style="
							color		: #000;
							/*background-color: #282828;*/
							background-color: #FFF;
							/*border-radius	: 100%;*/
							width		: 38px;
							height		: 38px;
							line-height	: 36px;
							margin		: auto;
							margin-top	: 1px;
							padding		: 0;
							"
						>
						<ifEN
							title="Press to stop playing."
							>
							||
						</ifEN>
						<ifRU
							title="Нажмите чтобы остановить воспроизведение."
							>
							||
						</ifRU>
					</recordLabel>
				</recordAudioData>
			</ifPlaying>
			<ifLoadingAudio
				class="block cursor no-select"
				onclick="objPlayer.stop();"
				style="
					color		:#000;
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					background-color:#95bff2; 
					"
				>
				<recordAudioData
					class="block no-select border"
					style="
						text-align	:center;
						width		:42px;
						height		:42px;
						margin-top	:1px;
						margin-left	:1px;
						"
					>
					<recordLabel
						class="block border"
						style="
							color		: #000;
							/*background-color: #282828;*/
							background-color: #FFF;
							/*border-radius	: 100%;*/
							width		: 38px;
							height		: 38px;
							line-height	: 36px;
							margin		: auto;
							margin-top	: 1px;
							padding		: 0;
							"
						>'.
						VectorKIIM_elementWaiting4Event_statisticalMembrane::strHTML($objKIIM);
					'</recordLabel>
				</recordAudioData>
			</ifLoadingAudio>

			<ifNoConnection
				class="block cursor no-select"
				onclick="objPlayer.play(this,\''.$this->strAudio.'\');"
				style="
					color		:#000;
					display		:none;
					width		:100%;
					height		:100%;
					text-align	:center;
					background-color:rgba(255,255,255,0.82);
					"
				>
				<ifEN>
					<marquee>This  station is currently offline. Please try another one.</marquee>
				</ifEN>
				<ifRU>
					<marquee>"Эта радиостанция сейчас недоступна. Возможно она очень далеко, перегружена или отдыхает. 
					Пока станция недоступна, попробуйте послушать другую.</marquee>
				</ifRU>
				
			</ifNoConnection>';
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_strAudio)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$objShader=new Player($objKIIM, $_strAudio);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $objShader->strHTML;
		}
	public static function strIndicatorTop()
		{
		$str='
		<playerControlAlwaysVisible
			id="playerControlAlwaysVisible"
			class="left border-left border-right border-bottom no-select"
			style="	
				text-align	:center;
				height		:100%;
				width		:62px;
				background-color:#e3e3e3;
				margin-right	:1px;
			"
			>'.
			'<ifOverload
				class	="abs"
				style="
					display		:none;
					color		:#fff;
					background-color:red;
					height		:20px;
					line-height	:20px;
					width		:100vw;
					top		:20px;
					left		:0px;
					"
				>
				<ifEN>
					<marquee>This station rejects playing. May be this station is overload or your internet connection is not enoght. Can\'t stay connected. You can try to listen another station</marquee>
				</ifEN>
				<ifRU>
					<marquee>Не получается подключиться к выбранной радиостанции. Возможно станция перегружена или интернет канал слишком мал, чтобы воспроизводить выбранную станцию. Вы можете попробовать выбрать другую радиостанцию.</marquee>
				</ifRU>
			</ifOverload>
			<ifLoadingAudio
				class="block cursor layer_3_2 no-select"
				onclick="objPlayer.stop();"
				style="
					height		:20px;
					line-height	:20px;
					text-align	:center;
					display		:none;
					color		:#000;
					background-color:yellow;
					"
				>
				<ifRU>
					Стоп
				</ifRU>
				<ifEN>
					Stop
				</ifEN>
			</ifLoadingAudio>
			<ifLoadingAudio
				class="abs cursor layer_3_2 no-select"
				onclick="objPlayer.stop();"
				style="
					left		:0px;
					top		:20px;
					width		:100vw;
					height		:40px;
					line-height	:20px;
					text-align	:center;
					display		:none;
					background-color:yellow;
					"
				>
				<ifRU>
					<marquee>Подключаюсь к радиостанции.... Нажмите чтобы отменить загрузку.</marquee>
				</ifRU>
				<ifEN>
					<marquee>Loading.... Press to stop.</marquee>
				</ifEN>
				
			</ifLoadingAudio>
			<ifPlaying
				class="block cursor layer_3_2 no-select"
				onclick="objPlayer.stop();"
				style="
					color		:#fff;
					display		:none;
					height		:20px;
					line-height	:21px;
					text-align	:center;
					background-color:#6fb6ff;
					"
				>'.
				PlayerEventIndicator::strHTML().
				'<ifRU>
					Стоп
				</ifRU>
				<ifEN>
					Stop
				</ifEN>
			</ifPlaying>
			<ifPlaying
				id="playerControlAlwaysVisiblePlaying"
				class="abs cursor layer_3_2 select"
				onclick="objPlayer.stop();"
				style="
					left		:0;
					top		:20px;
					width		:100vw;
					color		:#fff;
					display		:none;
					height		:40px;
					line-height	:21px;
					text-align	:center;
					background-color:#6fb6ff;
					"
				>
				<ifRU>
					....
				</ifRU>
				<ifEN>
					....
				</ifEN>
			</ifPlaying>
			<ifNoConnection
				class="cursor layer_3_2 no-select"
				onclick="objPlayer.objAudio.play();"
				style="
					display		:none;
					height		:40px;
					line-height	:40px;
					text-align	:center;
					background-color:rgba(255,255,255,0.82);
					"
				>
			</ifNoConnection>
			<ifNoConnection
				class="abs cursor layer_3_2 no-select"
				onclick="objPlayer.objAudio.play();"
				style="
					top		:20px;
					left		:0px;
					display		:none;
					height		:40px;
					line-height	:40px;
					text-align	:center;
					background-color:rgba(245, 178, 178, 0.82);
					width		:100vw;
					"
				>
				<ifRU>
					<marquee>Радиостанция сейчас недоступна. Возможно она очень далеко, перегружена или отдыхает. 
					Попробуйте выбрать выбрать другую радиостанцию из списка.</marquee>
				</ifRU>
				<ifEN>
					<marquee>This station is currently offline. Please chose another station from station\'s list.</marquee>
				</ifEN>
			</ifNoConnection>
			<ifStopped
				class="block cursor layer_3_2 no-select"
				onclick="objPlayer.stop();"
				style="
					color		:#fff;
					display		:none;
					height		:20px;
					line-height	:21px;
					text-align	:center;
					background-color:#6fb6ff;
					"
				>'.
				PlayerEventIndicator::strHTML().
				'<ifRU>
					Остановлено
				</ifRU>
				<ifEN>
					Stoped
				</ifEN>
			</ifStopped>
			<ifStopped
				id="playerControlAlwaysVisibleStopped"
				class="abs cursor layer_3_2 select"
				onclick="
					objPlayer.objAudio.src			=b64clr(this.getAttribute(\'playerId\'));
					objPlayer.objAudio.play();
					"
				style="
					left		:0;
					top		:20px;
					width		:100vw;
					color		:#777;
					display		:none;
					height		:40px;
					line-height	:21px;
					text-align	:center;
					background-color:#FFF;
					"
				>
			</ifStopped>
		</playerControlAlwaysVisible>

		';
		$str.=Player::strInitJs();
		return $str;
		}
	public static function strInitJs()
		{
		$str='
		<script>
			var objPlayer=new Player();
			
			console.log(\'EDRO: Loaded player global control sensor+indicator (objPlayer.objVisibleControls)\');
		</script>
		';
		return $str;
		}
	public static function strDeclareJs()
		{
		?>
		<script>
		class Player
			{
			constructor()
				{
				console.log('[=^+v]EDRO: Run Player.constructor().');

				this.objAudio			=document.createElement('audio');
				this.strCurrentID		='';
				this.strPlayingID		='';
				this.strStationName		='';
				this.objAudio.crossorigin	="use-credentials";
				this.objVisibleControls		=document.getElementById('playerControlAlwaysVisible');
				this.objVisibleControlsPlaying	=document.getElementById('playerControlAlwaysVisiblePlaying');
				this.objVisibleControlsStopped	=document.getElementById('playerControlAlwaysVisibleStopped');
				this.objCurrentBlock;
				this.objPlayingBlock;
				this.bIzWhileHumanEvent		=false;
				this.bIzPlayedOnceEvent		=false;
				this.bIzNeedToBeStoppedEvent	=false;

				this.objAudio.onloadstart=function()
					{
					console.log('[=^]EDRO: Get PLayer.loadStart().');
					console.log(objPlayer.objAudio.readyState);
					objKIIM_StatisticalMembrane._incTime();
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('errorAudio');
					objPlayer.objVisibleControls.classList.remove('overload');
					objPlayer.objVisibleControls.className	+=' loadingAudio';
					objPlayer.objCurrentBlock.classList.remove('loadingAudio');
					objPlayer.objCurrentBlock.classList.remove('playing');
					objPlayer.objCurrentBlock.classList.remove('errorAudio');
					objPlayer.objCurrentBlock.classList.remove('overload');

					objPlayer.objCurrentBlock.className	+=' loadingAudio';
					console.log('[=^]EDRO: Finish get PLayer.loadStart().');
					objPlayer.bIzWhileHumanEvent=false;
					}
				this.objAudio.onwaiting=function()
					{
					console.log('EDRO: Get PLayer.onWaiting().');
					console.log('EDRO: Trying to load().');
					objPlayer.objAudio.load();
					objPlayer.bIzWhileHumanEvent=false;
					console.log('EDRO: Finish get PLayer.onWaiting().');
					}
				this.objAudio.oncanplay=function()
					{
					console.log('[^^]EDRO: Get PLayer.CanPlay().');

					console.log('[=>]EDRO: Run Player.webAudio.api.play() .');
					objPlayer.objAudio.play();

					console.log('EDRO: Finish get PLayer.CanPlay().');
					objPlayer.bIzWhileHumanEvent=false;
					}
				this.objAudio.oncanplaythrough=function()
					{
					objPlayer.bIzWhileHumanEvent=false;
					}
				this.objAudio.onplaying=function()
					{
					console.log('[=>]EDRO: Get PLayer.onPlaying().');
					objKIIM_StatisticalMembrane._stop();
					objPlayer.bIzPlayedOnceEvent=true;
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.className	+=' playing';

					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.className	+=' playing';
						}
					console.log('[=>]EDRO: Finish get PLayer.onPlaying().');
					objPlayer.bIzWhileHumanEvent=false;
					}
				this.objAudio.onpause=function()
					{
					console.log('[==]EDRO: Get Player.Pause()');
					//console.log(objPlayer.objAudio);
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('errorAudio');

					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						console.log('[==]EDRO: Finish currentBlock');
						objPlayer.objCurrentBlock.classList.remove('loadingAudio');
						objPlayer.objCurrentBlock.classList.remove('playing');
						objPlayer.objCurrentBlock.classList.remove('errorAudio');
						if(objPlayer.bIzWhileHumanEvent==false)
							{
							console.log('[==]EDRO: Finish currentBlock human event');
							if(objPlayer.bIzPlayedOnceEvent)
								{
								console.log('[=!]EDRO: Stop playing. Audio was playing, but we got unnormal stop event. We need to resume playing ');
								}
							objPlayer.objVisibleControls.className	+=' overload';
							objPlayer.objCurrentBlock.className	+=' overload';
							//objPlayer.objAudio.load();

							console.log('[=!^]EDRO: Run Player.webAudio.api.load(). Trying to fix connction autoatically.');
							objPlayer.objAudio.load();
							//objPlayer.objAudio.play();
							//objPlayer.play();
							}
						else //isHumanEvent
							{
							console.log('[==]EDRO: Finish get human event Player.Pause()');
							objPlayer.bIzNeedToBeStoppedEvent	=true;
							objPlayer.objAudio.src			='';
							}
						}
					console.log('[==]EDRO: Finish get Player.Pause()');
					objPlayer.objVisibleControls.className	+=' stopped';
					objPlayer.bIzWhileOnHumanEvent=false;
					}
				this.objAudio.onerror=function()
					{
					objKIIM_StatisticalMembrane._stop();
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('overload');
					console.log('[=?]EDRO: Get Player.error()');

					objPlayer.objPlayingBlock		=document.getElementById(objPlayer.strPlayingID);
					if(objPlayer.objPlayingBlock)
						{
						objPlayer.objPlayingBlock.classList.remove('loadingAudio');
						objPlayer.objPlayingBlock.classList.remove('playing');
						objPlayer.objPlayingBlock.classList.remove('overload');

						if(objPlayer.bIzNeedToBeStoppedEvent)
							{
							console.log('[==1]EDRO: Complete human event Player.Pause()');
							objPlayer.objPlayingBlock.classList.remove('errorAudio');
							objPlayer.objVisibleControls.className	+=' stopped';
							}
						else
							{
							console.log('[==]EDRO: get error event');
							objPlayer.objPlayingBlock.className	+=' errorAudio';
							}
						}
					if(objPlayer.bIzNeedToBeStoppedEvent)
						{
						console.log('[==2]EDRO: Complete human event Player.Pause()');
						objPlayer.objVisibleControls.classList.remove('errorAudio');
						objPlayer.bIzNeedToBeStoppedEvent=false;
						return true;
						}
					objPlayer.objVisibleControls.className	+=' errorAudio';
					if(objPlayer.bIzPlayedOnceEvent)
						{
						console.log('[=!^v]EDRO: Audio was playing, but connection was lost. Trying to fix connction error autoatically.');

						//console.log('EDRO: Run Player.webAudio.api.pause().');
						//objPlayer.objAudio.pause();

						console.log('[=^v+]EDRO: Run Player.webAudio.api.load(). Trying to resume. ');
						objPlayer.objAudio.load();
						
						}
					console.log('[=!^x]EDRO: Finish get Player.error(). Error is unfixable.');
					objPlayer.bIzWhileOnHumanEvent=false;
					}
				this.objAudio.onabort=function()
					{
					objKIIM_StatisticalMembrane._stop();
					console.log('[=x]EDRO: Get Player.abort()');
					console.log('[=x]EDRO: Finish get Player.abort().');
					objPlayer.bIzWhileHumanEvent=false;
					}
				console.log('[=^+v]EDRO: Finish run Player.constructor().');
				}
			play(obj, strAudio)
				{
				console.log('[=>]EDRO: Run Player.play().');
				objPlayer.objVisibleControlsPlaying.innerHTML='';
				objPlayer.bIzWhileHumanEvent	=true;
				objPlayer.bIzPlayedOnceEvent	=false;

				if(objPlayer.strPlayingID!=false)
					{
					objPlayer.objVisibleControls.classList.remove('stopped');
					objPlayer.objVisibleControls.classList.remove('playing');
					objPlayer.objVisibleControls.classList.remove('loadingAudio');
					objPlayer.objVisibleControls.classList.remove('errorAudio');
					objPlayer.objVisibleControls.classList.remove('overload');
					
					objPlayer.objPlayingBlock	=document.getElementById(objPlayer.strPlayingID);
					
					if(objPlayer.objPlayingBlock)
						{
						objPlayer.objPlayingBlock.classList.remove('overload');
						objPlayer.objPlayingBlock.classList.remove('playing');
						objPlayer.objPlayingBlock.classList.remove('loadingAudio');
						objPlayer.objPlayingBlock.classList.remove('errorAudio');
						}
					}
				objPlayer.objVisibleControls.className	+=' loadingAudio';

				//objPlayer.objCurrentBlock		=obj.parentNode.parentNode;
				if(typeof(obj)=='object')
					{
					let objStation				=obj.parentNode.parentNode.parentNode;
					objPlayer.strCurrentID			=objStation.id;
					objPlayer.objAudio.src			=b64clr(strAudio);
										objKIIM_StatisticalMembrane._start(objStation);
					}
				objPlayer.objCurrentBlock			=document.getElementById(objPlayer.strCurrentID);
				objPlayer.strStationName			=objPlayer.objCurrentBlock.getElementsByTagName('h2')[0].innerHTML;
				objPlayer.objVisibleControlsPlaying.innerHTML	=objPlayer.strStationName;
				objPlayer.objVisibleControlsStopped.innerHTML	=objPlayer.strStationName;
				objPlayer.objVisibleControlsStopped.setAttribute('playerId', strAudio);
				
				objPlayer.objCurrentBlock.className		+=' loadingAudio';
				
				objPlayer.strPlayingID				=objPlayer.strCurrentID;

				console.log('[>>]EDRO: Run Player.webAudio.api.load().');
				objPlayer.objAudio.load();

				console.log('[=>]EDRO: Finish run Player.play().');
				}
			stop(strIsHumanOr='Unknown')
				{
				console.log('[==]EDRO: Run Player.stop() .');
				objPlayer.bIzWhileHumanEvent		=true;
				objPlayer.bIzPlayedOnceEvent		=false;
				objPlayer.bIzNeedToBeStoppedEvent	=true;

				console.log('[=||]EDRO: Run Player.webAudio.pause() .');
				objPlayer.objAudio.pause();
				objPlayer.objAudio.src			='';

				console.log('[==]EDRO:Run Finish Player.stop() .');
				}
			updateOnReload()
				{
				console.log('[(><)]EDRO: Run Player.updateOnReload() .');
				if(objPlayer.objVisibleControls.classList.contains('playing'))
					{
					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objCurrentBlock.className	+=' playing';
						}
					}
				if(objPlayer.objVisibleControls.classList.contains('loadingAudio'))
					{
					objPlayer.objCurrentBlock	=document.getElementById(objPlayer.strCurrentID);
					if(objPlayer.objCurrentBlock)
						{
						objPlayer.objCurrentBlock.className	+=' loadingAudio';
						}
					}
				console.log('[(><)]EDRO: Finish run Player.updateOnReload() .');
				}
			}
		</script>
		<?php
		}
	}
?>