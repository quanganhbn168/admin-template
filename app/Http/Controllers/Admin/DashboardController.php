<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Sample data so the dashboard has something to show.
     * Replace each block with real queries when you build a project from this template.
     */
    public function __invoke()
    {
        $days = collect(range(29, 0))->map(fn (int $d) => now()->subDays($d)->format('d/m'))->all();

        return view('admin.dashboard', [
            'days' => $days,
            'visitors' => [7687, 7543, 7545, 7543, 7635, 8140, 7810, 8315, 8379, 8441, 8485, 8227, 8906, 8561, 8333, 8551, 9305, 9647, 9359, 9840, 9805, 8612, 8970, 8097, 8070, 9829, 10545, 10754, 10270, 9282],
            'visitorsLastMonth' => [8630, 9389, 8427, 9669, 8736, 8261, 8037, 8922, 9758, 8592, 8976, 9459, 8125, 8528, 8027, 8256, 8670, 9384, 9813, 8425, 8162, 8024, 8897, 9284, 8972, 8776, 8121, 9476, 8281, 9065],
            'revenue' => [37, 70, 52, 58, 43, 62, 41, 80, 57, 71, 66, 90],
            'clients' => [12, 17, 14, 21, 18, 25, 19, 28, 23, 27],
            'subscriptions' => [14, 20, 17, 28, 22, 30, 26],
            'sources' => ['Tìm kiếm' => 44, 'Trực tiếp' => 31, 'Mạng xã hội' => 18, 'Giới thiệu' => 7],
            // Stacked traffic per day: web / social / other.
            'traffic' => [
                'web' => array_map(fn (int $i) => (int) round(4 + 38 * ($i / 29) ** 2 + 6 * abs(sin($i * 1.7))), range(0, 29)),
                'social' => array_map(fn (int $i) => (int) round(3 + 14 * ($i / 29) ** 1.5 + 4 * abs(cos($i * 1.3))), range(0, 29)),
                'other' => array_map(fn (int $i) => (int) round(2 + 6 * abs(sin($i * 0.9)) + 3 * ($i / 29)), range(0, 29)),
            ],
            'countries' => ['VN' => 9, 'US' => 8, 'JP' => 6, 'KR' => 6, 'SG' => 5, 'TH' => 5, 'AU' => 5, 'DE' => 4, 'FR' => 4, 'GB' => 4, 'CA' => 3, 'IN' => 3, 'BR' => 2, 'ID' => 3, 'CN' => 4, 'RU' => 2, 'ZA' => 1, 'EG' => 1],
            'storage' => [
                ['label' => 'Regular', 'value' => 44, 'color' => 'primary', 'text' => '3520MB'],
                ['label' => 'System', 'value' => 19, 'color' => 'info', 'text' => '1520MB'],
                ['label' => 'Shared', 'value' => 9, 'color' => 'success', 'text' => '720MB'],
                ['label' => 'Free', 'value' => 28, 'color' => 'muted', 'text' => '2240MB'],
            ],
            'pages' => [
                ['/admin', 4896, 3654, 82],
                ['/admin/users', 3652, 3215, 76],
                ['/admin/settings', 3256, 2865, 71],
                ['/login', 986, 865, 12],
                ['/admin/components', 912, 822, 8],
            ],
            'tasks' => [
                ['Duyệt tài khoản mới', true],
                ['Sao lưu cơ sở dữ liệu', true],
                ['Cập nhật bản dịch', false],
                ['Kết nối Google Drive', false],
                ['Viết tài liệu hướng dẫn', false],
            ],
            'invoices' => [
                ['#001401', 'Công ty An Phát', '12/11/2026', 'paid', '4.300.000đ'],
                ['#001402', 'Cửa hàng Minh Khoa', '10/11/2026', 'pending', '1.250.000đ'],
                ['#001403', 'Nhà hàng Hải Đăng', '08/11/2026', 'paid', '8.900.000đ'],
                ['#001404', 'Studio Lục Bình', '05/11/2026', 'overdue', '2.100.000đ'],
            ],
        ]);
    }
}
