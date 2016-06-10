<?php

// Language: Japanese
// Author: haniokasai(twitter @haniokasai)
// Last Updated: 8 June, 2016

$file_lang_name = "日本語 (JP)";
$file_lang_default = 0; // 1 でデフォルト, 0で違う

$lang_title_ended = "セッションの終了";
$lang_title_errors = "エラーが発生しました";

$lang_session_expired = "セッションの有効期限が切れています";
$lang_ip_conflict = "あなたのIPアドレスはセッションのIPと矛盾しているらしいです";
// Translation required (start)
$lang_token_conflict = "Possible CSRF detected";
// Translation required (end)

$lang_btn_login = "ログイン";
$lang_ftp_host = "FTPホスト";
$lang_port = "ポート";
$lang_passive_mode = "パッシブモード (デフォルト)";
$lang_username = "ユーザー名";
$lang_password = "パスワード";
$lang_ftp_ssl = "SSL接続(有効なら)";
$lang_adv_interface = "高度なインタフェース";
$lang_save_login = "ログインの詳細を保存";
$lang_language = "言語";
$lang_skin = "スキン";
$lang_ip_check = "セッションをIPにロックする";

$lang_skins_empty = "[skins] フォルダが空ですから！";
$lang_skins_locked = "[skins] フォルダーがロックされました!";
$lang_skins_missing = "[skins] フォルダーが見つかりませんでした!";

$lang_missing_fields = "エラー！すべてのしるしのつけられた入力欄に入力してください";
$lang_max_logins = "ログイン試行回数が多すぎます。[n]分後にログインしてください";
$lang_cant_connect = "エラー！ftpホストに接続できません";
$lang_cant_authenticate = "エラー! あなたのログインを認証できませんでした";
$lang_ip_conflict = "IP衝突は検出されました";

$lang_table_name = "名前";
$lang_table_size = "サイズ";
$lang_table_date = "日付";
$lang_table_time = "時間";
$lang_table_user = "ユーザー名";
$lang_table_group = "グループ";
$lang_table_perms = "権限";

$lang_size_b = "B";
$lang_size_kb = "KB";
$lang_size_mb = "MB";
$lang_size_gb = "GB";
$lang_size_tb = "TB";

$lang_btn_refresh = "更新";
$lang_btn_dl ="ダウンロード";
$lang_btn_cut = "切り取り";
$lang_btn_copy = "コピー";
$lang_btn_paste = "貼り付け";
$lang_btn_rename = "名前の変更";
$lang_btn_delete = "削除";
$lang_btn_chmod = "権限の付与";
$lang_btn_logout = "ログアウト";
$lang_btn_save = "保存";
$lang_btn_close = "閉じる";
$lang_btn_cancel = "キャンセル";
$lang_btn_ok = "OK";
$lang_btn_new_folder = "新規フォルダ";
$lang_btn_new_file = "新規ファイル";
$lang_btn_upload_file = "ファイルのアップロード";
$lang_btn_upload_files = "複数のファイルのアップロード";
$lang_btn_upload_repeat = "再アップロード";
$lang_btn_upload_folder = "フォルダのアップロード";

// Translation required (start)
$lang_info_version = "Version";
// Translation required (end)
$lang_info_host = "ホスト";
$lang_info_user = "ユーザー名";
$lang_info_upload_limit = "アップロードの最大容量";
$lang_info_drag_drop = "ドラック＆ドロップ";

$lang_xfer_file = "ファイル";
$lang_xfer_size = "サイズ";
$lang_xfer_progress = "進行";
$lang_xfer_elapsed = "経過時間";
$lang_xfer_uploaded = "アップロード完了";
$lang_xfer_rate = "転送速度";
$lang_xfer_remain = "残り時間";

$lang_move_conflict = "移動先フォルダは移動元フォルダのサブディレクトリです";
$lang_cant_rename = " [file]の名前を変更できませんでした";
$lang_cant_delete = "[file]を削除できませんでした";

$lang_folder_exists = "フォルダ [folder] はすでに存在します";
$lang_folder_doesnt_exist = "フォルダ [folder] は存在しません";
$lang_folder_cant_move = " [folder]を移動できませんでした";
$lang_folder_cant_delete = " [folder]削除できませんでした";
$lang_folder_cant_access = " [folder]にアクセスできませんでした";
$lang_folder_cant_make = " [folder]を作成できませんでした";

$lang_file_exists = "ファイル[file]はすでに存在しています";
$lang_file_doesnt_exist = "ファイル [file] は存在しません";
$lang_file_cant_move = "[file]を移動できませんでした";
$lang_file_cant_make = " [file]を作成できませんでした";

$lang_server_error_down = "サーバーエラー　[file]のダウンロード";
$lang_server_error_up = "サーバーエラー  [file]　のアップロード";
$lang_browser_error_up = "ブラウザエラー [file]のアップロード";
$lang_file_size_error = "ファイルが大きすぎます";
$lang_file_size_copy_error = "[file] のファイルの大きさが制限を超えています";

$lang_folder_cant_chmod = "chmod [perms] を[folder]にできませんでした";
$lang_file_cant_chmod = "chmod [perms] を[file]にできませんでした";

$lang_chmod_max_777 = "Chmodは777以上にできません";
$lang_chmod_owner = "オーナーの権限";
$lang_chmod_group = "グループの権限";
$lang_chmod_public = "その他の権限";
$lang_chmod_manual = "マニュアル";
$lang_chmod_read = "読み込み";
$lang_chmod_write = "書き込み";
$lang_chmod_exe = "実行";
$lang_chmod_no_support = "あなたのphpサーバーはftp_chmodに対応していません";

$lang_title_rename = "複数ファイルの名前の変更";
$lang_title_chmod = "ファイルの属性を変える";
$lang_title_edit_file = "編集";
$lang_title_new_file = "新規ファイル";
$lang_title_new_folder = "新規フォルダ";
$lang_new_folder_name = "新しいフォルダ名を決めてください...";
$lang_new_file_name = "新しいファイル名を決めてください...";
$lang_template = "テンプレート";
$lang_no_template = "テンプレートがありません";

$lang_no_xmlhttp = "お使いのブラウザはXMLHTTPをサポートしていません！";
$lang_support_drop = "対応";
$lang_no_support_drop = "未対応";
$lang_transfer_pending = "宙ぶらりん";
$lang_transferring_to_ftp = "FTPサーバへの転送中...";
$lang_no_file_selected = "開くをクリックして、ファイル選んで、アップロードしてね！";
$lang_none_selected = "1つ以上のフォルダを選んでくださいね!";
$lang_context_open = "開く";
$lang_context_download = "ダウンロード";
$lang_context_edit = "編集";
$lang_context_cut = "切り取り";
$lang_context_copy = "コピー";
$lang_context_paste = "貼り付け";
$lang_context_rename = "名前の変更";
$lang_context_delete = "削除";
$lang_context_chmod = "権限";

// Translation required (start)
$lang_title_fetch_file = "Fetch File";
$lang_fetch_no_file = "The URL does not contain a file name.";
$lang_fetch_not_found = "No file could be found at this address.";
$lang_btn_fetch = "Fetch";
$lang_btn_fetch_file = "Fetch File";
// Translation required (end)

?>
