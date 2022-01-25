<?php
if (!defined('_GNUBOARD_')) exit; // Unable to access direct pages

//return;

add_replace('html_process_add_meta', 'add_open_graph_meta_tag', 10, 1);

function add_open_graph_meta_tag($add_meta_tag=''){

    if( defined('G5_IS_ADMIN') ) return;

    global $config, $board, $write;
    
    // https://developers.facebook.com/docs/sharing/webmasters?locale=ko_KR
    // http://blog.ab180.co/open-graph-as-a-website-preview/
    // https://futurecreator.github.io/2016/06/16/opengraph-social-meta-tag/
    
    $metas = array();

    $og_type = 'website';
    $site_title = get_text($config['cf_title']);

    //사이트 설명을 입력해 주세요.
    $description  = '경영시스템인증,ISO 9001, 제품인증서비스, 제품시험검사서비스,개인 인증서비스,심사원 양성 서비스';

    if( ! $description ){
        $description = $site_title;
    }

    $site_url   = G5_URL;
    $site_name  = get_text($config['cf_title']);
    $site_image = (defined('G5_THEME_PATH') && file_exists(G5_THEME_PATH.'/img/logo.jpg')) ? G5_THEME_IMG_URL.'/logo.jpg' : G5_IMG_URL.'/logo.png';         // 로고 이미지
    $meta_keywords = '';
    
    $thumb_max_width = '400';      // 게시글 썸네일 MAX width 사이즈 지정
    $thumb_max_height = '400';      // 게시글 썸네일 MAX height 사이즈 지정

    if(isset($board['bo_table']) && $board['bo_table']) {
        if(isset($write['wr_id']) && $write['wr_id'] && !strstr($write['wr_option'], 'secret')) {
            $og_type = 'article';
            $site_title  = get_text($write['wr_subject']).' > '.get_text($config['cf_title']);
            $site_url = get_pretty_url($board['bo_table'], $write['wr_id']);
            $description   = strip_tags(get_text(cut_str(strip_tags($write['wr_content']), 200), 1));
            
            $keywords = get_text(array($write['ca_name'], $write['wr_subject']));
            $meta_keywords = implode(',', array_filter($keywords));
            
            if(function_exists('get_list_thumbnail')){
                $thumb = get_list_thumbnail($board['bo_table'], $write['wr_id'], $thumb_max_width, $thumb_max_height, false, true);

                if( isset($thumb['src']) && $thumb['src'] ){
                    $site_image = $thumb['src'];
                }
                
                // 원본 사진으로 하려고 한다면 아래 주석을 풀고 사용해 주세요.
                //if( isset($thumb['ori']) && $thumb['ori'] ){
                    //$site_image = $thumb['ori'];
                //}
            }
        } else {
            $site_title = get_text($board['bo_subject']).' > '.get_text($config['cf_title']);
            $site_url   = get_pretty_url($board['bo_table']);
            $description = $site_title;
        }
    }

    $metas[] = '<meta name="description" content="'.$description.'" />';
    if( $meta_keywords ) $metas[] = '<meta name="keywords" content="'.$meta_keywords.'" />';
    $metas[] = '<meta property="og:type" content="'.$og_type.'" />';
    $metas[] = '<meta property="og:title" content="'.$site_title.'" />';
    $metas[] = '<meta property="og:description" content="'.$description.'" />';
    $metas[] = '<meta property="og:url" content="'.$site_url.'" />';
    $metas[] = '<meta property="og:site_name" content="'.$site_name.'" />';
    $metas[] = '<meta property="og:image" content="'.$site_image.'" />';
    $metas[] = '<meta name="twitter:card" content="summary" />';
    $metas[] = '<meta name="twitter:image" content="'.$site_image.'" />';
    $metas[] = '<meta name="twitter:title" content="'.$site_title.'" />';
    $metas[] = '<meta name="twitter:description" content="'.$description.'" />';

    $add_meta_tag .= implode(PHP_EOL, $metas);

    return $add_meta_tag;
}

?>