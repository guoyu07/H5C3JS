/*<#日期 = "2017-2-22">
 <#时间 = "23:24:29">
 <#人物 = "buff" >
 <#备注 = " ">     */
"use strict";
//jQuery
$(function () {
    $('#hide').click(function () {
        $('#for_hide').hide(1000);
    });
    $('#show').click(function () {
        $('#for_hide').show(1000);
    });
    $('#toggle').click(function () {
        $('#for_hide').toggle(1000);
    });
    $('#fadein').click(function () {
        $('#for_fade').fadeIn(1000);
    });
    $('#fadeout').click(function () {
        $('#for_fade').fadeOut(1000);
    });
    $('#fadetoggle').click(function () {
        $('#for_fade').fadeToggle(1000);
    });
    $('#fadeto').click(function () {
        $('#for_fade').fadeTo(1000, 0.3);
    });
    $('#slideDown').click(function () {
        $('#for_slide').slideDown(1000);
    });
    $('#slideUp').click(function () {
        $('#for_slide').slideUp(1000);
    });
    $('#slideToggle').click(function () {
        $('#for_slide').slideToggle(1000);
    });
    $('#animate').click(function () {
        $('#for_animate').animate(
                {
                    left: '60px',
                    top: '60px',
                    width: '80px',
                    height: '80px'
                }, 1000);
    });
    $('#animate_stop').click(function () {
        $('#for_animate').stop();
    });
    $('#callback').click(function () {
        $('#callback_hide').hide(3000,
                function () {
                    $('#for_callback').click(function () {
                        $(this).css("color", "red");
                    });
                });
    });
    $('#animate_stop').click(function () {
        $(this).stop();
    });
    $('#catch_val').change(function () {
        console.log($(this).val());
    });
    $('#catch_text').click(function () {
        console.log($(this).text());
    });
    $('#catch_html').click(function () {
        console.log($(this).html());
    });
    $('#catch_attr').click(function () {
        $('#show_attr').append($('#for_attr').attr('href'));
    });
    $('#chaining').click(function () {
        $('#for_chaining').animate({width: '100px'},
                1000).animate({height: '100px'},
                1000).animate({width: '50px', height: '50px'}, 1000);
    });
    $('#change_catch_text').click(function () {
        $('#catch_text').text('hello');
    });
    $('#change_catch_html').click(function () {
        $('#catch_html').html('<b>hello</b>');
    });
    $('#change_catch_attr').click(function () {
        $('#for_attr').attr('href',
                function () {
                    $('#show_attr').text('这个链接的href是: ');
                    return 'http://www.baidu.com/';
                });
    });
    $('#append').click(function () {
        $('#for_append').append('---this is appended text!');
    });
    $('#prepend').click(function () {
        $('#for_append').prepend('this is prepended text!---');
    });
    $('#after_add').click(function () {
        console.log('sdasdsd');
        $('#for_before_add').after('<span>this is add after the element<br/></span>');
    });
    $('#before_add').click(function () {
        $('#for_before_add').before('<span>this is add before the element<br/></span>');
    });
    $('#meta_add_author').click(function () {
        $('head title').after("<meta name='author' content='buff' />");
    });
    $('#remove').click(function () {
        $('#remove_main').remove();
    });
    $('#empty').click(function () {
        $('#remove_main').empty();
    });
    $('#remove_filter').click(function () {
        $('#remove_main div').remove('.remove_div2');
    });
    $('#add_class').click(function () {
        $('#for_class_oper').addClass('red');
    });
    $('#remove_class').click(function () {
        $('#for_class_oper').removeClass('red');
    });
    $('#toggle_class').click(function () {
        $('#for_class_oper').toggleClass('red');
    });
    $('#catch_css_attr').click(function () {
        $(this).append($(this).css('font-size'));
    });
    $('#set_css_style').click(function () {
        $('#catch_css_attr').css({'font-size': '16px', color: 'red'});
    });
    $('#catch_size span').eq(1).click(function () {
        $(this).append($('#for_catch_size').width() + ' 不包括padding border 和margin ');
    });
    $('#catch_size span').eq(2).click(function () {
        $(this).append($('#for_catch_size').innerWidth() + ' 不包括border 和margin');
    });
    $('#catch_size span').eq(3).click(function () {
        $(this).append($('#for_catch_size').outerWidth() + ' 不包括margin');
    });
    $('#catch_size span').eq(4).click(function () {
        $(this).append($('#for_catch_size').outerWidth(true) + ' 全部都有');
    });
    $('#ajax_load').click(function () {
        $('#for_load').load('include/ajax_load.php', {'name': '杜甫'}, function (t, s) {
            if (s === "error") {
                $(this).text('获取文件失败');
            } else {
                t = JSON.parse(t);
                $(this).text(t.content);
            }
        });
    });
    $('#ajax_get').click(function () {
        $.get('include/ajax_load.php', function (t, s) {
            if (s === "error") {
                $('#for_load').text('获取文件失败');
            } else {
                t = JSON.parse(t);
                $('#for_load').text(t.content);
            }
        });
    });
    $('#ajax_post').click(function () {
        $.post('include/ajax_load.php', {name: "李白"}, function (t, s) {
            if (s === "error") {
                $('#for_load').text('获取文件失败');
            } else {
                t = JSON.parse(t);
                $('#for_load').text(t.content);
            }
        });
    });
    $('#ajax_ajax').click(function () {
        $.ajax({
            type: 'post',
            url: 'include/ajax_load.php',
            data: {name: "杜甫"},
            cache: false,
            dataType: 'json',
            crossDomain: false, //跨域请求 默认为false
            headers: {Accept: 'charset=utf-8'
            },
            context: $('#for_load'),
            complete: function (XMLHttpRequest, textStatus) {
                if (textStatus === 'error') {
                    $(this).text('请求数据失败');
                }
            },
            success: function (data, textStatus, XMLHttpRequest) {
//                data = JSON.parse(data); //因为上面dataType已经设置为json 已经自动换行为json了
                $(this).text(data.content);
            },
            statusCode: {200: function () {
                    console.log('请求成功');
                }, 304: function () {
                    console.log('这是缓存的数据');
                }},
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(textStatus);
            }

        });
    });
    $.fn.extend({
        red_color: function () {
            return $(this).each(function () {
                $(this).css('color', 'red');
            });
        }
    });
    $('#extend_fun').click(function () {
        $(this).red_color();
    });
    $('#serialize_f_submit').click(function () {
        $('#serialize_form_cont').text($('#serialize_form').serialize());
        var t = $('#serialize_form').serializeArray(), a = $("#serialize_form_json_cont");
        $.each(t, function (i, t) {
            a.append(t.name + '=' + t.value + "&");
            i++;
        });
        a.text(a.text().replace(/&$/, ''));
    });


});

































