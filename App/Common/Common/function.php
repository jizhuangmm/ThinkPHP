<?php

function https_post($url, $data)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    if (curl_errno($curl)) {
        return 'Error' . curl_error($curl);
    }
    curl_close($curl);
    return $result;
}

function https_get($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_POST, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    if (curl_errno($curl)) {
        return 'Error' . curl_error($curl);
    }
    curl_close($curl);
    return $result;
}




    /**
     * 系统公共库文件
     * 主要定义系统公共函数库
     */
    /**
     * 设置主题
     */
    function set_theme($theme=''){
            //判断是否存在设置的模板主题
            if(empty($theme)){
               $theme_name=C('DEFAULT_THEME');
            }else{
               if(is_dir (MODULE_PATH.'View/'.$theme )){
                  $theme_name=$theme;             
               }else{
                  $theme_name=C('DEFAULT_THEME');
               }           
               
            }
            //替换COMMON模块中设置的模板值    
            if(C('Current_Theme')){
                C('TMPL_PARSE_STRING',str_replace (C('Current_Theme') ,  $theme_name ,  C('TMPL_PARSE_STRING') ));        
            }else{
                C('TMPL_PARSE_STRING',str_replace ( "MODULE_NAME" ,  MODULE_NAME ,  C('TMPL_PARSE_STRING') ));    
                C('TMPL_PARSE_STRING',str_replace ( "DEFAULT_THEME" ,  $theme_name ,  C('TMPL_PARSE_STRING') ));
            }
            C('Current_Theme',$theme_name);
            C('DEFAULT_THEME', $theme_name);
    }