<?php
require('include/header.inc.php');
/*
  <#日期 = "2017-2-19">
  <#时间 = "7:30:41">
  <#人物 = "buff" >
  <#备注 = " ">
 */
?>
<div id="HTML5">
    <h2>HTML 5</h2>
    <div>
        <p>
            <span class='red'>文字方向属性 dir='ltr|rtl'</span><br/>
            也可以用css的direction : rtl | ltr 代替 <br/>
            <span class='purple'>这里是将块改变书写方向,如果改变每个字的输出方向用&lt;bdo&gt;<br/>
                在块元素中使用direction:right 跟使用text-align:center 效果一样.
            </span>
        </p>
        <div id="ltr_or_rtl">
            <p dir="ltr" >这段文本是从左到右 </p>
            <p style="text-align: right;" >这段文本是从右到左 </p>
            <p class="rtl">这段文本是从右到左</p>
            <p class="rtl">
                <bdo>这段文本是从右到左
                    <bdo class="blue ltr">这里用 &lt;bdo &gt;又改成左了12345</bdo>
                </bdo>
            </p>
        </div><hr/>
    </div>

    <div>
        <p>
            <span class='red'>清除浮动 clear:left | right | both</span><br/>
            <span class='purple'>浮动元素自动被设置为block,块元素可以设置宽高,行内元素不能设置高 比如span</span>
        </p>
        <div id="clear_float">
            <div id="float_l_first"></div><br style="clear: both;"/>
            <div id="float_r_first"></div><br style="clear: both;"/>
        </div>
        <p>
            <span>这里粉红色的div设置float:left 然后通过他后面的 &lt;br &gt; clear:both 设置清除向左的浮动,并使div重回流中,然后撑开div <br/></span>
            <span>这里必须要用&lt;br &gt; 或者&ltp&gt;等块级元素才能让旁边的div撑开div,不能使用span等行内元素<br/></span>
            <span>这里蓝色的div设置float:right 然后通过他后面的 &lt;br &gt; clear:both 设置清除向右的浮动,并使div重回流中,然后撑开div</span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span><span class="red">注释 </span>: &lt;!-- -- &gt;<br/></span>
            <span>
                <span class="red mar_l_30">ie特有判断注释</span>
                <span>: &lt;!--[if lte IE 9]> statements &lt;![end if] -- &gt;如果小于或等于ie 9 输出下面的语句,否则注释掉<br/></span>
                <span>lte：小于或等于 就是Less than or equal to的简写<br/></span>
                <span>lt ：小于 就是Less than的简写<br/></span>
                <span>gte：大于或等于 就是Greater than or equal to的简写<br/></span>
                <span>gt ：大于 就是Greater than的简写<br/></span>
                <span>!  ：非 就是不等于的意思<br/></span>
            </span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span><span class='red'>标记一个缩写</span> &lt;abbr&gt;</span>
            <span>
                <abbr title="Asynchronous JavaScript and XML">AJAX</abbr>
                <span class="purple">是一个缩写,虽然看起来没有软用,可以用span代替,但是这可以对浏览器拼写检查以及搜索引擎提供有用的信息</span>
            </span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span><span class='red'>上下标记字</span> &lt;sub&gt; &lt;sup&gt;<br/></span>
            <span>
                <span>这里跟着一个上标字<sup>2017-2-19</sup>,我觉得可以用于提示 <br/></span>
                <span>这里跟着一个下标字<sub>22:06</sub></span><br/>
            </span>
            <span><span class='red'>删除字和插入字(下划线字)</span> &lt;del&gt;&lt;ins&gt;<br/></span>
            <span>
                <span>你没有听错,不要<del>998</del>只要<ins>98</ins><br/></span>
            </span>
            <span><span class='red'>突出显示文本</span> &lt;mark&gt;<br/></span>
            <span>
                <span>黄鹤不是人,欠下<mark>3.5个亿</mark>,带着他的小姨子跑路了<br/></span>
            </span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span><span class='red'>度量器</span> &lt;meter&gt;
                <span class='purple'>IE不支持只会输出meter标签之间的内容</span><br/></span>
            <span>这是一个百分之66点度量器<meter value="0.66">66%</meter><br/>
            </span>
            <span><span class='red'>进度条</span> &lt;meter&gt;
                <span class='purple'>IE9之前不支持</span><br/></span>
            <span>这是一个百分之29的进度条<progress value="0.29">29%</progress><br/>
                <span>这是一个未定义数值的进度条,会显示进行中<progress>进行中...</progress><br/>
                </span>
            </span>
            <span><span class='red'>加拼音符号</span> &lt;ruby&gt;定义字符串&lt;rt&gt;定义字符串的注音</span>
            <ruby>我是中文<rt>wo shi zhong wen</rt></ruby>
        </p>
        <div id="wbr">
            <span><span class='red'>智能换行</span> &lt;wbr&gt; 不会让单词被分割<wbr/>Asynchronous</span>
        </div>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>表单 &lt;form&gt;</span><br/>
            <span class="blue  mar_l_30">自动完成 </span>
            <span>autocomplete='off/on'就是刷新或者返回后是否还保存刚刚数据 建议关闭<br/></span>
            <span class="blue mar_l_30">表单发送数据编码格式 </span>
            <span>enctype= <br/></span>
            <span>application/x-www-form-urlencoded :默认值 进行编码,空格变成+ 特殊符号转换为 ASCII HEX 值 <br/></span>
            <span class="purple">中文也会进行编码,但是传入服务器时候自动解码了,传入服务器还是中文 <br/></span>
            <span>text/plain :只把空格变成+ 其他不编码 <br/></span>
            <span>multipart/form-data :不编码,包含上传文件时必须使用此编码方式<br/></span>
            <span class='blue  mar_l_30'>novalidate='novalidate'<br/></span>
            <span>不进行格式验证,比如表单内有email 格式的,如果设置不验证,随便怎么输入都能发送出去 <br/></span>
            <span><span class='blue mar_l_30'>target</span> 目标的打开位置,_blank,_parent,或者框架名等等<br/></span>
        </p>
        <hr/>
        <p>
            <span class='red'>输入类型&lt;input&gt;</span><br/>
            <span class="blue mar_l_30">接受文件类型 </span>
            <span>accept='image/gif, image/jpeg, image/png'就是只可以上传这三种类型图片<br/></span>
            <span class="blue mar_l_30">自动获得焦点 </span>
            <span>autofocus='autofocus' 页面加载刷新时自动获得焦点<br/></span>
            <span class="blue mar_l_30">加载自动选取 </span>
            <span>checked='checked'适用于复选框 单选框<br/></span>
            <span class="blue mar_l_30">禁用元素 </span>
            <span>disabled='disabled' 可见而不可选<br/></span>
            <span class="blue mar_l_30">引用预定的datalist </span>
            <span>list='datalist的id' 个人主页那里可以看到<br/></span>
            <span class="blue mar_l_30">输入最大长度 </span>
            <span>maxlength='num' 只能输入多少个字符<br/></span>
            <span class="blue mar_l_30">可接收多个文件 </span>
            <span>multiple='multiple' 用于文件上传 下拉选择框也可以用<br/></span>
            <span class="blue mar_l_30">规定输入匹配正则表达式 </span>
            <span>pattern='1[3|5|7|8]\d{9}' 匹配手机号码<br/></span>
            <span class="blue mar_l_30">提示输入文字 </span>
            <span>placeholder='something'<br/></span>
            <span class="blue mar_l_30">设置内容为只读 </span>
            <span>readonly='readonly'<br/></span>
            <span class="blue mar_l_30">设置内容为必填 </span>
            <span>required='required'<br/></span>
        </p>
        <hr/>
        <p>
            <span class='red'>下拉选择框 &lt;select&gt;<br/></span>
            <span class="blue mar_l_30">选项</span> 
            <span>option<br/></span>
            <span class="blue mar_l_30">选项组</span> 
            <span>&lt;optgroup lable='名称' value=''&gt;<br/></span>
        </p>
        <hr/>
        <p>
            <span class='red'>下拉数据列 &lt;datalist&gt;</span><br/>
            <span>与option list 搭配使用</span>
        </p>
        <hr/>
        <p>
            <span class='red'>文本域&lt;textarea &gt;</span><br/>
            <span class="blue mar_l_30">行 clos='' 列='rows'</span><br/>
            <span class="blue mar_l_30">提交时保留换行</span> 
            <span> wrap=soft(默认不保留换行)|hard 保留换行<br/></span>
            <span class="blue mar_l_30">调整文本域权限</span> 
            <span> resize:none 禁止调整 both:可调整宽高 horizontal:可调整宽度 vertical:可调整高度<br/></span>
        </p>
        <hr/>
    </div>

    <div>
        <form id="form" action="process/form_pro.php" method="post">
            <h3 style="text-align: center;">表单功能合集</h3>
            <p class="w_200_r" >
                <span>username:
                    <input type="text" name="username" maxlength="12" required="required" autocomplete="off" placeholder="username"/>
                </span>
            </p>
            <p class="w_200_r">
                <span>email:<!--开启自动获取焦点的时候去掉Stop_-->
                    <input type="email" name="email" Stop_autofocus='autofocus' autocomplete="off" />
                </span>
            </p>
            <p class="w_200_r noselect">
                <span>phone:
                    <input type="text" name="phone" pattern="1[3|5|7|8]\d{9}"/>
                </span>
            </p>
            <p class="w_200_r">
                <span>个人主页:<input type="text" naeme='homepage' style="width: 120px;" onfocus="" list="homepage"/></span>
                <datalist id="homepage">
                    <option label="buffge官网" value="www.buffge.com">www.buffge.com</option>
                    <option label="论坛站" value="bbs.buffge.com">bbs.buffge.com</option>
                    <option label="游戏站" value="game.buffge.com">game.buffge.com</option>
                </datalist>
            </p>
            <p class="w_200_r noselect">
                <span>国家:<input class="noselect" name="country" style="width:120px;" type="text" value="中国" readonly="readonly"/></span>
            </p>
            <p class="noselect">
                <span>家乡:
                    <select name="hometown">
                        <optgroup label="江苏">
                            <option value="苏州">苏州</option>
                            <option value="扬州" selected="selected">扬州</option>
                            <option value="南京">南京</option>
                        </optgroup>
                        <optgroup label="安徽">
                            <option value="马鞍山">马鞍山</option>
                            <option value="芜湖">芜湖</option>
                            <option value="合肥">合肥</option>
                        </optgroup>
                    </select>
                </span>
            </p>
            <p class="noselect">
                <span>爱好:<!--这里复选框的name要写成数组-->
                    <input type="checkbox" name="hobby[]" id="study" value="学习" checked="checked"/>
                    <label for="study">学习</label>
                    <input type="checkbox" name="hobby[]" id="latiao" value="吃辣条"/>
                    <label for="latiao">吃辣条</label>
                    <input type="checkbox" name="hobby[]" id="read" value="看书"/>
                    <label for="read">看书</label>
                    <input type="checkbox" name="hobby[]" id="dabaojian" disabled="disabled" value="大保健"/>
                    <label for="dabaojian">大保健</label>
                </span>
            </p>
            <p class="noselect">
                <span>性别:
                    <input type="radio" name="gender"id="male" value="男"/><label for="male">男</label> </span>
                <input type="radio" name="gender"id="female" value="女"/><label for="female">女</label> </span>
            </p>
            <p>
                <span>头像:
                    <input type="file" name="headphoto" multiple="multiple" id="headphoto" accept="image/gif, image/jpeg, image/png" />
                </span>
            </p>
            <p>
                <span>留言:</span>
                <textarea id="form_textarea" name="textarea" rows='3' cols="20" wrap="hard"></textarea>
            </p>
            <p style="text-align: center;">
                <input type="reset" value="重置"/>
                <input type="submit" value="提交"/>
            </p>
        </form>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>inline 和inline-block<br/></span>
            <span>inline表示行内元素,inline-block表示行内块元素 <br/></span>
            <span>inline不能设置高度,他的高度约等于字体高度*1.333 各个字体可能有偏差<br/></span>
            <span>当前微软雅黑字体就是约等于1.3倍的font-size;也就是16*1.3 约等于21<br/></span>
            <span><span class="in_block">inline-block: 高度就是完整的行高,比如font-size:16,line-heigth:150%;那样就是24px;</span><br/></span>
            <span>inline-block 不会让后面的元素换行,在inline-block内部写br也不会不会让后面的元素换行的,必须要写在外面<br/></span>
        </p>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>内联框架 &lt;iframe&gt;<br/></span>
            <span class='blue mar_l_30'>框架内容限制 </span>
            <span>sandbox :"" 表示禁用所有</span>
            <span class='purple'>我觉得可以不写这个,允许所有执行 <br/></span>
            <span class='mar_l_30'>allow-same-origin:允许 iframe 内容被视为与包含文档有相同的来源。<br/></span>
            <span class='mar_l_30'>allow-top-navigation	允许 iframe 内容从包含文档导航（加载）内容。<br/></span>
            <span class='mar_l_30'>allow-forms 允许表单提交。<br/></span>
            <span class='mar_l_30'>allow-scripts 允许脚本执行。<br/></span>
            <span class='blue mar_l_30'>框架内容显示 </span>
            <span>srcdoc="&lt;p&lt;hello world&lt;/p&lt;" 表示在框架中显示这个,chrome下会覆盖iframe内容</span>
        </p>
        <div id="iframe">
            <iframe id="iframe_1" src="include/iframe_1.html" width="198px"></iframe><!--开启后会覆盖框架内内容-->
            <iframe id="iframe_2" src="include/iframe_2.html" width="199px" Stop_srcdoc="<p>Hello world!</p>"></iframe>
            <iframe id="iframe_3" src="include/iframe_3.html" width="199px"></iframe>
            <br style="clear: both;"/>
        </div>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>图片 &lt;img&gt;<br/></span>
            <span class="blue mar_l_30">服务器端图像映射 ismap </span>
            <span>将会发送点击区域的px到服务器 下面这张图片利用了这一点</span>
            <span class="purple">图片必须要在超链接标签中才可以使用 <br/></span>
            <a class="mar_l_30" href="process/ismap_pro.php">
                <img class="border_s_black" src="public/images/pic_map.jpg" alt="pic_map.jpg" ismap="ismap"><br/>
            </a>
            <span class="blue mar_l_30">使用图像映射 usemap</span>
            <span>usemap='#map的name或id取决于浏览器'<br/></span>
            <span class="mar_l_30">这张图片点击不同区域会跳转到不同的地方<br/></span>
            <img class="mar_l_30 border_s_black" src="public/images/pic_map.jpg" alt="pic_map.jpg" usemap="#map1">
        </p>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>图像地图 &lt;map&gt;<br/></span>
            <span class="red">图像区域 &lt;area&gt;<br/></span>
            <span class="mar_l_30">area必须要在map中<br/></span>
            <span class="blue mar_l_30">shape 形状<br/></span>
            <span class="mar_l_30">rect 矩形 circle:圆形 poly:多边形<br/></span>
            <span class="blue mar_l_30">coords 坐标<br/></span>
            <span class="mar_l_30">矩形coords='左上角x,y,右下角x,y'<br/></span>
            <span class="mar_l_30">圆形coords='中心x,y,半径r'<br/></span>
            <span class="mar_l_30">多边形coords='第1,2,3,4..个点,最后一点和第一点要闭合(重合)'<br/></span>
        </p>
        <map name="map1" id="map1">
            <area shape="rect" coords="0,0,85,60" href="http://www.1688.com/" alt="阿里巴巴" target="_blank"/>
            <area shape="rect" coords="85,0,140,60" href="http://www.qq.com/" alt="腾讯" target="_blank"/>
            <area shape="rect" coords="140,0,200,60" href="http://www.baidu.com/" alt="百度" target="_blank"/>
        </map>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>画布 &lt;canvas&gt;<br/></span>
            <span class="purple">学到了clip.等实践的时候再学</span>
        </p>
        <canvas id="canvas" width="500" height="270">你的浏览不支持画布</canvas>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>音频 &lt;audio&gt;<br/></span>
            <span class="blue mar_l_30">自动播放 autoplay </span>
            <span>加载完成自动播放 <br/></span><!--去掉stop开启自动播放-->
            <span class="blue mar_l_30">播放控件 controls </span>
            <span>提供播放控件 播放，暂停，定位，音量，全屏，下载，切换字幕（如果可用）音轨（如果可用）<br/></span> 
            <span class="blue mar_l_30">循环播放 loop </span>
            <span>循环播放<span class="purple">我觉得不要用最好</span><br/></span> <!--去掉stop开启循环播放-->
            <span class="blue mar_l_30">静音播放 muted <br/></span>
            <span class="blue mar_l_30">加载设置 preload <br/></span>
            <span class="mar_l_30">auto - 当页面加载后载入整个音频<br/></span>
            <span class="mar_l_30">meta - 当页面加载后只载入元数据 
                <span class='purple'>这个貌似只会延迟一会加载</span><br/>
            </span>
            <span class="mar_l_30">none - 当页面加载后不载入音频 即点击加载<br/></span>
            <audio class="mar_l_30" controls='controls' Stop_autoplay="autoplay" Stop_loop='loop'>
                <source src="public/images/horse.ogg" type="audio/ogg">
                <source src="public/images/horse.mp3" type="audio/mpeg">
                <span>你的浏览器不支持audio</span>
            </audio>
        </p>
        <hr/>
    </div>

    <div>
        <p>
            <span id="video" class='red'>视频 &lt;video&gt;<br/></span>
            <span class="blue mar_l_30">初始样式 poster <br/></span>
            <span class="mar_l_30">poster='图片地址' 显示视频未播放时显示的画面 <br/></span>
            <span class='purple mar_l_30'>同样拥有audio的各种属性 <br/></span>
            <span class="red mar_l_30">外部文本轨道 &lt;track&gt;<br/></span>
            <span class="blue mar_l_30">默认文本轨道 default </span>
            <span>default='dafault' <br/></span>
            <span class="blue mar_l_30">定义轨道种类 kind <br/></span>
            <span class="mar_l_30">kind="subtitles" 表示此轨道是自定义字幕 <br/></span>
            <span class='purple mar_l_30'>其他几种不常用不写(标题,章节,描述)<br/></span>
            <span class="blue mar_l_30">定义轨道名称 label<br/></span>
            <span class="mar_l_30">label="buff自定义字幕1" 表示此字幕的名称 <br/></span>
            <span class="blue mar_l_30">定义字幕轨道语言类型 srclang<br/></span>
            <span class="mar_l_30">srclang="zh" 表示此字幕应为中文 <br/></span>
        </p>
        <video src="public/images/sample.mp4" controls="controls" poster="public/images/first_scream.jpg">
            <track kind="subtitles" src="public/images/subtitle1.vtt" srclang="zh" label="buffge字幕1">
            <track kind="subtitles" src="public/images/subtitle2.vtt" default='dafault' srclang="zh" label="buffge字幕2">
            <span>你的浏览器不支持播放视频</span>
        </video>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>超链接 &lt;a&gt;<br/></span>
            <span class="blue mar_l_30">下载操作 download <br/></span>
            <span class="mar_l_30">download='下载后的文件名' 后缀可以不设置,浏览器会自动添加 <br/></span>
            <span class="blue mar_l_30">页面锚点跳转 href='#id' <br/></span>
        </p>
        <a class="mar_l_30 under_line" href="public/images/head_logo.jpg" download="buff鸽logo">点我下载logo <br/></a>
        <a class="mar_l_30" href="#video">跳转到本页面的id为video的位置</a>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>表格 &lt;table&gt;<br/></span>

        </p>
        <table id="table">
            <tr>
                <td>课程表</td><td>星期一</td><td>星期二</td><td>星期三</td><td>星期四</td><td>星期五</td><td>星期六</td><td>星期日</td>
            </tr>
            <tr>
                <td>上午</td><td colspan="5"></td><td rowspan="12" colspan="2"><span class="holiday">周末放假</span></td>
            </tr>
            <tr>
                <td>8:00-8:45</td><td>数学</td><td>语文</td><td>英语</td><td>计算机</td><td>计算机</td>  
            </tr>
            <tr>
                <td>9:00-9:45</td><td>数学</td><td>语文</td><td>英语</td><td>计算机</td><td>计算机</td>
            </tr>
            <tr>
                <td>10:00-10:30</td><td colspan="5">大课间 跑步</td>
            </tr>
            <tr>
                <td>10:30-11:15</td><td>数学</td><td>语文</td><td>英语</td><td>计算机</td><td>计算机</td>
            </tr>
            <tr>
                <td>10:30-11:15</td><td>数学</td><td>语文</td><td>英语</td><td>计算机</td><td>计算机</td>
            </tr>
            <tr><td>下午</td><td colspan="5"></td></tr>
            <tr>
                <td>2:00-2:45</td><td>数学</td><td>语文</td><td>英语</td><td>计算机</td><td>计算机</td>  
            </tr>
            <tr>
                <td>2:55-3:40</td><td>数学</td><td>语文</td><td>英语</td><td>计算机</td><td>计算机</td>
            </tr>
            <tr>
                <td>3:50-4:15</td><td>数学</td><td>语文</td><td>英语</td><td>计算机</td><td>计算机</td>
            </tr>
            <tr>
                <td>4:25-5:10</td><td>数学</td><td>语文</td><td>英语</td><td>计算机</td><td>计算机</td>
            </tr>
            <tr>
                <td>5:10-6:30</td><td colspan="5">晚餐时间</td>
            </tr>
        </table>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>节点 html5新标签 <br/></span>
            <span class='red'>&lt;header&gt;</span>
            <span>定义 section 或 page 的页眉。<br/></span>
            <span class='red'>&lt;footer&gt; </span>
            <span>定义 section 或 page 的页脚<br/></span>
            <span class='red'>&lt;section&gt; </span>
            <span>定义块 部分<br/></span>
            <span class='red'>&lt;article&gt;</span>
            <span>定义文章<br/></span>
            <span class='red'>&lt;asides&gt;</span>
            <span>定义内容之外的内容,与文章配对
                <span class='purple'>可以作为文章侧栏用来提示<br/></span>
            </span><hr/>
        <span class='red'>源 &lt;meta&gt;<br/></span>
        <span class="blue mar_l_30">content <br/></span>
        <span class="mar_l_30">content 一般用来和keywords和discrption一起用 </span>
        <span>比如&lt;meta name='keywords' content='buff的笔记'/&gt;<br/></span>
        <span class="blue mar_l_30">name <br/></span>
        <span class="mar_l_30">author：作者<br/></span>
        <span class="mar_l_30">description：网页描述<br/></span>
        <span class="mar_l_30">keywords：关键字<br/></span>
        <span class="mar_l_30">generator：制作软件-比如netbeans,vs<br/></span>
        <span class="mar_l_30">revised：网页文档的修改时间<br/></span>
        <span class="mar_l_30">viewport：控制页面缩放<br/></span>
        <span class="mar_l_30">copyright：网页版权信息<br/></span>
        <span class="blue mar_l_30">http-equiv <br/></span>
        <span class="mar_l_30">content-type：设置页面字符集<br/></span>
        <span class="mar_l_30">expires：设置页面过期时间<br/></span>
        <span class="mar_l_30">refresh：设置页面延迟跳转到新网页<br/></span>
        <span class="mar_l_30">pragma： content="no-cache"禁止浏览器从本地调用缓存<br/></span>
        <span class="mar_l_30">cache-control： content="no-cache"清除缓存<br/></span>
        </p>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>访问快捷键 accesskey</span>
            <span>一般用在&lt;a&gt;中,设置 accesskeey='c' 即表示按下 ALT+(SHIFT)+C=点击了这个链接 如:</span>
            <span><a href="http://www.buffge.com/" style="color: blue;" accesskey="c">buff鸽官网</a></span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>元素可编辑 contenteditable </span>
            <span> contenteditable= true|false 如后面几个字可以编辑</span>
            <span contenteditable="true" style="border: 2px solid rgb(166,200,255);">这是可以编辑的文字</span>
        </p><hr/>
    </div>

    <div id="customAttr">
        <p>
            <span class='red'>自定义属性 data-* </span>
            <span> data-后面至少要跟一个字符,可用于js控制,不要写大写字符</span>
            <span data-person-type='纯爷们'>buff</span>&nbsp;
            <span data-person-type='伪娘'>wuwei</span>
            <span onclick="is_single_men();" style="text-decoration: underline;cursor: pointer;">检测纯爷们</span>
            <span>,纯爷们的名称会变蓝</span>
        </p><hr/>
    </div>

    <div id="dragable">
        <p>
            <span class='red'>元素可拖动性 dragable </span>
            <span> dragable="true | false | auto"</span>
            <span class="purple">链接和图片是默认可拖动的 <br/></span>
            <span>当拖动开始时 设置数据以及他的id<br/></span>
            <span>当拖动元素在此元素上方时,允许拖动元素降落并取消默认事件<br/></span>
            <span>当降落时取消默认的事件,并取出元素,并加入到此元素内<br/></span>
        </p>
        <div>
            <div id="for_drag1" ondragover="allowDrop(event);"ondrop="drop(event)">
                <img id="drag_pic" draggable="true" ondragstart="drag(event);" src="public/images/head_logo.jpg" alt="buff鸽logo.jpg"/>
            </div>
            <div id="for_drag2" ondragover="allowDrop(event);" ondrop="drop(event);"></div>
            <br style="clear: both;"/>
        </div>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>元素隐藏 hidden </span>
            <span> hidden='hidden' 后面的六七八就被隐藏了</span>
            <span> 一二三四五</span><span id="hidden_attr" ><span hidden="hidden">六七八</span></span><span>九十</span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>拼写检查 spellcheck </span>
            <span> spellcheck='true|false' 后面的第一个hello world 不会被检查,第二个会</span>
            <span contenteditable="true" spellcheck="false">helol wordl </span>
            <span contenteditable="true" spellcheck="true">helol wordl</span><br/>
            <span class='purple mar_l_30'>要写一下才会检查</span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>tab次序 tabindex </span>
            <span> 1为起始值, 可在以下标签使用&lt;a&gt;, &lt;area&gt;,</span>
            <span>&lt;button&gt;,&lt;input&gt;,&lt;select&gt; 以及 &lt;textarea&gt;<br/></span>
            <span>按tab将会先到3再到2,次tabindex 对整个页面都有效,再按就会回到上面form</span>
            <input type="text" tabindex="1"/> <input type="text" tabindex="3"/> <input type="text" tabindex="2"/>
        </p><hr/>
    </div>

    <div>
        <h3>事件属性</h3>
        <p>
            <span class='red'>页面完成加载事件 onload<br/></span>
            <span class='red'>浏览器窗口大小被调整事件 onresize<br/></span>
            <span class='red'>失去焦点事件 onresize<br/></span>
            <span class='red'>得到焦点事件 onfocus<br/></span>
            <span class='red'>文本被选中事件 onselect</span>
            <span class='purple'>貌似只能用在输入的文本中,如input<br/></span>
            <span class='red'>表单被提交事件 onsubmit<br/></span>
            <span class='red'>按下按键时触发 onkeydown<br/></span>
            <span class='red'>按键的字符被输出时触发 onkeypress<br/></span>
            <span class='purple'>按alt shift等不输出字符的键不会触发,当keydown之后只要不松开就会一直输出字符,即keypress一直被触发<br/></span>
            <span class='red'>当用户释放按键时触发 onkeyup<br/></span>
            <span class='red'>双击事件 ondblclick<br/></span>
            <span class='red'>鼠标滚轮事件事件 onmousewheel<br/></span>
            <span class='red'>当滚动条滚动式事件 onscroll<br/></span>
        </p>
        <p class="green">更多aodio/video 属性方法,暂时不写,要用到时候写</p><hr/>
    </div>

