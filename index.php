<?php
require('include/header.inc.php');
/*
  <#日期 = "2017-2-19">
  <#时间 = "7:30:41">
  <#人物 = "buff" >
  <#备注 = " ">
 */
?>
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
        <span class='purple'>浮动元素自动被设置为block,块元素可以设置宽高,行内元素不行比如span</span>
    </p>
    <div id="clear_float">
        <div id="float_l_first"></div><br style="clear: both;"/>
        <div id="float_r_first"></div><br style="clear: both;"/>
    </div>
    <p>
        <span>这里粉红色的div设置float:left 然后通过他后面的 &lt;br &gt; clear:both 设置清除向左的浮动,并使div重回流中,然后撑开div <br/>
            <span>这里必须要用&lt;br &gt; 或者&ltp&gt;等块级元素才能让旁边的div撑开div,不能使用span等行内元素<br/></span>
        </span>
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
        <span class='red'>表单 form</span><br/>
        <span class="blue in_block mar_l_30">自动完成 </span>
        <span>autocomplete='off/on'就是刷新或者返回后是否还保存刚刚数据 建议关闭<br/></span>
        <span class="blue in_block mar_l_30">表单发送数据编码格式 </span>
        <span>enctype= <br/></span>
        <span>application/x-www-form-urlencoded :默认值 进行编码,空格变成+ 特殊符号转换为 ASCII HEX 值 <br/></span>
        <span class="purple">中文也会进行编码,但是传入服务器时候自动解码了,传入服务器还是中文 <br/></span>
        <span>text/plain :只把空格变成+ 其他不编码 <br/></span>
        <span>multipart/form-data :不编码,包含上传文件时必须使用此编码方式<br/></span>
        <span class='blue in_block mar_l_30'>novalidate='novalidate'<br/></span>
        <span>不进行格式验证,比如表单内有email 格式的,如果设置不验证,随便怎么输入都能发送出去 <br/></span>
        <span><span class='blue in_block mar_l_30'>target</span> 目标的打开位置,_blank,_parent,或者框架名等等<br/></span>
    </p>
    <hr/>
    <p>
        <span class='red'>输入类型input</span><br/>
        <span class="blue in_block mar_l_30">接受文件类型 </span>
        <span>accept='image/gif, image/jpeg, image/png'就是只可以上传这三种类型图片<br/></span>
        <span class="blue in_block mar_l_30">自动获得焦点 </span>
        <span>autofocus='autofocus' 页面加载刷新时自动获得焦点<br/></span>
        <span class="blue in_block mar_l_30">加载自动选取 </span>
        <span>checked='checked'适用于复选框 单选框<br/></span>
        <span class="blue in_block mar_l_30">禁用元素 </span>
        <span>disabled='disabled' 可见而不可选<br/></span>
        <span class="blue in_block mar_l_30">引用预定的datalist </span>
        <span>list='datalist的id' 个人主页那里可以看到<br/></span>
        <span class="blue in_block mar_l_30">输入最大长度 </span>
        <span>maxlength='num' 只能输入多少个字符<br/></span>
        <span class="blue in_block mar_l_30">可接收多个文件 </span>
        <span>multiple='multiple' 用于文件上传 下拉选择框也可以用<br/></span>
        <span class="blue in_block mar_l_30">规定输入匹配正则表达式 </span>
        <span>pattern='1[3|5|7|8]\d{9}' 匹配手机号码<br/></span>
        <span class="blue in_block mar_l_30">提示输入文字 </span>
        <span>placeholder='something'<br/></span>
        <span class="blue in_block mar_l_30">设置内容为只读 </span>
        <span>readonly='readonly'<br/></span>
        <span class="blue in_block mar_l_30">设置内容为必填 </span>
        <span>required='required'<br/></span>
    </p>
    <hr/>
    <p>
        <span class='red'>下拉选择框 select<br/></span>
        <span class="blue in_block mar_l_30">选项</span> 
        <span>option<br/></span>
        <span class="blue in_block mar_l_30">选项组</span> 
        <span>&lt;optgroup lable='名称' value=''&gt;<br/></span>
    </p>
    <hr/>
    <p>
        <span class='red'>下拉数据列 datalist</span><br/>
        <span>与option list 搭配使用</span>
    </p>
    <hr/>
    <p>
        <span class='red'>文本域 textarea</span><br/>
        <span class="blue in_block mar_l_30">行 clos='' 列='rows'</span><br/>
        <span class="blue in_block mar_l_30">提交时保留换行</span> 
        <span> wrap=soft(默认换行)|hard 不换行<br/></span>
        <span class="blue in_block mar_l_30">调整文本域权限</span> 
        <span> resize:none 禁止调整 both:可调整宽高 horizontal:可调整宽度 vertical:可调整高度<br/></span>
    </p>
    <hr/>
</div>
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
        <textarea name="textarea" rows='3' cols="20" wrap="hard" style="width: 200px;resize:vertical;vertical-align: text-top;"></textarea>
    </p>
    <p style="text-align: center;">
        <input type="reset" value="重置"/>
        <input type="submit" value="提交"/>
    </p>
</form>
<hr/>










<?php
require('include/footer.inc.php');
