# Admin Template: quy ước cho AI và người đóng góp

Khung quản trị Laravel 13 + Tabler 1.7, tiếng Việt, dùng làm gốc cho nhiều dự án. Xem `README.md` để biết tổng quan.

## Lệnh

- Cài đặt: `composer setup`. Chạy: `composer dev`. Kiểm thử: `php artisan test`. Build giao diện: `pnpm build`.
- Super admin đầu tiên: `php artisan admin:create` (không đặt mật khẩu trong `.env`, seeder hay mã).
- **Chỉ dùng pnpm**, không dùng npm hay yarn.

## Quy ước

- **Giao diện tiếng Việt**: viết `__('English text')` trong view, bản dịch ở `lang/vi.json`. Không viết cứng chuỗi tiếng Việt, trừ dữ liệu mẫu.
- **Ưu tiên component Blade** trong `resources/views/components/` (xem `/admin/components`, `/forms`, `/cards`, `/advanced` khi `APP_ENV=local`). Cần phần tử lặp lại từ hai lần thì tạo component mới và thêm một dòng vào trang catalog `resources/views/admin/components.blade.php`.
- **Dùng class và thuộc tính của Tabler** (`data-bs-*`, `card`, `btn`...), đừng tự viết CSS khi Tabler đã có. CSS riêng đặt ở `resources/css/custom.css`.
- **Menu** chỉ khai báo ở `config/menu.php`. **Giao diện** (layout, màu) chỉ đổi qua `config/ui.php` và `.env`.
- **Danh sách có tìm kiếm, sắp xếp, phân trang**: dùng `App\Support\DataTable` cùng `x-table.toolbar`, `x-table.th`, `x-table.footer`.
- **HTML do người dùng nhập** (trình soạn thảo): luôn qua `App\Support\Html::clean()` khi lưu và khi in bằng `{!! !!}`.
- **Cài đặt ứng dụng** luôn dùng `spatie/laravel-settings`: một class trong `app/Settings` cho mỗi nhóm cùng settings migration trong `database/settings/`. Không tự tạo bảng key-value riêng.
- Không có đăng ký công khai; quyền dùng Gate (`manage-users`, `manage-settings`), khai báo ở `AppServiceProvider`.
- Thư viện JS của Tabler nạp theo nhu cầu bằng `<x-lib name="...">` (xem `components/lib.blade.php`), không thêm thẻ script rải rác.
- Dùng `Illuminate`/Laravel có sẵn trước khi thêm gói mới.

## Kiểm tra khi sửa

- Thêm hoặc sửa tính năng thì thêm test trong `tests/Feature/`. Chạy `php artisan test` phải xanh.
- Sửa giao diện: kiểm tra trên trình duyệt thật ở màn hình máy tính (admin này không nhắm tới điện thoại), không chỉ dựa vào test render.
- Không commit `.env`, `vendor`, `node_modules`, `public/build`, `public/tabler`.

## Bản xem thử Tabler

`/preview` (144 trang chuyển từ preview.tabler.io, `resources/views/preview`) là tài liệu tham chiếu, chỉ chạy khi `APP_ENV=local`. Đừng sửa các file đó; muốn gỡ cho dự án thật dùng `php artisan template:strip-preview`.
