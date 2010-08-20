<?php

/**
* @Project NUKEVIET 3.0
* @Author VINADES.,JSC (contact@vinades.vn)
* @Copyright (C) 2010 VINADES.,JSC. All rights reserved
* @Language Vietnamese
* @Createdate May 31, 2010, 08:01:47 PM
*/

 if (! defined('NV_ADMIN') or ! defined('NV_MAINFILE')){
 die('Stop!!!');
}

$lang_translator['author'] ="VINADES.,JSC (contact@vinades.vn)";
$lang_translator['createdate'] ="04/03/2010, 15:22";
$lang_translator['copyright'] ="@Copyright (C) 2010 VINADES.,JSC. All rights reserved";
$lang_translator['info'] ="";
$lang_translator['langtype'] ="lang_module";

$lang_module['categories'] = "Quản lý Chủ đề";
$lang_module['topics'] = "Nhóm tin liên quan";
$lang_module['sources'] = "Nguồn tin";
$lang_module['comments'] = "comments";
$lang_module['save'] = "Lưu thay đổi";
$lang_module['action'] = "Thực hiện";
$lang_module['move'] = "Di chuyển bài viết";
$lang_module['save_temp'] = "Lưu bài viết không đăng";
$lang_module['publtime'] = "Đăng bài viết";
$lang_module['exptime'] = "Cho hết hạn bài viết";
$lang_module['status'] = "Trạng thái";
$lang_module['status_0'] = "Chờ duyệt";
$lang_module['status_1'] = "Xuất bản";
$lang_module['status_2'] = "Hẹn giờ đăng";
$lang_module['status_3'] = "Hết hạn";
$lang_module['errorsave'] = "Lỗi hệ thống không cập nhật được nội dung, bạn hãy kiểm tra lại tiêu đề bài viết có thể bị trùng";
$lang_module['saveok'] = "Cập nhật bài viết thành công";
$lang_module['alias'] = "Liên kết tĩnh";
$lang_module['name'] = "Tiêu đề";
$lang_module['error_name'] = "Lỗi:Bạn cần nhập Tiêu đề";
$lang_module['weight'] = "vị trí";
$lang_module['numsubcat'] = "Số chủ đề con";
$lang_module['inhome'] = "Hiển thị trang chủ";
$lang_module['numlinks'] = "Số liên kết";
$lang_module['description'] = "Miêu tả";
$lang_module['keywords'] = "Từ khóa";
$lang_module['content_list'] = "Danh sách bài viết";
$lang_module['content_add'] = "Thêm bài viết";
$lang_module['add_cat'] = "Thêm chủ đề";
$lang_module['add_topic'] = "Thêm nhóm tin liên quan";
$lang_module['add_sources'] = "Thêm nguồn tin";
$lang_module['edit_cat'] = "Sửa chủ đề";
$lang_module['edit_topic'] = "Sửa nhóm tin liên quan";
$lang_module['edit_sources'] = "Sửa nguồn tin";

$lang_module['add_block_cat'] = "Thêm nhóm block";
$lang_module['edit_block_cat'] = "Sửa nhóm block";