</div>

<div id="CSS3">
    <H2>CSS3</H2>
    <div>
        <p>
            <span class='red'>动画 animate <br/></span>
            <span class="blue mar_l_30">@keyframes</span>
            <span>规定动画 @keyframes 动画名{stataments}</span>
            <span class='purple'>需要加-webkit- -o- -moz-前缀,原版的浏览器不支持 <br/></span>
            <span class="blue mar_l_30">动画集合 animation</span>
            <span class="mar_l_30">包含所有动画属性,除了animation-play-state <br/></span>
            <span class="blue mar_l_30">动画名 animation-name</span>
            <span class="mar_l_30">设置动画名 为keyframes中设置的name<br/></span>
            <span class="blue mar_l_30">动画周期 animation-duration</span>
            <span class="mar_l_30">设置从0-100%所花费时间<br/></span>
            <span class="blue mar_l_30">动画速度曲线 animation-timing-function</span>
            <span class="mar_l_30">linear:匀速 ,ease:慢|快|慢,ease-in:慢|匀速,ease-out:匀速|慢,ease-in-out:慢|匀速|慢<br/></span>
            <span class="blue mar_l_30">动画初始延迟 animation-delay</span>
            <span class="mar_l_30">从文件加载完毕开始计时 延迟一定秒数播放<br/></span>
            <span class="blue mar_l_30">动画播放次数 animation-iteration-count</span>
            <span class="mar_l_30">次数等于num或者infinite 无限<br/></span>
            <span class="blue mar_l_30">动画第二周期是否逆向 animation-direction</span>
            <span class="mar_l_30">normal:默认值,不变化 alternate:反向<br/></span>
            <span class="blue mar_l_30">此动画执行之前之后元素动画设置 animation-fill-mode<br/></span>
            <span class="mar_l_30">none:默认,forwards:结束后保留最后一帧,backwards:显示之前显示0%的样式.both:前后都改变<br/></span>
            <span class="blue mar_l_30">动画播放暂停 animation-play-state</span>
            <span class="mar_l_30">用js控制暂停和继续 paused:暂停 running:继续<br/></span>
        </p>
        <div id="wrap_for_animate">
            <div id="animate1"></div>
        </div><hr/>
    </div>

    <div>
        <p>
            <span class='red'>背景 background</span>
            <span class="blue mar_l_30">背景颜色</span>
            <span class="mar_l_30">background-color:#d8f8ff 定义背景颜色<br/></span>
            <span class="blue mar_l_30">背景图片</span>
            <span class="mar_l_30">background-image: url(../images/createPattern.jpg);<br/></span>
            <span class="blue mar_l_30">背景图片位置</span>
            <span class="mar_l_30">background-position:5px 5px;距离左定位点xy<br/></span>
            <span class="blue mar_l_30">背景图片大小</span>
            <span class="mar_l_30">background-size 50px 50px.长宽<br/></span>
            <span class='purple mar_l_30'>跟位置写在一起时,写成5px 5px/50px 50px 格式.并且safria 不支持这种写法 最好 size单独写<br/></span>
            <span class="blue mar_l_30">背景图片重复</span>
            <span class="mar_l_30">background-repeat:repeat(默认) xy轴均重复<br/></span>
            <span class="blue mar_l_30">背景图片跟随滚动</span>
            <span class="mar_l_30">background-attachment:fixed 固定背景 scroll为滚动<br/></span>
            <span class="blue mar_l_30">背景定位区域</span>
            <span class="mar_l_30">background-origin:border-box(默认) 以边框边缘计算定位位置 padding-box以及content-box<br/></span>
            <span class="blue mar_l_30">背景绘制区域</span>
            <span class="mar_l_30">background-clip: border-box:从边框开始绘制(默认),padding-box,content-box.<br/></span>
            <span class="blue mar_l_30">背景颜色</span>
            <span class="mar_l_30">background-color 定义背景颜色</span>
        </p>
        <div id="background"></div><hr/>
    </div>

    <div>
        <p>
            <span class='red'>框阴影 box-shadow</span>
            <span>box-shadow:0 0 15px #ff9933;x y偏移为0,阴影宽度15px</span>
        </p>
        <div id="box-shadow"></div><hr/>
    </div>

    <div id="box">
        <p>
            <span class='red'>内容溢出设置:overflow</span>
            <span>黄色区域为p,黑色边框包着区域为div</span>
        </p>
        <div id="big_box_visbile">
            <p data-markp='1'>overflow-x:visbile这段话好长呀</p>
        </div>
        <div id="big_box_hidden">
            <p data-markp='1'>overflow-x:hidden这段话好长呀</p>
        </div>
        <div id="big_box_scroll">
            <p data-markp='1'>overflow-x:scroll这段话好长呀</p>
        </div><hr/>
    </div>

    <div>
        <p>
            <span class='red'>透明度 opacity</span>
            <span>opacity:0(完全透明)-1(完全不透明) ie8之前用filter:Alpha(opacity=0-100)</span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='green'>可伸缩框 display:box,flex-box,flex 现在IE不支持,等做h5app时再学<br/></span>
            <span class='green'>box ->flexbox->flex.只是版本的更新,为了兼容要都写.</span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>字体设置 font</span>
            <span id="font_span"> 600 20px/1.3 '玩蛇','宋体','微软雅黑','Microsoft Yahei',arial <br/></span>
            <span>font-weight为600,font-size 20px;line-heigth:1.3em 字体为玩蛇,宋体以及后面的,当本机没有这种字体,自动向后取<br/></span>
            <span class='red'>引入字体设置 @font-face <br/></span>
            <span>@font-face { font-family:字体名;src: url('路径');} <br/></span>
            <span class="purple">ie不支持ttf,要用eot.要准备2份</span>
        </p>
    </div>

    <div>
        <h3>文本属性 TEXT</h3>
        <p>
            <span class='red'>字符间距 letter-spacing <br/></span>
            <span style="letter-spacing: 2px;">this paragraph 的字符间距是2px;<br/></span>
            <span class='red'>单词间距 word-spacing <br/></span>
            <span style="word-spacing: 15px;">this paragraph 的单词间距是15px;<br/></span>
            <span class='red'>文本阴影 text-shadow<br/></span>
            <span style="text-shadow:0 0 5px #05eef8;">this paragraph have text-shadow;<br/></span>
            <span class='red'>文本空白处理(不换行控制) white-space:nowarp<br/></span>
            <span style="width: 150px;display: inline-block;overflow: hidden;">
                <span style="white-space:nowrap;">this paragraph don't warp</span>
            </span><br/>
            <span class='red'>文本超出显示省略号 text-overflow:ellipsis<br/></span>
            <span style="width: 150px;display: inline-block;overflow: hidden;text-overflow:ellipsis;">
                <span style="white-space:nowrap;">this paragraph don't warp</span>
            </span><br/>
            <span class='red'>英文单词自动换行设置 word-break <br/></span>
            <span>word-break:keep-all 只能在半角空格和连字符处换行;</span>
            <span id="word-break_k">
                <span>l want hava a veryvery cute dog</span>
            </span><br/>
            <span>word-break:break-all: 允许单词内换行</span>
            <span id="word-break_b">
                <span>l want hava a veryvery cute dog</span>
            </span><br/>
            <span class='red'>允许长单词或 URL 地址换行到下一行<br/></span>
            <span>word-warp:break-word 在长单词或url处内部进行换行</span>
        </p>
    </div>

    <div>
        <h3>2d/3d转换</h3>
        <p>
            <span class='red'>transform <br/></span>
            <span class="blue mar_l_30">2d转换 translate</span>
            <span>translate(380px,-35px)向x轴移动380px y轴移动-35px <span class='purple'>黑框为原来位置</span><br/></span>
            <span class="blue mar_l_30">缩放 scale</span>
            <span>scale(1.5)缩放为原来的1.5倍 <br/></span>
            <span class="blue mar_l_30">旋转 rotate</span>
            <span>rotate(60deg)顺时针旋转60度 <br/></span>
        </p>
        <div id="oldposition"><div id="tranform"></div></div>
        <p>
            <span class='red'>转换的基点 transform-origin</span>
            <span>默认基点是50% 50%.放大缩小的时候就是以中心点缩小放大.<br/></span>
            <span> 当把基点设置为100% 100% 时就是以右下角为基点进行缩放</span>
            <span class="green">更多的2D/3D实战时再学</span>
        </p>
    </div>

    <div>
        <h3>过渡属性 transition</h3>
        <p>
            <span class='red'>过渡影响的属性transition-property</span>
            <span>如width,height,left等等 hover有变化<br/></span>
            <span class='red'>过渡时间 transition-duration <br/></span>
            <span class='red'>过渡速度曲线 transition-timing-function <br/></span>
            <span class='red'>过渡延时 transition-delay</span>
        </p>
        <div style="height: 100px;">
            <div id="transition"></div>
        </div>
    </div>




</div>








<?php
require('include/footer.inc.php');
