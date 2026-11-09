# Admin Template

Khung quản trị **Laravel 13 + Tabler 1.7** bằng tiếng Việt, để nhân bản cho nhiều dự án. Không có đăng ký công khai: tài khoản do super admin tạo.

**Có sẵn**
- Đăng nhập, quên và đặt lại mật khẩu, hồ sơ, đổi mật khẩu, quản lý người dùng (chỉ super admin), cài đặt (tên ứng dụng, múi giờ, ghi chú chân trang).
- 3 kiểu menu (dọc, ngang, gọn), boxed/fluid, đổi màu chủ đạo, tất cả chỉnh bằng `.env`.
- Dashboard mẫu (biểu đồ, bản đồ, widget), khoảng 70 component Blade, bảng dữ liệu phía máy chủ, lịch, trình soạn thảo, tải tệp, trang lỗi.
- Giao diện tiếng Việt (`lang/vi.json`), 80+ test.

## Yêu cầu

PHP 8.3+, Composer, Node 20+, **pnpm** (không dùng npm), Laragon hoặc môi trường tương đương.

## Bắt đầu nhanh

```bash
git clone https://github.com/quanganhbn168/admin-template.git ten-du-an
cd ten-du-an
composer setup                 # .env, key, migrate, storage:link, pnpm install, pnpm build
php artisan admin:create       # tạo super admin đầu tiên (hỏi tên, email, mật khẩu)
```

Mở `https://ten-du-an.test` (Laragon tạo tên miền khi bạn Reload) hoặc chạy `composer dev`.

> Mật khẩu **không** nằm trong `.env` hay seeder. Tài khoản đầu tiên luôn được tạo bằng `php artisan admin:create`.

## Tạo dự án mới từ template

1. Trên GitHub: **Settings → General → bật "Template repository"** (làm một lần). Sau đó mỗi dự án mới: **Use this template → Create a new repository**.
2. Clone về, rồi sửa:
   - `.env`: `APP_NAME`, `APP_URL`, kết nối database, `MAIL_*`.
   - `composer.json` và `package.json`: trường `name`.
3. Chạy `composer setup` và `php artisan admin:create` như trên.
4. Gỡ bản xem thử Tabler cho nhẹ: `php artisan template:strip-preview` rồi `pnpm build`.
5. Thay `README.md` này bằng mô tả dự án của bạn.

## Cấu hình giao diện (`.env`, xem `config/ui.php`)

| Biến | Giá trị |
|---|---|
| `UI_LAYOUT` | `vertical` · `horizontal` · `condensed` |
| `UI_WIDTH` | `default` · `boxed` · `fluid` |
| `UI_SIDEBAR` | `default` · `folded` · `folded-hover` (chỉ layout dọc) |
| `UI_SIDEBAR_STYLE` | `default` · `end` · `transparent` (chỉ layout dọc) |
| `UI_NAVBAR_STICKY` | `true` / `false` |
| `UI_NAVBAR_STYLE` | `default` · `floating` |
| `UI_PRIMARY` | `blue`, `azure`, `indigo`, `purple`, `pink`, `red`, `orange`, `yellow`, `lime`, `green`, `teal`, `cyan` |
| `UI_BASE` / `UI_FONT` / `UI_RADIUS` | màu nền, font, độ bo góc |
| `UI_PREVIEW` | `true`/`false`: bật bản xem thử `/preview` (chỉ môi trường local) |

Giao diện luôn ở chế độ sáng. Menu nằm ở `config/menu.php` (một nguồn cho cả ba layout, hỗ trợ menu con, `can` để phân quyền).

## Làm việc với template

**Thêm một trang quản trị mới** (ví dụ "Sản phẩm"):

1. Controller trong `app/Http/Controllers/Admin/`, route trong nhóm `admin` ở `routes/web.php`.
2. Thêm một dòng vào `config/menu.php`.
3. View dùng layout và component:

```blade
<x-layouts.app :title="__('Products')">
    <x-card>
        <x-table.toolbar :state="$table" />
        <x-table>
            <x-slot:head><x-table.th column="name" :state="$table">{{ __('Name') }}</x-table.th></x-slot:head>
            @foreach ($products as $p)<tr><td>{{ $p->name }}</td></tr>@endforeach
        </x-table>
        <x-table.footer :paginator="$products" />
    </x-card>
</x-layouts.app>
```

```php
$table = DataTable::make(Product::query())->search(['name'])->sortable(['name', 'created_at'], default: 'name');
return view('admin.products.index', ['products' => $table->paginate(), 'table' => $table->state()]);
```

**Component có sẵn**: mở `/admin/components` (và `/forms`, `/cards`, `/advanced`) khi chạy `APP_ENV=local`. Mỗi trang là danh mục kèm cách dùng. Component nằm ở `resources/views/components/`.

**Tiếng Việt**: viết `__('English text')` trong view, thêm bản dịch vào `lang/vi.json`.

**HTML từ trình soạn thảo**: luôn làm sạch bằng `App\Support\Html::clean()` trước khi lưu và hiển thị.

**Tệp tải lên**: `POST /admin/uploads` lưu vào `storage/app/public/uploads` (cần `php artisan storage:link`, `composer setup` đã làm).

## Cấu trúc

```
app/Support/        DataTable, Html (làm sạch HTML), Menu, Ui (cấu hình giao diện)
config/ui.php       giao diện        config/menu.php   menu điều hướng
resources/views/
  components/       layout, form, widget, bảng, biểu đồ...   admin/  auth/  errors/
  preview/          bản xem thử Tabler (tùy chọn)
resources/js/       app.js (+ charts.js, map.js nạp khi cần)
scripts/            sync-tabler-assets.mjs: chép thư viện Tabler vào public/tabler
```

## Kiểm thử

```bash
php artisan test
```

## Triển khai (checklist)

- `APP_ENV=production`, `APP_DEBUG=false`, đúng `APP_URL`. Khi đó trang xem thử và catalog bị tắt, trang lỗi đẹp mới hiện.
- Database thật (MySQL), `MAIL_*` thật (quên mật khẩu cần gửi email).
- `composer install --no-dev --optimize-autoloader`, `pnpm install && pnpm build`, `php artisan migrate --force`, `php artisan storage:link`.
- `php artisan config:cache route:cache view:cache`.
- Tạo super admin: `php artisan admin:create`.
- Đặt `UI_PREVIEW=false` hoặc gỡ hẳn bằng `php artisan template:strip-preview`.

## Bản xem thử Tabler

144 trang demo gốc của Tabler chuyển sang Blade, mở tại `/preview` (chỉ local). Ảnh demo (khoảng 30 MB) tải một lần bằng `pnpm assets:preview`. Dự án thật không cần, gỡ bằng `php artisan template:strip-preview`.

## Giấy phép và ghi công

Mã của template: tự do dùng cho dự án của bạn. Thư viện bên thứ ba đều theo giấy phép MIT: [Tabler](https://github.com/tabler/tabler) (kèm hình minh họa và biểu tượng), HugeRTE, ApexCharts, FullCalendar, Dropzone, TomSelect, noUiSlider. Bản dịch giao diện trình soạn thảo lấy từ gói ngôn ngữ cộng đồng của TinyMCE 6 (`resources/vendor/hugerte-langs`). Không dùng phần trả phí nào của Tabler.
