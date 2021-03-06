<?php
/**
 * Created by PhpStorm.
 * User: vien
 * Date: 2019/3/27
 * Time: 3:21 PM
 */

return [
    "blog" => [
        "name" => "Vien Blog", // 博客名称
        "description" => "最好的Laravel Markdown Blog, 基于Laravel5.8构建, 支持Markdown编辑, 支持图片上传 - Vien Blog" // 博客描述(150字以内),
    ],
    "author" => [ // 博主
        "name" => "Vien", // 名字
        "description" => "A huge huge fan of computer science, especially the direction of artificial intelligence.", // 简介
        "avatar" => "/images/avatars/lbxx-14.jpeg", // 头像
    ],
    "header" => [ // 顶部的(不是最顶部)导航
        "links" => [ // 导航链接
            [
                "title" => "首页", // 链接标题
                "url" => "https://vienblog.com" // 链接URL
            ],
            [
                "title" => "关于作者",
                "url" => "https://vienblog.com" // 链接URL
            ],
            [
                "title" => "打赏作者",
                "url" => "https://vien.tech/pay" // 链接URL
            ],
            [
                "title" => "建站教程",
                "url" => "https://vienblog.com" // 链接URL
            ],
            [
                "title" => "科学上网",
                "url" => "https://vienblog.com/tag/科学上网" // 链接URL
            ],
            [
                "title" => "网站导航",
                "url" => "https://vienblog.com" // 链接URL
            ],
            [
                "title" => "机器学习",
                "url" => "https://aicodingart.com" // 链接URL
            ],
            [
                "title" => "Laravel教程",
                "url" => "https://vienblog.com" // 链接URL
            ],
            [
                "title" => "Python教程",
                "url" => "https://vienblog.com" // 链接URL
            ],
            [
                "title" => "Git教程",
                "url" => "https://vienblog.com" // 链接URL
            ],
            [
                "title" => "Docker教程",
                "url" => "https://vienblog.com" // 链接URL
            ],
            [
                "title" => "友情链接",
                "url" => "https://vienblog.com" // 链接URL
            ],
        ]
    ],
    "sidebar" => [ // 右侧bar
        "carousel" => [ // 滚动Banner
            "open" => true, // 是(true)否(false)开启 默认true 开启务必设置banners
            "banners" => [ // 设置滚动的Banner 请让图的长宽比都相同 否则切换时高度会变化
                [
                    "image" => "/images/banners/vultr.png", // 图片路径
                    "url" => "https://www.vultr.com/?ref=7896745-4F", // 点击后的跳转链接
                    "description" => "优质国外服务器供应商Vultr限时注册送50刀", // Banner描述 用于img标签的alt属性
                ],
                [
                    "image" => "/images/banners/vultr.png", // 图片路径
                    "url" => "https://www.vultr.com/?ref=7896745-4F", // 点击后的跳转链接
                    "description" => "优质国外服务器供应商Vultr限时注册送50刀", // Banner描述 用于img标签的alt属性
                ],
                [
                    "image" => "/images/banners/vultr.png", // 图片路径
                    "url" => "https://www.vultr.com/?ref=7896745-4F", // 点击后的跳转链接
                    "description" => "优质国外服务器供应商Vultr限时注册送50刀", // Banner描述 用于img标签的alt属性
                ],
            ]
        ],
        "motto" => [ // 座右铭
            "open" => true, // 是(true)否(false)开启 默认true,
            "title" => "怯怯思语", // 标题
            "content" => "如果幽默是一种罪过, 我早已恶贯满盈" // 内容
        ],
        "tag" => [ // 标签
            "open" => true, // 是(true)否(false)开启 默认true,
            "title" => "标签", // 标题
            "count" => 30, // 展示数量
        ],
        "category" => [ // 分类
            "open" => true, // 是(true)否(false)开启 默认true,
            "title" => "分类", // 标题
            "count" => 20, // 展示数量
        ],
        "hot" => [ // 最热文章
            "open" => true, // 是(true)否(false)开启 默认true,
            "title" => "热门文章", // 标题
            "count" => 8, // 展示数量
        ],
        "latest" => [ // 最新文章
            "open" => true, // 是(true)否(false)开启 默认true,
            "title" => "刚刚发布了", // 标题
            "count" => 8, // 展示数量
        ],
        "popular" => [ // 刚有人看的文章
            "open" => true, // 是(true)否(false)开启 默认true,
            "title" => "最近有人在看", // 标题
            "count" => 8, // 展示数量
        ],
    ],
    "disks" => [
        "article_image" => "vienblog" // 文章中图片的disk(disk在filesystem.php中配置)
    ],
    "ad" => false, // Google AdSense Auto AD 开关 默认关闭 开启需要在 resources/views/ads/adsense.blade.php 中添加 AdSense代码
    "counter" => false, // 统计工具(例如百度统计、StatCounter等) 开关 默认关闭 开启需要在 resources/views/counters/counter.blade.php 中添加相关代码
    "baidu" => [ // 提交站内链接给百度 请先登录百度站长平台验证站长身份 从而获得相应的信息用于下面配置
        "auto_push" => false, // 百度自动推送 开关 默认关闭 用于自动提交页面链接给百度收录
        "manual_push" => [ // 主动推送
            "open" => false, // 手动推送开关 默认关闭 需要先配置下面的domain和api才能开启使用
            "domain" => "https://baidu.com", // 主动推送的博客地址
            "api" => "http://data.zz.baidu.com/urls?site=https://baidu.com&token=lLC6nY5KkflD8Pz2" // 主动推送接口调用地址
        ]
    ]
];