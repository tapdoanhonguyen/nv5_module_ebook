<?php

/**
 * @Project NUKEVIET 4.x
 * @Author TDHN <adminwmt@gmail.com>
 * @Copyright (C) 2023 TDHN. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Thu, 06 Apr 2023 14:36:56 GMT
 */

if (!defined('NV_IS_MOD_EBOOK'))
    die('Stop!!!');

/**
 * nv_theme_ebook_main()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_ebook_main($array_data)
{
    global $module_info, $lang_module, $lang_global, $op;

    $xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);

    //------------------
    // Viết code vào đây
    //------------------

    $xtpl->parse('main');
    return $xtpl->text('main');
}

/**
 * nv_theme_ebook_detail()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_ebook_detail($array_data)
{
    global $module_info, $lang_module, $lang_global, $op;

    $xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);

    //------------------
    // Viết code vào đây
    //------------------

    $xtpl->parse('main');
    return $xtpl->text('main');
}

/**
 * nv_theme_ebook_search()
 * 
 * @param mixed $array_data
 * @return
 */
function nv_theme_ebook_search($array_data)
{
    global $module_info, $lang_module, $lang_global, $op;

    $xtpl = new XTemplate($op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_info['module_theme']);
    $xtpl->assign('LANG', $lang_module);
    $xtpl->assign('GLANG', $lang_global);

    //------------------
    // Viết code vào đây
    //------------------

    $xtpl->parse('main');
    return $xtpl->text('main');
}
