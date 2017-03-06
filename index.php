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
            <span>这里必须要用&lt;br &gt; 或者&lt;p&gt;等块级元素才能让旁边的div撑开div,不能使用span等行内元素<br/></span>
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
            <span class='purple'>没有name属性的input类型,不能提交<br/></span>
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
            <span class="blue mar_l_30">颜色类型 type='color'</span>
            <span><input type="color" style="width: 50px;" value="#ff0000"/><br/></span>
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
                    <input type="radio" name="gender" id="male" value="男"/><label for="male">男</label>
                    <input type="radio" name="gender" id="female" value="女"/><label for="female">女</label></span>
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
            </span>
        </p><hr/>
        <p>
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
            <div id="for_drag1" ondragover="allowDrop(event);" ondrop="drop(event)">
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
        </div>
        <span class='red'>box 类型 box-sizing </span>
        <span>就是box的width是从什么地方开始计算 <br/></span>
        <span>默认box-sizing:content-box;那么元素的宽度就是border的宽度+padding++width =5+10+100=115<br/></span>
        <span>如果box-sizing:border-box;那么元素的宽度就是width =100<br/></span>
        <span>下面2个div的width都是100px,pading都是20,border都是5px<br/></span>
        <span class='purple mar_l_30'>可用于一个大div中布局小div防止小div的边框影响div的宽度可以将小div设置为border-box.<br/></span>
        <span class='purple mar_l_30'>那样为小div设置50%宽度的话,向左浮动时2个正好撑满并不会换行.</span>
        <span class='purple mar_l_30'>如果是content-box则会使总宽度超过大div宽度而影响布局<br/></span>
        <div class="box-sizing content-box"><p>content-box</p></div>
        <div class="box-sizing border-box"><p>border-box</p></div>
        <hr style="clear: both;"/>
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
            <span class='red'>首行缩进 text-indent</span>
            <span>下面一行首行缩进2rem</span>
        </p>
        <p id="text-indent">苟利国家生死以,岂因祸福避趋之.－－ 一颗赛艇</p>
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
            <span class='purple'>scale translate rotate等2d/3d转换是属于transfrom的,过渡属性不能写scale rotate<br/></span>
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

    <div>
        <h3>选择器</h3>
        <p>
            <span class='red'>before/after 伪类/元素 </span>
            <span> element:before{content:"prefix-";style...}<br/></span>
            <span class="purple">伪类的样式可以在css中定义 <br/>    </span>
            <span id="before">我前面会多出一个字符串 <br/></span>
            <span id="after">我后面会多出一个字符串</span>
        </p>

        <p>
            <span class='red'>:selection 选中伪类 </span>
            <span>element::selection{color:red;} <br/></span>
            <span class='purple'>伪类用单冒号,伪元素用双冒号</span>
            <span id="selection">选中此文本字体会变成红色</span>
        </p>
    </div>


</div>

