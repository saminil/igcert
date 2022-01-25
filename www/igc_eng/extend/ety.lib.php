<?php
if (!defined('_GNUBOARD_')) exit;

// �ֽű� ����
// ĳ�� ����
function latest_options($skin_dir='', $bo_table, $rows=10, $subject_len=40, $cache_time=1, $options='')
{
    global $g5;

	if (!$skin_dir) $skin_dir = 'basic';

    if(preg_match('#^theme/(.+)$#', $skin_dir, $match)) {
        if (G5_IS_MOBILE) {
            $latest_skin_path = G5_THEME_MOBILE_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
            if(!is_dir($latest_skin_path))
                $latest_skin_path = G5_THEME_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
            $latest_skin_url = str_replace(G5_PATH, G5_URL, $latest_skin_path);
        } else {
            $latest_skin_path = G5_THEME_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
            $latest_skin_url = str_replace(G5_PATH, G5_URL, $latest_skin_path);
        }
        $skin_dir = $match[1];
    } else {
        if(G5_IS_MOBILE) {
            $latest_skin_path = G5_MOBILE_PATH.'/'.G5_SKIN_DIR.'/latest/'.$skin_dir;
            $latest_skin_url  = G5_MOBILE_URL.'/'.G5_SKIN_DIR.'/latest/'.$skin_dir;
        } else {
            $latest_skin_path = G5_SKIN_PATH.'/latest/'.$skin_dir;
            $latest_skin_url  = G5_SKIN_URL.'/latest/'.$skin_dir;
        }
    }

	$list = array();

	$sql = " select * from {$g5['board_table']} where bo_table = '{$bo_table}' ";
	$board = sql_fetch($sql);
	$bo_subject = get_text($board['bo_subject']);

	$tmp_write_table = $g5['write_prefix'] . $bo_table; // �Խ��� ���̺� ��ü�̸�
	$sql = " select * from {$tmp_write_table} where wr_is_comment = 0 and ca_name='{$options}' order by wr_num limit 0, {$rows} ";
	
	$result = sql_query($sql);
	for ($i=0; $row = sql_fetch_array($result); $i++) {
		try {
			unset($row['wr_password']);     //�н����� ���� ����( �ƿ� ���� )
		} catch (Exception $e) {
		}
		$row['wr_email'] = '';              //�̸��� ���� ����
		if (strstr($row['wr_option'], 'secret')){           // ��б��� ��� ����, ��ũ, ���� ���� ����
			$row['wr_content'] = $row['wr_link1'] = $row['wr_link2'] = '';
			$row['file'] = array('count'=>0);
		}
		$list[$i] = get_list($row, $board, $latest_skin_url, $subject_len);
	}

    ob_start();
    include $latest_skin_path.'/latest.skin.php';
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
}
?>
