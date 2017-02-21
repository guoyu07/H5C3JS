/*<#日期 = "2017-2-19">
 <#时间 = "7:33:13">
 <#人物 = "buff" >
 <#备注 = " ">     */
"use strict";
// Canvas 拼图画布
var canvas = document.getElementById('canvas');
canvas.style.border = '1px solid #000';
var cv2 = canvas.getContext('2d');
cv2.fillStyle = 'red';
cv2.fillRect(20, 20, 50, 50);
cv2.strokeStyle = 'blue';
cv2.lineWidth = 1;
cv2.strokeRect(90, 20, 50, 50);
cv2.clearRect(89, 45, 52, 26);

cv2.font = '18px Microsoft Yahei,微软雅黑,arial,宋体';
cv2.textBaseline = 'top';
cv2.fillText('hello world', 150, 20);
cv2.strokeText('hello world', 250, 20);
console.log("hello world的字符宽度是" + cv2.measureText('hello world').width);

cv2.beginPath();
cv2.moveTo(370, 20);
cv2.lineWidth = 5;
cv2.lineCap = "butt";//线段末端为矩形
cv2.lineTo(400, 20);
cv2.stroke();
cv2.beginPath();
cv2.lineCap = "round";//线段末端为圆形
cv2.moveTo(370, 30);
cv2.lineTo(400, 30);
cv2.stroke();
cv2.beginPath();
cv2.lineCap = "square";//线段末端以方形结束，但是增加了一个宽度和线段相同，高度是线段厚度一半的矩形区域。
cv2.moveTo(370, 40);
cv2.lineTo(400, 40);
cv2.stroke();
cv2.closePath();

cv2.beginPath();
cv2.moveTo(20, 90);
cv2.lineWidth = 20;
cv2.lineJoin = "round";
cv2.lineTo(50, 110);
cv2.lineTo(80, 90);
cv2.stroke();
cv2.beginPath();
cv2.moveTo(20, 130);
cv2.lineWidth = 20;
cv2.lineJoin = "bevel";
cv2.lineTo(50, 150);
cv2.lineTo(80, 130);
cv2.stroke();
cv2.beginPath();
cv2.moveTo(20, 170);
cv2.lineWidth = 20;
cv2.miterLimit = 2;//比率为2. 即内角到外角的距离不能大于线宽的一半*比率) 也就是(20/2)*2=20px,如果大于20px 则按bevel方式显示
cv2.lineJoin = "miter";
cv2.lineTo(50, 250);
cv2.lineTo(80, 170);
cv2.stroke();

var dashOffset = -1;
/**
 * @description 跑马灯,设置dashOffset,让线条不停的移动
 * @returns {undefined}
 */
function paoMaDeng() {
    cv2.clearRect(110, 67, 110, 6);
    dashOffset--;
    if (dashOffset <= -45) {
        dashOffset = 0;
    }
    cv2.beginPath();
    cv2.lineCap = 'butt';
    cv2.lineWidth = 5;
    cv2.lineDashOffset = dashOffset;
    cv2.setLineDash([15, 5, 15, 10]);//设置line样式为15px实线,5px空白,15px实线,10px空白 按这个顺序一直排到结尾
    cv2.moveTo(110, 70);
    cv2.lineTo(220, 70);
    cv2.stroke();
    setTimeout("paoMaDeng()", 1000 / 60);
}
paoMaDeng();

var gradient = cv2.createLinearGradient(110, 90, 210, 90);
gradient.addColorStop(0, "green");
gradient.addColorStop(0.3, "red");
gradient.addColorStop(0.6, "blue");
gradient.addColorStop(1, "white");
cv2.fillStyle = gradient;
cv2.fillRect(110, 90, 100, 50);

cv2.beginPath();
var gradient2 = cv2.createRadialGradient(160, 195, 50, 160, 195, 0);
gradient2.addColorStop(0, "#F00");
gradient2.addColorStop(1 / 6, "#F60");
gradient2.addColorStop(2 / 6, "#FF0");
gradient2.addColorStop(3 / 6, "#0C0");
gradient2.addColorStop(4 / 6, "#699");
gradient2.addColorStop(5 / 6, "#06C");
gradient2.addColorStop(1, "#909");
cv2.fillStyle = gradient2;
cv2.arc(160, 195, 50, 0, Math.PI * 2, true);
cv2.fill();

cv2.beginPath();
var img = new Image();
img.src = 'http://127.0.0.1:81/k_note/html5/public/images/createPattern.jpg';
img.onload = function () {
    var pattern = cv2.createPattern(img, 'repeat');
    cv2.fillStyle = pattern;
    cv2.fillRect(240, 60, 150, 60);
};

cv2.beginPath();
cv2.shadowColor = "red";
cv2.shadowBlur = 10; //阴影width为10px
cv2.shadowOffsetX = 0;//阴影x轴偏移
cv2.shadowOffsetY = 0;//阴影y轴偏移
cv2.fillStyle = "#929fc6";
cv2.fillRect(410, 60, 50, 50);
cv2.closePath();

cv2.beginPath();
cv2.moveTo(240, 145);
cv2.lineTo(280, 145);
cv2.lineTo(260, 170);
cv2.closePath(); // 让第2个点返回到起始点 算是闭合路径
cv2.stroke();
//学到绘制路径的clip. https://developer.mozilla.org/zh-CN/docs/Web/API/CanvasRenderingContext2D

/**
 * 控制data-person-type值为纯爷们的元素颜色为蓝色
 * @returns {undefined}
 */
function is_single_men() {
    var customAttr = document.getElementById('customAttr').getElementsByTagName('span');
    for (var i = 0; i < customAttr.length; i++) {
        if (customAttr[i].getAttribute("data-person-type") === '纯爷们') {
            customAttr[i].style.color = 'blue';
        }
    }
}
/**
 * 当拖动开始时 设置数据以及他的id
 * @param {事件} e
 * @returns {undefined}
 */
function drag(e) {
    e.dataTransfer.setData("Text", e.target.id);
}

/**
 * 允许拖动元素降落并取消默认事件
 * @param {事件} e
 * @returns {undefined}
 */
function allowDrop(e) {
    e.preventDefault();
}

/**
 * 当降落时取消默认的事件,并取出元素,并加入到此元素内
 * @param {事件} e
 * @returns {undefined}
 */
function drop(e) {
    e.preventDefault();
    var data = e.dataTransfer.getData("Text");
    e.target.appendChild(document.getElementById(data));
}



