<div>
    <h2>JavaScript</h2>
    <div id="strict_mode">
        <p>
            <span class='red'>严格模式 'use strict';</span>
        </p>
        <ol>
            <li>全局变量必须显示声明,不能再函数内部声明全局变量 <br/></li>
            <li>静态绑定:禁止使用with语句,以及eval声明的变量只能作用于eval内部<br/></li>
            <li>禁止this 指向全局对象.<br/></li>
            <li>禁止函数内部调用栈 不能内部调用funName.caller和funName.arguments<br/></li>
            <li>禁止删除变量,只有configable设置为true的才能删除<br/></li>
            <li>显式报错,有些时候对只读变量赋值,正常情况下不会报错,只会默默的失败.严格模式不行<br/></li>
            <li>重名错误, 对象不能有重名属性,函数不能有重名的参数,不能使用八进制的整数,<br/></li>
            <li>不允许对atguments赋值,arguments不再追踪参数的变化<br/></li>
            <li>函数定义必须在顶层,不能在非函数性语句中定义函数,但是测试时候发现,如果执行函数语句和函数定义都在if(){}内也是可以的<br/></li>
            <li>保留字 implements, interface, let, package, private, protected, public, static, yield...<br/></li>
        </ol>

    </div>

    <div id="Javascript_obj">
        <h3>Javascript 对象</h3>
        <div>
            <h4>Array</h4>
            <p>
                <span class='red'>Array 数组类型</span>
                <span class='red'>数组长度 arr.length </span>
                <span>数组[1,2,3,4]的长度为4 <br/></span>
                <span>数组定义时里面不能有关联数组,但是可以后加,计算长度时也不会算上关联数组.但是for in循环会遍历出 <br/></span>
                <span>若当前数组有0,1,2 3个键 此时定义一个100的键,那么4-99都是undefined;<br/></span>

                <span class='red'>数组连接 concat()</span>
                <span>var arr1=[1,2,3,4],arr2=['b','u','f','f'];arr1.concat(arr2) return=[1,2,3,4,'b','u','f','f']<br/></span>
                <span class='purple'>连接后会返回一个新的数组,参数可以有多个.<br/></span>

                <span class='red'>数组转换为字符串 join()或toString()</span>
                <span>以join中定义的分隔符作为参数,将每个数组中的元素分割,默认为逗号.<br/></span>
                <span>var arr1=['buff','wuwei','xiaokeai'];arr1.join() return 'buff,wuwei,xiaokeai'<br/></span>
                <span class='purple'>若要把数组完全转换为字符把参数设置为''就可以了,不过就好是设置成逗号空格之类的 <br/></span>

                <span class='red'>删除数组最后一个元素并返回 pop()</span>
                <span>var arr1=['buff', 'wuwei', 'xiaokeai'];arr1.pop();arr1=['buff', 'wuwei']<br/></span>
                <span class='purple'>只会删除索引数组,不会删除关联数组<br/></span>

                <span class='red'>数组末尾添加值并返回新的数组长度 push()</span>
                <span>var arr1=[1];arr1.push('buff','wuweisb');arr1=[1,'buff','wuweisb']<br/></span>

                <span class='red'>数组开头添加值并返回新的数组长度 unshift()()</span>
                <span>var arr1=[1];arr1.unshift('buff','wuweisb');arr1=['buff','wuweisb',1]<br/></span>

                <span class='red'>颠倒数组元素 reverse()</span>
                <span>var arr1=[1,2,3,4,5];arr1.reverse();arr1=[5,4,3,2,1];<br/></span>

                <span class='red'>删除并返回数组第一个元素 shift()</span>
                <span>var arr1=[1,2,3,4,5];arr1.shift();arr1=[2,3,4,5];<br/></span>


                <span class='red'>返回数组中的特定元素 slice()</span>
                <span>var arr1=[1,2,3,4,5];<br/></span>
                <span>arr1.slice(start,end):start表示从第几个开始选取,-1表示最后一个,-2表示倒2,end表示结束位置.如果没有end一直选择到最后<br/></span>
                <span>vararr2=arr1.slice(0,2);arr2=[1,2];<br/></span>
                <span>vararr2=arr1.slice(2);arr2=[3,4,5];<br/></span>
                <span>vararr2=arr1.slice(-4,4);arr2=[2,3,4];<br/></span>
                <span class='purple'>这里end表示的是在此下标之前的,slice(0,2)表示从0到下标2之间的元素,不包括下标2,<br/>
                    若要选定到数组最后则要用末尾下标加一或者不写end <br/></span>

                <span class='red'>数组批量执行函数 排序 sort()</span>
                <span> sort() 默认是对参数先转换为string,然后比较.小写字符排在大写字母的后面 <br/></span>
                <span>也可以接收回调函数,接受2个参数。</span>
                <span class='purple'>对数组进行sort()将会改变原数组,并且会返回原数组的结果<br/></span>
                <span>var arr1=['apple','orange','banner'];arr1.sort();arr1=['apple','banner','orange']<br/></span>

                <span class='red'>数组特定位置添加/删除函数 splice()</span>
                <span> arr.splice(index,howmany,item1,.....,itemX)<br/></span>
                <span>var arr1=[1,2,3,4,5];arr2=['buff'];arr1.splice(2,0,arr2[0]);arr1=[1,2,'buff',3,4,5]<br/></span>
                <span class='purple'>不希望删除元素则将数量设置为0;第三个参数设置为数组的话,那么会将数组作为对象传入arr1中,即arr1[2]=['buff'];<br/></span>

                <span class='red'>返回对象原始值 valueOf()</span>
                <span>var arr1=[1];var arr2=new Array(1); arr1.valueOf()为数组[1]<br/></span>
                <span class="green">但是谷歌浏览器里面显示arr2.valueOf()为undefined中包含一个数组,这个可能对数组作用不大<br/></span>

                <span class='red'>循环遍历对象/数组 for in</span>
                <span class="purple">遍历数组时 返回键时是以字符串形式输出,即'0','1','2' <br/></span>
                <span class='red'>数组批量执行函数 map()</span>
                <span>arr.map(fun);接受一个参数,对数组中的每一个元素执行fun函数,然后返回一个新的数组.<br/></span>
                <span class='red'>数组批量执行函数 reduce()</span>
                <span>arr.map(fun);接受2个参数,先对参数1和2执行fun函数,然后用前面的结果和参数3执行fun函数...<br/></span>
                <span>一直到执行最后然后返回一个新的数组.<br/></span>
                <span class='red'>数组批量执行函数 过滤 filter()</span>
                <span> filter(fun(element[,index[,obj]])) 对arr的每一个参数执行fun函数.<br/></span>
            </p><hr/>
        </div>

        <div>
            <h4>Boolean</h4>
            <p>
                <span class='red'>Boolean 布尔类型</span>
                <span>Boolean转换函数 Boolean(value)<br/></span>
                <span>var bool=1,bool2=Boolean(bool); bool2=true;<br/></span>
                <span>null、undefined、0、NaN和空字符串''视为false，其他值一概视为true <br/></span>
            </p><hr/>
        </div>

        <div>
            <h4>Date</h4>
            <p>
                <span class="red">日期 Date</span>
                <span>var now=new Date();<br/></span>
                <span class='mar_l_30'>now;  Fri Feb 24 2017 00:12:02 GMT+0800 (中国标准时间)<br/></span>
                <span class='mar_l_30'>now.getFullYear();  2017, 年份<br/></span>
                <span class='mar_l_30'>now.getMonth();  1, 月份，注意月份范围是0~11，1表示2月<br/></span>
                <span class='mar_l_30'>now.getDate();  24, 表示24号<br/></span>
                <span class='mar_l_30'>now.getDay();  5, 表示星期五<br/></span>
                <span class='mar_l_30'>now.getHours();  0, 24小时制<br/></span>
                <span class='mar_l_30'>now.getMinutes(); 12, 分钟<br/></span>
                <span class='mar_l_30'>now.getSeconds(); 02, 秒<br/></span>
                <span class='mar_l_30'>now.getMilliseconds();  772, 毫秒数<br/></span>
                <span class='mar_l_30'>now.getTime();  1487866322772, 以number形式表示的时间戳<br/></span>
                <span class='purple'>返回的时间是本机操作系统的时间,不一定准确</span>
            </p><hr/>
        </div>

        <div>
            <h4>Math</h4>
            <p>
                <span class='red'>Math 数学函数类型<br/></span>
                <span class="blue mar_l_30">圆周率 </span>
                <span>Math.PI:3.141592653589793<br/></span>
                <span class="blue mar_l_30">绝对值 </span>
                <span>Math.abs(-2):2<br/></span>
                <span class="blue mar_l_30">余弦值 </span>
                <span>Math.cos(Math.PI):-1<br/></span>
                <span class="blue mar_l_30">正弦值 </span>
                <span>Math.sin(Math.PI/6):0.49999<br/></span>
                <span class="blue mar_l_30">正切值 </span>
                <span>Math.tan(0.5):0.54630248<br/></span>
                <span class="blue mar_l_30">上舍入 </span>
                <span>Math.ceil(1.4):2<br/></span>
                <span class="blue mar_l_30">下舍入 </span>
                <span>Math.floor(1.4):1<br/></span>
                <span class="blue mar_l_30">x的y次幂 </span>
                <span>Math.pow(2,3):8<br/></span>
                <span class="blue mar_l_30">0-1随机数 </span>
                <span>Math.random():0-1<br/></span>
                <span class="blue mar_l_30">四舍五入为整数 </span>
                <span>Math.round(-3.5):-3<br/></span>
                <span class="blue mar_l_30">平方根 </span>
                <span>Math.sqrt(9):3<br/></span>
            </p><hr/>
        </div>

        <div>
            <h4>Number</h4>
            <p>
                <span class='red'>Number 数字类型</span>
                <span class="blue mar_l_30">NaN</span>
                <span>表示不是一个数字,无法返回数字结果就返回这个.<br/></span>
                <span class='purple mar_l_30'>NaN无法与任何数相比,能判断是否为NaN的方法是isNaN()函数<br/></span>
                <span class="blue mar_l_30">无限大 Infinity <br/></span>
                <span class="blue mar_l_30">返回固定位数小数 toFixed(n)</span>
                <span>var num1=13.46;num1.toFixed(1)=13.5; 小数位数为0-20 不写就是0 <br/></span>
                <span class="blue mar_l_30">返回指数形式  toExponential(n)</span>
                <span>var num1=10000;num1.toExponential(2)=1.00e+4; 小数位数为0-20 不写就是0 <br/></span>
            </p><hr/>
        </div>

        <div>
            <h4>String</h4>
            <p>
                <span class='red'>String 字符串类型</span>
                <span class='red'>多行字符串 </span>
                <span>在换行处加\表示接着下一行的字符串<br/></span>
                <span class='red'>模板字符串 </span>
                <span> 'some staements'+a+b =`some statements${a}${b}`</span>
                <span class="purple">但是ie和safrai不支持 <br/></span>
                <span class='red'>字符串内容选择 str[n] </span>
                <span>选择字符串中的单个字符 str[0]就是第一个字符, 但是str[0]='x' 并不有效 <br/></span>
                <span class='red'>字符串长度 str.length <br/></span>
                <span class='red'>字符串连接 str.concat(str1,2,3,..) <br/></span>
                <span class='red'>字符串首次出现位置 str.indexOf() </span>
                <span>var str1='buffge';str1.indexOf('f') 返回值为2;也可以设置第2个参数,是开启检索位置<br/></span>
                <span class='red'>字符串检索(正则表达式值) str.match(reg) </span>
                <span>var str1='ddf124g234hda34sf34sg321',str2=str1.match(/\d{3}/g); str2=['124','234','321']<br/></span>
                <span class='purple'>这里返回的是数组,值为字符串 <br/></span>
                <span class='red'>字符串替换(正则表达式值) str.replace(reg,'str'or fun) <br/></span>
                <span>var str1='ddf124g234hda34sf34sg321',str2=str1.repacle(/\d{3}/g,add); add为数字加1函数,此时str2中的124变为125..<br/></span>
                <span class='red'>字符串搜索(正则表达式值) str.search(reg) </span>
                <span>var str1='buffge',str2=str1.search(/ge/); str2=4;<br/></span>
                <span class='purple'>search忽略g标签,总是从字符串的开始进行搜索,将返回字符串首次出现的位置,未出现则返回-1</span>
                <span class='red'>提取字符串的一部分 str.slice(start,end) </span>
                <span>var str1 = 'buffge', str2 = str1.slice(2,4); str2='ff';<br/></span>
                <span class='red'>提取字符串的一部分 str.substr(start,length) </span>
                <span>var str1 = 'buffge', str2 = str1.substr(2,3); str2='ffg';<br/></span>
                <span class='purple'>从开始下标开始提取,但是不包括结束下标.(2,4)表示从下标2-下标4但是不包括下标4,即2和3<br/></span>
                <span class='red'>字符串分割函数 str.split()</span>
                <span>"2:3:4:5".split(":");将返回["2", "3", "4", "5"]<br/></span>
                <span class='red'>字符串小写 str.toLowerCase()</span>
                <span class='red'>字符串大写 str.toUpperCase()</span>
                <script>
                    "use strict";
                    var str1 = 'buffge', str2 = str1.slice(2, 4);

                </script>
            </p><hr/>
        </div>

        <div>
            <h4>Regexp</h4>
            <p>
                <span class='red'>正则表达式 Regexp</span>
                <span>var exp='/statements/';<br/></span>
                <span class="blue mar_l_30">test()</span>
                <span>exp.test(a);验证a是否符合exp <br/></span>
                <span class="blue mar_l_30">split()</span>
                <span>a.split(exp);按照exp的间隔符分割a,并返回一个新的数组 ,内含被分隔符分割的每个元素<br/></span>
                <span class="blue mar_l_30">exec()</span>
                <span>var b=exp.exec(a);按照exp的间隔符将a分组,并返回一个新的数组 ,b[0]为匹配到的字符串,b[1]为组1...,失败返回null<br/></span>
                <span class="red">i:忽略大小写,g全局匹配,m多行匹配</span>
            </p><hr/>
        </div>

        <div>
            <h4>Global</h4>
            <p>
                <span class='red'>Global 全局类型</span>
            </p><hr/>
        </div>

        <div>
            <h4>Map</h4>
            <p>
                <span class='red'>Map 键值对类型</span>
                <span class='red'>数据类型Map</span>
                <span>map表示一组键值对 初始化要建一个二维数组 var test=new Map([['a','buff'],['sb','wuwei']])<br/></span>
                <span class="blue mar_l_30">方法 get()返回对应键的值 set()设置 has()是否拥有某键 delete删除键 <br/></span>
            </p><hr/>
        </div>

        <div>
            <h4>Set</h4>
            <p>
                <span class='red'>Set 键类型</span>
                <span class='red'>数据类型 key集合 Set</span>
                <span>Set中的key不能重复 初始化需要数组 var test=new Set([1,'fsdf',3,'3'])<br/></span>
            </p><hr/>
        </div>

        <div>
            <h4>iterable</h4>
            <p>
                <span class='red'>iterable 重复类型<br/></span>
                <span>可以使用for...of array map 和set都属于iterable类型.for of只返回数组本身,不返回关联数组以及对象属性 <br/></span>
            </p><hr/>
        </div>

        <div>
            <h4>generator</h4>
            <p>
                <span class='red'>生成器类型 generator</span>
                <span>使用生成器函数 function* 结果返回一个generator对象.<br/></span>
                <span>每次yield 以及最后的return都会在对象中添加一个对象.对象有2个参数(value:..,done:true|false)<br/></span>
                <span>true表示return的对象,false表示yield返回的对象<br/></span>
            </p><hr/>
        </div>
    </div>

    <div>
        <p>
            <span class='red'>null和''的区别</span>
            <span>null 表示空,''表示长度为0的字符串,undefined表示未定义.<br/></span>
            <span>大多数时间应该用null,undefined仅仅在判断函数参数是否传递的情况下有用。</span>
        </p>
        <p>
            <span class='red'>对象中属性选择 <br/></span>
            <span>一般的对象定义属性名不要用''包起来,但是如果属性有特殊字符,必须要用''包起来,比如'last-name'<br/></span>
            <span>选择对象的一个属性 obj.lastname 选择特殊符号属性的时候用obj['last-name']<br/></span>
            <span class='red'>对象中属性删除 delete</span>
            <span>var p={name:'buff'}; delete p.name;<br/></span>
            <span class='red'>检测对象中是否存在某属性 in</span>
            <span>'name' in p1; return true;<br/></span>
            <span class='purple'>有时候有些属性时继承的,这时候可以用p1.hasOwnProperty('name');检测自己的属性 <br/></span>

            <span class='red'>块级作用域let</span>
            <span>在for if语句中定义,   出去就失效了 <br/></span>
            <span class='red'>常量定义const</span>
            <span>const也有快捷作用域<br/></span>
            <span class='red'>箭头函数 =></span>
            <span>var a=x=>x+1;相当于var a=function(x){return ++x;};<br/></span>
            <span class='purple'>箭头函数内部this 指向当前对象 比如函数内部的匿名函数再使用this时候就指向window或者undefined 用=>则指向对象 <br/></span>
            <span class="red">null和array[]和{}都是object <br/></span>
            <span>typeof操作符可以判断出number、boolean、string、function和undefined；<br/></span>
            <span>判断Array要使用Array.isArray(arr)；<br/></span>
            <span>判断null请使用myVar === null；<br/></span>
            <span>判断某个全局变量是否存在用typeof window.myVar === 'undefined'；<br/></span>
            <span>函数内部判断某个变量是否存在用typeof myVar === 'undefined'。<br/></span>
            <span class='purple'>typeof 123=number 如果var a=new Number(123).那么typeof a=object <br/></span>
        </p><hr/>
    </div>

    <div id="Browser_obj">
        <h3>浏览器 对象</h3><hr/>
    </div>
    <div id="HtmlDom_obj">
        <h3>文档结构模型DOM 对象</h3>
    </div>






    <hr/>
