<?php
namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class ApplyBusinessController extends Controller
{
    public function approve(Request $request)
    {
        $applyBusId = $request->input('id');
        $applyBus = Business::find($applyBusId);

        if ($applyBus) {
            $applyBus->state = 'Yes'; // Cập nhật trạng thái
            $applyBus->save();
            return redirect()->back()->with('success', 'Công ty đã được duyệt.');
        }

        return redirect()->back()->with('error', 'Không tìm thấy công ty.');
    }

    public function reject(Request $request)
    {
        $applyBusId = $request->input('id');
        $applyBus = Business::find($applyBusId);

        if ($applyBus) {
            $applyBus->state = 'No'; // Cập nhật trạng thái
            $applyBus->save();
            return redirect()->back()->with('success', 'Công ty đã bị từ chối và xóa khỏi danh sách.');
        }

        return redirect()->back()->with('error', 'Không tìm thấy công ty.');
    }
}
