# Moricolor Chapter II (Mod)

一片森林，一座木屋，如世外桃源般，静谧、安逸。森林的气息，如梦境般，让人神往。

如同她的名字一样，给人以一种自然、恬静的文字阅读体验。

Mod of [Moricolor](https://github.com/txperl/Moricolor-for-Typecho) which is inspired by [MoriColor for Hexo](https://github.com/Anapopo/Moricolor-for-Hexo) by Anapopo.

----------

## 修改

主要为自用，没有做太多的兼容性处理，可能会有一些问题，欢迎提出。

<center><img width="500px" src="https://s2.loli.net/2025/02/12/1AWSjgfndN6lLFZ.png"/></center>

- 将作者名与网站名称区分开
- 修改首页翻页控件

<center><img width="300px" src="https://s2.loli.net/2025/02/12/d91FSY7GCXOyEIv.png"/></center>

- 将自定义链接与首页底部页面展示合并，取消 Tooltip 菜单

<center><img width="500px" src="https://s2.loli.net/2025/02/12/IabfHnRiezh9U5k.png"/></center>

- 修改文章底部翻页控件
- Footer 改为向右对齐

<center><img width="300px" src="https://s2.loli.net/2025/02/12/OZFwUATaj8hbQox.png"/></center>

- 修改标签 Badge Hover 时显示效果

![](https://s2.loli.net/2025/02/12/OQvo2AWd16rCg5i.png)

- 修改全局颜色实现
- 修改一些字体表现
- 修改独立页面呈现效果

![](https://s2.loli.net/2025/02/13/rszJ2lZY1G9FLEv.png)

- 移除媒体分享按钮
- 添加文章编辑按钮

![](https://s2.loli.net/2025/02/13/p26iHhdRAOtsPGL.png)

- 修改独立页面呈现

![](https://s2.loli.net/2025/02/13/DfKOFRBtQ8yViXT.png)

- 添加 ICP、Github 页面、Github OAuth 登录
- 分离作者链接与博客链接

其他：

- 修改 404 页面等，具体忘了（

## 一些食用方法

**'config.php' 为主题全局配置文件**

**Prism.js使用 [代码高亮]**

只有部分语言适用，若想支持更多请去官网自行下载
```html
<pre><code class="language-xxx">{your_code}</code></pre>
```
&  
<pre><code class="language-html">
```{language}
{your_code}
```
</code></pre>


**封面图设置**

在文章中加入

```html 
<!-- img_quick:img_url; -->
```

为了整体样式的美观性，建议 图片宽度 >= 980px


**自定义快速预览内容**

在文章中加入

```html 
<!-- des_quick:your_words; -->
```

将 your_words 改成你需要的内容即可


**配色与背景图与字体粗细相关**

目前配色只是一个初版，所以很不完善  
关于背景图，设置一下淡灰风格的图片会显得不那么奇怪  
字体粗细如果没有更改，但你添加了背景图，可以试着改成 lighter 或 bolder ，这样样式整体性会高一些


**其他注意事项**

1. 本主题引用了多个本地资源，若是访问速度明显下降，请自行将本地资源上传到CDN或使用其他解决方案
2. 文章目录导航仅支持 h3,h4 层级，并且手机端不会显示
3. 更多问题可以询问作者

----------

## 写在最后

原作者：Trii Hsia，感谢 TA 的辛勤付出。

原作者版权声明为：`本程序源代码可任意修改并任意使用，但禁止商业化用途。`

此修改版基于此以 GPL-3.0 开源。

感谢。