</div>

<div id="jquery">
    <h2>jQuery</h2>
    <div>
        <p>
            <span class="red">隐藏 显示</span>
            <span>hide() show() toggle()<br/></span>
            <input type="button" id="hide" value="隐藏"/>
            <input type="button" id="show" value="显示"/>
            <input type="button" id="toggle" value="toggle"/>
            <span id="for_hide">我将会被隐藏 </span><br/>
            <span>可在参数1中定义动作时间 1000为1s</span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>淡入,淡出 fadeIn(),fadeOut(),fadeTo() <br/></span>
            <input type="button" id="fadein" value="淡入"/>
            <input type="button" id="fadeout" value="淡出"/>
            <input type="button" id="fadetoggle" value="淡入/出"/>
            <input type="button" id="fadeto" value="淡至"/><br/>
            <span class='purple'>可以在第2或3个参数中添加回调函数,当淡入淡出完成后执行回调函数<br/></span>
        </p>
        <div id="for_fade_warp"><div id="for_fade"></div></div><hr/>
    </div>

    <div>
        <p>
            <span class='red'>滑动 slideDown() slideUp() slideToggle()<br/></span>
            <input type="button" id="slideDown" value="滑下"/>
            <input type="button" id="slideUp" value="滑上"/>
            <input type="button" id="slideToggle" value="滑上/下"/>
        </p>
        <div id="for_slide_warp"><div id="for_slide"></div></div><hr/>
    </div>

    <div>
        <p>
            <span class='red'>动画 animate()<br/></span>
            <input type="button" id="animate"  value="动起来"/>
            <input type="button" id="animate_stop"  value="停止动画"/><br/>
            <span class="blue">回调函数 </span>
            <span>$('#id').hide(3000,function...)<br/></span>
            <span>当hide执行完毕后再执行后面的函数 <br/></span>
            <input id="callback" type="button" value="隐藏下面的文字"/>
        </p>
        <div id="for_animate_waro"><div id="for_animate"></div></div>
        <div>
            <p id="callback_hide">我消失后 点击下一句话会将他的颜色变成红色,消失前点击无效</p>
            <p id="for_callback">请等待上一句话hide完毕再点击我</p>
        </div><hr/>
    </div>

    <div>
        <p>
            <span class='red'>chaining 连续执行多段函数 <br/></span>
            <span>点击<a href="javascript:;" style="color:blue;" id="chaining">这里</a>下面的div先变长再变高在变小 <br/></span>
        </p>
        <div id="for_chaining"></div><hr/>
    </div>

    <div>
        <p>
            <span class='red'>获取dom 内容 <br/></span>
            <span class='red'>text()获取/修改文本,html()获取/修改html标签以及文本,val()获取/修改数值 <br/></span>
            <input type="text" id="catch_val"/>
            <span>输入后,将会将输入值 输出到console <br/></span>
            <span id="catch_text" class="under_line pointer">点击获取本元素text内容到console</span><br/>
            <span id="catch_html" class="under_line pointer">点击获取本元素html内容到console</span><br/>
            <span><input type="button" value="修改上面的catch_text的文本内容为hello" id="change_catch_text"/><br/></span>
            <span><input type="button" value="修改上面的catch_html的文本内容为<b>hello</b>" id="change_catch_html"/><br/></span>
            <span class="red">获取属性 attr()<br/></span>
            <input type="button" value="获取下面链接的href" id="catch_attr"/><br/>
            <input type="button" value="修改下面链接的href" id="change_catch_attr"/><br/>
            <a href="http://www.buffge.com/" id="for_attr" title="buff鸽网络">这是一个普通的链接</a>
            <span id="show_attr">这个链接的href是: </span><br/>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>添加HTML内容 append(),prepend(),after(),before()<br/></span>
            <span id="for_append">this is original text</span><br/>
            <input type="button" id="append" value="结尾添加文本"/><br/>
            <input type="button" id="prepend" value="开头添加文本"/><br/>
            <span id="for_before_add">this is original text<br/></span>
            <input type="button" id="after_add" value="元素之后添加文本"/><br/>
            <input type="button" id="before_add" value="元素之前添加文本"/><br/>
            <input type="button" id="meta_add_author" value="meta中添加作者"/><br/>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>删除元素/内容 remove(),empty()<br/></span>
            <span><input type="button" value="删除maindiv以及他里面的所有内容" id="remove"/><br/></span>
            <span><input type="button" value="删除maindiv内所有内容" id="empty"/><br/></span>
            <span><input type="button" value="删除maindiv内class=div2的元素" id="remove_filter"/><br/></span>
        </p>
        <div id="remove_main"><div class="remove_div1"></div><div class="remove_div2"></div></div>
        <hr/>
    </div>

    <div>
        <p>
            <span class='red'>css类的操作<br/></span>
            <span id="for_class_oper">这是一段黑色字体的文本<br/></span>
            <span><input type="button" id="add_class" value="添加red类"/><br/></span>
            <span><input type="button" id="remove_class" value="删除red类"/><br/></span>
            <span><input type="button" id="toggle_class" value="添加/删除,切换red类"/><br/></span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>css属性<br/></span>
            <span style="font-size: 18px;" id="catch_css_attr">点击获取本文本的font-size值, font-size = </span><br/>
            <span><input type="button" value="设置上面文本样式" id="set_css_style"/><br/></span>

        </p>
        <hr/>
    </div>

    <div id="catch_size">
        <p>
            <span class='red'>获取设置元素 尺寸 宽/高<br/></span>
            <span>获取width() </span><br/>
            <span>获取innerwidth() </span><br/>
            <span>获取outerwidth() </span><br/>
            <span>获取outerwidth(true) </span><br/>
            <span class="purple">文档的宽度 $(document).width()<br/></span>
            <span class="purple">浏览器窗口的宽度 $(window).width()<br/></span>
        </p>
        <div style="width: 100px;height: 100px;border:dashed 1px #000;"><div id="for_catch_size"></div></div>
    </div>

    <div>
        <p>
            <span class='red'>遍历<br/></span>
            <span class='red'>父级<br/></span>
            <span class="blue"> ele.parent()</span>
            <span> 元素的直接父级<br/></span>
            <span class="blue"> ele.parents()</span>
            <span> 元素的所有父级<br/></span>
            <span class="blue"> ele.parents('ul')</span>
            <span> 元素的所有父级元素中为标签为ul的元素<br/></span>
            <span class="blue"> ele.parentUntil('.end')</span>
            <span> 元素的所有父级直到但不包括class为end的元素<br/></span>
            <span class='red'>子级<br/></span>
            <span class="blue"> ele.children()</span>
            <span> 元素的直接子级<br/></span>
            <span class="blue"> ele.children('.someclass')</span>
            <span> 元素的直接子级中class为someclass的元素<br/></span>
            <span class="blue"> ele.find('*')</span>
            <span> 元素内的所有元素<br/></span>
            <span class="blue"> ele.find('span')</span>
            <span> 元素内的所有元素中标签为span的元素<br/></span>
            <span class='red'>同胞<br/></span>
            <span class="blue"> ele.siblings()</span>
            <span> 元素的所有同胞<br/></span>
            <span class="blue"> ele.next()</span>
            <span> 元素的下一个同胞<br/></span>
            <span class="blue"> ele.nextAll()</span>
            <span> 元素的之后所有同胞<br/></span>
            <span class="blue"> ele.nextUntil('p')</span>
            <span> 元素的之后所有同胞直到遇到p标签<br/></span>
            <span class="blue"> ele.prev()</span>
            <span> 元素的上一个同胞<br/></span>
            <span class="blue"> ele.prevAll()</span>
            <span> 元素的之前所有同胞<br/></span>
            <span class="blue"> ele.prevUntil('p')</span>
            <span> 元素的之前所有同胞直到p标签<br/></span>
            <span class='red'>过滤<br/></span>
            <span class="blue"> ele.first()</span>
            <span> 第一个此元素<br/></span>
            <span class="blue"> ele.last()</span>
            <span> 最后一个此元素<br/></span>
            <span class="blue"> ele.eq(i) 从0开始记</span>
            <span> 第i个此元素<br/></span>
            <span class="blue"> ele.filter('.aa')</span>
            <span>此类元素中含有类名aa的元素<br/></span>
            <span class="blue"> ele.not('.aa')</span>
            <span> 此类元素中不含有类名aa的元素<br/></span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>AJAX <br/></span>
            <span class='red'>load(url,{键:值},function(返回文本,返回状态))<br/></span>
            <span id="for_load"></span><br/>
            <span>点击<span id="ajax_load">这里</span>从服务器load 一句古诗输出到上面的节点中<br/></span>
            <span>点击<span id="ajax_get">这里</span>从服务器get 一句古诗输出到上面的节点中<br/></span>
            <span>点击<span id="ajax_post">这里</span>从服务器post{name:'李白'}  返回一句古诗输出到上面的节点中<br/></span>
            <span>点击<span id="ajax_ajax">这里</span>从服务器ajax({someSettings})  返回一句古诗输出到上面的节点中<br/></span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>jQuery符号冲突设置 $.noConflict()<br/></span>
            <span>取消对$的引用并返回jQuery对象.可设置为$为其他如 jq; var jq = $noConfilict();<br/></span>
            <span>也可以在jQuery(function($){...});设置$为jQuery对象<br/></span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>jq扩展函数$.fn.extend();<br/></span>
            <span id="extend_fun">点击这段话颜色会变成红色,使用的扩展函数red_color()</span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>延迟对象 $.Deferred()<br/></span>
            <span>输出队列演示: 点击<span class="click_it defer_out">这里</span>下面的输出将会一步一步的执行<br/></span>
            <span class="green">没看懂 下次继续++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++</span>
        </p><hr/>
    </div>

    <div>
        <p>
            <span class='red'>序列化 serialize()<br/></span>
            <span>点击提交,将会序列化表单内容,并输出到下面两行<br/>serialize():</span>
            <span id="serialize_form_cont"></span><br/>
            <span>serializeArray():</span>
            <span id="serialize_form_json_cont"></span><br/>
            <span class='purple'>serializeArray()返回json对象.中文未转码<br/></span>
        </p>
        <form id="serialize_form" onsubmit="return false;">
            <p>username:<input type="text" name="username"></p>
            <p>password:<input type="text" name="password"></p>
            <p>yzm:<input type="text" name="password"></p>
            <p><input type="reset" value="重置">&nbsp;<input id="serialize_f_submit" type="submit" value="提交"></p>
        </form><hr/>
    </div>



</div>

<script>

</script>





<?php
require('include/footer.inc.php');