$lang_module['link'] = "url ngồn tin";
$lang_module['cat_sub'] = "Thuộc chủ đề";
$lang_module['cat_sub_sl'] = "Là chủ đề chính";
$lang_module['topic_sl'] = "Chọn nhóm tin liên quan hoặc tự điền";
$lang_module['delcat_msg_cat'] = "Chủ đề này có %s chủ đề thành phần, bạn cần xóa hoặc di chuyển các chủ đề thành phần trước";
$lang_module['delcat_msg_rows'] = "Chủ đề có %s bài viết, bạn có chắc chắn xóa hoặc di chuyển sang chủ đề khác";
$lang_module['delcat_msg_rows_select'] = "Chú ý: chủ đề %1\$s có %2\$s bài viết. <br>Bạn xóa chủ đề này tức là xóa tất cả bài viết bên trong nó.";
$lang_module['delcat_msg_rows_move'] = "Hoặc chọn chủ đề để di chuyển bài viết tới";
$lang_module['delcatandrows'] = "Xóa chủ đề và các bài viết";
$lang_module['delcat_msg_rows_noselect'] = "Bạn cần chọn chủ đề để di chuyển bài viết tới";
$lang_module['deltopic_msg_rows'] = "nhóm tin liên quan có %s bài viết, bạn có chắc chắn xóa, khi đó nhóm tin liên quan sẽ bị xóa khỏi các bài viết.";
$lang_module['setting'] = "Cấu hình module";
$lang_module['setting_indexfile'] = "Phương án thể hiện trang chủ";
$lang_module['setting_homesite'] = "Kích thước của hình tại trang chủ";
$lang_module['setting_thumbblock'] = "Kích thước của hình tại các block ";
$lang_module['setting_imagefull'] = "Kích thước của hình dưới phần mở đầu bài viết ";
$lang_module['setting_per_page'] = "Số bài viết được hiển thị cùng với phần giới thiệu ngắn gọn trên một trang";
$lang_module['setting_st_links'] = "Số bài viết chỉ hiển thị link";
$lang_module['setting_idf_df'] = "Mặc định";
$lang_module['setting_setcomm'] = "Thảo luận mặc định khi tạo bài viết mới";
$lang_module['setting_auto_postcomm'] = "Tự động đăng thảo luận không cần qua kiểm duyệt";
$lang_module['setting_copyright'] = "Nội dung hiển thị nếu bài viết có lựa chọn giữ bản quyền bài viết";
$lang_module['viewcat_page'] = "Cách thể hiện chủ đề";
$lang_module['viewcat_page_new'] = "danh sách, mới lên trên";
$lang_module['viewcat_page_old'] = "danh sách, cũ lên trên";
$lang_module['viewcat_main_left'] = "chủ đề, tin khác nằm bên trái";
$lang_module['viewcat_main_right'] = "chủ đề,tin khác nằm bên phải";
$lang_module['viewcat_main_bottom'] = "chủ đề,tin khác nằm bên dưới";
$lang_module['viewcat_two_column'] = "chủ đề thành 2 cột";
$lang_module['search'] = "Tìm kiếm";
$lang_module['search_type'] = "Tìm kiếm theo";
$lang_module['search_id'] = "ID";
$lang_module['search_key'] = "Từ khóa tìm kiếm";
$lang_module['search_cat'] = "Chủ đề bài viết";
$lang_module['search_cat_all'] = "Tất cả các chủ đề";
$lang_module['search_title'] = "Tiêu đề";
$lang_module['search_bodytext'] = "Nội dung";
$lang_module['search_author'] = "Tác giả bài viết";
$lang_module['search_admin'] = "Người nhập liệu";
$lang_module['search_per_page'] = "Số bài viết hiển thị";
$lang_module['search_note'] = "Từ khóa tìm kiếm không ít hơn 2 ký tự, không lớn hơn 64 ký tự, không dùng các mã html";
$lang_module['content_edit'] = "Sửa bài viết";
$lang_module['error_title'] = "Lỗi: Bài viết chưa có tiêu đề";
$lang_module['error_bodytext'] = "Lỗi: Bài viết chưa có nội dung";
$lang_module['error_cat'] = "Lỗi: Bài viết chưa có chủ đề";
$lang_module['sources_sl'] = "Hãy chọn hoặc tự điền";
$lang_module['content_cat'] = "Chủ đề của bài viết";
$lang_module['content_block'] = "Bài viết thuộc các block";
$lang_module['content_topic'] = "Là thành phần của nhóm tin liên quan";
$lang_module['content_homeimg'] = "Hình Minh họa cho phần giới thiệu";
$lang_module['content_homeimgalt'] = "Chú thích cho hình minh họa";
$lang_module['content_hometext'] = "Giới thiệu ngắn gọn";
$lang_module['content_notehome'] = "(Hiển thị đối với mọi đối tượng)";
$lang_module['content_keywords'] = "Từ khóa dành cho máy chủ tìm kiếm";
$lang_module['content_keywords_note'] = "Để tạo tự động, hãy copy toàn bộ nội dung bài viết vào ô trống dưới đây và bấm";
$lang_module['content_clickhere'] = "vào đây";
$lang_module['content_showmore'] = "(Mở rộng để xem chi tiết)";
$lang_module['content_notetime'] = "(Ngày/tháng/năm giờ:phút)";
$lang_module['content_publ_date'] = "Thời gian đăng";
$lang_module['content_exp_date'] = "Thời gian hết hạn";
$lang_module['content_extra'] = "Tính năng mở rộng";
$lang_module['content_inhome'] = "Hiển thị trên trang chủ";
$lang_module['content_allowed_comm'] = "Cho phép thảo luận";
$lang_module['content_allowed_rating'] = "Cho phép xếp hạng";
$lang_module['content_allowed_send'] = "Cho phép gửi bài viết";
$lang_module['content_allowed_print'] = "Cho phép in bài viết";
$lang_module['content_allowed_save'] = "Cho phép lưu bài viết";
$lang_module['content_allshow'] = "Xem tất cả ";
$lang_module['content_allcollapse'] = "Đóng tắt cả";
$lang_module['content_bodytext'] = "Nội dung chi tiết";
$lang_module['content_bodytext_note'] = " (Chỉ hiển thị đối với những đối tượng được phép xem)";
$lang_module['content_admin'] = "Người tạo";
$lang_module['content_author'] = "Tác giả bài viết";
$lang_module['content_sourceid'] = "Nguồn tin";
$lang_module['content_copyright'] = "Giữ bản quyền bài viết";
$lang_module['content_archive'] = "Lưu trữ sau thời gian hết hạn";
$lang_module['showhometext'] = "Hiển thị phần Giới thiệu ngắn gọn khi xem bài viết";
$lang_module['imgposition'] = "Hình ảnh tại bài viết";
$lang_module['imgposition_0'] = "Không hiển thị";
$lang_module['imgposition_1'] = "Hiển thị theo cấu hình module";
$lang_module['imgposition_2'] = "Hiển thị dưới phần mở đầu";
$lang_module['addtoblock'] = "Thêm bài viết vào block";
$lang_module['delete_from_block'] = "Xóa bài viết khỏi block";
$lang_module['error_del_content'] = "Lỗi: Hệ thống không xóa hết được các bài viết, vui lòng thử lại";
$lang_module['msgnocheck'] = "Bạn cần chọn ít nhất 1 bài viết để thực hiện";
$lang_module['comment'] = "Quản lý bình luận";
$lang_module['activecomm'] = "Kích hoạt chức năng bình luận của module";
$lang_module['emailcomm'] = "Hiển thị email của người đăng bình luận";
$lang_module['comment_edit'] = "Sửa";
$lang_module['comment_edit_title'] = "Sửa bình luận";
$lang_module['comment_edit_active'] = "Kích hoạt";
$lang_module['comment_edit_delete'] = "Xóa bình luận";
$lang_module['comment_delete'] = "Xóa";
$lang_module['comment_funcs'] = "Chức năng";
$lang_module['comment_email'] = "Người gửi";
$lang_module['comment_topic'] = "Bài viết";
$lang_module['comment_content'] = "Nội dung";
$lang_module['comment_status'] = "Trạng thái";
$lang_module['comment_delete_title'] = "Xóa bình luận";
$lang_module['comment_delete_confirm'] = "Bạn có chắc muốn xóa bình luận ?";
$lang_module['comment_delete_yes'] = "Có";
$lang_module['comment_delete_no'] = "Không";
$lang_module['comment_delete_accept'] = "Chấp nhận";
$lang_module['comment_delete_unsuccess'] = "Có lỗi trong quá trình xóa dữ liệu";
$lang_module['comment_delete_success'] = "Xóa dữ liệu thành công";
$lang_module['comment_enable'] = "Bật";
$lang_module['comment_disable'] = "Tắt";
$lang_module['comment_checkall'] = "Chọn tất cả";
$lang_module['comment_uncheckall'] = "Bỏ chọn tất cả";
$lang_module['comment_nocheck'] = "Hãy chọn ít nhất 1 bình luận để có thể thực hiện";
$lang_module['comment_update_success'] = "Cập nhật thành công !";

$lang_module['block'] = "Các block tin";
$lang_module['adddefaultblock'] = "Chọn mặc định khi tạo bài viết";

$lang_module['source_logo'] = "Logo nguồn tin";
$lang_module['topic_page'] = "Tin tức thuộc nhóm tin liên quan";
$lang_module['topic_del'] = "Xóa khỏi nhóm tin liên quan";
$lang_module['topic_nocheck'] = "Hãy chọn ít nhất 1 bài viết để có thể thực hiện";
$lang_module['topic_delete_confirm'] = "Bạn có chắc muốn xóa nhóm tin liên quan ra khỏi bài viết ?";
$lang_module['topic_delete_success'] = "Loại bỏ thành công !";
$lang_module['topic_nonews'] = "Hiện tại không có bài viết nào thuộc nhóm tin liên quan này !";
$lang_module['addtotopics'] = "Thêm vào nhóm tin liên quan";
$lang_module['topic_update_success'] = "Cập nhật thành công !";
$lang_module['topic_num_news'] = " bài viết";

?>