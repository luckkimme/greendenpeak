<?php 
    function upload_file(string $name, string $tempname, string $save_dir) {
        $new_file_name = uniqid().$name;
        $upload_path = "{$_SERVER['DOCUMENT_ROOT']}/$save_dir/$new_file_name";
        $new_save_dir = "/$save_dir/$new_file_name";
        $is_uploaded = move_uploaded_file($tempname, $upload_path); 
        if(!$is_uploaded) throw new Exception('Upload Failed');
        return $new_save_dir;
    }

?>